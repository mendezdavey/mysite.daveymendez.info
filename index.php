<?php 
    define ("BOOTSTRAP", " ");
    define ("STYLE", " ");
    define ("NORMALIZE", " ");
    define ("TITLE", "Home Page");
    include('includes/php/head.php'); 
      
?>
<div class="container">
  <div class="row">
      <div id="wrapper">
          <h1><?php echo TITLE; ?></h1>
          <h2>Introduction</h2>
          <p>Welcome to my site! I have created my site in order to help my friends learn how to code,
              play music, and other things that I will learn along the way.
              I am not an expert on all of these things, but I hope you will find benefit in this web page.
              Thank you and God bless you.</p>
          <button type="button" id="night-mode">Night Mode</button>
      </div>

<?php include('includes/php/footer.php'); ?>
 
