<html>
    <head>
        <title>login page</title>
        <link rel="stylesheet" href="loginstyling.css">
    </head>
 <body>
     <div class="background">
  <div class="form-cont">
    <div class="container" id="contain" >
            <h1>login</h1>
<!--            login form -->
        <form action="http://mohitbhardwaj.site/login.php" method="post">
       <div>
         
           <input type="text" name="user" placeholder="   username" required>
        </div>
        <div>
            
               <input type="text" name="password" placeholder="   password" required>
       
            </div>
            <button type="submit" value="submit">login</button>
<!--             end of the login form -->
       
    </form>
<!--  new user create button -->
    <button onclick="toggle(this)" style="margin-left:15px;" >create account </button>
  </div>
<!--        registration form -->
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
<!--    end of the form -->
    <a href="http://mohitbhardwaj.site/loginf.php">Back to login</a>
    </div>
 </div>
</div>
<script>
//     switching between the forms button script
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
