<?php

include 'conn.php';

if(isset($_POST['submit']))
{
    $firstName =$_POST['firstName'];
    $lastName =$_POST['lastName'];
    $email =$_POST['email'];
    $age =$_POST['age'];
    $location =$_POST['location'];

    $sqlInsert ="INSERT INTO crudtable(first_name,last_name,email,age,location,join_date) values ('$firstName','$lastName','$email','$age','$location',now())";
    $statement =mysqli_query($con,$sqlInsert);
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Insert Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>




    <div class="col-lg-6 m-auto">

        <form method="post" action="">

            <br><br><div class="card">
            <div class="card-header bg-dark">
                <h1 class="text-white text-center">Insert Operation</h1>
            </div>
                <br>
                <label for="firstName">First Name:</label>
                <input id="firstName" type="text" name="firstName" class="form-control">


                <label for="lastName">Last Name:</label>
                <input id="lastName" type="text" name="lastName" class="form-control">


                <label for="email">Email:</label>
                <input id="email" type="email" name="email" class="form-control">


                <label for="age">Age:</label>
                <input id="age" type="number" name="age" class="form-control">


                <label for="location">Address:</label>
                <input id="location" type="text" name="location" class="form-control">


                <button type="submit" class="btn btn-success" name="submit" >Submit</button>
                <br>

            </div>

        </form>


    </div>



</body>
</html>
