<?php
    define ("NORMALIZE", "<link href='../css/normalize.css' rel='stylesheet'>");
    define ("BOOTSTRAP", "<link href='../css/bootstrap.min.css' rel='stylesheet'>");
    define ("STYLE", "<link href='../css/style.css' rel='stylesheet'>");
    define("TITLE", "Install Apache2 on Ubuntu Linux | David Mendez");
    include('php/head.php');
?>
   <div class='container' id="wrapper">
     <h4>Last Modified: June 7, 2016</h4>
     <h1 id="intro">Install <a href='https://en.wikipedia.org/wiki/LAMP_%28software_bundle%29'>LAMP Server</a> on Ubuntu Linux.</h1>
     <h2>Introduction</h2>
     <p>Making a websites in HTML is good, but I have noticed that
       there is allot of code repetition. To solve this issue I have begun using
       more php in my web pages. A great way to test your php is to setup a local
       web server on your computer. This tutorial will teach you how to set up a
       <a href='https://en.wikipedia.org/wiki/LAMP_%28software_bundle%29'>LAMP Server</a> in ubuntu linux.</p>

     <h2 id="step1">Install Apache2 on Ubuntu Linux</h2>
     <p>According to <a href='https://en.wikipedia.org/wiki/Apache_HTTP_Server'>Wikipedia</a>: The Apache HTTP Server,
       colloquially called Apache (/əˈpætʃiː/ ə-PA-chee),
       is the world's most used web server software.
       Originally based on the NCSA HTTPd server,
       development of Apache began in early 1995 after work on the NCSA code stalled.
       Apache played a key role in the initial growth of the World Wide Web,[5]
       quickly overtaking NCSA HTTPd as the dominant HTTP server,
       and has remained most popular since April 1996. In 2009,
       it became the first web server software to serve more than 100 million websites.[6] </p>
      <p>a) Run the commands:</p>
      <div class="black-box">
	<code>sudo apt-get update</code>
     </div>
      <p>b) Install apache2</p>
     <div class="black-box">
	<code class='code-box'>sudo apt-get install apache2</code>
      </div>
      <p>c) Install mysql database</p>
      <div class="black-box"> 
	<code class='code-box'>sudo apt-get install mysql</code>
      </div>
       <p>d) Install php</p>
       <div class="black-box">  
	<code>sudo apt-get install php5 libapache2-mod-php5 php5-mcrypt</code>
      </div>
       
       <h2 id="step2">Running Apache2 Service</h2>
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

