<?php include 'header.txt'; ?>

<?php 

include_once 'projectDB.php';
include 'projectDisplay.php';
echo "<h4>Information on Work: </h4>";
display("SELECT name as Name, date_started as Date_started, description as Description, link as Link_to_work FROM Work;");

?>

 <?php include 'footer.txt'; ?>
