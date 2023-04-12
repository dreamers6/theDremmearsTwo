<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;


class UserController extends Controller
{

    public function index(){
        $client = new Client();
        $response = $client->get('https://smmcpan.com/api/v2?key=711427cd179ddb81572016977e360b66&action=services');
        $data = json_decode($response->getBody()->getContents());
        return view('users' , [
            'services' => $data
        ]);
    }

}
