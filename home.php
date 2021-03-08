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
<html>
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
            <li class="active" ><a href="#">HOME</a></li>
            <li ><a href="xbox.php">XBOX</a></li>
                <li ><a href="session.php">PC</a></li>
                <li ><a href="forum.php">FORUM</a></li>
               <?php  if (isset($_SESSION['email'])) : ?>
         
            <li > <a href="index.html?logout='1'">LOG OUT</li> 
                
                  
<?php endif ?>
      
    
         
        
        </ul>
    </div>
    <div id="header">
    <a href="https://www.facebook.com">  <img src="img/logomain.png" alt="" width="1000" height="183" /></a>
    </div>
    <div id="main">
        <div id="left-part">
            
                <h2><a href="pc.php">TOP PC GAMES</a></h2>
            <ul id="subnavi">
                <li><a href="pubg.php">PUBG</a></li>
                <li><a href="farcry5.php">FAR CRY 5</a></li>
                <li><a href="fifa18.php">FIFA 18</a></li>
                <li ><a href="session.php">Battlefield V</a></li>
                <li><a href="cs.php">CS GO</a></li>
                <li><a href="gta5.php">GTA V</a></li>
            </ul>
            </ul>
            
      

  <ul id="subnavi">
    <li> FOLLOW US!</li>
  <li><img src="img/social.gif" border="0" usemap="#Map">
<map name="Map"><area shape="rect" coords="0,0,16,15" href="https://www.twitter.com"><area shape="rect" coords="17,0,34,15" href="https://www.facebook.com/Superspee.com"></map></li>
</ul>

           
        </div>
        <div id="right-part">
           <h1> WELCOME TO OUR WEBSITE </h1>
           <img src="img/logomain.png">
           <br>
           <br>
            
<table style="width:500px; margin=auto; padding:5px;" border="5" >
  <tr><th colspan="17"><h1>Feedbacks</h1></th></tr>
  <tr>
  <td><h4>users</h4></td>
  <td><h4>feedback</h4></td>
  
  </tr>
  
  



<?php
$con = mysqli_connect('localhost', 'root', '', 'gamersedge');
 if(!$con){
     echo"Database connection failed";
 }
 
 
$query="SELECT * FROM feedback";
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result)){
  echo "<tr>";
  echo"<td>".$row['mail']."</td>";
  echo"<td>".$row['comment']."</td>";
  echo "<td><a href='edit.php?mail=".$row['mail']."'> edit </a>";
    echo "<td><a href='delete.php?mail=".$row['mail']."'> x </a>";

}
                      
                       
 
 
 ?>
 </table>
 
     

           
        </div>
    </div>
    <div id="footer">
        <p>© Copyright 2018 gamersedge All Rights Reserved. <br />
        
    </div>
</div>
</body>
</html>
