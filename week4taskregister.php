<!DOCTYPE html
<html lang="en"
<head>
    <meta charset="UTF-8">
    <meta http- equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, inital-scale=1.0">
    <title>Document</title>
</head>
<boby>
    <?php
        include 'header.php'
    ?> 
    <h2>Register</h2>
    
    
<form action="process.php" method="post">
    <label for="">First Name:</label>
    <input type="text" name="first_name"><br><br>
  
    <label for="">Last Name:</label>
    <input type="text" name="last_name"><br><br>
  
    <label for="">Username:</label>
    <input type="text" name="username"><br><br>
  
    <label for="">Email:</label>
    <input type="email" name="email"><br><br>
  
    <label for="">Gender:</label>
    <select name="gender">
      <option value="male">Male</option>
      <option value="female">Female</option>
      <option value="other">Other</option>
    </select><br><br>
  
    <label for="">Password:</label>
    <input type="password" name="password"><br><br>
  
    <label for="">Confirm Password:</label>
    <input type="password" name="confirm_password"><br><br>
  
    <input type="submit" value="Register" name="save_user"><br><br>
  </form>
</boby>  
</html>  
 