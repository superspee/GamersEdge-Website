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

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" >
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="bred<" />
	<meta name="keywords" content="bred<" />
	<meta name="description" content="bred<" />
	<meta name="robots" content="all" />
	<title>bred</title>

	<style type="text/css" title="currentStyle" media="screen">
		@import "./css/global.css";
	</style>
    
    <link href='http://fonts.googleapis.com/css?family=Asap:400,700' rel='stylesheet' type='text/css'>
</head>

<body>
<div id="wrapper">
	<div id="top">
    	<h1 class="logo"><span class="green1"> GamerSedge(TM) </span><?php echo $_SESSION['email']; ?></h1>
        <ul id="topnavi">
        	<li class="active"><a href="session.php">HOME</a></li>
            <li class="active"><a href="xbox.php">XBOX</a></li>
                <li class="active"><a href="#">PC</a></li>

            <?php  if (isset($_SESSION['email'])) : ?>
         
            <li class="active"> <a href="index.html?logout='1'">LOG OUT</li> 
                  
<?php endif ?>
           
     
        
        </ul>
    </div>
    <div id="header">
    	<img src="img/header.jpg" alt="" width="1000" height="183" />
    </div>
    <div id="main">
    	<div id="left-part">
        	<h1>Category</h1>
            <ul id="subnavi">
                <li class="active"><a href="#">Submenu item</a></li>
                <li><a href="#">Submenu item</a></li>
                <li><a href="#">Submenu item</a></li>
                <li><a href="#">Submenu item</a></li>
                <li><a href="#">Submenu item</a></li>
                <li><a href="#">Submenu item</a></li>
            </ul>
            
            <h1>Additional content</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ornare elementum neque at lobortis. 
            Fusce ac orci diam. Ut ac tellus in lorem commodo vulputate a vitae ligula. Proin nisl lectus, lacinia id 
            egestas eu, hendrerit id purus.</p>
        </div>
    	<div id="right-part">
        	<h1>Headline</h1>
            <p><img src="img/image.jpg" alt="" width="251" height="196" class="right" />Lorem ipsum dolor sit amet, 
            consectetur adipiscing elit. Vestibulum ornare elementum neque at lobortis. 
            Fusce ac orci diam. Ut ac tellus in lorem commodo vulputate a vitae ligula. Proin nisl lectus, lacinia id 
            egestas eu, hendrerit id purus. In accumsan felis in sem pulvinar condimentum eget sed odio. Etiam sapien 
            leo, tincidunt at vulputate quis, suscipit eget lacus. Nunc vestibulum felis ut eros adipiscing at ornare 
            magna vulputate. Nulla viverra malesuada malesuada. Vestibulum ante ipsum primis in faucibus orci luctus 
            et ultrices posuere cubilia Curae;</p>

            <p>Mauris id est mi, varius <a href="#">dignissim lectus</a>. Sed ante lorem, vulputate sed tempor tristique, elementum quis 
            tortor. Etiam consequat, sapien id eleifend suscipit, odio felis consequat enim, quis tincidunt leo magna 
            semper ante. Phasellus ut felis eget felis adipiscing aliquam a vitae dolor. Pellentesque pulvinar condimentum 
            nibh, eu vulputate justo fermentum et. Ut sit amet augue fermentum elit dignissim accumsan. Vestibulum ante 
            ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi et quam vitae dolor ornare 
            laoreet. Ut feugiat consequat tellus id tincidunt. Duis a placerat eros. Proin vel arcu at ipsum hendrerit 
            aliquam. Nullam quam ipsum, sagittis non vehicula non, pellentesque ut dolor.</p>
            
            <h1>H1 Headline</h1>

            <h2>H2 Headline</h2>
            
            <p>List:</p>
			<ul class="list">
                <li>Nulla viverra malesuada malesuada. Vestibulum ante ipsum primis in faucibus</li>
                <li>Nulla viverra malesuada malesuada. Vestibulum ante ipsum primis in faucibus</li>
                <li>Nulla viverra malesuada malesuada. Vestibulum ante ipsum primis in faucibus</li>
                <li>Nulla viverra malesuada malesuada. Vestibulum ante ipsum primis in faucibus</li>
                <li>Nulla viverra malesuada malesuada. Vestibulum ante ipsum primis in faucibus</li>
            </ul>

            <p><a href="#">This</a> is a link. </p>
        </div>
    </div>
    <div id="footer">
    	<p>© Copyright 2012 yourname.com. All Rights Reserved. <br />
        <span class="darkgrey">Design by <a href="http://www.prontomoda.de/" target="_blank" title="Handtaschen">Handtaschen</a></span></p>
    </div>
</div>
  
</body>
</html>
