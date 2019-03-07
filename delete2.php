<!DOCTYPE html>
<html lang="en">

<?php include 'header.txt'; ?>

<?php 
include_once 'projectDB.php';
include_once 'projectDisplay.php';

#form data
$name=$_POST['name'];

$sql = "delete from Person where name = :name;";
$stmt = $conn->prepare($sql);

# data stored in an associative array
$data = array( 'name' => $name);

/*
echo "<pre>";
print_r($data);
echo "</pre>";
*/

if($stmt->execute($data)){
		$rows_affected = $stmt->rowCount();
        	echo "<h2>".$rows_affected." row deleted sucessfully!</h2>";
		display("select name as Name, birthdate as Birthdate, birthplace as Birthplace, career_title as Title from Person;");
}
else
{
 	echo "\nPDOStatement::errorInfo():\n";
	print_r($stmt->errorInfo());
}
$stmt = null;
$conn = null;

?>


 <?php include 'footer.txt'; ?>

</html>
