<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HotspotSipongi;

class SipongiHotspotController extends Controller
{
    public function hotspotByDateRange(Request $request)
    {
        $this->validate($request, [
            'start_date' => 'required',
            'end_date' => 'required'
        ]);

        $data = $request->all();
        $start_date = date('Y-m-d', strtotime($data['start_date']));
        $end_date = date('Y-m-d', strtotime($data['end_date']));

        $hotspotSipongis = HotspotSipongi::with(['sebaranHotspot'])
                                    ->whereBetween('tanggal', [$start_date, $end_date])
                                    ->get();
        
        return response([
            'hostspot_sipongi' => $hotspotSipongis
        ]);
    }
}
