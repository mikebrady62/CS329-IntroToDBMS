<!DOCTYPE html>
<html lang="en">

<?php include 'header.txt'; ?>
<?php 

include_once 'projectDB.php';

# form data
$name = $_POST['name'];
$birthdate=$_POST['birthdate'];
$birthplace=$_POST['birthplace'];
$career_title=$_POST['career_title'];

$query = "update Person set birthdate = :birthdate, birthplace = :birthplace, career_title = :career_title where name = :name;";
$data = array( 'name' => $name, 'birthdate' => $birthdate, 'birthplace' => $birthplace, 'career_title' => $career_title);
$stmt = $conn->prepare($query);

if($stmt -> execute($data))
{
   $rows_affected = $stmt->rowCount();
   echo "<h2>".$rows_affected." row updated sucessfully!</h2>";
   include 'projectDisplay.php';
   display("SELECT name as Name, birthdate as Birthdate, birthplace as Birthplace, career_title as Title FROM Person;");
 
}
else
{
  echo "update failed: (" . $conn->errno . ") " . $conn->error;
}
#$conn->close();

?>


 <?php include 'footer.txt'; ?>

</html>
