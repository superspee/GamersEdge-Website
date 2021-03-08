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
                <li><a href="feedback_form.php">FEEDBACK</a></li>
               <?php  if (isset($_SESSION['email'])) : ?>
         
            <li> <a href="index.php?logout='1'">LOG OUT</li> 
                
                  
<?php endif ?>
      
     
         
        
        </ul>
    </div>
    <div id="header">
        <a href="https://www.pubgmobile.com/en-US/"><img src="img/pubg.png" alt="" width="1000" height="183" /></a>
    </div>
    <div id="main">
        <div id="left-part">
            <h2><a href="pc.php">TOP PC GAMES</a></h2>
            <ul id="subnavi">
                <li class="active"><a href="pubg.php">PUBG</a></li>
                <li><a href="farcry5.php">FAR CRY 5</a></li>
                <li><a href="fifa18.php">FIFA 18</a></li>
                <li><a href="session.php">Battlefield V</a></li>
                <li><a href="cs.php">CS GO</a></li>
                <li><a href="gta5.php">GTA V</a></li>
            </ul>
            </ul>
            <ul id="subnavi">
                <li>PUBG Trailer</li>
              <video  controls > 
<source src="pubg.mp4">
</video>
<ul id="subnavi">
    <a href="farcry5.mp4" download>Download game</a>
           </ul>
  <ul id="subnavi">
    <li> FOLLOW US!</li>
  <li><img src="img/social.gif" border="0" usemap="#Map">
<map name="Map"><area shape="rect" coords="0,0,16,15" href="https://www.twitter.com"><area shape="rect" coords="17,0,34,15" href="https://www.facebook.com/Superspee"></map></li>
</ul>

           
        </div>
        <div id="right-part">
            <h1>PUBG</h1>
            <p><img src="img/pubgi.png" alt="" width="251" height="196" class="right" />PlayerUnknown's Battlegrounds's BATTLE ROYALE game-mode puts up to 100 players on a remote island for a winner-takes-allshowdown where strategic gameplay is as important as shooting skills. Players enter a last-man-standing battle where they try to locate weapons, vehicles, and supplies in a graphically and tactically rich battleground that eventually forces players into a shrinking play zone as they engage in a tense and spectacular fight to the death.
                PlayerUnknown's Battlegrounds (PUBG) is an online multiplayer battle royale game developed and published by PUBG Corporation, a subsidiary of South Korean video game company Bluehole. The game is based on previous mods that were created by Brendan "PlayerUnknown" Greene for other games using the film Battle Royale for inspiration, and expanded into a standalone game under Greene's creative direction. In the game, up to one hundred players parachute onto an island and scavenge for weapons and equipment to kill others while avoiding getting killed themselves. The available safe area of the game's map decreases in size over time, directing surviving players into tighter areas to force encounters. The last player or team standing wins the round.

The game was released for Microsoft Windows via Steam's early access beta program in March 2017, with a full release on December 20, 2017. That same month, the game was released by Microsoft Studios for the Xbox One via its Xbox Game Preview program. In early 2018, it was localized and released by Tencent Games in China, while two mobile versions based on the game for Android and iOS were also released. The game is one of the best-selling of all time, with over fifty million sold across all platforms by June 2018. In addition, the Windows version holds a peak concurrent player count of over three million on Steam, which is an all-time high on the platform.

Battlegrounds received positive reception from critics during both its early access period and on official release, who found that while the game still was not fully finished and had some technical flaws, Battlegrounds presented new types of gameplay that could be easily approached by players of any skill level and was highly replayable. The game received several Game of the Year nominations among other accolades, and is considered by Greene to be the defining game of the battle royale genre. Several other video games, following in Battlegrounds's success, added battle royale-style modes, while a number of clones, primarily out of China, also appeared. PUBG Corporation has run several small tournaments and introduced in-game tools to help with broadcasting the game to spectators, as they wish for it to become a popular eSport. 

</p>
            
            <h1 align="center"> System Requirements</h1>
             <p> OS: 64-bit Windows 7, Windows 8.1, Windows 10.</p>
    <p>Processor: Intel Core i5-4430 / AMD FX-6300.</p>
    <p>Memory: 8 GB RAM.</p>
    <p>Graphics: NVIDIA GeForce GTX 960 2GB / AMD Radeon R7 370 2GB.</p>
    <p>DirectX: Version 11.</p>
    <p>Network: Broadband Internet connection.</p>
    <p>Storage: 30 GB available space.</p>
            <h2 align="center">GAMEPLAY SCREENSHOTS</h2>
            <p><img src="img/pubgi1.png" alt="" width="251" height="196" class="right" /> </p><p><img src="img/pubgi2.png" alt="" width="251" height="196" class="right" /></p>
            

 
     

           
        </div>
    </div>
    <div id="footer">
        <p>© Copyright 2018 gamersedge All Rights Reserved. <br />
        <span class="darkgrey">Design by <a href="http://www.prontomoda.de/" target="_blank" title="Handtaschen">Amogh</a></span></p>
    </div>
</div>
</body>
</html>

    