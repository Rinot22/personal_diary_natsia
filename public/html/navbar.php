<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Navbar</title>
    <link href="https://fonts.googleapis.com/css2?family=Baloo&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Baloo', cursive;
        }
        .navbar {
            background-color: #008df3;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            color: white;
        }
        .navbar ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
        }
        .navbar ul li {
            margin-right: 20px;
        }
        .navbar ul li:last-child {
            margin-right: 0;
        }
        .navbar a {
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>

<div class="navbar">
    <ul>
        <li><a href="articles">Articles</a></li>
        <li><a href="calendar">Calendar</a></li>
        <li><a href="records">Activity History</a></li>
    </ul>
    <a href="logout" style="color: white;">Log out</a>
</div>

</body>
</html>

