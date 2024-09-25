<?php
include('connect.php');
// session_start();


// Check if the user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Redirect to login page if not logged in
    header('Location: Admin.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- favicon icon -->
    <link rel="shortcut icon" href="img/Brand_Broker_logo black 1.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f9;
    margin: 0;
    padding: 20px;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 18px;
    text-align: left;
}

table th, table td {
    padding: 12px 15px;
    border: 1px solid #ddd;
}

table th {
    background-color: #6c63ff;
    color: white;
}

table tr:nth-child(even) {
    background-color: #f2f2f2;
}

table tr:hover {
    background-color: #ddd;
}

.btn {
    padding: 10px 15px;
    background-color: #ff4b5c;
    color: white;
    border: none;
    cursor: pointer;
    border-radius: 5px;
}

.btn:hover {
    background-color: #ff6b7c;
}

button {
    background-color: #6c63ff; /* Purple background */
    border: none;
    color: white;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

button a {
    text-decoration: none;
    color: white;
    font-weight: bold;
}

button:hover {
    background-color: #5a54e1; /* Darker purple on hover */
}

button a:hover {
    color: white; /* Ensures link color stays white */
}

    </style>
</head>
<body>
    <?php
 //if($_SESSION['status']!=" " or $_SESSION['status'])
 ?>
 <!--<h2><?php echo $_SESSION['status']?> </h2>-->
 <?php
 unset($_SESSION['status']);?>
 <table class="table">
 <thead>
 <th>Id</th>
 <th>Name</th>
 <th>Email</th>
 <th>Phone Number</th>
 <th>Messege</th>
 <th>Date</th>
 <th>delete</th>
 </thead>
 <tbody>
 <?php
 $sql="select * from contact";
 $res=mysqli_query($conn,$sql);
 while($row=mysqli_fetch_assoc($res))
 {
 ?>
 <tr>
 <td><?php echo $row['id']?></td>
 <td><?php echo $row['fname']?></td>
 <td><?php echo $row['email']?></td>
 <td><?php echo $row['ph_no']?></td>
 <td><?php echo $row['message']?></td>
 <td><?php echo $row['date']?></td>
 <td>
 <form action="" method="POST">
 <input type="text" hidden value="<?php echo $row['id']?>" name="id">
 <input type="submit" value="Delete" class="btn btn-danger"name="del_btn">
 </form>
 
 </td>
 </tr>
 <?php
 }
 ?>
 </tbody>
</table>
    
    <button><a href="logout.php">Logout</a></button>
</body>
<script src="js/titlechange.js"></script>
</html>
<?php
if(isset($_POST['del_btn']))
{
    $id=$_POST['id'];
    $sql="delete from contact where id='$id'";
    $res=mysqli_query($conn,$sql);
    if($res)
    {
        $session['status']="deletion sucessfull";
        header('Location:Dashboard');
    }
    else
    {?><script>alert("deletion  not sucessfull");</script>
    <?php
        header('Location:Dashboard');

    }
}
?>