<?php
    define ("NORMALIZE", "<link href='css/normalize.css' rel='stylesheet'>");
    define ("BOOTSTRAP", "<link href='css/bootstrap.min.css' rel='stylesheet'>");
    define ("STYLE", "<link href='css/style.css' rel='stylesheet'>");
    define("TITLE", "Install LAMP Server on Ubuntu Linux");
    include('php/head.php');
?>
   <div class='container' id="wrapper">
        
<?php
        /*
        $t = date("H");

        if ($t < "10") {
            echo "<h4>Good Morning!</h4>" ;
        } elseif ($t < "20") {
            echo "Have a good day!";
        } else {
            echo "Have a good night!";
        }
        */
?>
       
<?php
/*
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");
*/
?>
     <h4>Last Modified: June 30, 2016</h4>
     <h1><?php echo TITLE; ?></h1>
     <img src="includes/img/lamp-mysql-php-apache1.png" style="max-width:50%;height:auto" >   
     <h2>Introduction</h2>
     <p>A great way to test your php is to setup a local
       web server on your computer. This tutorial will teach you how to set up a
       <a href='https://en.wikipedia.org/wiki/LAMP_%28software_bundle%29'>LAMP Server</a> in ubuntu linux.</p>
      <h2 id='step1'>Step 1: Run the Following Commands</h2>
      <p>a) download the package lists and update them to their newest version.</p>
      <div class="black-box">
	<code>sudo apt-get update</code>
     </div>
      <p>b) Install apache2</p>
     <div class="black-box">
	<code class='code-box'>sudo apt-get install apache2</code>
     </div>
    
      <p>a) Install mysql database</p>
      <div class="black-box"> 
	<code class='code-box'>sudo apt-get install mysql-server</code>
      </div>
       <p>c) Install php</p>
       <div class="black-box">  
	<code>sudo apt-get install php libapache2-mod-php php-mcrypt php-mysql</code>
      </div>
       
       <h2 id="step2">Step 2: Start/Stop Apache Service</h2>
       <p>a) Start apache2 service</p>
      <div class="black-box"> 
	<code class='code-box'>sudo systemctl start apache2</code>
      </div> 
       <p>b) Status apache2 service</p>
      <div class="black-box">
	<code>sudo systemctl status apache2</code>
      </div>
       <p>c) Stop apache2 service</p>
      <div class="black-box"> 
	<code class='code-box'>sudo systemctl stop apache2</code>
      </div>       
<?php include('php/footer.php'); ?>

