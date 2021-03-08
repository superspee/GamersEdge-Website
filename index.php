<?php include('gamers.php') ?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <script type="text/javascript">
function val(){
if(frm.email.value=="")
{
  alert("Please enter the email");
  frm.email.focus();  
  return false;
} 
var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

if (reg.test(frm.email.value) == false) 
{
  alert('Invalid email address');
  frm.email.focus();  
  return false;
}

return true;
}
</script>
  <meta charset="UTF-8">
  <title>Sign-Up</title>
 
    <link rel="stylesheet" href="min.css" type='text/css'>

  
      <link rel="stylesheet" href="css/style.css">
      <style>
      video{
position:fixed;

right:0;
bottom:0;
min-width:100%;
min-height:100%;
z-index:-1;
} 
  </style>

  
</head>

<body>
 <video  autoplay  loop> 
<source src="intro2.mp4">
</video>
  <div class="form">
      
      <ul class="tab-group">
        <li class="tab active" disabled><a href="#signup" >Sign Up</a></li>
        <li class="tab"><a href="login_page.html">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Sign Up for GamerSedge (TM)</h1>
          
          <form action="gamers.php" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" name="fname" required  />
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text"name="lname" />
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" name="email"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password" name="password" required />
          </div>
          
          <button type="submit" class="button button-block"name="submit" href="gamerSedge.html">Get Started</button>
          
          </form>

        </div>
        
        <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form action="/" method="post">
          
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"/>
          </div>
          
          
          
          <button class="button button-block" onclick="return val();" />Log In</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  




</body>

</html>
