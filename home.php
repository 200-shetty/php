<?php

session_start();

if(isset($_POST['button2'])) {
            include "../userregistration/trivia.php";
        }

if(isset($_POST['button3'])) {
            include "../userregistration/login.php";
        }

if(isset($_POST['ross']))
    
{
    include "../userregistration/ross.php";
}

if(isset($_POST['chan']))
    
{
    include "../userregistration/chan.php";
}
?>


<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" type="text/css" href="syles.css">
    <link rel="stylesheet" type="text/css" href="button.css">
    <link rel="stylesheet" type="text/css" href="gout.css">
     <link rel="stylesheet" type="text/css" href="char.css">
  
    <title> Home Page </title>
    <body>
     <div class="home">
                <h3> Your Login was successful, <?php echo $_SESSION['username']; ?></h3>
             <h4>how you doin'?</h4> 
             <div class = "black"> <h2>Hit button if you wanna play a Trivia, else you could explore the 6 friends's corners 😌</h2> </div>
        </div>
        <div class="btn">
        <form method="post" action="trivia.php">
            <input type ="submit" name="button2" style="align-content: center;
        backface-visibility: visible;
        background-color: cadetblue;
        color: white;
         align-items: center;
        padding: 20px 30px;
        text-align: justify;
       font-family: monospace;
        align-items: center;
        align-self: center;" value="Hit Me"></form>
         <form method="post" action="login.php">
            <input type ="submit" name="button3" style="align-content: center;
        backface-visibility: visible;
        background-color: cadetblue;
        color: white;
         align-items: center;
        padding: 20px 30px;
        text-align: justify;
       font-family: monospace;
        align-items: center;
        align-self: center;"value="Back"></form>   
        </div>
        <form method="post" action="ross.php">
        <input name="ross" type="image" src="bross.jpg" height="200" width="250" > </form>
            <form method="post" action="chan.php">
         <input name="chan" type="image" src="chan.jpg" height="200" width="250" >  </form> 
       
        
        
        
    
   
    </body>
     </head>
    <html>