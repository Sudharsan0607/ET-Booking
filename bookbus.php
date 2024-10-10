<?php
include 'connect.php';
session_start();
if ($_SESSION['log'] == '') {
    header("location:sindex.php");
}
include 'header.php';
?>

<style>
    body {
        font-family: Montserrat, sans-serif;
        background-image: url('a4.jpg'); /* Add your image path here */
        background-size: cover; /* Cover the entire page */
        background-position: center; /* Center the background image */
        background-repeat: no-repeat; /* Prevent repetition */
    }

    .container {
        max-width: 800px;
        margin: 30px auto; /* Center the container */
        padding: 30px; /* Adjust padding for the container */
        background-color: rgba(255, 255, 255, 0.4); /* Semi-transparent background for better readability */
        border-radius: 8px; /* Rounded corners */
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); /* Add shadow for depth */
        transition: box-shadow 0.3s ease; /* Smooth transition for shadow */
    }

    .container:hover {
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2); /* Darker shadow on hover */
        transform: translateY(-3px); /* Slight lift on hover */
    }

    .button {
        padding: 15px 32px;
        color: white;
        background-color: #333; /* Change to a softer color */
        border: none;
        border-radius: 5px; /* Rounded corners */
        transition: background-color 0.3s ease, transform 0.2s ease; /* Smooth transitions */
        display: block; /* Make the button a block element */
        margin: 20px auto; /* Center the button */
    }

    .button:hover {
        background-color: #555; /* Slightly lighter color on hover */
        transform: translateY(-2px); /* Slight lift on hover */
    }

    select, input[type=number] {
        width: 100%; /* Full width */
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px; /* Rounded corners */
        transition: border-color 0.3s ease, box-shadow 0.3s ease; /* Smooth transitions */
    }

    select:focus, input[type=number]:focus {
        border-color: #333; /* Dark border on focus */
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.3); /* Shadow effect on focus */
    }

    h1 {
        color: #333;
        text-align: center; /* Center the header */
        margin-bottom: 20px;
        animation: fadeIn 0.5s; /* Fade-in effect for the header */
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .form-row {
        margin-bottom: 20px; /* Space between form rows */
    }
</style>

</head>
<body>
    <h1><b>Bus Ticket Booking</b></h1>
    <form method='post' action='busaction.php' align='center'>
        <div class="container">
            <div class="form-row">
                <label for="inputState">SOURCE BUS-STOP :</label>
                <select id="inputState" class="form-control" name="source">
                    <option>Thane Railway Station</option>
                    <option>Dadoji Kondadev Stadium</option>
                    <option>Court Naka</option>
                    <option>Kalwa Naka</option>
                    <option>Shivaji Maharaj Hospital</option>
                    <option>Vitawa / Paryache Maidan</option>
                    <option>Sha Damodar Vitavkar Marg</option>
                    <option>Ganpati Pada</option>
                    <option>Mukund Company</option>
                    <option>Ganesh Nagar</option> 
                    <option>Digha Gaon</option>
                    <option>MSEB</option> 
                    <option>Reliable Plaza</option>
                    <option>Airoli Naka</option> 
                    <option>Airoli Railway Station</option> 
                    <option>Bharat Bijali</option>
                    <option>Siemens Company</option> 
                    <option>Rabale Police Station</option> 
                    <option>Rabale Naka</option>
                </select>
            </div>

            <div class="form-row">
                <label for="inputState">FINAL BUS-STOP :</label>
                <select id="inputState" class="form-control" name="dest">
                    <option>Thane Railway Station</option>
                    <option>Dadoji Kondadev Stadium</option>
                    <option>Court Naka</option>
                    <option>Kalwa Naka</option>
                    <option>Shivaji Maharaj Hospital</option>
                    <option>Vitawa / Paryache Maidan</option>
                    <option>Sha Damodar Vitavkar Marg</option>
                    <option>Ganpati Pada</option>
                    <option>Mukund Company</option>
                    <option>Ganesh Nagar</option> 
                    <option>Digha Gaon</option>
                    <option>MSEB</option> 
                    <option>Reliable Plaza</option>
                    <option>Airoli Naka</option> 
                    <option>Airoli Railway Station</option> 
                    <option>Bharat Bijali</option>
                    <option>Siemens Company</option> 
                    <option>Rabale Police Station</option> 
                    <option>Rabale Naka</option>
                </select> 
            </div>

            <div class="form-row">
                <label for="inputState">NO OF PASSENGERS :</label>
                <input type="number" name="number" required min="1" max="5">
            </div>

            <div>   
                <button type="submit" class="button" name="login_submit">Proceed</button>
            </div>
        </div>
    </form>

<?php include 'footer.php'; ?> 
</body>
</html>
