const searchButton = document.querySelector('#btn');
const inputKeyword = document.querySelector('.input');


searchButton.addEventListener('click', () => {
    fetch("https://api.openweathermap.org/data/2.5/weather?q="+inputKeyword.value+"&appid=1fe5f03e8b679377cbc41601289edfdd&units=metric")
        .then(response => response.json())
        .then(response => {
            let result = document.querySelector('.result')

            result.innerHTML = `<div class="box-weather">
            <h2 style="margin-bottom: 15px; ">${response.name}, ${response.sys.country}</h2>
                                <h5><span class="temper">${response.main.temp}°С</span> <span class="temper">${response.weather[0].description}</span></h5>
                                <p style="margin-bottom: 17px;">Temperature from ${response.main.temp_min}°С to ${response.main.temp_max}°С</p>
                                <h5>Wind Speed : ${response.wind.speed} m/s</h5>
                                <h5 style="margin-bottom: 17px;">Clouds : ${response.clouds.all}%</h5>
                                <h4 style="color: #012443;">Geo Coordinates : [${response.coord.lat}, ${response.coord.lon}]</h4>
                                </div>` 
        })
    inputKeyword.value = null;
})