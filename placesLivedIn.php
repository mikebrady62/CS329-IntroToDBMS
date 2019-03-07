<?php include 'header.txt'; ?>

<?php 

include_once 'projectDB.php';
include 'projectDisplay.php';
echo "<h2>Places Influencers Have Lived: </h2>";
display("SELECT name as Name, places_lived_in as Places FROM Places_lived_in;");

?>

 <?php include 'footer.txt'; ?>
