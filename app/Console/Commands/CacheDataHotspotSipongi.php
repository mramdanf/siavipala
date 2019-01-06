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
                    $sebaranHotspot->provinsi = $this->getProvinsiFromHtmlString($hotspot[2]);
                    $sebaranHotspot->save();
                }

                Log::debug('insert new hotspot cache');
            }
            
        }
        
    }

    private function getProvinsiFromHtmlString($strHtml)
    {
        $cell = array();
        $tt = 0;
        $rr = 0;
        $cc = 0;
        $cont = $strHtml;
        preg_match_all('#<table[^>]*>(.*?)</table[^>]*>#is', $cont, $t_matches, PREG_PATTERN_ORDER);
        //now we have the data from each table in $t_matches[1]
        foreach ($t_matches[1] as $tablestring) {
            preg_match_all('#<tr[^>]*>(.*?)</tr[^>]*>#is', $tablestring, $tr_matches, PREG_PATTERN_ORDER);
            //now we have each row in the table $tr_matches[1];
            foreach($tr_matches[1] as $rowstring){
                preg_match_all('#<td[^>]*>(.*?)</td[^>]*>#is', $rowstring, $td_matches, PREG_PATTERN_ORDER);
                //and now we have each table cell in the row in $td_matches[1]
                foreach($td_matches[1] as $cellstring){
                    $cell[$tt][$rr][$cc] = trim($cellstring);
                    $cc++;
                } 
                $rr++;
                $cc=0;
            }
            $tt++;
            $rr=0;
        }

        return (!empty($cell[0]) && $cell[0][8][2] != NULL) ? $cell[0][8][2] : '';
    }
}
