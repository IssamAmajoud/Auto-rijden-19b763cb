<!DOCTYPE html>
<html>
<head>
	<title>Rijbewijs</title>
</head>
<body>
    <form method="post">
    	<h2> Hoe oud ben je? </h2>
    	<input type="number" name="cijfer_1">
    	<input type="submit" name="submit">
    </form>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
    $cijfer_1 = $_POST['cijfer_1'];
    if ($cijfer_1 >= 16.5) {
    	echo "Je mag beginnen met rijlessen!"; 
    }
    else {
    	echo "Helaas, je mag nog niet beginnen met rijlessen"; 
    } 
}
?>
