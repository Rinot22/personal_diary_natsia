<!DOCTYPE html>
<html lang="en">
<head>
   
   <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-+nuyMYpKysyqVKN0itGvL2xdDVO3jI1GXpF/+8Hfp3Wsr42J5lHPjvOZdvz9x9RPS1TXR0gYpPjwANx5n0bcvw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/index.global.min.js'></script>
   <script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
   
   <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js" integrity="sha512-vsiqnKNcF5MgL2nQXQVsBQzZr6e3T04o1B/XZ2E8ozfb4W2YssNpoMfQ6WUqq/EHjZfWolO7sO5nLCdC6o5U+A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My own diary</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.0/main.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Baloo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap" rel="stylesheet">


    <style>
      #calendar {
          max-width: 600px;
          margin: 0 auto;
      }

     
        body{

        background-image: url('/public/img/body_bg.png');
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;

        font-family: 'Poppins', sans-serif;

        }

        .accent {
            color: #008df3;
            font-family: 'Baloo', cursive;
        }


  </style>
  
</head>
<body>

    <h2 class="accent"> My personal health journal</h2>
    <div id='calendar'></div>

    <!-- Modal window for enter data -->
    <div class="modal fade" id="dataModal" tabindex="-1" aria-labelledby="dataModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="dataModalLabel">Please enter new data about you</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="calendar" method="post" class="modal-body">
                    <label for="temperature">Body Temperature:</label>
                    <input type="number" name="temperature" id="temperature" class="form-control"><br>
                    <label for="pressure">Blood Pressure:</label>
                    <input type="number" name="pressure" id="pressure" class="form-control"><br>
                    <label for="wellBeing">Well Being (1-10):</label>
                    <input type="number" name="wellBeing" id="wellBeing" min="1" max="10" class="form-control"><br>
                    <label for="comment">Comments:</label><br>
                    <textarea id="comment" name="comment" rows="4" cols="50" class="form-control"></textarea><br>
                    <label for="image">Image:</label><br>
                    <input type="file" name="image" id="image" class="form-control"><br>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                selectable: true,
                dateClick: function(info) {
                    $('#dataModal').modal('show');
                    var date = info.dateStr;
                    $('#dataModal').attr('data-date', date);
                }
            });

            calendar.render();
        });
    </script>
</body>
</html>
