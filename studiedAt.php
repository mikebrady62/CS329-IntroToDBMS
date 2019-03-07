<!DOCTYPE html>
<html lang="en">

<?php include 'header.txt'; ?>

<?php 

include_once 'projectDB.php';
include 'projectDisplay.php';
echo "<h2>Influencer's Education: </h2>";
display("SELECT person_name as Name, college_university_name as School, date_attended as Attended, degree as Degree FROM Studied_at;");

?>

<h1>	</h1>
<h4>Links to Find out More Information on their Education: </h4>
<a href="education.php">Education Statistics </a><br/>

 <?php include 'footer.txt'; ?>

</html>
