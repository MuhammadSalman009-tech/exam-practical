
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
    <h3>Hotel Booking</h3>
    <?php
    $msg="";
    $success_msg="";
if(isset($_GET["msg"])){
    $msg=$_GET["msg"];
    echo '<div class="alert alert-danger">';
    echo $msg;
    echo '</div>';
}
if(isset($_GET["success"])){
    $msg=$_GET["msg"];
    echo '<div class="alert alert-success">';
    echo $success_msg;
    echo '</div>';
}
?>    
        <form class="row g-3" action="store.php" method="POST">
        
            <div class="col-md-6">
                <label for="firstName" class="form-label">First Name</label>
                <input type="text" class="form-control" id="firstName" name="firstName">
            </div>
            <div class="col-md-6">
                <label for="lastName" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lastName" name="lastName">
            </div>
            <div class="col-md-6">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="col-md-6">
                <label for="guestsNum" class="form-label">Guests Number</label>
                <input type="number" class="form-control" id="guestsNum" name="guestsNum">
            </div>
            <div class="col-12">
                <label for="roomType" class="form-label">Room Type</label>
                <select id="roomType" class="form-select" name="roomType">
                <option value="1" selected>Single Bed</option>
                <option value="2">Double Bed</option>
                <option value="3">Triple Bed</option>
                </select>
            </div>
            <div class="col-md-12">
                <label for="dateAndTime" class="form-label">Arrival Date And Time</label>
                <input type="date" class="form-control" id="arrivalDate" name="arrivalDate">
                <input type="time" class="form-control mt-2" id="arrivalTime" name="arrivalTime">
            </div>
            <hr>
            <div class="col-md-12">
                <label for="dateAndTime" class="form-label">Departure Date And Time</label>
                <input type="date" class="form-control" id="departureDate" name="departureDate">
                <input type="time" class="form-control mt-2" id="departureTime" name="departureTime">
            </div>
            <div class="col-md-6">
                <label for="flightNum" class="form-label">Flight Number</label>
                <input type="number" class="form-control" id="flightNum" name="flightNum">
            </div>
            <div class="col-md-12">
                <label for="specialRequest" class="form-label">Special Request</label>
                <textarea name="specialRequest" id="specialRequest" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary" name="book">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>