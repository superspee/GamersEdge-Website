<?php 
    session_start(); 
       
    if (!isset($_SESSION['email'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login_page.html');
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['email']);
        header("location: index.html");
    }

?>


<html >
<head>
  

    <style type="text/css" title="currentStyle" media="screen">
        @import "./css/global.css";
        video{
float:right;
    border:1px solid #CCC;
    padding:1px;
    margin:0px 0px 10px 10px;
left:0;
bottom:0;
max-width:100%;
max-height:100%;

} 
.qq{
    position:fixed;

right:0;
bottom:0;
min-width:100%;
min-height:100%;
z-index:-1;
} 
}

   
    </style>
</head>

<body> 
    <img  class="qq" src="cone.png">
<div id="wrapper">
    <div id="top">
        <h1 class="logo"><span class="green1"> GamerSedge(TM) </span><?php echo $_SESSION['email']; ?></h1>
        <ul id="topnavi">
            <li ><a href="home.php">HOME</a></li>
            <li class="active"><a href="xbox.php">XBOX</a></li>
                <li ><a href="session.php">PC</a></li>
                <li><a href="feedback_form.php">FEEDBACK</a></li>
               <?php  if (isset($_SESSION['email'])) : ?>
         
            <li> <a href="index.php?logout='1'">LOG OUT</li> 
                
                  
<?php endif ?>
      
     
         
        
        </ul>
    </div>
    <div id="header">
        <img src="img/gta5.png" alt="" width="1000" height="183" />
    </div>
    <div id="main">
        <div id="left-part">
            <h2><a href="session.php">XBOX GAMES</a></h2>
            <ul id="subnavi">
                
                <li>UNCHATERED 4</a></li>
                <li>FIFA 18</a></li>
                <li>Outlast 2</a></li>
                <li>Spiderman</a></li>
                <li>GTA V</a></li>
            </ul>
           
           

           
        </div>
        <div id="right-part">
            <h1>COMING SOON</h1>
            <p style="back"><img src="img/gt.png" alt="" width="251" height="196" class="right" />XBOX WEBPAGES ARE UNDER CONSTRUCTION PLEASE STAY TUNED FOR OFFICIAL LAUNCH !!!!!!!!!!!!!!!!!!!!

</p>
            
            
     

 
     

           
        </div>
    </div>
    <div id="footer">
        <p>© Copyright 2018 gamersedge All Rights Reserved. <br />
        <span class="darkgrey">Design by <a href="http://www.prontomoda.de/" target="_blank" title="Handtaschen">Amogh</a></span></p>
    </div>
</div>
</body>
</html>

    