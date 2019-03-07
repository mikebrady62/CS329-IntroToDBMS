<!DOCTYPE html>
<html lang="en">

<?php include 'header.txt'; ?>

<form action="displayAll.php" method="post">
 <?php 
 include_once 'projectDB.php';
 
if(isset($_POST['name']))
   $name =$_POST['name'];
else
    $name =$_GET['name'];


 # prepared statement with Unnamed Placeholders
 $query = "SELECT name as Name, birthdate as Birthdate, birthplace as Birthplace, career_title as Title FROM Person WHERE name  = ?;";
 $stmt = $conn->prepare($query);
 $stmt->bindValue(1, $name); # bind by value and assign variables to each place holder
 $stmt->execute();
 $stmt->setFetchMode(PDO::FETCH_NUM);
 $row = $stmt->fetch();
printf("Influencer's Name: <input type=\"text\" name=\"name\" value=\"%s\"  readonly /><br>\n",$row[0]);
printf("Influencer's Birthdate: <input type=\"text\" name=\"birthdate\" value=\"%s\"/><br>\n",$row[1]);
printf("Influencer's Birthplace: <input type=\"text\" name=\"birthplace\" value=\"%s\"/><br>",$row[2]);
printf("Influencer's Career_Title: <input type=\"text\" name=\"career_title\" value=\"%s\"/><br>",$row[3]);
?>
<br/>
<input type="Submit" value= "Update"/><input type="Reset"/>
</form>

 <?php include 'footer.txt'; ?>

</html>
