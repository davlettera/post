<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeatherController extends Controller
{
    // app/Http/Controllers/WeatherController.php



   public function index(){
    return view('index');
   }

   public function getWeather(Request $request)
   {
       $city_name = $request->input('city_name');
       $api_key = '184c4eb73eb923445bfe7c1ef59e6588';
       $api_url = 'https://api.openweathermap.org/data/2.5/weather?q='.$city_name.'&appid='.$api_key;

       $weather_data = json_decode(file_get_contents($api_url), true);
       $temperature = $weather_data['main']['temp'];

       $temperature_in_celsius = $temperature - 273.15;

       $temperature_current_weather = $weather_data['weather'][0]['main'];

       $temerature_current_weather_description = $weather_data['weather'][0]['description'];

       $temperature_current_weather_icon = $weather_data['weather'][0]['icon'];

       return view('index', [
           'temperature' => round($temperature_in_celsius),
           'icon' => $temperature_current_weather_icon,
           'city' => $city_name,
       ]);
   }
}




