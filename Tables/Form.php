<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <h1>User Registration</h1>
<form action="submitted.php" method="post"><!-- controls must be in form tag-->
    <span>Username</span>: <input type="text"><br>
    <span>Password</span>: <input type="password"><br>
    <span>Gender</span>: <input type="radio" name="gender">Male<input type="radio" name="gender">Female<br>
    <span>Hobbies</span>: <input type="checkbox">Movies<input type="checkbox">Music<input type="checkbox">Games <br>
    <span>Profession</span>
    <select name ="profession">
        <option disabled selected>Choose one</option>
        <option>Teaching</option>
        <option>Service</option>
        <option>Business</option>
    </select><br>
    <span>Bio:</span> <textarea></textarea> <br>
    <input type="submit" value="Submit">



</form>    
</body>
</html>