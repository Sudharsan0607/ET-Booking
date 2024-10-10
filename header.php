<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
?>

<head>
  <title>ET - Easy Ticket</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
  <style>
    body {
      background-color: #f5f5f5;
      font-family: 'Montserrat', sans-serif;
      color: #333;
    }

    .navvvvvvbar {
      margin-bottom: 0;
      background-color: #000;
      padding: 20px;
      color: #fff;
      text-align: center;
      font-size: 24px;
      letter-spacing: 2px;
    }

    .navbar {
      margin-bottom: 0;
      background-color: #222;
      border: 0;
      font-size: 18px;
    }

    .navbar-nav li a {
      color: #d5d5d5 !important;
      padding: 15px 20px;
      transition: background-color 0.3s, color 0.3s;
    }

    .navbar-nav li a:hover {
      background-color: #444 !important;
      color: #fff !important;
      text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
      border-radius: 5px;
    }

    .navbar-nav li.active a {
      color: #fff !important;
      background-color: #444 !important;
    }

    .dropdown-menu li a {
      color: #000 !important;
      padding: 10px 20px;
    }

    .dropdown-menu li a:hover {
      background-color: #444 !important;
      color: #fff !important;
    }
  </style>
</head>

<nav class="navvvvvvbar">
  <b>ET - Easy Ticket</b>
</nav>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-left">
        <li><a href="home.php">Home</a></li>
        <li><a href="book.php">Train Ticket</a></li>
        <li><a href="bookbus.php">Bus Ticket</a></li>
        <li><a href="mybookings.php">User Bookings</a></li>
        <li><a href="trainschedule.php">Train Schedule</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">User: <?php echo " " . $_SESSION['name']; ?>
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="myprofile.php">My Profile</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
