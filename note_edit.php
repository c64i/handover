<?php

include "dbConnxx.php"; // connect to database

$id = $_GET['id']; // get id through query string

$qry = mysqli_query($db,"select * from hdupdates.notes where id='$id'"); // select * query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // update on button click
{
    $notes = $_POST['notes'];
    $edit = mysqli_query($db,"update hdupdates.notes set notes='$notes' where id='$id'");
    if($edit)
    {
        mysqli_close($db); // close connection
        header("location:hdupdates.php"); // return to updates page
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
<link rel="stylesheet" href="hdu.css">
 <meta name="description" content="Minimalistic service helpdesk updates." />
 <meta http-equiv="content-type" content="text/html; charset=UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link href='https://fonts.googleapis.com/css?family=Share Tech Mono' rel='stylesheet'>
</head>
<body class="box">
<h3>Update Data</h3>

<form method="POST">
  <input size="80" type="text" name="notes" value="<?php echo $data['notes'] ?>" placeholder="Enter your notes" Required>
  <input type="submit" name="update" value="Update">
</form>
</body>
</html>
