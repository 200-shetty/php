<html>
    <head>
        <title>  F.R.I.E.N.D.S
        </title>
        
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
        
    </head>
    <body>
    <div class="container">
        <div class="login-box">
        <div class="row">
        <div class="col-md-6 login-left">
            <div class= "small"><h6>Account already exists?</h6></div>
            <h2> Login </h2>
            <form action="validation.php" method="post">
                
                 <div class="form-group">
                     <label>Username</label>           
                     <input type="text" name="user" class="form-contol" required>
                 </div>
                <div class="form-group">
                    <label>Password</label>           
                    <input type="password" name="password" class="form-contol" required>
                </div>
                 <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
        
        <div class="col-md-6 login-right">
            <div class= "small1"><h6> New user?</h6>
            
            <h2>Register</h2> 
             
            <form action="registration.php" method="post">
                
                 <div class="form-group">
                     <label>Username</label>           
                     <input type="text" name="user" class="form-contol" required>
                 </div>
                <div class="form-group">
                    <label>Password</label>           
                    <input type="password" name="password" class="form-contol" required></div>
             
                 <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>    
            
            
        </div>    
       </div>
    </div>
    </body>
</html>