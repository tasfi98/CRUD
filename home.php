<?php
session_start();

if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){?>
	Hello: <?php echo $_SESSION["uname"]; ?>
	<br/><br/><br/><br/>
	<a href="edit.php">Edit Info</a><br/>
	<a href="show_all.php">Show All Users</a><br/>
	<a href="logout.php">Log Out</a><br/>
	<p>This is a place after login</p>
<?php
}
else{
	header("Location:logout.php");
}
?>