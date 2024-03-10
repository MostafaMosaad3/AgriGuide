<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class WeatherController extends Controller
{
    public function getWeather(Request $request)
    {
        $apiKey = '88be18be30120fe2e92c66568c282197';
        $city = $request->input('city');
        $client = new Client();

        // Make a GET request to the weather API
        $response = $client->get("https://api.openweathermap.org/data/2.5/weather?q=$city&appid=$apiKey");

        // Decode the JSON response
        $weatherData = json_decode($response->getBody(), true);

        // Return the weather data
        return response()->json($weatherData);
    }
}
