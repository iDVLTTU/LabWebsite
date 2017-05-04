<?php 
$activePage = 'publications.php';
include 'header.php'; 
?>


  <div id="site_content">
    <div id="top_border"></div>
    <div class="content fullPage publicationPage">

       <h4>IN PREPARATION</h4>
       <ul>
            <li>Vinh Nguyen and Tommy Dang. Submitting a paper to IEEE infoVis on March 31.</li><br>
            <li>Tommy Dang. Submitting a paper to IEEE VAST 2017 on March 31.</li><br>
            <li>Vinh Nguyen and Tommy Dang. Submitting a paper to GLBIO 2017 on March 13.</li><br>
            <li>Yasin Kabir, Vinh Nguyen, and Tommy Dang. Submitting a paper to VINCI 2017 on March 15.</li><br>
        </ul>
      <h4>IN SUBMISSION</h4>
        <ul>
          <!--<li>Tommy Dang and Angus Forbes. Submitted to IEEE Transactions on Visualization and Computer Graphics.</li>-->
          <li>Tommy Dang and Long Nguyen. Submitted a short paper to EnvirVis 2017 on Feb 17. </li>
          <li>Vinh Nguyen and Tommy Dang. Submitted a short paper to EuroVis 2017 on Feb 17. </li>
          <li>Vinh Nguyen and Tommy Dang. Submitted a paper to VISUAL 2017 on Feb 27. </li>
        </ul>

          <div class="Border"></div> 
          <h4>PAPERS</h4>
           <ul>

                <?php
                        $xmls=simplexml_load_file("./xml/publications.xml") or die("Error: Cannot create object");
                        $i = 0;
                        foreach ($xmls as $xml) { 
                          echo "<li>" . $xml->paperInfo->asXml();
                          // echo "<p>" . $xml->description->asXml() . "</p>";
                          // echo "<p>" . $xml->gitRepo->asXml() . "</p>";
                           echo '<a href="paper.php?id=' .$i.'">' . 'View more</a>' . "</li>";
                           $i++;
                          }
                ?> 
           <ul>

            <br/>
            <p>For papers before 2017, please visit <a href="http://www.myweb.ttu.edu/tnhondan/publications.html">director's website</a>.</p>

          

         <!--    <?PHP
              function readCSV($csvFile){
                  $file_handle = fopen($csvFile, 'r');
                  while (!feof($file_handle) ) {
                      $line_of_text[] = fgetcsv($file_handle);
                  }
                  fclose($file_handle);
                  return $line_of_text;
              }


              // Set path to CSV file
              $csvFile = './xml/publications.csv';

              $csv = readCSV($csvFile);
              $len1 = count($csv);
              $len2 = count($csv[0]);
              for($i=1;$i<$len1;$i++){
            ?>
            
            <li>
                <font color="#e78ac3">[<?php echo $csv[$i][0] ?>] </font><?php echo $csv[$i][1] ?> 
                <i> <?php echo $csv[$i][2] ?></i>. <?php echo $csv[$i][3] ?>
                <?php echo '<a href="' .$csv[$i][4].'">'?> <img src="images/pdf.png" height="16"></a>
                <?php echo '<a href="' .$csv[$i][5].'">'?> <img src="images/movie.png" height="16"></a>
                <?php echo '<a href="' .$csv[$i][6].'">'?> <img src="images/github2.png" height="16"></a>
                <?php echo '<a href="' .$csv[$i][7].'">'?> <img src="images/bibtex.png" height="16"></a> 
                <?php echo '<a href="' .$csv[$i][8].'"'?>  class="button">DOI</a>
            </li>
            <div align="middle"> 
              <?php echo '<img src="' .$csv[$i][9].'"'?> width="660"><br/><br/>
            </div>

            <?php                
              }
            ?>  -->             
      </div>
</div>
<?php include 'footer.php'; ?>