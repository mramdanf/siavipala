Lumen Dingo Route List
======================
This code bring Dingo's `api:route` command to Lumen's `artisan`.

## Howto
Acquire the source code:
```
composer require widnyana/lumen-dingo-routes-list
```

and Register the service provider:
```
// file: bootstrap/app.php
$app->register(Widnyana\LDRoutesList\CommandServiceProvider::class);
```

call it like this:
```
$ ./artisan api:list-route 
```
for avoiding any command conflict with Dingo nor Lumen, the command is located at `api:list-route `.

![lumen-dingo-routes-list in action](http://i.imgur.com/ExAtLXW.png)

### Help wanted

There is an "*undefined behaviour*" that I can't exactly tell you why it will always say `GET|HEAD` for the `Method` columns no matter what HTTP Method you define for each route, as far as I try, there is no HTTP Method passed down to `Dingo\Api\Routing\Route`, and the function call to `$route->getMethods()` will always return `GET|HEAD`. If you know how, please send me a pull request :)

#### Disclaimer
This code is blatantly stolen from [this](https://github.com/dingo/api/blob/master/src/Console/Command/Routes.php) file.

#### License

see [license](LICENSE)
