fetch("/public/json/records.json")
    .then(response => response.json())
    .then(data => {
        console.log(data);
        const wrapper = document.querySelector(".wrapper");
        data.map((item)=> {
            const recordDate = document.createElement("span");
            const recordBodyTemperature = document.createElement("span");
            recordDate.innerHTML = item.date;
            recordBodyTemperature.innerHTML = item.body_temperature;

            wrapper.appendChild(recordDate);
            wrapper.appendChild(recordBodyTemperature);
        });
    });

async function postData(url = '', data = {}) {
    const response = await fetch(url, {
        method: 'POST',
        mode: 'cors',
        cache: 'no-cache',
        credentials: 'same-origin',
        headers: {
            'Content-Type': 'application/json'
        },
        redirect: 'follow',
        referrerPolicy: 'no-referrer',
        body: JSON.stringify(data)
    });

    return response.json();
}