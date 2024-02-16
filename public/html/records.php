<!DOCTYPE html>
<html lang="en">
<head>
    <title>Your records</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Baloo+Chettan&display=swap">
    <link rel="stylesheet" href="/public/css/records-style.css">
</head>


<body>
    <?php $this->render('navbar') ?>
    <div class="container">
        <h2 class="accent">Your records: </h2>
        <?php foreach ($records as $record): ?>
            <div class="container-record" >
                <div>
                    <p class="data"> <p class="category accent">Date: <?= $record->getDate(); ?></p>
                </div>
                <div>
                    <p class="data"> <p class="category accent">Body Temperature: <?= $record->getBodyTemperature(); ?></p>
                </div>
                <div>
                    <p class="data"> <p class="category accent">Blood Pressure: <?= $record->getBloodPressure(); ?> </p>
                </div>
                <div>
                    <p class="data"> <p class="category accent">Well Being: <?= $record->getWellBeing(); ?> </p>
                </div>
                <div>
                    <p class="data"> <p class="category accent">Comments: <?= $record->getComment(); ?> </p>
                </div>
                <div>
                    <p class="category accent">Image: </p>
                </div>
                <img src="/public/img/placeholder-image.jpg" style="width:50%" alt="">
            </div>
    <?php endforeach; ?>

</body>
</html>
