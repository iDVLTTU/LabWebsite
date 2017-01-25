<!DOCTYPE HTML>
<html>

<head>
  <title>iDVL: interactive Data Visualization Lab</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
  <script type="text/javascript" src="js/jquery-1.8.3.js"></script>
  <script type="text/javascript">
    $(function() {
        // this will get the full URL at the address bar
        var url = window.location.href;

        // passes on every "a" tag
        $(".topmenu a").each(function() {
            // checks if its the same on the address bar
            if (url == (this.href)) {
                $(this).closest("li").addClass("selected");
            }
        });
    });        
</script>
</head>

<body>
  <div id="main">
    <header>
      <div id="logo">
        <div id="logo_text">
           <h1><a href="index.html">iDVL<span class="logo_colour"> interactive Data Visualization Lab</span> <img height="48px" src="images/TTUlogo.png" alt="logo" title="logo"></a>
           </h1>
        </div>
      </div>
      <nav>
        <ul class="sf-menu" id="nav">

			<?php foreach($pages as $url=>$title):?>
			  <li <?php if($url === $activePage):?>class="selected"<?php endif;?>>
			       <a href="<?php echo $url;?>">
			         <?php echo $title;?>
			      </a>
			  </li>

			<?php endforeach;?> 
        </ul>
      </nav>
    </header>
