<!DOCTYPE html>
<html>
 <head>
    <title> New User Signup</title>
    <link rel="stylesheet" href="nerdieluv.css">
   
</head>
<body>
    <div>
        <img src="logo1.jpg">
        <form action="signup-submit.php" method="post">
    <div>
    <fieldset>
  <legend>New User Signup:</legend>

        <table>
            <tr>
                <td ><h2>Name:</h2> </td>
                <td> <input type="text" id="name" name="name" required size="16"></td>
            </tr>
            <tr>
                <td><h2>Gender:</h2> </td>
                <td> <input type="radio" id="gender" name="gender" value="M"/> Male  
                 <input type="radio" id="gender" name="gender" value="F"/> Female  </td>
            </tr>
            <tr>
                <td ><h2>Age:</h2> </td>
                <td> <input type="text" id="age" name="age" required maxlength="2" size="6"></td>
            </tr>
            <tr>
                <td ><h2>Personality type:</h2> </td>
                <td> <input type="text"  id="personality" name="personality" required maxlength="4" size="6">
                 <a href="http://www.humanmetrics.com/cgi-win/JTypes2.asp">(Don't know your type?)</a></td>
            </tr>
            <tr>
                <td ><h2>Favorite:</h2> </td>
                <td>
                    <select name="OS" id="OS">
                    <option value="Windows">Windows</option>
                    <option value="Mac OS X">Mac OS X</option>
                    <option value="Linux">Linux</option>
                    </select></td>
            </tr>
            <tr>
                <td ><h2>Seeking age:</h2> </td>
                <td> <input type="text" id="age2" name="age2" placeholder="min" required maxlength="2" size="6"> to
                 <input type="text" id="age3" name="age3" placeholder="max" required maxlength="2" size="6">
            </td>
            </tr>
            <tr>
                <td><h2>Seek Gender(s):</h2> </td>
                <td> <input type="checkbox" id="seek" name="seek" value="M"/> Male  
                 <input type="checkbox" id="seek2" name="seek2" value="F"/> Female  </td>
            </tr>
            <tr>
                <td>
                <input type="submit" value="Sign Up"></input>
                </tr>
                </td>
        </table>
        </div>
    
    </fieldset>
</form>
    </div>
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
</body>
</html>