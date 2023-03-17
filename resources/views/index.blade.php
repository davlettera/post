<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
<h1>ciao</h1>
 
<form action="{{ route('getWeather') }}" method="POST">
@csrf
<label for="city_name">Enter city name:</label>
<input type="text" name="city_name" id="city_name" required>
<button type="submit">Get weather</button>
</form>

@if(isset($temperature))
<div>
    <p>The current temperature in {{ $city }} is {{ $temperature }}&deg; Celsius</p>
    <img src="http://openweathermap.org/img/wn/{{ $icon }}@2x.png" alt="Weather icon">
</div>
@endif 














</body>
</html>