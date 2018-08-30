<?php 
$activePage = 'people.php';
include 'header.php';
?>

 <div id="site_content" class= "fullPage">
       <div id="top_border"></div>

        <div class="images imgOne tommy hovereffect" style="margin-right: 10px;">
            <img src="images/people/tommy.jpg" width="auto" height="auto" alt="Tommy Dang">
            <div class="overlay">
                <h3>Tommy Dang</h3>
            </div>
        </div>
        <div class="images imgTwo vinh hovereffect">
            <img src="images/people/vinh.jpg" width="auto" height="auto" alt="Vinh Nguyen">
            <div class="overlay">
                <h3>Vinh Nguyen</h3>
            </div>
        </div>
        <div class="images imgThree vung hovereffect">
            <img src="images/people/vung.jpg" width="auto" height="auto" alt="Vung Pham">
            <div class="overlay">
                <h3>Vung Pham</h3>
            </div>
        </div>
        <div class="images imgFour huyen hovereffect">
            <img src="images/people/huyen.jpg" width="auto" height="auto" alt="Huyen Nguyen">
            <div class="overlay">
                <h3>Huyen Nguyen</h3>
            </div>
        </div>
        <div class="images imgFive long hovereffect" style="opacity: .6; margin-left: 38px;">
            <img src="images/people/long.jpg" width="auto" height="auto" alt="Long Hoang Nguyen">
            <div class="overlay">
                <h3>Long Hoang</h3>
            </div>
        </div>
        <div class="images imgSix yasin hovereffect" style="opacity: .6; margin-left: 0px;">
            <img src="images/people/yasin.jpg" width="auto" height="auto" alt="Md. Yasin Kabir">
            <div class="overlay">
                <h3>Yasin Kabir</h3>
            </div>
        </div>
        
        <div class="members">
          <div class="cFaculty">Director</div>
          <div class="currentMembers">Current students</div>
          <div class="oldMembers">Past students</div>
        </div>
        <div class="personImgBorder" style="margin-bottom: 5px; margin-top: -3px;"></div> 

        <div class="infoArea content fullPage">
            <div id="infOne"> 
                <div  id="tommy" class="person">
                    <div class="personImg"></div>
                    <div class="personInfo">                       
                      <h3>Tommy Dang, <span class="designation">Assistant Professor</span></h3>
                      <p class="shortInfo">
                        Tommy Dang leads the interactive Data Visualization Lab (iDVL). He is currently an Assistant Professor in the Computer Science Department at Texas Tech University. His research on interactive visual analytics has appeared in Computer Graphics Forum and IEEE Transactions on Visualization and Computer Graphics and has been presented at VIS, EuroVis, BioVis, and PacificVis, among others. 
                      </p>
                      <p class="personLinks">

                        <a href="file/TommyDang-2016-CV.pdf"> <img src="images/icons/cv.gif" height="32" padding="0" alt="TuanDang CV"/></a> &nbsp; 

                        <a href="http://www.myweb.ttu.edu/tnhondan/"> <img src="images/icons/webico.png" height="22" padding="0" alt="Website of Tommy Dang"/></a> &nbsp; 
  
                        <a href="http://www.linkedin.com/in/tuan-dang-ab6221a"> <img src="images/icons/Linked.png" height="22"  alt="Linked profile"/></a> &nbsp; 
  
                        <a href="http://github.com/Tommy-Dang"> <img src="images/icons/github.png" height="22" alt="Github" /></a> &nbsp; 

                        <a href="http://scholar.google.com/citations?user=jobGGfEAAAAJ"> <img src="images/icons/GoogleScholar.png" height="26"  padding="0" alt="Google Scholar"/></a> &nbsp; &nbsp; 

                        <a href="https://www.researchgate.net/profile/Tommy_Dang2"> <img src="images/icons/RG.png" height="23"  padding="0" alt="Research Gate"/></a> &nbsp; &nbsp; 

                        <a href="images/icons/orcid_qrcode.png"> <img src="images/icons/orcid_qrcode_tommy.png" height="21"  padding="0" alt="orcid_qrcode"/></a> 

                        <a href="http://orcid.org/0000-0001-8322-0014"> <img src="images/icons/ORCID.png" height="21"  padding="0" alt="ORCid"/></a>
                         &nbsp; 
  
                        <a href="http://www.researcherid.com/rid/P-9915-2016"> <img src="images/icons/researcherID.png" height="22"  padding="0" alt="researcherID"/></a>  
                      </p> 
                      <div class="personPub" id="tommyPub">
                          <?PHP
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
                            $hasPub = 0;
                            for($i=1;$i<$len1;$i++){
                              if($csv[$i][12]==1){
                                $hasPub = 1;
                                break;
                              }
                            }

                            if($hasPub==1){ ?>
                              <br/><h4>Recent Publications:</h4>
                          <?php 
                            for($i=1;$i<$len1;$i++){
                              if($csv[$i][12]==1){
                          ?>
                          <div class="publicationArea">
                          <table style="width:100%; margin-left: 25px;">
                          <tr>
                              <th class="paperThumb" width="15%">
                                  <?php echo '<img src="' .$csv[$i][11].'"'?> width="200" height="100">
                              </th>
                              <th width="85%" style="padding-left: 25px;"> 
                                  <font color="#e78ac3">[<?php echo $csv[$i][0] ?>]</font>
                                  <i><?php echo $csv[$i][1] ?></i><br/>
                                  <?php echo $csv[$i][2] ?><br/>
                                  <?php echo $csv[$i][3] ?>, <?php echo '<a href="' .$csv[$i][5].'">'; echo $csv[$i][4] ?></a>.<br/>
                                  <?php echo '<a href="' .$csv[$i][6].'">'?> <img src="images/icons/pdf.png" height="18"></a>
                                  <?php echo '<a href="' .$csv[$i][7].'">'?> <img src="images/icons/movie.png" height="19"></a>
                                  <?php echo '<a href="' .$csv[$i][8].'">'?> <img src="images/icons/github.png" height="18"></a>                                  
                                  <?php echo '<a href="' .$csv[$i][10].'"'?>  class="button">DOI</a>
                                  <?php echo '<a href="' .$csv[$i][9].'">'?> <img src="images/icons/bibtex.png" height="13"></a> 
                                  
                              </th>
                          </tr>
                          </table>
                          </div>
                          <?php
                              }                
                            }
                          }
                          ?> 
                      </div>
                    </div>   
                    <br/><br/>
                    <div class="personBorder"></div>                 
                </div>
            </div>


            <div id="infTwo">
                 <div  id="vinh" class="person">
                    <div class="personImg"></div>
                    <div class="personInfo">
                      <h3>Vinh The Nguyen, <span class="designation">Ph.D. Student</span></h3>
                      <p class="shortInfo">
                     
                     Vinh got his Bachelor of Science at College of Information Technology, Vietnam National University Hanoi in 2007. 
                     After several years working in software industry (such as FPT), he dicided to pursue and finished his Master degree in Management Information System at Oklahoma State University, Stillwater, OK in 2013.
                     Since then, he had worked as a lecturer in programming and E-commerce at Thai Nguyen University. 
                     In 2016, he received the Vietnam International Education Development (VIED) - Ministry of Education and Training scholarship to pursue his PhD at Texas Tech University.

                      </p>
                      <p class="personLinks">

                          <a href="https://github.com/iDataVisualizationLab/web/raw/master/file/vinh.pdf"> <img src="images/icons/cv.gif" height="32" padding="0" alt="Vinh Nguyen CV"/></a> &nbsp; 

            
                        <a href="http://myweb.ttu.edu/vinhtngu"> <img src="images/icons/webico.png" height="22" padding="0" alt="Website of Vinh Nguyen"/></a> &nbsp; 
  
                        <a href="https://www.linkedin.com/in/vinh-nguyen-the-74242187"> <img src="images/icons/Linked.png" height="22"  alt="Linked profile"/></a> &nbsp; 
  
                        <a href="https://github.com/Alex-Nguyen"> <img src="images/icons/github.png" height="22" alt="Github" /></a> &nbsp; 

                        <a href="https://scholar.google.com/citations?hl=en&user=6rZWCbcAAAAJ"> <img src="images/icons/GoogleScholar.png" height="26"  padding="0" alt="Google Scholar"/></a> &nbsp; 
                      </p> 
                      <div class="personPub" id="vinhPub">
                          <?PHP
                            
                            $hasPub = 0;
                            for($i=1;$i<$len1;$i++){
                              if($csv[$i][13]==1){
                                $hasPub = 1;
                                break;
                              }
                            }

                            if($hasPub==1){ ?>
                              <br/><h4>Recent Publications:</h4>
                          <?php 
                            for($i=1;$i<$len1;$i++){
                              if($csv[$i][13]==1){
                          ?>
                          <div class="publicationArea">
                          <table style="width:100%; margin-left: 25px;">
                          <tr>
                              <th class="paperThumb" width="15%">
                                  <?php echo '<img src="' .$csv[$i][11].'"'?> width="200" height="100">
                              </th>
                              <th width="85%" style="padding-left: 25px;"> 
                                  <font color="#e78ac3">[<?php echo $csv[$i][0] ?>]</font>
                                  <i><?php echo $csv[$i][1] ?></i><br/>
                                  <?php echo $csv[$i][2] ?><br/>
                                  <?php echo $csv[$i][3] ?>, <?php echo '<a href="' .$csv[$i][5].'">'; echo $csv[$i][4] ?></a>.<br/>
                                  <?php echo '<a href="' .$csv[$i][6].'">'?> <img src="images/icons/pdf.png" height="18"></a>
                                  <?php echo '<a href="' .$csv[$i][7].'">'?> <img src="images/icons/movie.png" height="19"></a>
                                  <?php echo '<a href="' .$csv[$i][8].'">'?> <img src="images/icons/github.png" height="18"></a>                                  <?php echo '<a href="' .$csv[$i][10].'"'?>  class="button">DOI</a>
                                  <?php echo '<a href="' .$csv[$i][9].'">'?> <img src="images/icons/bibtex.png" height="13"></a> 
                                  
                              </th>
                          </tr>
                          </table>
                          </div>
                          <?php
                              }                
                            }
                          }
                          ?> 
                      </div> 
                    </div> 
                     <br>
            
                    <div class="personBorder"></div>                 
                </div>
            </div>
            <div id="infThree">
                 <div  id="vung" class="person">
                    <div class="personImg"></div>
                    <div class="personInfo">
                      <h3>Pham Van Vung, <span class="designation">Ph.D. Student</span></h3>
                      <p class="shortInfo">
                      Vung received his Bachelor of Science in Information Technologies from President University (Indonesia) in 2005 and became a lecturer at President University for one and a half years. He then took his Master of Science in Computer Systems Engineering at Politecnico di Milano and completed it in 2010. After his Master degree, he became a lecturer at FPT University (Vietnam) from 2010 until 2018. He has a great interest in data analytics and data visualization and so he decided to take his PhD in Computer Science at TTU and work at the IDV Lab to strengthen his research skills and his knowledge in these fields.
                      </p>
                      <p class="personLinks">

                          <a href="file/vung.pdf"> <img src="images/icons/cv.gif" height="32" padding="0" alt="CV"/></a> &nbsp; 

            
                        <a href="http://www.myweb.ttu.edu/tnhondan/iDVL/index.php"> <img src="images/icons/webico.png" height="22" padding="0" alt="Website of Vung Pham"/></a> &nbsp; 
  
                        <a href="https://www.linkedin.com/in/phamvanvung/"> <img src="images/icons/Linked.png" height="22"  alt="Linked profile"/></a> &nbsp; 
  
                        <a href="https://github.com/phamvanvung"> <img src="images/icons/github.png" height="22" alt="Github" /></a> &nbsp; 

                        <a href="https://scholar.google.com.vn/citations?hl=en&user=QMpiK3UAAAAJ"> <img src="images/icons/GoogleScholar.png" height="26"  padding="0" alt="Google Scholar"/></a> &nbsp; 

                        <a href="https://www.youtube.com/channel/UCTiix4xPlgA8DmlUYPIL0eA"> <img src="images/icons/youtubelogo.png" height="26"  padding="0" alt="Youtube channel"/></a> &nbsp; 
                        
                      </p> 
                     <div class="personPub" id="vungPub">
                          <?PHP
                            
                            $hasPub = 0;
                            for($i=1;$i<$len1;$i++){
                              if($csv[$i][16]==1){
                                $hasPub = 1;
                                break;
                              }
                            }

                            if($hasPub==1){ ?>
                              <br/><h4>Recent Publications:</h4>
                          <?php 
                            for($i=1;$i<$len1;$i++){
                              if($csv[$i][16]==1){
                          ?>
                          <div class="publicationArea">
                          <table style="width:100%; margin-left: 25px;">
                          <tr>
                              <th class="paperThumb" width="15%">
                                  <?php echo '<img src="' .$csv[$i][11].'"'?> width="200" height="100">
                              </th>
                              <th width="85%" style="padding-left: 25px;"> 
                                  <font color="#e78ac3">[<?php echo $csv[$i][0] ?>]</font>
                                  <i><?php echo $csv[$i][1] ?></i><br/>
                                  <?php echo $csv[$i][2] ?><br/>
                                  <?php echo $csv[$i][3] ?>, <?php echo '<a href="' .$csv[$i][5].'">'; echo $csv[$i][4] ?></a>.<br/>
                                  <?php echo '<a href="' .$csv[$i][6].'">'?> <img src="images/icons/pdf.png" height="18"></a>
                                  <?php echo '<a href="' .$csv[$i][7].'">'?> <img src="images/icons/movie.png" height="19"></a>
                                  <?php echo '<a href="' .$csv[$i][8].'">'?> <img src="images/icons/github.png" height="18"></a>                                  <?php echo '<a href="' .$csv[$i][10].'"'?>  class="button">DOI</a>
                                  <?php echo '<a href="' .$csv[$i][9].'">'?> <img src="images/icons/bibtex.png" height="13"></a> 
                                  
                              </th>
                          </tr>
                          </table>
                          </div>
                          <?php
                              }                
                            }
                          }
                          ?> 
                      </div> 
                    </div> 
                     <br>
            
                    <div class="personBorder"></div>                 
                </div>
            </div>

            <div id="infFour">
                 <div  id="huyen" class="person">
                    <div class="personImg"></div>
                    <div class="personInfo">
                      <h3>Huyen Ngoc Nguyen, <span class="designation">Ph.D. Student</span></h3>
                      <p class="shortInfo">
                       Huyen earned her Bachelor's Degree in Information Systems at Hanoi University of Science and Technology (Vietnam) 
                       in 2018. She worked as a student member at the Lab of Data Science and completed her final thesis in computer vision. 
                       Her research interests are in computer animation, machine learning and computer vision, most recently focusing on 
                       the application of deep learning on multi-label image classification and object detection.
                      </p>
                      <p class="personLinks">

                        <a href="file/Huyen.pdf"> <img src="images/icons/cv.gif" height="32" padding="0" alt="Huyen Nguyen CV"/></a> &nbsp; 
                       
                        <a href="http://www.myweb.ttu.edu/tnhondan/iDVL/index.php"> <img src="images/icons/webico.png" height="22" padding="0" alt="Website of Huyen Nguyen"/></a> &nbsp; 
  
                        <a href="https://www.linkedin.com/in/nnhuyen/"> <img src="images/icons/Linked.png" height="22"  alt="Linked profile"/></a> &nbsp; 
  
                        <a href="https://github.com/nnhuyen"> <img src="images/icons/github.png" height="22" alt="Github" /></a> &nbsp; 

                        <a href="https://scholar.google.com.vn/citations?hl=en&user=tsrO-ZgAAAAJ"> <img src="images/icons/GoogleScholar.png" height="26"  padding="0" alt="Google Scholar"/></a> &nbsp;

                                              
                      </p> 
                      <div class="personPub" id="huyenPub">
                          <p></p>
                      </div> 
                    </div> 
                     <br>
            
                    <div class="personBorder"></div>                 
                </div>
            </div>

            <div id="infFive" style="opacity: .6;" >
                 <div  id="long" class="person">
                    <div class="personImg"></div>
                    <div class="personInfo">
                      <h3>Long Hoang Nguyen, <span class="designation">Ph.D. Student</span></h3>
                      <p class="shortInfo">
                       Long received his Bachelor degree in Information Technology at the President Univeristy (Indonesia) in 2005 
                       and then his Master degree in Computer Science at Politecnico di Milano, Italy in 2009. 
                       He had worked over 10 years in software industry in different countries (such as Singapore, Vietname, and Italy) before decided to join iDVL in Jan 2017 for his PhD degree.
                       He had a great interest in data visualization and visual analytics since it helps non-technical people to read and understand insights of large data easily.
                      </p>
                      <p class="personLinks">

                        <a href="http://cse.tlu.edu.vn/Portals/0/Longnh_CV_en_tlu.pdf"> <img src="images/icons/cv.gif" height="32" padding="0" alt="Long Hoang CV"/></a> &nbsp; 
          

                        <a href="http://www.myweb.ttu.edu/longhngu/"> <img src="images/icons/webico.png" height="22" padding="0" alt="Website of Long Hoang Nguyen"/></a> &nbsp; 
  
                        <a href="https://www.linkedin.com/in/hoang-long-nguyen-9713676"> <img src="images/icons/Linked.png" height="22"  alt="Linked profile"/></a> &nbsp; 
  
                        <a href="https://github.com/litpuvn"> <img src="images/icons/github.png" height="22" alt="Github" /></a> &nbsp; 

                        <a href="https://scholar.google.com.vn/citations?hl=en&user=H_BL5agAAAAJ"> <img src="images/icons/GoogleScholar.png" height="26"  padding="0" alt="Google Scholar"/></a> &nbsp; 
                      </p> 
                      <div class="personPub" id="longPub">
                          <?PHP
                            
                            $hasPub = 0;
                            for($i=1;$i<$len1;$i++){
                              if($csv[$i][14]==1){
                                $hasPub = 1;
                                break;
                              }
                            }

                           if($hasPub==1){ ?>
                              <br/><h4>Recent Publications:</h4>
                          <?php 
                            for($i=1;$i<$len1;$i++){
                              if($csv[$i][14]==1){
                          ?>
                          <div class="publicationArea">
                          <table style="width:100%; margin-left: 25px;">
                          <tr>
                              <th class="paperThumb" width="15%">
                                  <?php echo '<img src="' .$csv[$i][11].'"'?> width="200" height="100">
                              </th>
                              <th width="85%" style="padding-left: 25px;"> 
                                  <font color="#e78ac3">[<?php echo $csv[$i][0] ?>]</font>
                                  <i><?php echo $csv[$i][1] ?></i><br/>
                                  <?php echo $csv[$i][2] ?><br/>
                                  <?php echo $csv[$i][3] ?>, <?php echo '<a href="' .$csv[$i][5].'">'; echo $csv[$i][4] ?></a>.<br/>
                                  <?php echo '<a href="' .$csv[$i][6].'">'?> <img src="images/icons/pdf.png" height="18"></a>
                                  <?php echo '<a href="' .$csv[$i][7].'">'?> <img src="images/icons/movie.png" height="19"></a>
                                  <?php echo '<a href="' .$csv[$i][8].'">'?> <img src="images/icons/github.png" height="18"></a>                                  <?php echo '<a href="' .$csv[$i][10].'"'?>  class="button">DOI</a>
                                  <?php echo '<a href="' .$csv[$i][9].'">'?> <img src="images/icons/bibtex.png" height="13"></a> 
                                  
                              </th>
                          </tr>
                          </table>
                          </div>
                          <?php
                              }                
                            }
                          }
                          ?> 
                      </div> 
                    </div>   

                    <div class="personBorder"></div>                 
                </div>
            </div>

            <div id="infSix" style="opacity: .6;" >
                <div  id="yasin" class="person">
                    <div class="personImg"></div>
                    <div class="personInfo">
                      <h3>Md. Yasin Kabir, <span class="designation">Ph.D. Student</span></h3>
                      <p class="shortInfo">
                        
                          Yasin completed his Bachelor degree in Computer Science and Telecommunication engineering (Bangladesh) in 2014. 
                          After that, he had worked as a lecturer and assistant director at Cyber Center in Noakhali Science and Technology University.
                          He has a great passion in big data visualization and so in 2017, decided to join iDVL and  pursue his PhD degree at Texas Tech University.  
                      </p>
                      <p class="personLinks">

                        <a href="http://www.mykabir.info/cv/Resume_Yasin_kabir.pdf"> <img src="images/icons/cv.gif" height="32" padding="0" alt="Yasin Kabir CV"/></a> &nbsp; 


                        <a href="http://www.myweb.ttu.edu/mdykabir"> <img src="images/icons/webico.png" height="22" padding="0" alt="Website of Md. Yasin Kabir"/></a> &nbsp; 
  
                        <a href="https://www.linkedin.com/in/yasin-kabir-b1879184"> <img src="images/icons/Linked.png" height="22"  alt="Linked profile"/></a> &nbsp; 
  
                        <a href="https://github.com/mykabir/"> <img src="images/icons/github.png" height="22" alt="Github" /></a> &nbsp; 

                        <a href="https://scholar.google.com/citations?user=nm9qB7kAAAAJ"> <img src="images/icons/GoogleScholar.png" height="26"  padding="0" alt="Google Scholar"/></a> &nbsp; 
                      </p> 
                      <div class="personPub" id="yasinPub">
                         <?PHP
                            
                            $hasPub = 0;
                            for($i=1;$i<$len1;$i++){
                              if($csv[$i][15]==1){
                                $hasPub = 1;
                                break;
                              }
                            }

                           if($hasPub==1){ ?>
                              <br/><h4>Recent Publications:</h4>
                          <?php 
                            for($i=1;$i<$len1;$i++){
                              if($csv[$i][15]==1){
                          ?>
                          <div class="publicationArea">
                          <table style="width:100%; margin-left: 25px;">
                          <tr>
                              <th class="paperThumb" width="15%">
                                  <?php echo '<img src="' .$csv[$i][11].'"'?> width="200" height="100">
                              </th>
                              <th width="85%" style="padding-left: 25px;"> 
                                  <font color="#e78ac3">[<?php echo $csv[$i][0] ?>]</font>
                                  <i><?php echo $csv[$i][1] ?></i><br/>
                                  <?php echo $csv[$i][2] ?><br/>
                                  <?php echo $csv[$i][3] ?>, <?php echo '<a href="' .$csv[$i][5].'">'; echo $csv[$i][4] ?></a>.<br/>
                                  <?php echo '<a href="' .$csv[$i][6].'">'?> <img src="images/icons/pdf.png" height="18"></a>
                                  <?php echo '<a href="' .$csv[$i][7].'">'?> <img src="images/icons/movie.png" height="19"></a>
                                  <?php echo '<a href="' .$csv[$i][8].'">'?> <img src="images/icons/github.png" height="18"></a>                                  <?php echo '<a href="' .$csv[$i][10].'"'?>  class="button">DOI</a>
                                  <?php echo '<a href="' .$csv[$i][9].'">'?> <img src="images/icons/bibtex.png" height="13"></a> 
                                  
                              </th>
                          </tr>
                          </table>
                          </div>
                          <?php
                              }                
                            }
                          }
                          ?> 
                      </div> 
                    </div>
                     <div class="personBorder"></div>
                    
                </div>
            </div>
            
           

         <div class="peopleSlide">
              <iframe src="./peopleSlide.html" width="750px"></iframe>
         </div> 

        </div>
    </div>


<?php include 'footer.php'; ?>
