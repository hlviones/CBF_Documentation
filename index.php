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
        <h1>CBF</h1>  
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
	<div class="idocs-navigation bg-light">
      <ul class="nav flex-column ">
        <li class="nav-item"><a class="nav-link active" href="#idocs_start">Getting Started</a>
          <ul class="nav flex-column">
            <li class="nav-item"><a class="nav-link" href="#idocs_introduction">Introduction</a></li>
            <li class="nav-item"><a class="nav-link" href="#idocs_cluster_info">Cluster Info</a></li>
            <li class="nav-item"><a class="nav-link" href="#idocs_html_structure">Connecting to a HPC Cluster</a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link" href="#idocs_slurm">Slurm</a>
          <ul class="nav flex-column">
      <li class="nav-item"><a class="nav-link" href="#idocs_header">What is Slurm?</a></li>      
			<li class="nav-item"><a class="nav-link" href="#idocs_navbar">Jobs</a></li>
      <li class="nav-item"><a class="nav-link" href="#idocs_partitions">Partitions</a></li>
			<li class="nav-item"><a class="nav-link" href="#idocs_specifying">Specifying job parameters</a></li>
      <li class="nav-item"><a class="nav-link" href="#idocs_required">Required parameters</a></li>
			<li class="nav-item"><a class="nav-link" href="#idocs_managing">Managing Jobs</a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link" href="#idocs_guides">Guides</a>
			<ul class="nav flex-column">
            <li class="nav-item"><a class="nav-link" href="#idocs_ssh">SSH Tunnel </a></li>
            <li class="nav-item"><a class="nav-link" href="#idocs_storage">Storage Access</a></li>
          </ul>
		</li>
        <li class="nav-item"><a class="nav-link" href="#idocs_content">Modulefiles</a>
			<ul class="nav flex-column">
            <li class="nav-item"><a class="nav-link" href="#idocs_content">What are environment modules?</a></li>
            <li class="nav-item"><a class="nav-link" href="#idocs_code">Listing available modulefiles</a></li>
            <li class="nav-item"><a class="nav-link" href="#idocs_loading">Loading a modulefile</a></li>
			<li class="nav-item"><a class="nav-link" href="#idocs_installed">List of installed programs</a></li>
          </ul>
		</li>
			<ul class="nav flex-column">
            <li class="nav-item"><a class="nav-link" href="#v1-1">v1.1</a></li>
            <li class="nav-item"><a class="nav-link" href="#v1-0">v1.0</a></li>
          </ul>
		</li>
      </ul>
    </div>
    
    <!-- Docs Content
	============================ -->
    <div class="idocs-content">
      <div class="container"> 
        
        <!-- Getting Started
		============================ -->
        <section id="idocs_start">
        <h1>CBF Documentation</h1>
		<hr>
		<div class="row">
			<div class="col-sm-6 col-lg-4">
				<ul class="list-unstyled">
					<li><strong>Version:</strong> 1.0</li>
					<li><strong>Author:</strong> Victor Ionescu</a></li>
				</ul>
			</div>
			<div class="col-sm-6 col-lg-4">
				<ul class="list-unstyled">
					<li><strong class="font-weight-700">Created:</strong> 15 Febuary, 2023</li>
					<li><strong>Updated:</strong> 7 March, 2023</li>
				</ul>
			</div>
		</div>
        <p class="alert alert-info">If you have any questions that are beyond the scope of this documentation, Please feel free to email <a href="mailto: A.P.Collins@liverpool.ac.uk">Andrew Collins</a>.</p>
        </section>
        

		
        <!-- Introduction
		============================ -->
        <section id="idocs_introduction">
          <h2>Introduction</h2>
          <p class="lead">The CBF aims to develop and support data-driven biological and clinical research by forming new collaborations. We work as scientific partners and as service providers offering tailor-made solutions across a wide range of bioinformatics, statistics and functional interpretation of data. We are proud members of Liverpool Shared Research Facilities at the University of Liverpool.</p>
          <ol>
              </ul>
			</li> 
          </ol>
        </section>
        
		<hr class="divider">

            <!-- Cluster Info
		============================ -->
        <section id="idocs_cluster_info">
              <h2>Cluster Info</h2>
              <?php
              
              $output = (string)shell_exec("scontrol show node 2>&1");
              $lines = explode("\n", $output);
              $totalCPUTot = 0;
              $totalMEM = 0;
              $nodes = array();
              $cpu = array();
              $mem = array();



              foreach ($lines as $line) {


                
                if (preg_match('/CPUTot=(\d+)/', $line, $matches)) {
                    $totalCPUTot += intval($matches[1]);
                    $cpu[] = intval($matches[1]);
                    

                }


                if (preg_match('/RealMemory=(\d+)/', $line, $matches)) {
                    $totalMEM += intval($matches[1]);
                    $mem[] = number_format(intval($matches[1]) / 1024, 2, '.', '');

                }

              }



              $nodes = explode("NodeName=", $output);

              $totalMEM = number_format($totalMEM / 1024, 2, '.', '');
              // Remove the first empty element
              array_shift($nodes);
              
              // Extract NodeNames and add them to an array
              $nodeNames = array();
              foreach ($nodes as $node) {
                  $nodeName = strtok($node, " ");
                  $nodeNames[] = $nodeName;
              }
              
              echo "<p class='lead mb-5'>Total CPUs: $totalCPUTot cores , Total Memory: $totalMEM GB</p>";
              echo "<table>\n";
              echo "<tr>
              <th>Node Names</th>
              <th>CPU Cores</th>
              <th>Memory (GB)</th>
              </tr>";


              // iterate over the arrays
              foreach ($nodeNames as $i => $nodeName) {
                // get the corresponding items from the other arrays
                $cpu_value = $cpu[$i];
                $mem_value = $mem[$i];
              
                // create a table row with the items
                echo "<tr>";
                echo "<td>$nodeName</td>";
                echo "<td>$cpu_value</td>";
                echo "<td>$mem_value</td>";
                echo "</tr>";
              }
              
              // end the HTML table
              echo "</table>";

              ?>



              



              <ol>
                  </ul>
          </li> 
              </ol>
            </section>
            
        <hr class="divider">
		
        <!-- HTML Structure
		============================ -->
        <section id="idocs_html_structure">
          <h2>Connecting to our HPC Cluster</h2>
          <p class="lead mb-5">You will need a SSH client if connecting from a Windows machine.  On Windows, we suggest <a href="https://www.chiark.greenend.org.uk/~sgtatham/putty/latest.html">PuTTY</a>, <a href="https://mobaxterm.mobatek.net/download-home-edition.html">MobaXterm</a> (Installer Edition), or alternatively the ssh command from within Windows Subsystem for Linux (WSL) or from the Command Prompt.  </p>
          <pre><code class="lead">ssh username@login.pgb.liv.ac.uk
          </code></pre>

        </section>
        
		<hr class="divider">
		        
		

    <section id="idocs_slurm">		
        <!-- Intro
		============================ -->
        <section id="idocs_header">
          <h2>What is Slurm?</h2>
          <p class="lead mb-5">CBF uses Slurm (Simple Linux Utility for Resource Management) for cluster/resource management and job scheduling. This job scheduling tool is responsible for allocating resources to users, providing a framework for starting, executing and monitoring work on allocated resources and scheduling work for future execution.</p>
          

        </section>
		
		<hr class="divider">
		
		<!-- Jobs
		============================ -->
        <section id="idocs_navbar">
          <h2>Jobs</h2>
		  <p class="lead">A job is an allocation of resources such as compute nodes assigned to a user for a certain amount of time. Jobs can be interactive or passive (e.g., a batch script) scheduled for later execution.</p>
		  <h4 class="mt-5">Batch Jobs</h4>
      <p class="lead">A "Batch Job" is a type of job that is specified fully by a .slurm submission script. This script contains information about the resources you need and the commands to be run once those resources are allocated to you. As opposed to interactive sessions, batch jobs run unattended. Once your job is submitted you can use slurm commands like squeue and sacct to check the job's status. Read more in <a href="#idocs_managing"> Managing Jobs</a></p>

<h4 class="mt-5">Interactive Jobs</h4>
<p class="lead">Interactive jobs allow a user to interact with applications on the compute nodes. With an interactive job, you request time and resources to work on a compute node directly, which is different to a batch job where you submit your job to a queue for later execution.

You can use two commands to create an interactive session: srun and salloc. Both of these commands take options similar to sbatch.</p>


        </section>
		
		<hr class="divider">

    		<!-- Jobs
		============================ -->
    <section id="idocs_partitions">
          <h2>What are Partitions?</h2>
		  <p class="lead">Partitions are a way to tell what type of job you are submitting, e.g. if it needs to reserve a whole node, or part of a node</p>
      <br>
      <p class="lead">If you need anywhere from one core to a full node's set of cores, specifically request it with -n [no_of_cores]. For example, some bioinformatics tools show minimal increase in performance when more than 8-10 cores/job; in this case, specify "-n 8" to ensure that only 8 cores (less than a single node) are allocated for such a job.</p>        
      <br>
      <p class="lead">Our cluster has a low, a medium and high priority partition. Users should generally use the low partition and reserve the medium and high priority for interactive jobs. </p>

        </section>
		
		<hr class="divider">
		
        
		<hr class="divider">
    <!-- Specifying job parameters
		============================ -->
    <section id="idocs_specifying">
          <h2>Specifying job parameters</h2>
          <p class="lead">Whether you use the CBF clusters interactively or in batch mode, you always have to specify a few things, like number of cores needed, running time etc. These things can be specified in two ways:
           <ul class="lead">

- Either as flags sent to the different Slurm commands (sbatch, srun, the interactive command, etc.), like so:

  <pre><code>  sbatch -p core -n 1 -t 12:00:00 -J some_job_name my_job_script_file.sh</pre></code>

</ul> 
<p class="lead">or, when using the sbatch command, it can be specified inside the job script file itself, by using special "SBATCH" comments. This is the prefered method as it improves the repeatability by eliminating typing errors. For example: 
           <ul class="lead">


  <pre><code>#!/bin/bash -l
 
 #SBATCH -p core
 #SBATCH -n 1
 #SBATCH -t 12:00:00
 #SBATCH -J some_job_name
  
 ... the actual job script code ...</pre></code>

</ul> 

          
          </p>

        </section>
		
		<hr class="divider">
    <!-- Required job peramaters
		============================ -->
    <section id="idocs_required">
          <h2>Required job parameters</h2>
          <p class="lead"> These are the things you typically need to specify for each job (required parameters might differ sligthly depending on which other parameters are set):
          <ul>  
          <br>

          <li class = 'lead'>-p [partition]  :  What partition to choose 
          <ul class="lead"><strong>
            <pre><code>sbatch -p examplepartition</code></pre>
          </strong>
            </ul>
          </li>
                  <br>
        <li class = 'lead'>-n [no_of_cores] How many cores you will need</li>
        <ul class="lead"><strong>
            <pre><code>sbatch -n no_of_cores</code></pre>
          </strong>
            </ul>
        <br>
          <li class = "lead">-t d-hh:mm:ss : How long you want to reserve those nodes/cores 
          <ul class="lead"><strong>
            <pre><code>sbatch -t 0-07:00:00</code></pre>
          </strong>
            </ul>

            <li class = "lead" style="list-style-type: none">Specification is in days, hours, minutes and (not very useful) seconds. A three day timelimit is given as -t 3-00:00:00. Twenty minutes is written as -t 20:00 and three hours as -t 3:00:00. </li>
            <br>
            <li class = "lead" style="list-style-type: none">A long time will increase the chance that your computations are finished within time, while a shorter time may sometimes make your job start faster. A long time will increase the chance that your computations are finished within time, while a shorter time may sometimes make your job start faster. </li>
            <br>
            <li class = "lead" style="list-style-type: none">Your project will be accounted for the time the job runs, which is not necessarily as long as your timelimit. If your job goes over the timelimit, it will be automatically cancelled. </li>  
          </li>
          

          </p>

        </section>
		
		<hr class="divider">

    <!-- Managing Jobs
		============================ -->
    <section id="idocs_managing">
          <h2>Managing Jobs</h2>
          <p class="lead mb-5">To see the status of your program, you can run commands like: </p>
          <pre><code class = 'lead'>squeue</code></pre>
          <pre><code class = 'lead'>squeue -u your_account_name </code></pre>
          <pre><code class = 'lead'>squeue -u our_account_name -t RUNNING</code></pre>
          <p class="lead mb-5"> For various reasons, you might want to terminate your running jobs or remove your waiting jobs from the queue. The command is "scancel" and you can read its documentation with the command "man scancel". Straightforward is to run</p>
          <pre><code class = 'lead'> scancel jobnumber1 jobnumber2</code></pre>
          <p class="lead mb-5"> to kill two of your jobs, by giving their job number. The command</p>
          <pre><code class = 'lead'> scancel -i -u your_account_name</code></pre>
          <p class="lead mb-5"> kills all your jobs, but asks for each job if you really want to terminate that job.</p>
          <pre><code class = 'lead'> scancel -u your_account_name --state=pending</code></pre>
          <p class="lead mb-5">terminates all your waiting jobs, while pending</p>
          <pre><code class = "lead">scancel -u your_account_name -n firsttest -t running</pre></code>
          <p class="lead mb-5">terminates all your waiting jobs, while running</p>
        </section>
		
		<hr class="divider">


       <!-- Guides
		============================ -->
    <section id="idocs_guides">
    <section id="idocs_ssh">
    <div tabindex="0" contenteditable="false" spellcheck="false">
    <div>
    <h2>SSH Tunnelling (SSH Forwarding)&nbsp;<h2>
    </div>
    <div>
        <p class="lead mb-5">
            The SSH protocol is capable of forwarding&nbsp;traffic to a server, remote from where the connection is initially&nbsp;established. Commonly referred to as SSH tunnelling. Since this process uses the SSH port it allows you to
            bypass&nbsp;firewalls and&nbsp;reach remote servers that may not be directly accessible to you.&nbsp;
        </p>
    </div>
    <div>
        <p class="lead mb-5">Since&nbsp;all&nbsp;nodes in the PGB cluster&nbsp;are&nbsp;hidden in a private network you will need to use SSH tunnelling to access any of the compute resources.&nbsp;</p>
    </div>
    <div>
        <p class="lead mb-5">To tunnel you should&nbsp;identify&nbsp;your source node (your desktop), the node which will create the tunnel (head node) and finally the destination node (e.g.,&nbsp;compute01, windows02, Poseidon).&nbsp;</p>
    </div>
    <div>
        <p class="lead mb-5">To create the&nbsp;tunnel,&nbsp;you will open a connection to the SSH port (22) on the tunnel&nbsp;node&nbsp;and then instruct SSH to&nbsp;forward&nbsp;all&nbsp;connections through the tunnel to a remote server port.&nbsp;</p>
    </div>
    <div>
        <p class="lead mb-5">Using PuTTY on a Windows machine you can create a tunnel using the&nbsp;plink&nbsp;command &ndash; you must be on the VPN for this to work:&nbsp;</p>
    </div>
    <div>
         <pre>             
        <code><p class="lead">$ plink -L&nbsp;[LOCAL_IP]:[LOCAL_PORT]:[DEST_HOST]:[DEST_PORT]&nbsp;[USERNAME]@[GATEWAY]&nbsp;</p></code></pre>
    </div>
    <div>
        <p class="lead mb-5">
            LOCAL_IP. This is the IP&nbsp;that will serve as&nbsp;the entry point&nbsp;of tunnel. Commonly this is the loopback IP address. Windows has trouble with the loopback IP address so use 127.0.0.2, on Mac/Linux use 127.0.0.1&nbsp;
        </p>
    </div>
    <div>
        <p class="lead mb-5">
            LOCAL_PORT. This is the port&nbsp;that will serve as the entry point of the tunnel. This&nbsp;must&nbsp;be a port that is free&nbsp;on your local machine. Since you can create multiple tunnels at once you can give each one a
            different port (entry point). E.g., 8022&nbsp;
        </p>
    </div>
    <div>
        <p class="lead mb-5">DEST_HOST. This is the target host you want to access, for instance if you wanted to jump to the web node you would use web01.pgb.liv.ac.uk&nbsp;</p>
    </div>
    <div>
        <p class="lead mb-5">DEST_PORT.&nbsp;This is the target port you want to access. Commonly you would use 22 (SSH), 80 (HTTP), 443 (HTTPS), etc.&nbsp;</p>
    </div>
    <div>
        <p class="lead mb-5">USERNAME.&nbsp;This is the username of the gateway server that you will be using, in the case of the PGB cluster, if you are tunnelling via the head node then use your PGB username.&nbsp;</p>
    </div>
    <div>
        <p class="lead mb-5">GATEWAY.&nbsp;This is the node that you will tunnel through, for the PGB cluster use: login.pgb.liv.ac.uk&nbsp;</p>
    </div>
    <div>
        <p class="lead mb-5"></p>
    </div>
    <div>
        <h3 class="lead mb-5">Example: Access SSH/SFTP/SCP&nbsp;on remote server&nbsp;</h3>
    </div>
    <div>
        <p class="lead mb-5">This example is how to access SSH/SFTP/SCP&nbsp;on a remote server. I.e., you want to gain direct access to the web node, Poseidon/Galaxy, or to login to a compute node that you have an allocation on.&nbsp;</p>
    </div>
    <div>
    <pre><code><p class="lead mb-5">$ plink -L&nbsp;127.0.0.2:8022:web01.pgb.liv.ac.uk:22&nbsp;&lt;USER&gt;@login.pgb.liv.ac.uk</p></pre></code>
    </div>
    <div>
        <p class="lead mb-5">
            This will create a connection from your local machine on 8022 to the SSH port (22) on the web01 node via the PGB cluster login node. Once this tunnel is&nbsp;established&nbsp;you can use PuTTY with the&nbsp;host:port,
            127.0.0.2:8022 to directly login to the web node.&nbsp;
        </p>
    </div>
    <div>
        <p class="lead mb-5">Since SFTP is part of the SSH protocol and uses the same port. You can also use 127.0.0.2:8022 in your SFTP/SCP client to transfer files directly to/from the remote server.&nbsp;</p>
    </div>
    <div>
        <p class="lead mb-5"></p>
    </div>
    <div>
        <h3 class="lead mb-5">Example: Access&nbsp;a&nbsp;web server on remote host&nbsp;</h3>
    </div>
    <div>
        <p class="lead mb-5">This example will allow you to access a remote web server in your desktop web browser, such as an RStudio session hosted on a compute node.&nbsp;</p>
    </div>
    <div>
    <pre><code><p class="lead">$ plink -L&nbsp;127.0.0.2:8080:windows02.pgb.liv.ac.uk:80&nbsp;&lt;USER&gt;@login.pgb.liv.ac.uk&nbsp;</p></pre></code>
    </div>
    <div>
        <p class="lead mb-5">
            This will create a connection from your local machine on&nbsp;8080&nbsp;to the&nbsp;web&nbsp;port (80) on&nbsp;windows02&nbsp;via the PGB cluster login node. Once this tunnel is&nbsp;established&nbsp;you can directly use your
            desktop browser to access the web server running there. To test this try visiting our Mascot server at:&nbsp;
        </p>
    </div>
    <div>
        <p class="lead mb-5">http://127.0.0.2:8080/mascot/&nbsp;</p>
    </div>
    <div>
        <p class="lead mb-5"><img src="data:image/png;base64,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" alt="" />&nbsp;</p>
    </div>
    <div>
        <p class="lead mb-5"></p>
    </div>
    <div>
        <h3 class="lead mb-5"">Example: Access a remote desktop (RDP) on remote host&nbsp;</h3>
    </div>
    <div>
        <p class="lead mb-5">This example will allow you to create a windows remote desktop session, such as accessing the desktop on windows02.&nbsp;This can also be used to access your office desktop or other campus windows servers.&nbsp;</p>
    </div>
    <div>
    <pre><code><p class="lead">$ plink -L&nbsp;127.0.0.2:8389:windows02.pgb.liv.ac.uk:3389&nbsp;&lt;USER&gt;@login.pgb.liv.ac.uk&nbsp;</p></pre></code>
    </div>
    <div>
        <p class="lead mb-5">This will create a tunnel from port 8389 on your local machine to RDP port (3389) on windows02. To then use&nbsp;this,&nbsp;you will then need to create an RDP session using the&nbsp;host:port, 127.0.0.2:8389.</p>
    </div>
    <div>
  <p class="lead mb-5"><span contenteditable="false"><img src="data:image/png;base64,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"></span>&nbsp;</p>
    </div>
    <div>
        <p class="lead mb-5">The username on this screen is the shared username used for the windows02 machine.&nbsp;</p>
    </div>
</div>

        </section>
		
		<hr class="divider">
		
		<!-- Storage Access
		============================ -->
    <section id="idocs_storage">
          <h2>Storage Access Guide </h2>
          <div contenteditable="false" spellcheck="false" tabindex="0">
    <div>
        <p class="lead mb-5">&nbsp;</p>
    </div>
    <div>
        <p class="lead mb-5">We currently have two storage systems, a&nbsp;High-Capacity Storage system and a High-Performance Storage&nbsp;system.&nbsp;The high-capacity storage system replaces all prior storage systems. (Pre 2022: PGB-NAS, CBF-FS, Chronos).&nbsp;</p>
    </div>
    <div>
        <p class="lead mb-5">The high-capacity storage system is for the storage and archiving of user data, it should be considered as&nbsp;general use.&nbsp;This device has 180TB of storage available and can be expanded as needed.&nbsp;</p>
    </div>
    <div>
        <p class="lead mb-5">The high-performance storage system is for the storage of files that will be processed by the rest of the compute platform. This storage system has high speed connectivity to the cluster and uses SSD as the underlying storage medium. It only has limited storage&nbsp;capacity&nbsp;(10TB) and due to this data should be loaded on to the device as needed,&nbsp;then removed afterwards.&nbsp;</p>
    </div>
    <div>
        <div>
            <p class="lead mb-5">Our storage servers&nbsp;do&nbsp;not&nbsp;provide&nbsp;access via the commonly available NFS protocol due to a lack of authentication mechanism, nor does it&nbsp;provide&nbsp;access via SMB/CIFS.&nbsp;You should never&nbsp;attempt&nbsp;to directly access the storage nodes.&nbsp;We do not&nbsp;have&nbsp;single standalone storage nodes but a storage cluster, your data is distributed across the cluster by the storage client software.&nbsp;</p>
        </div>
        <div>
            <p class="lead mb-5">There are still options for remotely accessing the storage server, however, these must be done via the data transfer node (DTN).&nbsp;</p>
        </div>
        <div>
            <p class="lead mb-5">The address of the DTN is currently:&nbsp;</p>
        </div>
        <div>
            <ul>
                <li>
                    <p class="lead mb-5">data.pgb.liv.ac.uk&nbsp;</p>
                </li>
            </ul>
        </div>
        <div>
            <p class="lead mb-5">&nbsp;</p>
        </div>
    </div>
    <div>
        <div>
            <p class="lead mb-5">The DTN is currently an alias of the head node and can be used interchangeably. However, please use the hostname data.pgb.liv.ac.uk&nbsp;to future proof&nbsp;against&nbsp;any changes when mounting the system for purely data transfer purposes.&nbsp;</p>
        </div>
        <div>
        <h3 class="lead mb-5">General Access&nbsp;</h3>
        </div>
        <div>
            <p class="lead mb-5">If you want to quickly upload files or access the files on the system, the storage systems&nbsp;should be symbolically linked to your home directory, you will find&nbsp;them&nbsp;under:&nbsp;</p>
        </div>
        <div>
            <ul>
                <li>
                    <p class="lead mb-5">/home/&lt;username&gt;/hc-storage&nbsp;(High-Capacity Storage)&nbsp;</p>
                </li>
                <li>
                    <p class="lead mb-5">/home/&lt;username&gt;/hp-storage&nbsp;(High-Performance Storage)&nbsp;</p>
                </li>
            </ul>
        </div>
    </div>
    <div>
        <div>
            <p class="lead mb-5">You can access these via an SFTP client&nbsp;(E.g., WinSCP)&nbsp;or&nbsp;directly via&nbsp;bash.&nbsp;</p>
        </div>
        <div>
        <h3 class="lead mb-5">Remote Mounting (Windows)&nbsp;</h3>
        </div>
        <div>
            <p class="lead mb-5">Mounting the storage server (I.e.,&nbsp;mapped drive) is not possible without&nbsp;additional&nbsp;software under Windows. The recommended&nbsp;option&nbsp;is to use SSHFS&nbsp;client such as SSHFS-Win-Manager:&nbsp;</p>
        </div>
        <div>
            <ul>
                <li>
                    <p class="lead mb-5"><a href="https://github.com/evsar3/sshfs-win-manager" rel="noreferrer noopener" target="_blank">https://github.com/evsar3/sshfs-win-manager</a>&nbsp;</p>
                </li>
            </ul>
        </div>
        <div>
            <p class="lead mb-5">Follow the installation instructions to install both&nbsp;WinFsp&nbsp;and SSHFS-Win.&nbsp;After performing the install, you may need to&nbsp;reboot your computer.&nbsp;</p>
        </div>
    </div>
    <div>
        <p class="lead mb-5">Once installed you can then mount the drive&nbsp;using the manager software.&nbsp;</p>
    </div>
    <div>
        <p class="lead mb-5">You will need to login with your cluster credentials, once done you can then access your files from Windows.&nbsp;</p>
    </div>
    <div>
        <p class="lead mb-5">You will need to be on the University network to do this, either via&nbsp;your&nbsp;office&nbsp;desktop&nbsp;or using the VPN.&nbsp;</p>
    </div>
    <div>
    <h3 class="lead mb-5">Remote Mounting (Linux)&nbsp;</h3>
    </div>
    <div>
        <p class="lead mb-5">SSHFS is commonly available on&nbsp;Linux and&nbsp;will&nbsp;most likely be&nbsp;available through&nbsp;the&nbsp;distro package manager. To mount a file system use, first create a directory that will host the remote files:&nbsp;</p>
    </div>
    <div>
        <pre><code><p class="lead">mkdir&nbsp;hc-storage&nbsp;</p></pre></code>
    </div>
    <div>
        <p class="lead mb-5">Then use the&nbsp;sshfs&nbsp;command to mount the remote file system to the mount point. In this example we mount&nbsp;hc-storage to the local&nbsp;hc-storage directory.&nbsp;</p>
    </div>
    <div>
    <pre><code>
        <p class="lead">sshfs&nbsp;&lt;username&gt;@data.pgb.liv.ac.uk:/mnt/hc-storage/users/username hc-storage</p>
    </pre></code>
    </div>
    <div>
        <p class="lead mb-5">You can alter the remote path to mount your home or hp-storage directory.&nbsp;</p>
    </div>
    <div>
    <h3 class="lead mb-5">Transferring between HC and HP storage&nbsp;</h3>
    </div>
    <div>
        <p class="lead mb-5">To transfer data between the HC and HP storage devices, you should do this locally from one of the servers, such as the DTN itself.&nbsp;Our external cluster connectivity is 1Gbps, while internally it is&nbsp;10Gbps.&nbsp;Attempting to move files remotely will cause a full download to your remote system, followed by an upload reducing you to 500Mbps.&nbsp;</p>
    </div>
    <div>
    <h3 class="lead mb-5">Sharing files&nbsp;</h3>
    </div>
    <div>
        <p class="lead mb-5">Your&nbsp;files are not&nbsp;immediately&nbsp;available to other users&nbsp;as per old PGB-NAS. You must set&nbsp;file&nbsp;permissions to allow other users to edit or read your files.&nbsp;</p>
    </div>
    <div>
        <p class="lead mb-5">If you will have a regular shared project, contact Andrew to create a shared project group for you that can then be accessed by all group members.&nbsp;</p>
    </div>
</div>
        </section>
		  
		
		<!-- What are enviroment modules
		============================ -->
        <section id="idocs_content">
          <h2>What are enviroment modules?</h2>
          <p class="lead mb-5">Environment Modules is a Linux package that allows the dynamic configuration of a user's environment through what are called "modulefiles.". This ensures dependability when multiple versions of software are installed ensuring the correct version is being used.
            Modulefiles contain the information needed to configure the shell environment for a specific software application, or to provide access to specific software tools and libraries. Typically, modulefiles instruct the module command to alter or set shell environment variables such as PATH, MANPATH and LD_LIBRARY_PATH, among others. 
            
            </p>
        </section>
		  
		
		<!-- Code
		============================ -->
		<section id="idocs_code">
		  <h2>Listing available modulefiles</h2>
      <p class="lead mb-5">To see all available modules, run module avail:</p> 
      <pre><code class="lead">$ module avail
    </code></pre>

		</section>
		
		<hr class="divider">
		
		<!-- Table
		============================ -->
		<section id="idocs_loading">
		<h2>Loading a modulefile</h2>
    <p class="lead mb-5">The environment modules that you load define part of your software environment which plays a role in determining the results of your code. For numerous reasons including scientific reproducibility, when loading an environment module you must specify the full name of the module. This can be done using module load, for example:</p> 
    <pre><code class="lead">$ module load intel/19.0/64/19.0.3.199 openmpi/intel-17.0/3.1.3/64
    </code></pre>
		</section>
		
		<hr class="divider">
		
		<!-- Icons
		============================ -->
        <section id="idocs_installed">
          <h2>List of installed programs</h2>

<p><span class="badge badge-danger text-uppercase mr-2">Note</span>Please go to the official documentation pages for a full description of each program </p>
        </section> 
        <!-- PHP Cleaning Module Avail output and writing --->   
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
        putenv('MODULEPATH=/opt/ohpc/pub/modulefiles');
        $tmp = shell_exec("/opt/ohpc/admin/lmod/lmod/libexec/lmod avail 2>&1");
        preg_match_all('/\'([a-zA-Z0-9]+\/[0-9a-zA-Z.]+)\'/', $tmp, $rawMods);
        $modules = $rawMods[1];
        natcasesort($modules);
        $list = "";
        $module_names = array();
        foreach ($modules as $module) {
          $parts = explode('/', $module);
          $formatted_module = $parts[0]; 
          
            // check if this module name has already been printed
          if (isset($module_names[$formatted_module])) {
              // if yes, skip this module version
              continue;
            }

          $list .= '<br>';
          $list .= "<p class ='lead mb-5'><a href='module.php?module=$module'>$formatted_module</a></p>";
          $module_names[$formatted_module] = true;
        }
        echo $list;
        ?>
 


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

