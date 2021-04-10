
<html>
    <head>
        <title>login page</title>
    </head>
    <body>
        <div class="container">
            <h1>login</h1>
        <form action="login.php" method="post">
       <div>
           <label>username</label>
           <input type="text" name="user" required>
        </div>
        <div>
               <label>password</label>
               <input type="text" name="password" required>
       
            </div><html>
    <head>
        <title>login page</title>
        <link rel="stylesheet" href="loginstyling.css">
    </head>
 <body>
     <div class="background">
  <div class="form-cont">
    <div class="container" id="contain" >
            <h1>login</h1>
           
        <form action="http://mohitbhardwaj.site/login.php" method="post">
       <div>
         
           <input type="text" name="user" placeholder="   username" required>
        </div>
        <div>
            
               <input type="text" name="password" placeholder="   password" required>
       
            </div>
            <button type="submit" value="submit">login</button>
            
       
    </form>
 
    <button onclick="toggle(this)" style="margin-left:15px;" >create account </button>
   </div>
  
    <div class="reg" id="register">
        <h1>regitration</h1>
    <form action="http://mohitbhardwaj.site/registration.php" method="post">
       <div>
           
           <input type="text" name="user" placeholder="   username" required>
        </div>
            <div>
            
                <input type="text" name="password" placeholder="   password" required>
        
            </div>
            <button type="submit" value='submit'>signup</button>
    </form>
   
    <a href="http://mohitbhardwaj.site/loginf.php">Back to login</a>
    </div>
 </div>
</div>
<script>
  function toggle(y) {
          var x = document.getElementById("contain");
          var z= document.getElementById("register");
          if (x.style.display == "block") {
            x.style.display = "none";
          } else {
            x.style.display = "none";
          }
        
        if (z.style.display == "block") {
            z.style.display = "none";
          } else {
            z.style.display = "block";
          }
          
        }
</script>
</body>
</html>
            <button type="submit" value="submit">login</button>
       </div>
    </form>
    </div>
    <div>
        <h1>regitration</h1>
    <form action="registration.php" method="post">
       <div>
           <label>username</label>
           <input type="text" name="user" required>
        </div>
        <!-- <div>
               <label>email</label>
               <input type="text" name="email" required>
       
            </div> -->
            <div>
                <label>password</label>
                <input type="text" name="password" required>
        
             </div>
            <button type="submit" value='submit'>signup</button>
       </div>
    </form>
    </div>
    </body>
</html>
