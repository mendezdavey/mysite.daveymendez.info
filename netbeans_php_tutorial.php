<?php 
    define ("NORMALIZE", "<link href='../css/normalize.css' rel='stylesheet'>");
    define ("BOOTSTRAP", "<link href='../css/bootstrap.min.css' rel='stylesheet'>");
    define ("STYLE", "<link href='../css/style.css' rel='stylesheet'>");
    define("TITLE", "Netbeans and MAMP Setup | David Mendez");
    include('includes/php/head.php');        
?>
      <div class='container' id="wrapper">
          <h1>Netbeans for Web Development</h1>
          <h4></h4>
          <h2>Introduction</h2>
          <p>In this document I will show you how to setup <a href="https://netbeans.org">Netbeans</a> 
             and <a href="https://www.mamp.info/en/">MAMP</a> to build your sites efficiently. This combination of 
             tools has improved the speed in which I develop and test my sites. I am not an expert developer, but I hope you will find some benefit in reading this web page.
              Thank you and God bless you.
          </p>
          <p>
          <h2 id="step1">Step 1: Download and Install <a href="https://netbeans.org/downloads/">Netbeans</a> </h2>
          <p>Make sure you <a href="https://netbeans.org/downloads/">download</a> at least the "PHP" or the "ALL" download bundles.</p>
          <h2 id="step2">Step 2: Download and Install <a href="https://www.mamp.info/en/downloads/">MAMP</a> </h2>
          <p>Download the version of MAMP for your corresponding operating system.</p>
          <h2 id="step3">Step 3: Start the MAMP Local Server</h2>
          <ol>
              <li><p>Start the "free version" of the MAMP server. Do not use the "MAMP PRO" version of MAMP.</p></li>
              <li><p>Click the preferences button and under the "Ports" tab change the "Apache Port" to 8888 and click OK</p></li>
              <li><p>Start Server</p></li>
          </ol>
          
          
          <p>Now lets create a php project in Netbeans.</p>
          <h2 id="step 4">Step 4: Create a PHP Project in Netbeans</h2>
          <ol>
              <li>Choose Project: 
                  <ol type="a">
                      <li>Under the PHP folder choose php application.</li>
                  </ol>
              </li>
              </br>
              <li>Name and Location:
                  <ol type="a">
                      <li>Choose a project name ex. PhpProject1</li>
                      <li>Under Sources Folder: choose the htdocs directory of the MAMP folder.
                      For OSX: "/MAMP/htdocs/". For windows: "C:\MAMP\htdocs\".</li>
                      <li>Put Netbeans metadata into a seperate directory</li>
                  </ol>
                 
              </li>
              </br>
              <li>Run and Configuration: 
                  <ol type="a">
                      <li>Run As: Local Web site (running local web server)</li>
                      <li>Project URL: http://localhost:8888/PhpProject1/</li>
                      <li>Click Next until finished. There is no need to configure the rest for this tutorial.</li>
                  </ol>
              </li>
          </ol>
          <p>All done.</p>
                      
          
          
 
    

<?php include('includes/php/footer.php'); ?>