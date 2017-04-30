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

            <li> <b>Tommy Dang</b>, <b>Long Hoang Nguyen</b>, Abdullahn Karim, and Venki Uddameri. <i> STOAViz: Visualizing Saturated Thickness of Ogallala Aquifer</i>. The Visualization in Environmental Sciences, <a href="http://www.informatik.uni-leipzig.de/~envirvis2017/">EnvirVis 2017</a> . </li>

             <li> <b>Tommy Dang</b> and Angus Forbes. <i> CactusTree: A Tree Drawing Approach for Hierarchical Edge Bundling</i>. Proceedings of the 10th IEEE Pacific Visualization Symposium, PacificVis 2017. </li>

             <li> <b>Tommy Dang</b>, Paul Murray, and Angus Forbes. <i> BioLinker: Bottom-up exploration of protein interaction network</i>. Proceedings of the 10th IEEE Pacific Visualization Symposium, PacificVis 2017. </li>
           <ul>

            <br/>
            <p>For papers before 2017, please visit <a href="http://www.myweb.ttu.edu/tnhondan/publications.html">director's website</a>.</p>

            <!-- <?php
                        $xmls=simplexml_load_file("./xml/publications.xml") or die("Error: Cannot create object");
                        foreach ($xmls as $xml) { 
                          echo "<li>" . $xml->paperInfo->asXml() . "</li>";
                          // echo "<p>" . $xml->description->asXml() . "</p>";
                          // echo "<p>" . $xml->gitRepo->asXml() . "</p>";
                          }
          ?> -->
      </div>
</div>
<?php include 'footer.php'; ?>