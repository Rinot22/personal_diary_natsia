fetch("/public/mock/records.json")
    .then(response => response.json())
    .then(data => {
        console.log(data);
        document.getElementById("id")?.setAttribute("value", data.id);
        document.getElementById("record__date").innerHTML = data.date;
        document.getElementById("record__body_temperature").innerHTML = data.body_temperature;
    })