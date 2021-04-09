
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
       
            </div>
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