<html>
    <head>
        <link rel="stylesheet" type="text/css" href="rlogin.css">
        <script src='https://www.google.com/recaptcha/api.js'></script>

    </head>
    <body>
        
        <div id="pagedetails">
           <h1>Registration</h1>
          
           <p class="heading">Enroll in courses and enjoy</p>
           <p class="advantage">
           Enroll in our courses and enjoy benefits with the courses.
           Advantages of the enrolling are as follows:
           <ul class="advantage">
               <li>
                   Participate in online discussions and threads
               </li>
               <li>
                   Practice code with online-codeeditors
                   
               </li>
               <li>
                   Live-chat service accessible 24*7
               </li>
               <li>
                   Enroll in video courses and play interactive quiz at the end
               </li>
           </ul>
          </p>
          <br>
         
          <form action="login.php">
              <br> <a href="hello-world.php"> <input type="submit" name="REGISTER" class="registeration1" value="Already have an account?"> </a>
              
        
           </form>
           
            
        </div>
        <div id="loginregister">
             <form action="" method="post">
                 <h2 class="formheading">Account Info</h2>
                 <input type="email" name="emailid" placeholder=" Your Email" class="email">
             <br> <br>   <input type="password" name="password" placeholder=" Password" class="pass">
             <br> <br>   <h2 class="form1heading">Personal Info</h2>
             <input type="text" name="firstname" placeholder=" FirstName" class="firstname">
              <br> <br>  <input type="text" name="lastname" placeholder=" LastName" class="lastname">
              <br>  <br> <input type="date" name="birthdaydate" placeholder=" Birthdate">
             <br>  <br>
            <select name="programming" class="programming">
                <option selected disabled class="programming">Choose your prefered coding language</option>
            <option value="volvo" class="programming">PHP programming</option>
            <option value="saab">HTML programming</option>
            <option value="fiat">C programming</option>
            <option value="audi">C++ programming</option>
    </select><br><br>
   <select name="programming" class="programming"><span>
   <option selected disabled class="programming">Choose your communication language</option>
    <option value="volvo" class="programming" name="hindi">Hindi</option>
    <option value="saab" name="gujarati">Gujarati</option>
    <option value="fiat" name="english">English</option>

  </select>
             <div class="g-recaptcha" data-sitekey="6LeqVQkUAAAAANZpptqFkuy0bR3EfnI0F2ttS1vi" style="margin-left:10%;margin-top:4%;"></div>
             <input type="checkbox" name="privacypolicy" value="" style="width:5%;margin-top:4%;color:#151A22;">I accept the new Terms of Service.
             <br> <br>  <a href="https://registerlogin-abhisha.c9users.io/login.php"> <input type="submit" name="REGISTER" Value="Register" > </a>
             </form>
            
        </div>
        
    </body>
    
</html>