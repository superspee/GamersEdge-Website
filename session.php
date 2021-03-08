<?php 
    session_start(); 
       
    if (!isset($_SESSION['email'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login_page.html');
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        
        header("location: index.html");
    }

?>


<html >

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
	</style>
    
</head>

<body>
<div id="wrapper">
	<div id="top">
    	<h1 class="logo"><span class="green1"> GamerSedge(TM) </span><?php echo $_SESSION['email']; ?></h1>
        <ul id="topnavi">
        	<li ><a href="home.php">HOME</a></li>
            <li ><a href="xbox.php">XBOX</a></li>
                <li class="active"><a href="session.php">PC</a></li>
                <li ><a href="feedback_form.php">FEEDBACK</a></li>
               <?php  if (isset($_SESSION['email'])) : ?>
         
            <li > <a href="index.html?logout='1'">LOG OUT</li> 
                
                  
<?php endif ?>
      
    
         
        
        </ul>
    </div>
    <div id="header">
    <a href="https://www.ea.com/">	<img src="img/bf5.png" alt="" width="1000" height="183" /></a>
    </div>
    <div id="main">
    	<div id="left-part">
        	
                <h2><a href="pc.php">TOP PC GAMES</a></h2>
            <ul id="subnavi">
                <li><a href="pubg.php">PUBG</a></li>
                <li><a href="farcry5.php">FAR CRY 5</a></li>
                <li><a href="fifa18.php">FIFA 18</a></li>
                <li class="active"><a href="session.php">Battlefield V</a></li>
                <li><a href="cs.php">CS GO</a></li>
                <li><a href="gta5.php">GTA V</a></li>
            </ul>
            </ul>
            <ul id="subnavi">
                <li>Battlefield V Trailer</li>
              <video  controls > 
<source src="bf_t.mp4">
</video>
<ul id="subnavi">
    <a href="farcry5.mp4" download>Download game</a>
           </ul>
  <ul id="subnavi">
    <li> FOLLOW US!</li>
  <li><img src="img/social.gif" border="0" usemap="#Map">
<map name="Map"><area shape="rect" coords="0,0,16,15" href="https://www.twitter.com"><area shape="rect" coords="17,0,34,15" href="https://www.facebook.com/Superspee.com"></map></li>
</ul>

           
        </div>
    	<div id="right-part">
        	<h1>LATEST GAME RELEASE (BATTLEFIELD 5)</h1>
            <p><img src="img/bf5i.png" alt="" width="251" height="196" class="right" />Battlefield V returns to the major conflict of World War II, with a heightened focus on the lesser known battles of the war. The game is designed to be the most immersive experience in the series, with storylines ranging across major battles of the war. Game mechanics have been completed redesigned such as player movements, health regeneration, etc. Additionally players will have a more interactive role in gameplay by having to physically open doors, enter vehicles, or picking up health or ammo.

Women will be featured more prominently in the game, being protagonists of certain singleplayer missions and being available for use in all multiplayer classes. Customization has also been vastly improved, allowing players to customize all clothing, weapons, and vehicles in singleplayer and multiplayer with the introduction of The Company.


</p>
            
            <h1 align="center"> System Requirements</h1>
            <p>    CPU: Core i5 6600K / AMD FX-8350. </p>
              <p>     OS: 64-bit Windows 7, Windows 8.1 and Windows 10.</p>
                  <P> VIDEO CARD: DirectX 11.0 Compatible video card with 2 GB VRAM (AMD Radeon HD 7850 / nVidia GeForce GTX 660)</P>
                    <p>FREE DISK SPACE: 50 GB.</p>

            <h2 align="center">GAMEPLAY SCREENSHOTS</h2>
            <p><img src="img/bf5i1.png" alt="" width="251" height="196" class="right" /> </p><p><img src="img/bf5i2.png" alt="" width="251" height="196" class="right" /></p>
            

 
     

           
        </div>
    </div>
    <div id="footer">
        <p>© Copyright 2018 gamersedge All Rights Reserved. <br />
       
    </div>
</div>
</body>
</html>
