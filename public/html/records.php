<!DOCTYPE html>
<html lang="en">
<head>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Baloo+Chettan&display=swap">

<style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            background-image: url('/public/img/body_bg.png');
            background-size: cover;
            background-attachment: fixed;
            background-repeat: no-repeat;
        }
        .container {
            width: 80%;
            margin: 20px auto 0 auto;
            padding: 0 20px;
            background-color: rgba(255, 255, 255, 0.9); /* Adjust opacity as needed */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            min-height: 100vh; /* Make the container at least the height of the viewport */
        }
        .accent {
            color: #008df3;
            font-family: 'Baloo Chettan', cursive;
        }
        .category {
            margin-top: 40px;
            font-weight: bold;
        }
        .data {
            margin-bottom: 20px;
        }
        .navbar {
            height: 20px;
            /* Add styling for your navbar here */
        }
    </style>
</head>


<body>

    <div w3-include-html="navbar.html"><!-- Spacer for Navbar -->
    <div class="container">
    <h2 class="accent">Your records: </h2>
    <?php foreach ($records as $record):
    ?>
      <div class="container-record" >
        <div>
          <p class="data"> <p class="category accent">Date: </p> <?= $record->getDate(); ?></p>
        </div>
        <div>
          <p class="data"> <p class="category accent">Body Temperature: </p> <?= $record->getBodyTemperature(); ?>
        </div>
        <div>
        <p class="data"> <p class="category accent">Blood Pressure: </p> <?= $record->getBloodPressure(); ?>
        </div>
        <div>
          <p class="data"> <p class="category accent">Well Being: </p> <?= $record->getWellBeing(); ?>
        </div>
        <div>
          <p class="data"> <p class="category accent">Comments: </p> <?= $record->getComment(); ?>
        </div>
        <div>
          <p class="category accent">Image: </p>
        </div>
        <img src="/public/img/placeholder-image.jpg" style="width:50%" alt="">
      </div>
    <?php endforeach; ?>

        <script src="/public/js/navbar.js"></script>
</body>
</html>
