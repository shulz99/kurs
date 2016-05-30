<!DOCTYPE html/>
<html>
<head></head>
<body>
<?
if(!isset($_GET['myName'])):
?>
<form action="" method="get">
	<label for="myName">Enter your name:</label>
	<input id="myName" name="myName" value=""/><br/>
	<input type="submit" value="Send">
</form>
<?
else:
?>
<h2>Hello <? echo $_GET['myName'];?></h2>
<?
endif;
?>
</body>
</html>