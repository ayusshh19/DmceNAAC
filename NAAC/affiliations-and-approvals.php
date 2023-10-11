<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/x-icon" href="../images/logo1.png" />
</head>
<body>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link href="../css/nav.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/footer.css">

  <title>Affiliations and Approvals | DMCE accredition</title>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>

<script src="../js/pdf.js"></script>
<link rel="stylesheet" href="../css/board-of-governers.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" 
integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!--fade-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
 
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!--NAVBAR-->
  <?php

    include_once '../dmce/nav.php' 
  ?>

    <!-------Breadcrumbs-------->
    <!-- <div style="padding: 10px;">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb" style="background-color: white;">
          <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Accredition</a></li>
          <li class="breadcrumb-item active" aria-current="page">Affiliations and Approvals</li>
        </ol>
      </nav>
    </div><br> -->

    <!--breadcrumbs end-->


<section style="margin: 20px;" class="content-container">
  <header class="section-header">
    <h2  data-aos="fade-right">Affiliations and Approvals   </h2></header>
  <br><br>



   <div  data-aos="fade-up" class="container">
     <br><br>

     <ul class="nav-tabs nav nav-justified">

      <li class="nav-item" style="background-color: rgb(240, 239, 239); border: solid 2px white ;">
        <a  style="  color: rgb(42, 42, 61);" href="#aa" class="nav-link active" data-toggle="tab">AICTE Approvals</a>
      </li>

      <li class="nav-item" style="background-color: rgb(240, 239, 239); border: solid 2px white ;">
        <a  style="  color: rgb(42, 42, 61);" href="#ua" class="nav-link" data-toggle="tab">University Affiliations</a>
      </li>

     </ul>

  <div  data-aos="fade-up" class="tab-content cotainer">
    <div class="tab-pane active" id="aa">
      <br>
          <embed  style="border:10px solid rgb(240, 239, 239); border-radius: 5px;" src="https://drive.google.com/file/d/1ioapb7PvUNtUf67v256M-eapbIYATrk2/preview?usp=sharing" width="100%" height="650px"/>
          <br>
    </div>

    <div class="tab-pane" id="ua">
      <br>
          <embed  style="border:10px solid rgb(240, 239, 239); border-radius: 5px;" src="https://drive.google.com/file/d/1DhS_0vW0ylioTThLlpkyZZE1EC7KxmS8/preview?usp=sharing" width="100%" height="650px"/>
          <br>
    </div>

  </div>

   </div>

  <!--page style 2 end-->
</section>

<!--FOOTER-->  
<?php
    include_once '../dmce/footer.php' 
  ?> 

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
      <script>
        AOS.init();
      </script>

</body>
</html>