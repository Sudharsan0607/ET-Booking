<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ET - Booking</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background: url('a1.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #212529;
            margin: 0;
            padding: 0;
        }

        .navbar-custom {
            background-color: #000;
            border: none;
            font-size: 18px;
            padding: 15px;
        }

        .navbar-custom .navbar-brand,
        .navbar-custom .navbar-nav > li > a {
            color: #fff;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        .navbar-custom .navbar-nav > li > a:hover {
            background-color: gray;
        }

        .hero-section {
            background-color: rgba(0, 0, 0, 0.8);
            color: white;
            padding: 80px 0;
            text-align: center;
        }

        .hero-section h1 {
            font-size: 48px;
            margin-bottom: 20px;
            color: #f4f4f4;
        }

        .hero-section p {
            font-size: 18px;
            max-width: 600px;
            margin: 0 auto;
        }

        .button-section {
            padding: 50px 0;
            text-align: center;
        }

        .btn-custom {
            padding: 15px 30px;
            font-size: 18px;
            color: #fff;
            background-color: #000;
            border: 2px solid #000;
            border-radius: 5px;
            margin: 10px;
            transition: background-color 0.3s, color 0.3s, border 0.3s;
        }

        .btn-custom:hover {
            background-color: #fff;
            color: #000;
            border: 2px solid #000;
        }

        footer {
            background-color: #000;
            color: #fff;
            text-align: center;
            padding: 20px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>

    <!-- Navigation -->
    <nav class="navbar navbar-custom">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">ET - Booking</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="register.php">Register</a></li>
                    <li><a href="sindex.php">User Sign In</a></li>
                    <li><a href="adminindex.php">Admin Sign In</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero-section">
        <h1>Welcome to the ET - Booking Portal</h1>
        <p>Effortlessly book your bus and train tickets with our seamless platform.</p>
    </div>

    <!-- Footer -->
    
</body>
</html>
