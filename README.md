# Weather Dashboard

A professional weather dashboard application that fetches real-time weather data from the OpenWeatherMap API.

## Features

✨ **Current Weather Data**
- Real-time temperature, humidity, pressure
- Wind speed and direction
- Weather description and icons
- Sunrise and sunset times

🔍 **5-Day Forecast**
- Hourly and daily forecast data
- Weather trends and predictions

🔎 **City Search**
- Search for cities worldwide
- Find weather conditions in different locations

⚡ **Performance Features**
- Smart caching system (1-hour TTL)
- Fast API responses

## Technology Stack

- **Backend**: PHP 8.2
- **Server**: Apache
- **Container**: Docker & Docker Compose
- **API**: OpenWeatherMap
- **Caching**: File-based cache system

## Installation

### Prerequisites

- Docker & Docker Compose
- OpenWeatherMap API Key

### Quick Start

1. Clone the repository
2. Copy .env.example to .env
3. Add your OpenWeatherMap API key
4. Run: docker-compose up -d
5. Access: http://localhost:8000

## API Endpoints

- `GET /?action=current&city=London` - Get current weather
- `GET /?action=forecast&city=London` - Get 5-day forecast
- `GET /?action=search&q=Lond` - Search cities

## Project Structure

```
├── app/
│   ├── WeatherController.php
│   ├── WeatherService.php
│   └── CacheManager.php
├── config/
│   └── config.php
├── index.php
└── docker-compose.yml
```

## License

MIT License

---

**Made with ❤️ by Pochis29**
