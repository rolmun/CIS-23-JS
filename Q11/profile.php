<!DOCTYPE html>
<html>
<head>
  <title>User Profile</title>
  <style>
    body {
      background-color: purple;
      color: yellow;
      font-family: Verdana, sans-serif;
    }
  </style>
</head>
<body>
  <h1>Create a Profile</h1>
  
  <form action="process.php" method="POST">
    <input type="hidden" name="recordnumber" value="<?php echo time(); ?>">
    
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required><br><br>
    
    <label for="email">Email Address:</label>
    <input type="email" name="email" id="email" required><br><br>
    
    <label for="phone">Phone Number:</label>
    <input type="tel" name="phone" id="phone" required><br><br>
    
    <label for="bio">Bio:</label>
    <textarea name="bio" id="bio" rows="5" required></textarea><br><br>
    
    <input type="submit" value="Submit">
  </form>
</body>
</html>