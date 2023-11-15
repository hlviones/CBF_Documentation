<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
<title>CBF Documentation</title>
<meta name="description" content="CBF Documentation">
<meta name="author" content="victor.ionescu@semaca.co.uk">

<!-- Stylesheet
============================== -->
<!-- Bootstrap -->
<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css" />
<!-- Font Awesome Icon -->
<link rel="stylesheet" type="text/css" href="assets/vendor/font-awesome/css/all.min.css" />
<!-- Magnific Popup -->
<link rel="stylesheet" type="text/css" href="assets/vendor/magnific-popup/magnific-popup.min.css" />
<!-- Highlight Syntax -->
<link rel="stylesheet" type="text/css" href="assets/vendor/highlight.js/styles/github.css" />
<!-- Custom Stylesheet -->
<link rel="stylesheet" type="text/css" href="assets/css/stylesheet.css" />
</head>

<body data-spy="scroll" data-target=".idocs-navigation" data-offset="125">

<!-- Preloader -->
<div class="preloader">
  <div class="lds-ellipsis">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>
</div>
<!-- Preloader End --> 

<!-- Document Wrapper   
=============================== -->
<div id="main-wrapper"> 
  
  <!-- Header
  ============================ -->
  <header id="header" class="sticky-top"> 
    <!-- Navbar -->
    <nav class="primary-menu navbar navbar-expand-lg navbar-dropdown-dark">
      <div class="container-fluid">
        <!-- Sidebar Toggler -->
		<button id="sidebarCollapse" class="navbar-toggler d-block d-md-none" type="button"><span></span><span class="w-75"></span><span class="w-50"></span></button>
		
		<!-- Logo --> 
        <a class="logo ml-md-3" href="index.html" title="iDocs Template"> </a> 
        <h1><a href="https://pgb.liv.ac.uk/~hlviones/doc" style='text-decoration: none;color: black'>CBF</a></h1>  
		<span class="text-2 ml-2">v1.0</span> 
        <!-- Logo End -->
        
		<!-- Navbar Toggler -->
		<button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#header-nav"><span></span><span></span><span></span></button>
        
		<div id="header-nav" class="collapse navbar-collapse justify-content-end">
          <ul class="navbar-nav">
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Dropdown Action</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="index.html">Action</a></li>
                    <li><a class="dropdown-item" href="feature-header-dark.html">Another Action</a></li>
                    <li><a class="dropdown-item" href="feature-header-primary.html">Something Else Here</a></li>
                    <li><a class="dropdown-item" href="index-2.html">Another Link</a></li>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="#">Another Action</a>
                <li><a class="dropdown-item" href="#">Something Else Here</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <ul class="social-icons social-icons-sm ml-lg-2 mr-2">
  
        </ul>
      </div>
    </nav>
    <!-- Navbar End --> 
  </header>
  <!-- Header End --> 
  
  <!-- Content
  ============================ -->
  <div id="content" role="main">
    
	<!-- Sidebar Navigation
	============================ -->
	<div>
 <ul>
  <p><a href="https://pgb.liv.ac.uk/~hlviones/doc" style='text-decoration: none;color: black'>Home</a></p>

    </div>
    
    <!-- Docs Content
	============================ -->
    <div class="idocs-content">
      <div class="container"> 
        
        <!-- Getting Started
		============================ -->
        <section id="idocs_start">
        <?php
        function get_string_between($string, $start, $end)
        {
            $string = " " . $string;
            $ini = strpos($string, $start);
            if ($ini == 0) {
                return "";
            }
            $ini += strlen($start);
            $len = strpos($string, $end, $ini) - $ini;
            return substr($string, $ini, $len);
        }
        $module = $_GET['module'];
        $parts = explode('/', $module);
        $formatted_module = $parts[0]; 
        echo "<h1><strong></strong></h1>";
        putenv('MODULEPATH=/opt/ohpc/pub/modulefiles');

        $whatis = shell_exec("/opt/ohpc/admin/lmod/lmod/libexec/lmod whatis $module 2>&1");
        $lmod_show_output = shell_exec("/opt/ohpc/admin/lmod/lmod/libexec/lmod show $module 2>&1");
        $module_versions = shell_exec("/opt/ohpc/admin/lmod/lmod/libexec/lmod avail $formatted_module 2>&1");   
        preg_match_all("/$formatted_module\/([\d\.]+)/", $module_versions, $matches);

        $versions = $matches[1];
        
        $binaries = get_string_between(
          $lmod_show_output,
              'prepend_path("PATH","',
              '")'
          );



        $binaries = get_string_between(
        $lmod_show_output,
            'prepend_path("PATH","',
            '")'
        );
        $prereq = get_string_between(
          $lmod_show_output,
              'prereq_any("',
              '")'
        );
        $load = get_string_between(
          $lmod_show_output,
              'load("',
              '")'
        );
        $url = get_string_between(
        $whatis,
            "URL",
            "__LMOD_REF_COUNT_MODULEPATH"
        );        
        $whatis = get_string_between(
        $whatis,
            "Description:",
            "$module"
        );

        $whatis = str_replace("echo", "", $whatis);
        $whatis = str_replace(";", "", $whatis);
        $whatis = str_replace("'", "", $whatis);
        $whatis = str_replace('""', "'", $whatis);
        $url = str_replace("echo", "", $url);
        $url = str_replace(";", "", $url);
        $url = str_replace("'", "", $url);

        $binaryfiles = "";

        $files = scandir($binaries);
        
        foreach($files as $file) {
          if($file == '.' || $file == '..') {
            continue;
          }
          if(!is_executable($binaries.'/'.$file)) {
            continue;
          }

          $binaryfiles .= $file.'   ';



        }



        $tmp = '';
        $tmp .= "<h4 class='mt-5'><strong>What is $formatted_module?</strong></h4>";
        $tmp .= "<br>";
        $tmp .=  "<p class='lead'>$whatis</p>";
        $tmp .=  "<br>";
        $tmp .=  "<p class='lead'>URL: <a href='$url'>$url</a></p>";
        $tmp .=  "<br>";
        $tmp .=  "<br>";
        $tmp .=  "<h4 class='mt-5'><strong>Versions</strong></h4>";
        $tmp .=  "<br>";
        foreach ($versions as $version) {
          $tmp .=  "<p class='lead'>$version</p>";
        }
        $tmp .=  "<br>";
        $tmp .=  "<h4 class='mt-5'><strong>Binary file location</strong></h4>";
        $tmp .=  "<br>";
        $tmp .=  "<p class='lead'>$binaries</p>";
        $tmp .= "<br>";
        $tmp .= "<br>";
        $tmp .=  "<h4 class='mt-5'><strong>Binary files</strong></h4>";
        $tmp .= "<br>";
        $tmp .=  "<p class='lead'>$binaryfiles</p>";
        $tmp .=  "<h4 class='mt-5'><strong>Dependencies</strong></h4>";
        $tmp .= "<br>";
        $tmp .=  "<p class='lead'>$prereq $load</p>";

        echo $tmp
        ?>


		
     </section>

		<hr class="divider">
	
		

  
</div>
<!-- Document Wrapper end --> 

<!-- Back To Top --> 
<a id="back-to-top" data-toggle="tooltip" title="Back to Top" href="javascript:void(0)"><i class="fa fa-chevron-up"></i></a> 

<!-- JavaScript
============================ -->
<script src="assets/js/readmodules.js"></script> 
<script src="assets/vendor/jquery/jquery.min.js"></script> 
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 
<!-- Highlight JS -->
<script src="assets/vendor/highlight.js/highlight.min.js"></script> 
<!-- Easing --> 
<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script> 
<!-- Magnific Popup --> 
<script src="assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script> 
<!-- Custom Script -->
<script src="assets/js/theme.js"></script>
</body>
</html>

