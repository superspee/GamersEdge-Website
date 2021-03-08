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
            <li><a href="home.php">HOME</a></li>
            <li ><a href="xbox.php">XBOX</a></li>
                <li class="active"><a href="session.php">PC</a></li>
                <li ><a href="feedback_form.php">FEEDBACK</a></li>
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
            <h2><a href="pc.php">TOP PC GAMES</a></h2>
            <ul id="subnavi">
                <li ><a href="pubg.php">PUBG</a></li>
                <li ><a href="farcry5.php">FAR CRY 5</a></li>
                <li><a href="fifa18.php">FIFA 18</a></li>
                <li ><a href="session.php">Battlefield V</a></li>
                <li><a href="cs.php">CS GO</a></li>
                <li class="active"><a href="#">GTA V</a></li>
            </ul>
            </ul>
            <ul id="subnavi">
                <li>GTA V Trailer</li>
              <video  controls > 
<source src="gta5.mp4">
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
            <h1>GRAND THEFT AUTO V</h1>
            <p><img src="img/gta5i.png" alt="" width="251" height="196" class="right" />Grand Theft Auto V evolves nearly every mechanic that was in the previous Grand Theft Auto games. As far as driving goes, the vehicles have been greatly improved, with Rockstar running more complex physics on them. The cars can even hold to the ground slightly better. The driving mechanics feel more like a racing game, particularly the Midnight Club series, compared to Grand Theft Auto IV's rocky, boat-like handling system. The shooting mechanics are better in terms of the feel of the mechanics and larger compared to the melee mechanics in the game, but that doesn't mean that the melee combat won't be fun, as it has been improved over the previous titles as well. Weapon selection has now also been changed. Instead of the old way of selecting through all the weapons, there is now a Weapon Wheel, which is similar to the one featured in Red Dead Redemption, another game made by Rockstar Games. Grand Theft Auto V draws inspirations from many different Rockstar titles in the past, including Max Payne 3, Midnight Club, Manhunt, and Red Dead Redemption.
Switch Scenes GTAVe Michael Jimmy TV

Switch Scene cutscene. Each of the three protagonists are living their own lives while the player acts the part of another.

There are many unique features in the game; one of those features is that when the players are playing as one of three protagonists in the game, the other two are living their independent daily lives, and you will be surprised by what you find the characters doing when you switch back into them. Another unique feature is that the character swapping feature is executed in a Google Earth-styled manner and was displayed during a Game Informer demo, which was shown to have run smoothly and without lag. The PC, PS4 and Xbox One versions present an exclusive feature, the first-person mode, where the whole game can be played through the eyes of the protagonist. This gameplay mode presents a whole new way to play the game. Cars have detailed interiors different from one another, shooting is like that of an FPS game.
Yoga GTAV Minigane

Yoga, a new activity appearing in GTA V.

New activities have been added, such as yoga, triathlons, jet skiing, parachuting, tennis, golf, and scuba diving. Random events have also been added to the game and can appear anytime, while the player is exploring the map. The mobile phone has returned from Grand Theft Auto IV but is now only used for calling the player's contacts, surfing the web, and quick saving. Giving people the middle finger is another new feature the player can use while in a vehicle (which Rockstar recommended you do in various locations around Los Santos to see the outcome of this effect, depending on where the player is at, they will get different reactions from pedestrians).

Rockstar has also made changes to the pedestrian mechanics; some pedestrians can be seen at the bus stops in East Los Santos, and the same people can reappear in Rockford Hills working in the gardens of the opulent mansions. Some minor mechanics that help convey the environment and appearance of Los Santos occur at certain times of day, such as a sprinkler system being turned on in the morning in wealthy areas like Morningwood.

The map is larger than Grand Theft Auto: San Andreas, Grand Theft Auto IV, and Red Dead Redemption combined. After some calculations by members of GawdAlmighty.com, that would equal to around 27.5 square miles/71.2 km2 when land and sea are combined.


</p>
            
            <h1 align="center"> System Requirements</h1>
             <p>  OS: Windows 8.1 64 Bit, Windows 8 64 Bit, Windows 7 64 Bit Service Pack 1.</p>
    <p>Processor: Intel Core i5 3470 @ 3.2GHZ (4 CPUs) / AMD X8 FX-8350 @ 4GHZ (8 CPUs)</p>
    <P>Memory: 8GB.</P>
    <p>Video Card: NVIDIA GTX 660 2GB / AMD HD7870 2GB.</p>
    <p>Sound Card: 100% DirectX 10 compatible.</p>
    <p>HDD Space: 65GB.</p>
     <p>DVD Drive.</p>
            <h2 align="center">GAMEPLAY SCREENSHOTS</h2>
            <p><img src="img/gta5i1.png" alt="" width="251" height="196" class="right" /> </p><p><img src="img/gta5i2.png" alt="" width="251" height="196" class="right" /></p>
            

 
     

           
        </div>
    </div>
    <div id="footer">
        <p>© Copyright 2018 gamersedge All Rights Reserved. <br />
        
    </div>
</div>
</body>
</html>

    