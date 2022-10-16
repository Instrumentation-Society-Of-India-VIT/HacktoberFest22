<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $aadhar = mysqli_real_escape_string($_POST['aadhar']);
   $address = mysqli_real_escape_string($conn, $_POST['address']);
   $phone = mysqli_real_escape_string($conn, $_POST['phoneno']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $complaint=mysqli_real_escape_string($conn, $_POST['complaint']);


   $select = " SELECT * FROM comp_details WHERE phone = '$phone' && aadhar = '$aadhar' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'complaint already exist!';

   }else{

     
         $insert = "INSERT INTO comp_details(name,aadhar,address,phone,email,complaint) VALUES('$name','$aadhar','$address,'$phone','$email','$complaint')";
         mysqli_query($conn, $insert);
         
      
   }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaint form</title>
    <link rel="stylesheet" href="complaint.css">
</head>
<body>

    <h1>Complaint Form</h1>

    <div class="form">
    <form action="">
        <table>
            <tr>
                <td><label for="name">NAME</label></td>
                <td><input type="text" name="name" id="name"></td>
            </tr>

            <tr>
                <td><label for="aadhar">AADHAR NUMBER</label></td>
                <td><input type="text" name="aadhar" id="aadhar"></td>
            </tr>

            <tr>
                <td><label for="address">ADDRESS</label></td>
                <!-- <td><textarea id="address" name="address" rows="4" cols="50"></td> -->
                <td><input type="text" name="address" id="address"></td>
            </tr>

            <tr>
                <td><label for="phoneno">PHONE NUMBER</label></td>
                <td><input type="text" name="phoneno" id="phoneno"></td>
            </tr>

            <tr>
                <td><label for="email">EMAIL</label></td>
                <td><input type="email" name="email" id="email"></td>
            </tr>

            <tr>
                <td><label for="complaint">COMPLAINT</label></td>
                <td><input type="text" name="complaint" id="complaint"></td>
            </tr>

            <tr>
                <!-- <td></td> -->
                <td><input type="submit" value="Submit" id="submit" name="submit"></td>
            </tr>

        </table>
    </form>
    </div>
    
</body>
</html>