<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="css/styleKalendar.css" rel="stylesheet">
  </head>

  <body>

    <div class="mobile-header z-depth-1">

      <div class="row">
        <div class="col-2">
          <a href="#" data-activates="sidebar" class="button-collapse" style="">
            <i class="material-icons">menu</i>
          </a>
        </div>
        <div class="col">
          <h4>Events</h4>
        </div>
      </div>

    </div>

    <div class="main-wrapper">

      <div class="sidebar-wrapper z-depth-2 side-nav fixed" id="sidebar">

        <div class="sidebar-title">
          <h4>Events</h4>
          <h5 id="eventDayName">Date</h5>
        </div>
        <div class="sidebar-events" id="sidebarEvents">
          <div class="empty-message">Sorry, no events to selected date</div>
        </div>

      </div>

      <div class="content-wrapper grey lighten-3">
        <div class="container">

          <div class="calendar-wrapper z-depth-2">

            <div class="header-background">
              <div class="calendar-header">

                <a class="prev-button" id="prev">
                  <i class="material-icons">keyboard_arrow_left</i>
                </a>
                <a class="next-button" id="next">
                  <i class="material-icons">keyboard_arrow_right</i>
                </a>

                <div class="row header-title">

                  <div class="header-text">
                    <h3 id="month-name">February</h3>
                    <h5 id="todayDayName">Today is Friday 7 Feb</h5>
                  </div>

                </div>
              </div>
            </div>

            <div class="calendar-content">
              <div id="calendar-table" class="calendar-cells">

                <div id="table-header">
                  <div class="row">
                    <div class="col">Mon</div>
                    <div class="col">Tue</div>
                    <div class="col">Wed</div>
                    <div class="col">Thu</div>
                    <div class="col">Fri</div>
                    <div class="col">Sat</div>
                    <div class="col">Sun</div>
                  </div>
                </div>

                <div id="table-body" class="">

                </div>

              </div>
            </div>

            <div class="calendar-footer">
              <div class="emptyForm" id="emptyForm">
                <h4 id="emptyFormTitle">No events now</h4>
                <a class="addEvent" id="changeFormButton">Add new</a>
              </div>
              <div class="addForm" id="addForm">
                <h4>Add new event</h4>

                <div class="row">
                  <div class="input-field col s6">
                    <input id="eventTitleInput" type="text" class="validate">
                    <label for="eventTitleInput">Title</label>
                  </div>
                  <div class="input-field col s6">
                    <input id="eventDescInput" type="text" class="validate">
                    <label for="eventDescInput">Description</label>
                  </div>
                </div>

                <div class="addEventButtons">
                  <a class="waves-effect waves-light btn blue lighten-2" id="addEventButton">Dodaj</a>
                  <a class="waves-effect waves-light btn grey lighten-2" id="cancelAdd">Poništi</a>
                  <a href="lista.php" class="waves-effect waves-light btn blue lighten-2" id="goBackButton">Vrati se nazad</a>
                </div>

              </div>
            </div>

          </div>

        </div>
      </div>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script>
      $(".button-collapse").sideNav();
    </script>
    <script src="kalendarJS.js"></script>
  </body>
</html>