<?php
$myfile = fopen("singles2.txt", "r") or die("Unable to open file!");
$people = array();

#Step 1, Assign all people in text file to people array
while ($line = fgets($myfile)) {
    $array = explode(",",$line);
    array_push($people, $array);

    $name = $array[0];
};

#Step 2, Find the user and assing to user array
$user = array();
foreach ($people as &$person) {
    if($person[0] == $_GET["name"]) {
        $user = $person;
    }
}

$userName = $user[0];
$userGender = $user[1];
$userType = $user[3];
$userOS = $user[4];
$minAge = $user[5];
$maxAge = $user[6];
$lgbt = $user[7];

#Step 3, Find matches for user
$matches = $people;


foreach ($people as $key => $match) {
    #Remove Self
    if(strcmp($match[0],$userName) == 0) {
        unset($matches[$key]);
    }    

    #Match gender
    if(strcmp($lgbt,"M") == 0) {
        if($match[1] == "F") {
            unset($matches[$key]);
        }
    }
    if(strcmp($lgbt,"F") == 0) {
        if($match[1] == "M") {
            unset($matches[$key]);
        }
    }

    #Match age
    if($match[2] < $minAge) {
        unset($matches[$key]);
    }
    if($match[2] > $maxAge) {
        unset($matches[$key]);
    }

    #Match type
    $typeMatch = false;
    if($match[3][0] == $userType[0]) {
        $typeMatch = true;
    }
    if($match[3][1] == $userType[2]) {
        $typeMatch = true;
    }
    if($match[3][2] == $userType[2]) {
        $typeMatch = true;
    }
    if($match[3][3] == $userType[3]) {
        $typeMatch = true;
    }
    if($typeMatch == false) {
        unset($matches[$key]);
    }

    #Match os
    if($match[4] != $userOS) {
        unset($matches[$key]);
    }

}

fclose($myfile);
?>
<html>
 <head>
    <title> Matches</title>
    <link rel="stylesheet" href="nerdieluv.css">
   
</head>
<body>
<img src="logo1.jpg">
<h2>Matches for <?php echo $_GET["name"]; ?></h2>

<?php
    foreach ($matches as &$match) {
        echo("<div class=\"match\">");
        echo("<p><img src=\"profile.jpg\">");
        echo($match[0]."</p></li>");
        echo("<ul>");
        echo("<li><strong>gender:</strong>".$match[1]."</li>");
        echo("<li><strong>age:</strong>".$match[2]."</li>");
        echo("<li><strong>type:</strong>".$match[3]."</li>");
        echo("<li><strong>OS:</strong>".$match[4]."</li>");
        echo("</ul>");
        echo("</div>");
    }
?>
</div>
    <P> This page is for nerds to meet and date each other! Type in <br>
    your personal information and wait fro the nerdly luv to begin! <BR>
    Thank you for using our site.
    <br>
    <br>
    Results and page (C) Coppyright NerdLuv Inc.
    <br>
    <br>
    <a href="index.php"><img src='back.jpg'/>Back to front page</a>
    <br>
    <br>
    <br>
    <br>
    <img src="w3c.jpg">