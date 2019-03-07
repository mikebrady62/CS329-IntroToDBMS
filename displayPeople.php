<!DOCTYPE html>
<html lang="en">

<?php include 'header.txt'; ?>

<?php 

include_once 'projectDB.php';
include 'projectDisplay.php';
echo "<h2> This Database Includes the Following People: </h2>";
display("SELECT name as Name, birthdate as Birthdate, birthplace as Birthplace, career_title as Title FROM Person;");



?>
<h1>	</h1>
<h4>Other Links to Find out More Information on the People Above: </h4>
<a href="has.php">Parents of influencers </a><br/>
<a href="studiedAt.php">Influencer's education</a><br/>
<a href="placesLivedIn.php">Places influencers have lived</a><br/>
<a href="workedOnCreated.php">What each influencer does/has done</a>

 <?php include 'footer.txt'; ?>

</html>
