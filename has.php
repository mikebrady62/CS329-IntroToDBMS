<!DOCTYPE html>
<html lang="en">

<?php include 'header.txt'; ?>

<?php 

include_once 'projectDB.php';
include 'projectDisplay.php';
echo "<h2>Family of influencers:  </h2>";
display("SELECT person_name as Name, father_name as Father, mother_name as Mother FROM Has;");

?>

<h1>	</h1>
<h4>Other Links to Find out More Information on the Familes of the People Above: </h4>
<a href="family.php">Parents and Spouse </a><br/>
<a href="siblings.php">Parents and Siblings </a>

 <?php include 'footer.txt'; ?>

</html>
