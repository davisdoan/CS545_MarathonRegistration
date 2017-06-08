<?php
include('php/helpers.php');

$server = 'opatija.sdsu.edu:3306';
$user = 'jadrn012';
$password = 'telephone';
$database ='jadrn012';

$UPLOAD_DIR = '/im_g@t3s/';
$COMPUTER_DIR = '/im_g@t3s/';
$fname = $_FILES['file']['name'];

print <<<ENDBLOCK
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;
    charset=iso-8859-1" />
    <title>Sample Form Processing with PHP</title>
<link rel="stylesheet" type="text/css" href="css/mycssfile.css" />
    
</head>
<body>
<nav>
        <a href="index.html">Home</a>
        <a href="register.html">Register</a>
</nav>
ENDBLOCK;

echo "<section class='sub-section black reg-black'>";
echo "<h1 class='report'>Runners in the Race</h1>";

if(!($db = mysqli_connect($server,$user,$password,$database)))
		echo "ERROR in connection".mysqli_error($db);
else {
	$sql = "select first_name, last_name, dob, experience, image from person order by category, last_name;";
	$result = mysqli_query($db,$sql);
	if(!result)
		echo "ERROR in query".mysqli_error($db);
	echo "<table>\n";
	echo "<tr><td>First Name</td><td>Last Name</td><td>Age</td><td>Experience Level</td><td>Photo</td></tr>";
	while($row=mysqli_fetch_row($result)){
		echo "<tr>";
		echo "<td>$row[0]</td>";
		
        // age calculation referenced from: https://stackoverflow.com/questions/3776682/php-calculate-age
		$birthday = $row[2];

		$birthday = explode("/", $birthday);

		$age = (date("md", date("U", mktime(0, 0, 0, $birthday[0], $birthday[1], $birthday[2]))) > date("md")
    			? ((date("Y") - $birthday[2]) - 1)
    			: (date("Y") - $birthday[2]));
		echo "<td>$row[1]</td>";
		echo "<td>$age</td>";
		echo "<td>$row[3]</td>"; 
		echo "<td><img class='profile' src='http://jadran.sdsu.edu/~jadrn012/proj3/im_g@t3s/$row[4]'></td>";
		echo "</tr>\n";
	}
	mysqli_close($db);
	echo "</section>";
}	

print <<<ENDBLOCK
    </body>
    </html>
ENDBLOCK;
?>
