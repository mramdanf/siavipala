<?php
namespace Widnyana\LDRoutesList;


use Dingo\Api\Routing\Router;
use Illuminate\Console\Command;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Symfony\Component\Console\Input\InputOption;

class CommandProvider extends Command
{

    /** @var  Router $router Dingo Router */
    protected $router;

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'api:list-route';


    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Display all registered routes on Dingo.';

    /**
     * The table headers for the command.
     *
     * @var array
     */
    protected $headers = [
        'Host', 'Method', 'URI', 'Name', 'Action', 'Middleware', 'Protected', 'Version(s)', 'Scope(s)', 'Rate Limit'
    ];

    protected $routes;


    /**
     * Create a new console command instance.
     *
     * @param Router $router
     */
    public function __construct(Router $router)
    {
        Command::__construct();
        $this->router = $router;
    }


    public function fire()
    {

        $this->routes = $this->router->getRoutes();

        if (count($this->routes) == 0) {
            $this->error("Your application doesn't have any routes.");
            return;
        }

        $this->displayRoutes($this->getRoutes());
    }


    protected function displayRoutes(array $routes)
    {
        $this->table($this->headers, $routes);
    }

    /**
     * Compile the routes into a displayable format.
     *
     * @return array
     */
    protected function getRoutes()
    {
        $routes = [];
        foreach ($this->routes as $collection) {
            foreach ($collection->getRoutes() as $route) {
                $uses = array_key_exists('uses', $route->getAction())
                    ? $route->getAction()['uses']
                    : $route->getActionName();

                $routes[] = $this->filterRoute([
                    'host' => $route->domain(),
                    'method' => implode('|', $route->methods()),
                    'uri' => $route->uri(),
                    'name' => $route->getName(),
                    'action' => $uses,
                    'middleware' => $route->getMiddleware() ? implode(", ", $route->getMiddleware()) : "No",
                    'protected' => $route->isProtected() ? 'Yes' : 'No',
                    'versions' => implode(', ', $route->versions()),
                    'scopes' => implode(', ', $route->scopes()),
                    'rate' => $this->routeRateLimit($route),
                ]);
            }
        }

        if ($sort = $this->option('sort')) {
            $routes = Arr::sort($routes, function ($value) use ($sort) {
                return $value[$sort];
            });
        }
        if ($this->option('short')) {
            $this->headers = ['Method', 'URI', 'Name', 'Version(s)'];
            $routes = array_map(function ($item) {
                return array_only($item, ['method', 'uri', 'name', 'versions']);
            }, $routes);
        }
        return array_filter(array_unique($routes, SORT_REGULAR));
    }

    protected function routeRateLimit($route)
    {
        list($limit, $expires) = [$route->getRateLimit(), $route->getRateLimitExpiration()];
        if ($limit && $expires) {
            return sprintf('%s req/s', round($limit / ($expires * 60), 2));
        }
    }


    protected function filterRoute(array $route)
    {
        $filters = ['protected', 'unprotected', 'versions', 'scopes'];
        foreach ($filters as $filter) {
            if ($this->option($filter) && !$this->{'filterBy' . ucfirst($filter)}($route)) {
                return false;
            }
        }
        return $route;
    }


    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        $options = parent::getOptions();
        foreach ($options as $key => $option) {
            if ($option[0] == 'sort') {
                unset($options[$key]);
            }
        }
        $options = array_merge(
            $options,
            [
                ['sort', null, InputOption::VALUE_OPTIONAL, 'The column (domain, method, uri, name, action) to sort by'],
                ['versions', null, InputOption::VALUE_IS_ARRAY | InputOption::VALUE_OPTIONAL, 'Filter the routes by version'],
                ['scopes', 'S', InputOption::VALUE_IS_ARRAY | InputOption::VALUE_OPTIONAL, 'Filter the routes by scopes'],
                ['protected', null, InputOption::VALUE_NONE, 'Filter the protected routes'],
                ['unprotected', null, InputOption::VALUE_NONE, 'Filter the unprotected routes'],
                ['short', null, InputOption::VALUE_NONE, 'Get an abridged version of the routes'],
            ]
        );

        return $options;
    }

    protected function filterByPath(array $route)
    {
        return Str::contains($route['uri'], $this->option('path'));
    }


    protected function filterByProtected(array $route)
    {
        return $this->option('protected') && $route['protected'] == 'Yes';
    }
    /**
     * Filter the route by whether or not it is unprotected.
     *
     * @param array $route
     *
     * @return bool
     */
    protected function filterByUnprotected(array $route)
    {
        return $this->option('unprotected') && $route['protected'] == 'No';
    }
    /**
     * Filter the route by its versions.
     *
     * @param array $route
     *
     * @return bool
     */
    protected function filterByVersions(array $route)
    {
        foreach ($this->option('versions') as $version) {
            if (Str::contains($route['versions'], $version)) {
                return true;
            }
        }
        return false;
    }
    /**
     * Filter the route by its name.
     *
     * @param array $route
     *
     * @return bool
     */
    protected function filterByName(array $route)
    {
        return Str::contains($route['name'], $this->option('name'));
    }
    /**
     * Filter the route by its scopes.
     *
     * @param array $route
     *
     * @return bool
     */
    protected function filterByScopes(array $route)
    {
        foreach ($this->option('scopes') as $scope) {
            if (Str::contains($route['scopes'], $scope)) {
                return true;
            }
        }
        return false;
    }
}
