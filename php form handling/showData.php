<?php
$conn = mysqli_connect("localhost", "root", "", "formhandling1");         //hostname username password databasename
if (!$conn) {
    echo "connection refuse";
} else {
    echo "connection established";
}

$qurey = "select * from users;";

$q = mysqli_query($conn, $qurey);




?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <title>Hello, world!</title>
</head>

<body>
    <center>
        <table border="2px" style="width: 60%;">
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Address</th>
                <th>Age</th>
                <th>Email</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($q)) { ?>
                <tr>
                    <td> <?php echo $row['id']; ?> </td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td><?php echo $row['age']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['password'];  ?></td>
                    <td><a href="edit.php?id=<?=$row['id']?>">Edit</a>--<a href="delete.php?id=<?=$row['id']?>">delete</a></td>
                <?php } ?>
                </tr>
        </table>
    </center>
 <a href="phpformhandling.php">GO TO FORM</a>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>