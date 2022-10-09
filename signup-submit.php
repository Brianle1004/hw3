<?php
error_reporting(0);
$myfile = fopen("singles2.txt", "a") or die("Unable to open file!");
$txt = "\r\n".$_POST["name"].",".$_POST["gender"].",".$_POST["age"].",".$_POST["personality"].",".$_POST["OS"].",".$_POST["age2"].",".$_POST["age3"].",".$_POST["seek"].$_POST["seek2"];
fwrite($myfile, $txt);
fclose($myfile);
?>
<html >
<head>
    <title>SignUp-Submit</title>
</head>
<body>
<img class="match" src="logo1.jpg">
<h2>Thank you!</h2>
<p> Welcome to NerdLuv, <?php echo $_POST["name"]; ?>!
    <br>
    Now <a href="matches.php">log in to see your matches!</a>
</body>
</html>
