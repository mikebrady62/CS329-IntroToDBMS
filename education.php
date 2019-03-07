<?php include 'header.txt'; ?>

<?php 

include_once 'projectDB.php';
include 'projectDisplay.php';
echo "<h4>Schools Attended: </h4>";
display("SELECT college_university_name as Schools FROM Education;");

echo "<h4>Number of Ivy League Schools Attended: </h4>";
display("SELECT count(college_university_name) as Amount FROM Education WHERE college_university_name = 'Harvard University' or college_university_name = 'Princeton University' or college_university_name = 'University of Pennsylvania';");

echo "<h4>Number of Influencers That Did Not Obatin a Degree: </h4>";
display("SELECT count(degree) as Amount FROM Studied_at WHERE degree = 'No degree completed';");

?>

 <?php include 'footer.txt'; ?>
