<?php include 'header.php';
$activePage = 'activities.php';
include 'menu.php'; ?>

<div id="site_content">
    <div id="top_border"></div>
      <div class="content fullPage">
        <div id="activities">
          Design lab Logo. Lab T-shirt?

          <h3>iDVL is a newly established lab in Texas Tech University. This lab is moving forward several activities and will adopt more soon. </h3>

          <div class="activityBorder"></div>   
          <div class="activityList">
              <ul>
                  <?php
                        $xmls=simplexml_load_file("activities.xml") or die("Error: Cannot create object");
                        foreach ($xmls as $xml) {
                          echo $xml->date . "<br>";
                        }
                  ?> 

              </ul>
          </div>
        </div>
      </div>
    </div>

<?php include 'footer.php'; ?>