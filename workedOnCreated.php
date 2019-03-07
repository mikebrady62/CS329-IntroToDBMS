<!DOCTYPE html>
<html lang="en">

<?php include 'header.txt'; ?>

<?php 

include_once 'projectDB.php';
include 'projectDisplay.php';
echo "<h2>Names of What Each Influencer Does/Has Done: </h2>";
display("SELECT person_name as Name, work_name as Name_of_work FROM Worked_on_created;");

?>

<h1>	</h1>
<h4>Links to Find out More Information on their Work: </h4>
<a href="work.php">More information on work </a><br/>

 <?php include 'footer.txt'; ?>

</html>
