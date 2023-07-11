<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \GuzzleHttp\Client as Client;
use Illuminate\Support\Facades\Cache;

class apiController extends Controller
{
    public function GetAllRecords(Request $request){
        // $res = curl_init('http://192.168.0.115:8090/newFindRecords?pass=12345&personID=-1&startTime=2023-06-30 12:00:00&endTime=2023-07-10 17:00:00');

        // $data = curl_exec($res);
        // json_encode($data);
        $endpoint = 'http://192.168.0.115:8090/newFindRecords';
        $client = new Client();

        // $startTime = $request->startDate.' '.$request->startTime;
        // $endTime = $request->endDate.' '.$request->endTime;
        $response = $client->request('GET', $endpoint, ['query' =>[
            'pass' => $request->pass,
            'personID' => $request->personID,
            'startTime' => date('Y-m-d H:m:s', (int)$request->startTime),
            'endTime' => date('Y-m-d H:m:s', (int)$request->endTime),
        ]]);

        return $response;
    }

    public function EmployeeData(Request $request){
        $endpoint = 'http://192.168.0.115:8090/person/find';
        $client = new Client();

        $response = $client->request('GET', $endpoint , ['query' => [
            'pass' => '12345',
            'id' => '-1'
        ]]);

        $data = json_decode($response->getBody());
        $dt = $data->data;
        foreach($dt as $d){
            dd($d->name);
        }
        // dd($dt[2]->name);
        return $response;
    }
}
