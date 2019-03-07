<!DOCTYPE html>
<html lang="en">

<?php include 'header.txt'; ?>

<?php 

//form data
$name=$_POST['name'];
$birthdate=$_POST['birthdate'];
$birthplace=$_POST['birthplace'];
$career_title=$_POST['career_title'];

//connection DSN
include_once 'projectDB.php';


try {
	$conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
	$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	
	#use prepared statment with named placeholders :first, :last, :title, :age, :yos, :salary, :email.
	$sql = "insert into Person (name, birthdate, birthplace, career_title) values(:name, :birthdate, :birthplace, :career_title)";
	$stmt = $conn->prepare($sql);
	$stmt->bindParam('name', $name);
	$stmt->bindParam(':birthdate', $birthdate);
	$stmt->bindParam(':birthplace', $birthplace);
	$stmt->bindParam(':career_title', $career_title);

	if($stmt->execute()){
		$rows_affected = $stmt->rowCount();
        	echo "<h2>".$rows_affected." row added sucessfully!</h2>";
		$stmt = $conn->query("SELECT name as Name, birthdate as Birthdate, birthplace as Birthplace, career_title as Title FROM Person;");

		//PDO::FETCH_NUM: returns an array indexed by column number as returned in your result set, starting at column 0 
		$stmt->setFetchMode(PDO::FETCH_NUM);
		echo "<table border=\"1\">\n";
		echo "<tr><td>Name</td><td>Birthdate</td><td>Birthplace</td><td>Career_Title</td></tr>\n";
		while ($row = $stmt->fetch()) {
     			printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>\n", 	$row[0], $row[1], $row[2], $row[3]);
		}
       		#$result->close();
      		echo "</table>\n";
	}
	else
	{
	 	echo "Insertion failed: (" . $conn->errno . ") " . $conn->error;
	}

	$conn = null;
}
catch(PDOException $e) {
	die("Could not connect to the database $dbname :" . $e->getMessage());
}

?>


 <?php include 'footer.txt'; ?>

</html>
