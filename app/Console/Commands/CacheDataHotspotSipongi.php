<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

use DB;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use App\Models\HotspotSipongi;
use App\Models\SebaranHotspot;

class CacheDataHotspotSipongi extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'CacheDataHotspotSipongi:cachehotspot';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Cache data hotspot sipongi';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $client = new Client();
        $res = $client->request('GET', 'http://sipongi.menlhk.go.id/action/indohotspot');
        $res = $res->getBody()->getContents();
        $res = json_decode($res, TRUE);
        
        Log::debug('command runs');        

        // Insert ke tabel sebaran_hotspot
        if (!empty($res['data']['hotspot']))
        {
            $today = date('Y-m-d');

            $todayHotspot = HotspotSipongi::where('tanggal', '=', $today)->get();

            Log::debug(json_encode($res['data']['hotspot']));

            if ($todayHotspot->count() <= 0)
            {
                // Insert ke tabel hotspot_sipongi
                $hostspotSipongi = new HotspotSipongi();
                $hostspotSipongi->tanggal = $today;
                $hostspotSipongi->save();

                foreach($res['data']['hotspot'] as $hotspot) 
                {
                    $sebaranHotspot = new SebaranHotspot;
                    $sebaranHotspot->hotspot_sipongi_id = $hostspotSipongi->id;
                    $sebaranHotspot->latitude = $hotspot[0];
                    $sebaranHotspot->longitude = $hotspot[1];
                    $sebaranHotspot->html = $hotspot[2];
                    $sebaranHotspot->save();
                }

                Log::debug('insert new hotspot cache');
            }
            
        }
        
    }
}
