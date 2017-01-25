<?php include 'header.php';
$activePage = 'activities.php';
include 'menu.php'; ?>

<div id="site_content">
    <div id="top_border"></div>
      <div class="content fullPage">
        <div id="activities">
 

          <h3>iDVL is a newly established lab in Texas Tech University. This lab is moving forward several activities and will adopt more soon. </h3>

             
          <div class="activityList">
              <ul>
                  <?php
                        $xmls=simplexml_load_file("activities.xml") or die("Error: Cannot create object");
                        foreach ($xmls as $xml) { ?>
                          <div class="activityBorder top_border"></div>
                          <?php 
                          echo "<h4>" . $xml->date->asXml() . "</h4>";
                          if($xml->vinh != "")
                          echo "<li>" . $xml->vinh->asXml() . "</li>";
                          if($xml->long != "")
                          echo "<li>" . $xml->long->asXml() . "</li>";
                          if($xml->yasin != "")
                          echo "<li>" . $xml->yasin->asXml() . "</li>";
                          if($xml->amit != "")
                          echo "<li>" . $xml->amit->asXml() . "</li>";
                          if($xml->work5 != "")
                          echo "<li>" . $xml->work5->asXml() . "</li>";
                          if($xml->work5 != "")
                          echo "<li>" . $xml->work6->asXml() . "</li>";
                        }
                  ?> 

              </ul>
          </div>
        </div>
      </div>
    </div>

<?php include 'footer.php'; ?>