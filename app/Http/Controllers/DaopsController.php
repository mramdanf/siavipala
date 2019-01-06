<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Daops;

class DaopsController extends Controller
{
    public function list()
    {
        $cell = array();
        $tt = 0;
        $rr = 0;
        $cc = 0;
        $cont = "<div style='color:#000'>
                    <strong>TERRA (LAPAN)</strong>
                    <table style='background-color:transparent'>
                        <tr>
                            <td><b>Tanggal</b> </td>
                            <td width=\"2px\" align=\"center\"> : </td>
                            <td>2019-01-01</td>
                        </tr>
                        <tr>
                            <td><b>Latitude</b> </td>
                            <td width=\"20px\" align=\"center\"> : </td>
                            <td>-4.0602107048</td>
                        </tr>
                        <tr>
                            <td><b>Longitude</b> </td>
                            <td width=\"20px\" align=\"center\"> : </td>
                            <td>135.786636353</td>
                        </tr>
                        <tr>
                            <td><b>Confidence</b> </td>
                            <td width=\"20px\" align=\"center\"> : </td>
                            <td>83%</td>
                        </tr>
                        <tr>
                            <td><b>Kawasan</b> </td>
                            <td width=\"20px\" align=\"center\"> : </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><b>Desa</b> </td>
                            <td width=\"20px\" align=\"center\"> : </td>
                            <td><span class=\"balloon-podes\" style=\"cursor:pointer;\"><b><u>SUKIKAI</u></b></span></td>
                        </tr>
                        <tr>
                            <td><b>Kecamatan</b> </td>
                            <td width=\"20px\" align=\"center\"> : </td>
                            <td>SUKIKAI</td>
                        </tr>
                        <tr>
                            <td><b>Kota/Kabupaten</b> </td>
                            <td width=\"20px\" align=\"center\"> : </td>
                            <td>NABIRE</td>
                        </tr>
                        <tr>
                            <td><b>Provinsi</b> </td>
                            <td width=\"20px\" align=\"center\"> : </td>
                            <td>PAPUA</td>
                        </tr>
                    </table>
                </div>";
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

        echo $cell[0][8][2]."\n"; 
        // echo $cell[0][0][1]."\n";
        // echo $cell[0][1][0]."\n";
        // echo $cell[0][1][1]."\n";
        // echo "---------------\n";
        // echo $cell[1][0][0]."\n";
        // echo $cell[1][0][1]."\n";
        // echo $cell[1][1][0]."\n";
        // echo $cell[1][1][1]."\n";

        // return response([
        //     'data' => Daops::all()
        // ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'provinsi_id' => 'required',
            'nama' => 'required'
        ]);

        $data = $request->all();

        $daops = new Daops;
        $daops->provinsi_id = $data['provinsi_id'];
        $daops->nama = $data['nama'];
        $daops->save();

        return response([
            'message' => 'Create daops sukses.'
        ]);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'provinsi_id' => 'required',
            'nama' => 'required',
            'id' => 'required'
        ]);

        $data = $request->all();

        $daops = Daops::find($data['id']);
        $daops->provinsi_id = $data['provinsi_id'];
        $daops->nama = $data['nama'];
        $daops->save();

        return response([
            'message' => 'Update daops sukses.'
        ]);
    }

    public function remove(Request $request)
    {
        $this->validate($request, [
            'id' => 'required'
        ]);

        $daops = Daops::find($request->input('id'));
        $daops->delete();

        return response([
            'message' => 'Delete daops sukses.'
        ]);
    }
}
