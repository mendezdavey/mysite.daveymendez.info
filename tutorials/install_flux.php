<?php 
    define ("NORMALIZE", "<link href='../css/normalize.css' rel='stylesheet'>");
    define ("BOOTSTRAP", "<link href='../css/bootstrap.min.css' rel='stylesheet'>");
    define ("STYLE", "<link href='../css/style.css' rel='stylesheet'>");
    define("TITLE", "Netbeans and MAMP Setup | David Mendez");
    include('php/head.php');
?>    <!-- NAME OF FILE: install_flux.php> -->
      <div class='container' id="wrapper">
      <h1>Install <a href="https://justgetflux.com">f.lux</a> on Centos from tgz file.</h1>
      <h2>Introduction</h2>      
      <p><a href="https://justgetflux.com">f.lux</a> fixes this: it makes the color of your computer's display adapt to the time of day, warm at night and like sunlight during the day.

It's even possible that you're staying up too late because of your computer. You could use <a href="http://justgetflux.com">f.lux</a> because it makes you sleep better, or you could just use it just because it makes your computer look better.</p>   
      <h2 id="step1">Step1: Download  <a href="http://justgetflux.com">f.lux</a></h2>	      
      <p>Download the 64 bit version of flux. <a href="https://justgetflux.com/linux/xflux64.tgz">https://justgetflux.com/linux/xflux64.tgz</a></p>    
      <p>Download the 32 bit version of flux. <a href="https://justgetflux.com/linux/xflux-pre.tgz">https://justgetflux.com/linux/xflux-pre.tgz</a></p>
      <h2 id="step2">Step 2: extract the xflux*.tgz file.</h2>
      <p>run the commands in order:</p>
      <p>cd ~/Downloads</p>
      <p>tar -xvzf xflux64.tgz</p>
      <p>rm -rf xflux64.tgz</p>
      <p>sudo cp xflux /usr/bin/</p>
      <p>sudo chmod 755 /usr/bin/xflux</p>
      <p>xflux -z *zipcodehere* </p>
      <p>Other tarballs may be installed similarly.</p>
 
    

<?php include('php/footer.php'); ?>
