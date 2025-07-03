<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dark Weather Dashboard</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background-color: #0f172a;
      color: white;
    }

    .container {
      max-width: 1200px;
      margin: auto;
      padding: 30px;
      display: grid;
      grid-template-columns: 1fr 2fr 1fr;
      gap: 20px;
    }

    .panel {
      background-color: #1e293b;
      padding: 20px;
      margin-top:50px;
      border-radius: 15px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
    }

    .current-weather {
      grid-column: span 2;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .weather-info h1 {
      margin: 0;
      font-size: 3em;
    }

    .weather-info p {
      margin: 5px 0;
    }

    .weekly {
      display: flex;
      justify-content: space-between;
      margin-top: 20px;

    }

    .day {
      text-align: center;
      flex: 1;
    }

    .highlight, .other-cities {
      margin-top: 50px;
    }

    .highlight div, .city {
      background-color: #334155;
      border-radius: 10px;
      padding: 10px;
      margin-bottom: 10px;
    }

    .city-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 10px;
    }

    .search-bar {
      display: flex;
      margin-bottom: 20px;
    }

    .search-bar input {
      flex: 1;
      padding: 10px;
      border: none;
      border-radius: 10px 0 0 10px;
    }

    .search-bar button {
      padding: 10px;
      background: #4f46e5;
      border: none;
      color: white;
      border-radius: 0 10px 10px 0;
      cursor: pointer;
    }
    .h1{
      margin-left:500px;
      margin-top:20px;
    }

  </style>
</head>
<body>
  <div class="h1"> <h1>loadWeather</h1></div>
  <div class="container">
    <div class="panel">
      <div class="search-bar">
        <input type="text" id="cityInput" placeholder="Search city..." />
        <button onclick="loadWeather()">Search</button>
      </div>
      <div class="current-weather">
        <div class="weather-info">
          <h1 id="cityName">Kigali</h1>
          <p id="date">Tuesday, Apr 30</p>
          <p id="temp">26°C - Cloudy</p>
        </div>
        <img src="https://openweathermap.org/img/wn/04d@2x.png" id="weatherIcon" alt="weather" />
      </div>

      <div class="weekly">
        <div class="day">Mon<br>🌧️<br>24°C</div>
        <div class="day">Tue<br>⛅<br>26°C</div>
        <div class="day">Wed<br>☀️<br>28°C</div>
        <div class="day">Thu<br>🌧️<br>23°C</div>
        <div class="day">Fri<br>⛅<br>25°C</div>
        <div class="day">Sat<br>☁️<br>22°C</div>
        <div class="day">Sun<br>☀️<br>27°C</div>
      </div>
    </div>

    <div class="panel highlight">
      <h3>Today Highlight</h3>
      <div>🌧️ Chance of Rain: 30%</div>
      <div>🌡️ Humidity: 65%</div>
      <div>🌬️ Wind Speed: 5 m/s</div>
      <div>☀️ UV Index: Moderate</div>
    </div>

    <div class="panel other-cities">
      <h3>Other Cities</h3>
      <div class="city-grid">
        <div class="city">New York<br>14°C ☁️</div>
        <div class="city">Dubai<br>27°C ☀️</div>
        <div class="city">Nairobi<br>16°C 🌧️</div>
        <div class="city">Toronto<br>26°C 🌥️</div>
      </div>
    </div>
  </div>

  <script>
    function loadWeather() {
      const city = document.getElementById('cityInput').value;
      if (!city) return alert('Please enter a city');

      // Example: just updating the main title (replace this with fetch from OpenWeather API)
      document.getElementById('cityName').textContent = city;
      document.getElementById('temp').textContent = "28°C - Sunny";
      document.getElementById('weatherIcon').src = "https://openweathermap.org/img/wn/01d@2x.png";
    }
  </script>
</body>
</html>
