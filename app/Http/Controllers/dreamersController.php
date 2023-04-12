<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use ResetsPasswords;

class dreamersController extends Controller
{
    public function index() {
        return view("index") ;
    }

    public function services($category = null)
    {
        $client = new Client();
        $response = $client->get('https://vinasmm.com/api/v2?key=2b37f3ea6f6eddfcd32059cc64f560c4&action=services');
        $data = json_decode($response->getBody()->getContents());
        if (!DB::table('services')->exists()) {
            foreach ($data as $service) {
                DB::table('services')->insert([
                    'name' => $service->name,
                    'type' => $service->type,
                    'rate' => $service->rate,
                    'minn' => $service->min,
                    'maxx' => $service->max,
                    'refill' => $service->refill,
                    'cancel' => $service->cancel
                ]);
            }
        }
        $services = DB::table('services')->inRandomOrder()->paginate(6);
        return view('services')->with('services', $services);
    }
}
