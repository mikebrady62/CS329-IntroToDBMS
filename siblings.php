<?php include 'header.txt'; ?>

<?php 

include_once 'projectDB.php';
include 'projectDisplay.php';
echo "<h2>Family of influencers: </h2>";
display("SELECT father_name as Father, mother_name as Mother, siblingss as Siblings FROM Siblingss;");

?>

 <?php include 'footer.txt'; ?>
