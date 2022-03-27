<?php include "includes/header.php"; ?>
  
    
    <?php
    /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

    include 'includes/contact_include.php'; #site keys & code here

    // $toAddress = "greendogoasis@gmail.com";  //place your/your client's email address here
    $toAddress = "brandondavila315@outlook.com";  //place your/your client's email address here
    $toName = "Antonio Davila"; //place your client's name here
    $website = "Green Dog Oasis";  //place NAME of your client's website

    // echo loadContact('simple.php'); #demonstrates a simple contact form
    echo loadContact('multiple.php');#demonstrates multiple form elements

    ?>
     
<?php include "includes/footer.php"; ?>