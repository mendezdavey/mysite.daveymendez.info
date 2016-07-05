<?php
    define ("NORMALIZE", "<link href='../css/normalize.css' rel='stylesheet'>");
    define ("BOOTSTRAP", "<link href='../css/bootstrap.min.css' rel='stylesheet'>");
    define ("STYLE", "<link href='../css/style.css' rel='stylesheet'>");
    define("TITLE", "Netbeans and MAMP Setup | David Mendez");
    include('php/head.php');
?>
   <div class='container' id="wrapper">
	<h1>A Bash Script to connect to wifi</h1>
	<h2>Introduction</h2>
	<p>I was motivated to learn how to write wifi scripts because I was
	 tired of punching in commands to connect to my wifi. Bash scripting allows
	 you to automate those commands and make the computer work for you.</p>
	<h2 id="">The bash script</h2>
	<pre>
   	   <code class="code-box">
	   #!/bin/bash -x
           # A script for connecting to wifi part1 
	   ip link set wlp2s0 up
	   wpa_supplicant -B -D wext -i wlp2s0 -c /etc/wpa_supplicant.conf
	   sleep 5
	   if [ "$(iw wlp2s0 link)" != "Not connected." ]; then
       	  		 echo "Established a connection"
        		 sleep 1
       			 echo "running dhclient wlp2s0"
       			 dhclient wlp2s0
       			 ping 8.8.8.8
	   else
       			 echo "Failed to establish connection"
	   fi
	   </code>
	</pre>
        <h2 id="step1">Step 1: How to start a bash script</h2>	

<?php include('php/footer.php'); ?>
Use this like this: make_bootstrap3_template > bootstrap3_template.html
