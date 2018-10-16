<?php
$db = mysqli_connect("localhost","id3227606_invive2","invive2","id3227606_invive2");

// get the records from the database
if ($result = $db->query("SELECT * FROM apit"))
{
// display records if there are records to display
if ($result->num_rows > 0)
{
// display records in a table
echo "<table border='2' cellpadding='10'>";
echo "<br>";
// set table headers
echo "<tr><th>Remarks</th><th>Latitude</th><th>Longitude</th><th>Images1</th><th>Image2</th><th>Image3</th><th>Image4</th><th>Image5</th><th>Image6</th>";

while ($row = $result->fetch_object())
{
// set up a row for each record
echo "<tr>";
echo "<td>" . $row->remarks . "</td>";
echo "<td>" . $row->latitude . "</td>";
echo "<td>" . $row->longitude . "</td>";

echo '<td><img src="https://invive2.000webhostapp.com/img/'. $row->link1 .'" height ="250" width ="150" class="img" alt=""> ';
echo "</td>";
echo '<td><img src="https://invive2.000webhostapp.com/img/'. $row->link2 .'" height ="250" width ="150" class="img" alt=""> ';
echo "</td>";
echo '<td><img src="https://invive2.000webhostapp.com/img/'. $row->link3 .'" height ="250" width ="150" class="img" alt=""> ';
echo "</td>";
echo '<td><img src="https://invive2.000webhostapp.com/img/'. $row->link4 .'" height ="250" width ="150" class="img" alt=""> ';
echo "</td>";
echo '<td><img src="https://invive2.000webhostapp.com/img/'. $row->link5 .'" height ="250" width ="150" class="img" alt=""> ';
echo "</td>";
echo '<td><img src="https://invive2.000webhostapp.com/img/'. $row->link6 .'" height ="250" width ="150" class="img" alt=""> ';
echo "</td>";

echo "</tr>";
}



echo "</table>";
}
// if there are no records in the database, display an alert message
else
{
echo "No results to display!";
}
}
// show an error if there is an issue with the database query
else
{
echo "Error: " . $db->error;
}

// close database connection
//$db->close();

?>