<?php $thisPage="newsSidebar"; ?>
      <div id="sidebar_container">
      <img class="paperclip" src="images/paperclip.png" alt="paperclip" />
        <div class="sidebar">
          <h3>Latest News</h3>

                 <?php
                        $xmls=simplexml_load_file("newsArchive.xml") or die("Error: Cannot create object");
                        $i = 0;
                        foreach ($xmls as $xml) { 
                          echo "<h4>" . $xml->headline->asXml() . "</h4>";
                          echo "<h5>" . $xml->date->asXml() . "</h5>";
                          echo "<p>" . $xml->sortNews->asXml() . "</p>"; 
                          if($i!=count($xmls)-1)
                          echo '<a href="news.php?id=' .$i.'">Read More</a>';
                          $i++; ?>
                          <div style="clear:both;"></div>
                          <div class="sidebarNewsBorder"></div> 
                          <?php 
                        }
                  ?>
        </div>
      </div>