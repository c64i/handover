<?php

include "dbConnxx.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$qry = mysqli_query($db,"select * from hdupdates.updates where id='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $name = $_POST['name'];
    $number = $_POST['number'];
    $edit = mysqli_query($db,"update hdupdates.updates set name='$name', number='$number' where id='$id'");
    if($edit)
    {
        mysqli_close($db); // Close connection
        header("location:hdupdates.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();
    }
}
?>
<html>
<head>
<title>Helpdesk Updates</title>
<link rel="stylesheet" href="css/hdu.css">
 <meta name="description" content="Minimalistic service helpdesk updates." />
 <meta http-equiv="content-type" content="text/html; charset=UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link href='https://fonts.googleapis.com/css?family=Share Tech Mono' rel='stylesheet'>
</head>
<body class="box">
<h3>Update Data</h3>

<form method="POST">
  <input type="text" name="name" value="<?php echo $data['name'] ?>" placeholder="Enter Name" Required>
  <input type="text" name="number" value="<?php echo $data['number'] ?>" placeholder="Enter Number" Required>
  <input type="submit" name="update" value="Update">
</form>
</body>
</html>
