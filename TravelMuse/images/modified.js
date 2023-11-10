const inputBox = document.querySelector('.input-box');
const searchBtn = document.getElementById('searchBtn');
const weather_img = document.querySelector('.weather-img');
const temperature = document.querySelector('.temperature');
const description = document.querySelector('.description');
const humidity = document.getElementById('humidity');
const wind_speed = document.getElementById('wind-speed');

const location_not_found = document.querySelector('.location-not-found');
const weather_body = document.querySelector('.weather-body');

const recommendation = document.querySelector('.recommendation-box');








const recommendation_img = document.querySelector('.recommendation-img');
const recommendationText = document.querySelector('.recommendation-info');
recommendationText.style.fontSize = "40px !important";
async function checkWeather(city){
    const api_key = "a97d723514569f83550ed16bcb258551"; 
    const url = `https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${api_key}`;

    const weather_data = await fetch(`${url}`).then(response => response.json());

    if(weather_data.cod === `404`){
        location_not_found.style.display = "flex";
        weather_body.style.display = "none";
        recommendation.style.display = "none";
        console.log("error");
        return;
    }

    console.log("run");
    location_not_found.style.display = "none";
    weather_body.style.display = "flex";
    recommendation.style.display = "flex";
    temperature.innerHTML = `${Math.round(weather_data.main.temp - 273.15)}°C`;
    description.innerHTML = `${weather_data.weather[0].description}`;

    humidity.innerHTML = `${weather_data.main.humidity}%`;
    wind_speed.innerHTML = `${weather_data.wind.speed}Km/H`;

    switch(weather_data.weather[0].main){
        case 'Clouds':
            weather_img.src = "clouds.png";
            // recommendation_img.src = "umbrella.png";
            recommendationText.innerHTML = "Don't forget to bring an umbrella or raincoat!";
            recommendation_img.src = "umbrella.png";
            recommendation_img.src = "raincoat.png";
            break;
        // case 'Broken Clouds':
        //     weather_img.src = "brokenClouds.png";
        //     // recommendation_img.src = "sunglasses.png";
        //     recommendationText.innerHTML = "Bring sunglasses and a light jacket.";
        //     recommendation_img.src = "sunglasses.png";
        //     recommendation_img.src = "umbrella.png";
        //     break;
        case 'Clear':
            weather_img.src = "clear.png";
            // recommendation_img.src = "sunglasses.png";
            recommendationText.innerHTML = "Bring sunglasses and a hat to protect from the sun.";
            recommendation_img.src = "sunglasses.png";
            // recommendation_img.src = "hat.png";
            break;
        case 'Light-Rain':
            weather_img.src = "light-rain.png";
            // recommendation_img.src = "umbrella.png";
            recommendationText.innerHTML = "Don't forget to bring an umbrella and raincoat.";
            recommendation_img.src = "umbrella.png";
            // recommendation_img.src = "raincoat.png";
            break;
        case 'Heavy-Rain':
            weather_img.src = "heavy-rain.png";
            // recommendation_img.src = "raincoat.png";
            recommendationText.innerHTML = "Wear a raincoat or waterproof jacket.";
             recommendation_img.src = "raincoat.png";
             recommendation_img.src = "umbrella.png";
            break;
        case 'Rain':
            weather_img.src = "rain.png";
            // recommendation_img.src = "umbrella.png";
            recommendationText.innerHTML = "Don't forget to bring an umbrella and raincoat.";
            recommendation_img.src = "umbrella.png";
            // recommendation_img.src = "raincoat.png";
            break;
        case 'Mist':
            weather_img.src = "haze.png";
            // recommendation_img.src = "facemask.png";
            recommendationText.innerHTML = "Wear a mask to protect from the mist and bring torch.";
            recommendation_img.src = "facemask.png";
            // recommendation_img.src = "torch.png";
            break;
        case 'Snow':
            weather_img.src = "snowy.png";
            // recommendation_img.src = "boots.png";
            recommendationText.innerHTML = "Wear boots and warm clothing.";
            recommendation_img.src = "boots.png";
            recommendation_img.src = "sweater.png";
            break;
        case 'Smoke':
            weather_img.src = "smoke.png";
            // recommendation_img.src = "facemask.png";
            recommendationText.innerHTML = "Wear a mask and and bring torch";
            recommendation_img.src = "mask.png";
            // recommendation_img.src = "torch.png";
    }
    console.log(weather_data);
}
searchBtn.addEventListener('click', ()=>{
    checkWeather(inputBox.value);
});