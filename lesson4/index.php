<?php include 'data.php';?>
<!DOCTYPE html>
<html>
  <head>
    <title>My CV</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    html,body,h1,h2,h3,h4,h5,h6 {font-family: 'Jost', sans-serif;}
    </style>
  </head>
<body class="w3-light-grey">

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="https://lechaim.ru/wp-content/uploads/2019/12/880px-Mattathias.jpg" style="width:100%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-black">
            <h2>Name</h2>
          </div>
        </div>
        <div class="w3-container">
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>Profession</p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>City, country</p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>E-mail</p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>Phone number</p>
          <hr>
          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Skills</b></p>
            <?php for($i = 0; $i < count($skillsData); $i++): ?>
                <p><?php echo $skillsData[$i]["skill"]?></p>
                <div class="w3-light-grey w3-round-xlarge w3-small">
                    <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?php echo $skillsData[$i]["percent"]?>"><?php echo $skillsData[$i]["percent"]?></div>
                </div>
            <?php endfor; ?>
          <br>
          <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Languages</b></p>
            <?php for($i = 0; $i < count($langsData); $i++): ?>
                <p><?php echo $langsData[$i]["lang"]?></p>
                <div class="w3-light-grey w3-round-xlarge">
                    <div class="w3-round-xlarge w3-teal" style="height:24px;width:<?php echo $langsData[$i]["percent"]?>"></div>
                </div>
            <?php endfor; ?>
          <br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Work experience</h2>
        <?php for($i = 0; $i < count($worksData); $i++): ?>
          <div class="w3-container">
            <h5 class="w3-opacity"><b><?php echo $worksData[$i]["position"]?></b></h5>
            <h6 class="w3-text-teal">
              <i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo "{$worksData[$i]["start"]} - {$worksData[$i]["end"]}"?></h6>
            <p><?php echo $worksData[$i]["text"]?></p>
            <hr>
          </div>
        <?php endfor; ?>
      </div>

      <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Education</h2>
        <?php for($i = 0; $i < count($studyData); $i++): ?>
          <div class="w3-container">
            <h5 class="w3-opacity"><b><?php echo $studyData[$i]["where"]?></b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $studyData[$i]["time"]?></h6>
            <p><?php echo $studyData[$i]["degree"]?></p>
            <hr>
          </div>
        <?php endfor; ?>
      </div>

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

<!-- Footer -->
<footer class="w3-container w3-teal w3-center w3-margin-top">
  <p>Find me on social media.</p>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
 <!-- End footer -->
 </footer>
</body>
</html>
