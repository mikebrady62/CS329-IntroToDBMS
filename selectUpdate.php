<!DOCTYPE html>
<html lang="en">

<?php include 'header.txt'; ?>

<?php 
 include_once 'projectDB.php';
 include 'projectDisplay.php';
 echo "<h2> Information already in the database: </h2>";
 display("SELECT name as Name, birthdate as Birthdate, birthplace as Birthplace, career_title as Title FROM Person;");
?>

<br/>
<form action="fillToUpdate.php" method="post">
<h2>Whose information would you like to update? </h2>
Name of Person: <input type="text" name="name"/><br>
<input type="Submit" value= "Select"/><input type="Reset"/>
</form>

 <?php include 'footer.txt'; ?>

</html>
