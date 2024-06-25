<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function getWeather(Request $request)
    {
        $image = null ;
        $apiKey = '88be18be30120fe2e92c66568c282197';
        $city = $request->input('city');


        $response = Http::get("https://api.openweathermap.org/data/2.5/weather?q=$city&appid=$apiKey");

        if ($response->failed()) {
            return response()->json(['message' => 'Failed to fetch weather data'], 500);
        }

        $data = $response->json();


        $data['main']['temp_celsius'] = (int) round($data['main']['temp'] - 273.15);
        $data['main']['temp_min'] = (int) round($data['main']['temp_min'] - 273.15);
        $data['main']['temp_max'] = (int) round($data['main']['temp_max'] - 273.15);

        if($data['weather'][0]['main'] == 'Clear'){
            $image = url("storage/weather/1.png") ;
        }elseif ($data['weather'][0]['main'] == 'Clouds'){
            $image = url("storage/weather/2.png") ;
        }elseif ($data['weather'][0]['main'] == 'Rain'){
            $image = url("storage/weather/3.png") ;
        }

        return response()->json([
            'name'=>$data['name']  ,
            'weather'=>$data['weather'][0]['main'],
            'temp' => $data['main']['temp_celsius'] ,
            'min' => $data['main']['temp_min'] ,
            'max' => $data['main']['temp_max'] ,
            'image'=> $image
        ]);
    }
}
