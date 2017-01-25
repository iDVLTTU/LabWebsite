<?php $thisPage="News"; ?>
      <div id="sidebar_container">
      <img class="paperclip" src="images/paperclip.png" alt="paperclip" />
        <div class="sidebar">
          <h3>Latest News</h3>

          <?php
                        $xmls=simplexml_load_file("newsArchive.xml") or die("Error: Cannot create object");
                        foreach ($xmls as $xml) { 
                          echo "<h4>" . $xml->headline->asXml() . "</h4>";
                          echo "<h5>" . $xml->date->asXml() . "</h5>";
                          echo "<p>" . $xml->fullNews->asXml() . "</p>";
                        }
                  ?>
        </div>
      </div>