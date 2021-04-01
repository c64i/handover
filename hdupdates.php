<!DOCTYPE html>
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

<h1>Handover Updates</h1>

<table border="0">
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <!-- <td>Delete</td> -->
  </tr>

<?php
include "dbConnxx.php"; // Using database connection file here

$records = mysqli_query($db,"select * from hdupdates.updates"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>

  <tr>
<!--<td><?php echo $data['id']; ?></td>-->
    <td><?php echo $data['name']; ?></td>
    <td><?php echo $data['number']; ?></td>
    <td><a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a></td>
<!--    <td><a href="delete.php?id=<?php echo $data['id']; ?>">Delete</a></td> -->
  </tr>	

<?php
}
?>
</div>
</table>
<p><br></p>
<h1>Notes</h1>
<table border="0">
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <!-- <td>Delete</td> -->
  </tr>

<?php
$records = mysqli_query($db,"select * from hdupdates.notes order by id desc"); // fetch data from database
while($data = mysqli_fetch_array($records))
{
?>

  <tr>
<!--<td><?php echo $data['id']; ?></td>-->
    <td><?php echo $data['notes']; ?></td>
    <td><a href="note_edit.php?id=<?php echo $data['id']; ?>">Edit</a></td>
<!--    <td><a href="delete.php?id=<?php echo $data['id']; ?>">Delete</a></td> -->
  </tr>

<?php
}
?>

</table>














<p></p>

<footer>
<p><a class="Wrapper" href="index.php"> &#11013; Helpdesk Notice Board </a></p>
<p>
END.
</p>
<p><br></p>
<!--<p align="right"><small>&#128056; Created by Brian Kavanagh.</small></p>-->
</footer>
</body>
</html>
