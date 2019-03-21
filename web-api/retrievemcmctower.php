<?php
$con=mysqli_connect("localhost","id3227606_invive2","invive2","id3227606_invive2");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT COUNT(id) AS number FROM apit WHERE nfp='T3M (MCMC)'";
$result=mysqli_query($con,$sql);

// Associative array
$row=mysqli_fetch_assoc($result);


// Free result set
mysqli_free_result($result);

mysqli_close($con);

echo ($row["number"]);
?>