<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client-side Form Validation</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <script src="https://kit.fontawesome.com/ab2155e76b.js" crossorigin="anonymous"></script>

<link rel="stylesheet" href="/style.css">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
    </style>
</head>
<body>
<?php
// define variables and set to empty values
$firstName = $lastName = $gender = $email = $password = $number = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstName = test_input($_POST["fisrtName"]);
  $lastName = test_input($_POST["lastName"]);
  $gender = test_input($_POST["gender"]);
  $email = test_input($_POST["email"]);
  $password = test_input($_POST["password"]);
  $number = test_input($_POST["number"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
    <div class="container">
        <div class="header"> 
          <h2>Create Account</h2>
        </div>
        <form action="test.php" method="post" class="form" id="form">
          <div class="form-control ">
          <label for="firstName" >First Name</label>
          <input id="firstName" name="firstName" type= "text" placeholder="Enter Your First Name">
            
            
  
          
          </div>

          <div class="form-control ">
            <label for="lastName" >Surname</label>
            <input id="lastName" name="lastName" type= "text" placeholder="Enter Your Surname">
              
            
            
            </div>
            <div class="form-control radio ">
              <label for="gender" >Gender:</label>
              <span>
                <label for="male">
              <input id="male" value="m" name="gender" type= "radio" > Male
               
                </label>
             
              </span>

              <span>
                <label for="female">
              <input id="female" value="f" name="gender" type= "radio" > Female
               
                </label>
                
              </span>
              <span>
                <label for="other">
              <input type="radio"
              name="gender"
              value="o"
              id="others"> Other
                
                </label>
              
              </span>
              </div>

          
          <div class="form-control ">
          <label for="email">Email</label>
          <input id="email" name="email" type= "email" placeholder="name@domain.com">
            
            
            
          
          </div>
          <div class="form-control">
          <label for="password">Password</label>
          <input id="password"
          name="password" type= "password" placeholder="Enter Password">
           
            
           
          
          </div>
          <div class="form-control">
            <label for="number">Phone Number</label>
            <input
              type="tel"
             
              placeholder="Enter Your Number"
              id="number"
              name="number"
         >
          
            
           
          
          </div>

          <input id="button"  type="submit">
          
        </form>
      </div>
      <?php



      <script src="/app.js"></script>
    
</body>
</html>