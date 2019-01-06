<?php

namespace App\Http\Controllers;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

use App\Models\AnggotaPatroli;
use App\Models\Role;
use App\Models\Permission;
use App\Models\Pengguna;
use App\Models\SebaranHotspot;

use Illuminate\Support\Facades\DB;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    public function test()
    {
        $data = SebaranHotspot::all();

        foreach($data as $dt)
        {
            $sebaranHotspot = SebaranHotspot::find($dt->id);
            $sebaranHotspot->provinsi = $this->getProvinsiFromHtmlString($dt->html);
            $sebaranHotspot->save();
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
