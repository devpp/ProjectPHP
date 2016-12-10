<html> 
<head><title>Random number</title></head> 
<body>
 <?php
$con=mysqli_connect("127.0.0.1","root","root","new_schema");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT title,year FROM movie_list");

echo "<table border='1'>
<tr>
<th>Sno</th>
<th>title</th>
<th>year</th>
</tr>";
$idno=0;
while($row = mysqli_fetch_array($result))
{
//'$id=$id++;'
echo "<tr>";
echo "<td>" ."" . "</td>";
echo "<td>" . $row['title'] . "</td>";
echo "<td>" . $row['year'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
Run example »
<a href="C:\wamp64\www\Projects\Page1.php">click here</a>
</body> 
</html> 
