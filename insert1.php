<!DOCTYPE html>
<html lang="en">

<?php include 'header.txt'; ?>

	<form action="insert2.php" method="post">
	<h2> Insert a Person:</h2>
	    <label>Full Name:</label> <input type="text" name="name"/><br>
	    <label>Birthdate:</label> <input type="text" name="birthdate" size="45"/><br>
	    <label>Birthplace:</label> <input type="text" name="birthplace"/><br>
	    <label>Career Title:</label> <input type="text" name="career_title"/><br>
	    <input type="Submit" value= "Insert"/><input type="Reset"/>
	</form>

 <?php include 'footer.txt'; ?>

   </html>
