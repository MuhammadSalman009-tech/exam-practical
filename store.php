<?php

include "db_config.php";

$error_msg="";
$email_error="";
    
    $first_name="";
    $last_name="";
    $email="";
    $guests_number="";
    $room_type="";
    $arrival_date="";
    $arrival_time="";
    $departure_date="";
    $departure_time="";
    $flight_number="";
    $special_request="";


    if(empty($_POST["email"])){
        header("Location:index.php?msg=Email is required");
    }else{
        $email=trim($_POST["email"]);
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            header("Location:index.php?msg=Enter valid email");
        }
    }

    if($email_error==""){
    $first_name=$_POST["firstName"];
    $last_name=$_POST["lastName"];
    $email=$_POST["email"];
    $guests_number=$_POST["guestsNum"];
    $room_type=$_POST["roomType"];
    $arrival_date=$_POST["arrivalDate"];
    $arrival_time=$_POST["arrivalTime"];
    $departure_date=$_POST["departureDate"];
    $departure_time=$_POST["departureTime"];
    $flight_number=$_POST["flightNum"];
    $special_request=$_POST["specialRequest"];

        
        $check_email="select * from registration where email='$email'";
        $check_email_res=mysqli_query($conn,$check_email) or die("Check Email Query Failed");
        if(mysqli_num_rows($check_email_res)>0){
            header("Location:index.php?msg=User already exists!");
        }else{
            $insert="insert into registration(firstName,lastName,guestsNum,
            arrivalDate,arrivalTime,departureDate,departureTime,roomType,flightNum,
            specialRequest,email)
            values('$first_name','$last_name','$guests_number','$arrival_date','$arrival_time',
            '$departure_date','$departure_time','$room_type','$flight_number','$special_request','$email');
            ";
            $insert_res=mysqli_query($conn,$insert) or die("Insertion Query Failed");
            
            //send mail
            $to = $email;
            $subject = 'Hotel reservation';
            $message = 'You have booked your room successfully!';
            $headers = "From: salmansumra009@gmnail.com\r\n";
            if (mail($to, $subject, $message, $headers)) {
                header("Location:index.php?msg=Registration successfull!");
            } else {
            echo "ERROR";
            }
        

        }
    }

?>