<html>
   
   <head>
      <style>
         .error {color: #FF0000;}

         .button {
  background-color: #DD5E89;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
        
      </style>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Datepicker - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>


<link rel="stylesheet" href="style.css">
	
	<link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/all.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">

</head>

   
   <body>
      <?php
         // define variables and set to empty values
         $nameErr = $emailErr = $genderErr = $websiteErr = "";
         $name = $email = $gender = $comment = $website = "";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
               $nameErr = "Name is required";
            }else {
               $name = test_input($_POST["name"]);
            }
            
            if (empty($_POST["email"])) {
               $emailErr = "Email is required";
            }else {
               $email = test_input($_POST["email"]);
               
               // check if e-mail address is well-formed
               if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  $emailErr = "Invalid email format"; 
               }
            }
            
            if (empty($_POST["website"])) {
               $website = "";
            }else {
               $website = test_input($_POST["website"]);
            }
            
            if (empty($_POST["comment"])) {
               $comment = "";
            }else {
               $comment = test_input($_POST["comment"]);
            }
            
            if (empty($_POST["gender"])) {
               $genderErr = "Gender is required";
            }else {
               $gender = test_input($_POST["gender"]);
            }
         }
         
         function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
      ?>
      <center>
  <section id="services">
  <div class="services">
  <div class="container">
    <h1 style="font-size:40px">Profile Page</h1>
    
     

     
    <form class="contact-form" method = "post" action = "<?php 
       echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
       <table cellpadding="10" style="border-color:#efefef" >
          <tr  style="color: #efefef" >
             <td> <p style="font-size:20px">Name: </td>
             <td><input type = "text" name = "name">
                <span class = "error">* <?php echo $nameErr;?></span>
             </td>
          </tr>
         
          <tr style="color: #efefef">
             <td > <p style="font-size:20px">E-mail: </td>
             <td style="font-size:px"><input type = "text" name = "email">
                <span class = "error">* <?php echo $emailErr;?></span>
             </td>
          </tr>
         
          <tr style="color: #efefef">
             <td> <p style="font-size:20px">Birthday:</td>
             <td> <input type="text" name="website" id="datepicker">
        
                <span class = "error"><?php echo $websiteErr;?></span>
             </td>
          </tr>
          
          <tr>
          
          </tr>
          
          <tr style="color: #efefef">
             <td><p style="font-size:20px"> Gender:</td> </p>
             <td style="font-size:20px" >
                <input type = "radio" name = "gender" value = "Female">Female
                <input type = "radio" name = "gender" value = "Male">Male
                <span class = "error">* <?php echo $genderErr;?></span>
             </td>
          </tr>
      
          <td>
             <input type = "submit" class="button" name = "submit" value = "Submit"> 
          </td>
      
       </table>
    
    </form>

  </div>	

      
<!--------------------------ABOUT-------------------------->
<div class="col-md-6 skill-bar">
      
      <?php
         echo "<h2>You Input:</h2>";
         echo $name;
         echo "<br>";
         
         echo $email;
         echo "<br>";
         
         echo $website;
         echo "<br>";
         
         echo $comment;
         echo "<br>";
         
         echo $gender;
      ?></center>
   </section>
   </body>
</html>