

<!DOCTYPE html>
<html>
<head>
    <title>Users Data</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<div class="col-lg-12">

    <br><br>
    <h1 class="text-warning text-center">Users Data</h1>
    <br>
    <table class="table table-striped table-hover">

        <tr class="bg-dark text-white text-center">

            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email Address</th>
            <th>Age</th>
            <th>Location</th>
            <th>Time</th>
            <th>Delete</th>
            <th>Update</th>

        </tr>

        <?php
        include 'conn.php';

        $sqlInsert ="select * from crudtable";
        $statement =mysqli_query($con,$sqlInsert);

        while($res=mysqli_fetch_array($statement))
        {
        ?>

        <tr class="text-center">

            <td><?php echo $res['id']?></td>
            <td><?php echo $res['first_name']?></td>
            <td><?php echo $res['last_name']?></td>
            <td><?php echo $res['email']?></td>
            <td><?php echo $res['age']?></td>
            <td><?php echo $res['location']?></td>
            <td><?php echo $res['join_date']?></td>
            <td><button class="btn btn-danger"><a href="delete.php?id=<?php echo $res['id'];?>" class="text-white">Delete</a></button></td>
            <td><button class="btn btn-info"><a href="update.php?id=<?php echo $res['id'];?>" class="text-white">Update</a></button></td>

        </tr>
<?php
}
?>
    </table>

</div>
    <br>
    <br>

    <div style="text-align: center">
    <button class="btn btn-primary"><a href="insert.php" class="text-white">Insert New Data</a></button>
    </div>

</div>

</body>
</html>

