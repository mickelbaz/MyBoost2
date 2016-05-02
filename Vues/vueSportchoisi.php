<html>
<head>
<body>
<title>Sports</title>


<link rel="stylesheet" href="sportchoisi.css">
</head>

<fieldset class="sport">
<legend><?php echo($_GET['sport']);?></legend>
<?php echo($_GET{'description'});?>
</fieldset>
<br>

<form action="">
<input class="sport" type=submit value=Participer>
</form>

</body>
</html>
