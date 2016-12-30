<!DOCTYPE html>
  <html>
    <head>  
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
      <title>Portfolio</title>

       <!-- CSS  -->      
      <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
      <!-- Font Awesome -->
      <link href="css/font-awesome.css" rel="stylesheet">
      <!-- Skill Progress Bar -->
      <link href="css/pro-bars.css" rel="stylesheet" type="text/css" media="all" />
      <!-- Owl Carousel -->
      <link rel="stylesheet" href="css/owl.carousel.css">
      <!-- Default Theme CSS File-->
      <link id="switcher" href="css/themes/default-theme.css" type="text/css" rel="stylesheet" media="screen,projection"/>     
      <!-- Main css File -->
      <link href="style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

      <!-- Font -->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 <script src="js/tagcanvas.min.js" type="text/javascript"></script>
    <script type="text/javascript">
      window.onload = function() {
        try {
          TagCanvas.Start('myCanvas','tags',{
            textColour: '#ff0000',
            outlineColour: '#ff00ff',
            reverse: true,
            depth: 0.8,
            maxSpeed: 0.03
          });
        } catch(e) {
          // something went wrong, hide the canvas container
          document.getElementById('myCanvasContainer').style.display = 'none';
        }
      };
    </script>
    </head>

    <body>
      <!-- BEGAIN PRELOADER -->         
      <div id="preloader">        
        <div class="progress">
          <div class="indeterminate"></div>
        </div>        
      </div>
      <!-- END PRELOADER -->
      <header id="header" role="banner">
        <div class="navbar-fixed">
          <nav>
            <div class="container">
              <div class="nav-wrapper">

                <!-- LOGO -->

                <!-- TEXT BASED LOGO -->
                <a href="index.html" class="brand-logo">Harshavardhan Mahale</a>

                <!-- Image Based Logo -->                
                 <!-- <a href="index.html" class="brand-logo"><img src="img/logo.jpeg" alt="logo img"></a>  -->
                <ul class="right hide-on-med-and-down custom-nav menu-scroll">
                  <li><a href="#about">About Me</a></li>
                  <li><a href="#resume">Skills</a></li>
                  <li><a href="#portfolio">Projects</a></li>
                  
                  <li><a href="#footer">Contact</a></li>
                </ul>
                <!-- For Mobile View -->
                <ul id="slide-out" class="side-nav menu-scroll">
                  <li><a href="#about">About Me</a></li>
                  <li><a href="#resume">Skills</a></li>
                  <li><a href="#portfolio">Projects</a></li>
               
                  <li><a href="#footer">Contact</a></li>
                </ul>
                <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
              </div>
            </div>
          </nav>
        </div>  
      </header>
      <div class="main-wrapper">
        <main role="main">
          <!-- START HOME SECTION -->
          <section id="home">
            <div class="overlay-section">
              <div class="container">
                <div class="row">
                  <div class="col s12">
                    <div class="home-inner">
                      <h1 class="home-title"><span>Harshavardhan Mahale</span></h1>
                      <p>I am a Computer Application Development(co-op) student studying at Conestoga College. I have 2+ years of professional experience building web and mobile applications(iOS).</p>
                     
                      <!-- Call to About Button -->
                                     
                    </div>
                  </div>  
                </div>
              </div>
            </div>
          </section>

          <!-- START ABOUT SECTION -->
          <section id="about">
            <div class="container">
              <div class="row">
                <div class="col s12">
                  <div class="about-inner">
                    <div class="row">
                      <div class="col s12 m4 l3">
                        <div class="about-inner-left">
                          <img class="profile-img" src="img/profile1.png" alt="Profile Image">
                        </div>
                      </div>
                      <div class="col s12 m8 l9">
                        <div class="about-inner-right">
                          <h3>About Me</h3>
                          <p>I am a passionate iOS developer. I have strong expertise on Core Data, persistence and networking and other iOS concepts. 
	  I have developed three Cocoa applications till now and has been developing software and exploring iOS concepts and frameworks.
	  I have worked in more environments. I am currently available for short to medium term development contracts, code reviews and workshops.
	 .I contribute regularly to local iOS and Cocoaheads user groups and conferences sharing. You can find catch me at harsha.mahale732@gmail.com</p>
                          <div class="personal-information col s12 m12 l6">
                            <h3>Personal Information</h3>
                            <ul>
                              <li><span>Name : </span>Harshavardhan Mahale</li>
                              <li><span>Phone : </span>+1226-978-9416</li>
                              <li><span>Email : </span>harsha.mahale732@gmail.com</li>
                              <li><span>Blog URL : </span>https://iosmobileblog.wordpress.com/</li>
                              
                            </ul>
                          </div>
                          <!--<div class="resume-download col s12 m12 l6">
                            <a href="#" class="waves-effect waves-light btn-large resume-btn"><i class="mdi-content-archive left"></i> Download Resume</a>
                          </div>-->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Start Resume -->
          <section id="resume">
            <!-- Start Skill -->
            <section id="skill">
              <div class="container">
                <div class="skill-inner">
                  <h2 class="title">Skills</h2>
                  <p></p>
  
                  <!-- Start skills progress bar -->
    <div id="myCanvasContainer">
      <canvas width="300" height="300" id="myCanvas">
        <p>Anything in here will be replaced on browsers that support the canvas element</p>
      </canvas>
    </div>
    <div id="tags">
     <ul>
   <li><a href="http://mindfsck.net" target="_blank"><img src="http://mindfsck.net/wp-content/themes/K-BOOM-V.1.0.6/library/images/skills/wp.png" width="176" height="145">Wordpress</a></li>
   <li><a href="http://mindfsck.net"><img src="http://mindfsck.net/wp-content/themes/K-BOOM-V.1.0.6/library/images/skills/php.png" width="100" height="70">PHP</a></li>
   <li><a href="http://mindfsck.net"><img src="http://mindfsck.net/wp-content/themes/K-BOOM-V.1.0.6/library/images/skills/mysql.png" width="120" height="62">MySQL</a></li>
   <li><a href="http://mindfsck.net"><img src="http://mindfsck.net/wp-content/themes/K-BOOM-V.1.0.6/library/images/skills/git.png" width="160" height="67">GIT</a></li>
   <li><a href="http://mindfsck.net"><img src="http://mindfsck.net/wp-content/themes/K-BOOM-V.1.0.6/library/images/skills/html5.png" width="80" height="80">html5</a></li>
   <li><a href="http://mindfsck.net"><img src="http://mindfsck.net/wp-content/themes/K-BOOM-V.1.0.6/library/images/skills/aws.png" width="160" height="59">Amazon web services</a></li>
   <li><a href="http://mindfsck.net"><img src="http://mindfsck.net/wp-content/themes/K-BOOM-V.1.0.6/library/images/skills/android.png" width="80" height="74">Android development</a></li>
   <li><a href="http://mindfsck.net"><img src="http://mindfsck.net/wp-content/themes/K-BOOM-V.1.0.6/library/images/skills/java.png" width="70" height="128">JAVA</a></li>
   <li><a href="http://mindfsck.net"><img src="http://mindfsck.net/wp-content/themes/K-BOOM-V.1.0.6/library/images/skills/apache.png" width="120" height="107">http apache</a></li>
   <li><a href="http://mindfsck.net"><img src="http://mindfsck.net/wp-content/themes/K-BOOM-V.1.0.6/library/images/skills/net.png" width="180" height="77">.net</a></li>
   <li><a href="http://mindfsck.net"><img src="http://mindfsck.net/wp-content/themes/K-BOOM-V.1.0.6/library/images/skills/netbeans.png" width="115" height="50">Netbeans</a></li>
   <li><a href="http://mindfsck.net"><img src="http://mindfsck.net/wp-content/themes/K-BOOM-V.1.0.6/library/images/skills/ios.png" width="153" height="55">Google golang</a></li>
 
  </ul>
    </div>
                    <div style="margin-left: 35%;margin-top:-30%;">
                    <ol style="font-weight: bold;list-style-type: disc;margin-right:50%">
                        <li>iOS</li>
                         <li>Android</li>
                         <li>PHP/Apache</li>
                         <li>MySQL , SQL Server</li>
                         <li>Netbeans</li>
                         <li>C#/MVC</li>
                         <li>JAVA</li>
                         <li>HTML/HTML5</li>
                         <li>CSS/CSS3</li>
                         <li>Javascript/Jquery/AnjularJS/NodeJS/MeteorJS</li>
                         <li>Amazon Web Server</li>
                         <li>Git</li>
                         <li>BitBucket</li>   
                        <li>Ethereum Dapps</li>
                        </ol> 
</div>
                  <!--<div class="skill-progress-bar">
                    <span>Html5</span>
                    <div class="pro-bar-container color-wisteria">
                      <div class="pro-bar bar-100 color-amethyst" data-pro-bar-percent="100"></div>
                    </div>
                    <span>css</span>
                    <div class="pro-bar-container color-wisteria">
                      <div class="pro-bar bar-90 color-amethyst" data-pro-bar-percent="90" data-pro-bar-delay="100"></div>
                    </div>
                    <span>Photoshop</span>
                    <div class="pro-bar-container color-wisteria">
                      <div class="pro-bar bar-80 color-amethyst" data-pro-bar-percent="80" data-pro-bar-delay="200"></div>
                    </div>
                    <span>Illustrator</span>
                    <div class="pro-bar-container color-wisteria">
                      <div class="pro-bar bar-70 color-amethyst" data-pro-bar-percent="70" data-pro-bar-delay="300"></div>
                    </div>
                    <span>Wordpress</span>
                    <div class="pro-bar-container color-wisteria">
                      <div class="pro-bar bar-60 color-amethyst" data-pro-bar-percent="60" data-pro-bar-delay="400"></div>
                    </div>
                    <span>jQuery</span>
                    <div class="pro-bar-container color-wisteria">
                      <div class="pro-bar bar-50 color-amethyst" data-pro-bar-percent="50" data-pro-bar-delay="500"></div>
                    </div>
                  </div>-->
                </div>
              </div>
            </section>
            <!-- Start Experience -->
            <section id="experience">
              <div class="container">
                <div class="experience-inner">
                  <h2 class="title">Experience</h2>
                  <p>Having around 2+ years of experience in software industry. Strong hands on experience in iOS native applications Xcode 6 and above all version of iOS, Localization, JSON and XML parsing in objective C, HTML, CSS, Apple Map, Push and Local notifications, Device integration, OAuth Integration. Have a sound knowledge about the Swift. Worked on Web application using C# MVC. Sound Knowledge of Object Oriented analysis, design and programming. Good knowledge in creation of Database Queries using Joins and Stored Procedures.
</p>
                  <div id="owl-carousel" class="experience-slider row">
                   
                    <!-- Start Single Experience -->
                    <div class="col s12">
                      <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                        <h2 class="experience-title"><b>June 2014 - Present</b></h2>
                          <img class="activator" src="img/Apple-logo-text.png">
                        </div>
                        <div class="card-content">
                          <span class="card-title activator reveal-title">iOS Developer<i class="fa fa-info-circle" aria-hidden="true" style="float: right;margin-top: 50px;"></i></span>
                          <p><a href="#">iPhone/iPad</a></p>
                        </div>
                        <div class="card-reveal">
                          <span class="card-title reveal-title">iOS Developer<i class="fa fa-times" aria-hidden="true" style="float: right;"></i></span>
                          <a href="#" class="card-subtitle">iPhone/iPad</a>
                          <p>Strong hands on experience in iOS native applications Xcode 6 and above all version of iOS, Localization, JSON and XML parsing in objective C, Swift, Apple Map, Push and Local notifications, Device integration, OAuth Integration.</p>
                        </div>
                      </div>
                    </div>

                    <!-- Start Single Experience -->

                    <div class="col s12">
                      <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                        <h2 class="experience-title"><b>July 2013 - June 2014</b></h2>
                          <img class="activator" src="img/dotnetlogo.png">
                        </div>
                        <div class="card-content">
                          <span class="card-title activator reveal-title">C#.NET Developer<i class="fa fa-info-circle" aria-hidden="true" style="float: right;margin-top: 50px;"></i></span>
                          <p><a href="#">Web Application</a></p>
                        </div>
                        <div class="card-reveal">
                          <span class="card-title reveal-title">C#.NET Developer<i class="fa fa-times" aria-hidden="true" style="float: right;"></i></span>
                          <a href="#" class="card-subtitle">Web Application</a>
                          <p>Experience in analysis, design and development of client/server, web based and n-tier application. Expert in developing windows applications, web applications, windows services and web services in Microsoft Visual Studio .Net IDE using C#.Net, VB.NET,ASP.NET, ADO.NET and SQL Server.</p>
                        </div>
                      </div>
                    </div>
                    <!-- Start Single Experience -->
                    <div class="col s12">
                      <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                        <h2 class="experience-title"><b>July 2013 - June 2014</b></h2>
                          <img class="activator" src="img/database-cloud-logo-370x290.jpg">
                        </div>
                        <div class="card-content">
                          <span class="card-title activator reveal-title">Database Developer<i class="fa fa-info-circle" aria-hidden="true" style="float: right;margin-top: 50px;"></i></span>
                          <p><a href="#">Database Developer</a></p>
                        </div>
                        <div class="card-reveal">
                          <span class="card-title reveal-title">Database Developer<i class="fa fa-times" aria-hidden="true" style="float: right;"></i></span>
                          <a href="#" class="card-subtitle">Database Administrator</a>
                          <p>Good knowledge and experience in handling and creation of Database Queries using Joins and Stored Procedures.</p>
                        </div>
                      </div>
                    </div>
                    <!-- Start Single Experience -->
                    <div class="col s12">
                      <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                        <h2 class="experience-title"><b>June 2011 - June 2013 </b></h2>
                          <img class="activator" src="img/shot_1297090327.png">
                        </div>
                        <div class="card-content">
                          <span class="card-title activator reveal-title">UI/UX Developer<i class="fa fa-info-circle" aria-hidden="true" style="float: right;margin-top: 50px;"></i></span>
                          <p><a href="#">Web Application</a></p>
                        </div>
                        <div class="card-reveal">
                          <span class="card-title reveal-title">UI/UX Developer<i class="fa fa-times" aria-hidden="true" style="float: right;"></i></span>
                          <a href="#" class="card-subtitle">Web Application</a>
                          <p>Extensive experience as web developer with a strong background working on open source technologies, including HTML/HTML5, CSS/CSS3, Twitter Bootstrap, JavaScript, JQuery, AngularJS, Nodejs, MeteorJS ,ReactJS, ExpressJS, MongoDB, AJAX, JSON, GIT & Photoshop. </p>
                        </div>
                      </div>
                    </div>
                    <!-- Start Single Experience -->
                  <!--  <div class="col s12">
                      <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                        <h2 class="experience-title"><b>3D Model Generation</b></h2>
                          <img class="activator" src="img/2gy5P.png">
                        </div>
                        <div class="card-content">
                          <span class="card-title activator reveal-title">C# .NET Developer<i class="material-icons right">more_vert</i></span>
                          <p><a href="#">Gaming Application</a></p>
                        </div>
                        <div class="card-reveal">
                          <span class="card-title reveal-title">3D Model Generation<i class="material-icons right">close</i></span>
                          <a href="#" class="card-subtitle">Gaming Application</a>
                          <p>The main objective of the project was to generate the 3D model of given set of objects using Kinect (camera). When Kinect is moved around an object the system generates its live 3D model without any holes in it. This creates an effect similar to image super resolution  – adding greater detail than appears visible in the raw signal , the reconstructions are high-quality, particularly given the noisy input data and speed of reconstruction. The reconstructed model can also be texture mapped using the Kinect RGB camera.</p>
                        </div>
                      </div>
                    </div> -->
                    <!-- Start Single Experience -->
                    <!-- <div class="col s12">
                      <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                        <h2 class="experience-title"><b>Mobile Shop Management</b></h2>
                          <img class="activator" src="img/mobile-shop-management-software-500x500.jpg">
                        </div>
                        <div class="card-content">
                          <span class="card-title activator reveal-title">Java Developer<i class="material-icons right">more_vert</i></span>
                          <p><a href="#">Desktop Application</a></p>
                        </div>
                        <div class="card-reveal">
                          <span class="card-title reveal-title">Mobile Shop Management<i class="material-icons right">close</i></span>
                          <a href="#" class="card-subtitle">Desktop Application</a>
                          <p>This project will provide for computerization of a small enterprise whose main goal is to keep track on their inventory and billing process and wants to change from paper based transaction to computerized transaction.The mobile store management will make storing of the stock records, employee records, purchase information, and customer information a lot easier. The supplier and sales information in the database will automatically generate bills when the customer buys the mobile. The bill history can be retrieved promptly. And reports will be generated based on different criteria’s.</p>
                        </div>
                      </div>
                    </div>-->
                    <!-- Start Single Experience -->
                    <!-- <div class="col s12">
                      <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                        <h2 class="experience-title"><b>Multiplex Management</b></h2>
                          <img class="activator" src="img/movie-theater-set-up-cineplex-miniplex-multiplex-500x500.jpg">
                        </div>
                        <div class="card-content">
                          <span class="card-title activator reveal-title">VB Developer<i class="material-icons right">more_vert</i></span>
                          <p><a href="#">Desktop Application</a></p>
                        </div>
                        <div class="card-reveal">
                          <span class="card-title reveal-title">Multiplex Management<i class="material-icons right">close</i></span>
                          <a href="#" class="card-subtitle">Desktop Application</a>
                          <p>Our project basically manages the ticket booking process of a multiplex, providing an interface to the user to book movie tickets in a more easy way. At the front end we have used VB and at the back end Oracle server. The project proceeds through a sequence of well-designed forms provided with validations to ensure consistency, reliability and most importantly correctness of information fed into the database.</p>
                        </div>
                      </div>
                    </div> -->
                    <!-- Start Single Experience -->
                      
                      
                  </div>
                  <!-- owl navigation -->
                  <div class="customNavigation">
                  <!--  <a class="btn prev btn-floating waves-effect waves-light btn-large white"><i class="mdi-navigation-chevron-left brand-text"></i></a>
                    <a class="btn next btn-floating waves-effect waves-light btn-large white"><i class="mdi-navigation-chevron-right brand-text"></i></a>-->                    
                  </div>
                </div>
              </div>
            </section>
            <!-- Start Education -->
          </section>
          <!-- Start Portfolio -->
          <section id="portfolio">
	            <div class="portfolio-top">
	              <div class="container">
	                <div class="portfolio-top-inner">
	                   <h2 class="title">Projects</h2>
	              </div>
	            </div>
	            </div>
	            <div class="portfolio-bottom">
	              	<div class="container">
	                	<div class="portfolio-bottom-inner">
		                  	<div id="portfolio-list">                    
			                    <div class="mix">
				                    <a href="#" class="portfolio-thumbnill">
				                        <img src="img/unnamed.png" alt="img">
				                        <i class="material-icons view-icon"><i class="fa fa-eye" aria-hidden="true"></i></i>
			                      	</a>
			                     	<div class="portfolio-detail">
					                    <a href="#" class="modal-close-btn"><span class="fa fa-times"></span></a>
					                    <img src="img/unnamed.png" alt="img">
					                    <h2>myBlueKC</h2>
                                         <h5>Role : iOS Developer</h5>
					                    <p>This application supports all the iPhones/iPads. This application is about the user health records and also contains health assessment of user. This application also contains and Sweepstakes integration. This6also helps the user to earn points after completing health actions.Link: https://itunes.apple.com/us/app/mybluekc/id1097228670?mt=8</p>
					                   <!-- <a href="#" class="view-project-btn">Live Demo</a>-->
					                </div>
			                    </div>
			                    <div class="mix">
				                    <a href="#" class="portfolio-thumbnill">
				                        <img src="img/healthmine-logo.png" alt="img">
				                        <i class="material-icons view-icon"><i class="fa fa-eye" aria-hidden="true"></i></i>           
				                    </a>
				                    <div class="portfolio-detail">
					                    <a href="#" class="modal-close-btn"><span class="fa fa-times"></span></a>
					                    <img src="img/healthmine-logo.png" alt="img">
					                    <h2>myHealthMine</h2>
                                        <h5>Role : iOS Developer</h5>
					                    <p>	This application supports the core data. This application is about the user health records and also contains user day-to-day activity. This application also contains the oAuth integration. This also helps the user to complete the health survey.
Link: https://itunes.apple.com/us/app/myhealthmine/id1040236426?mt=8</p>
					                  <!--  <a href="#" class="view-project-btn">Live Demo</a>-->
					                </div>
			                    </div>
			                    <div class="mix">
				                    <a href="#" class="portfolio-thumbnill">
				                        <img src="img/healthmine-business-card-02-680x408.png" alt="img">
				                        <i class="material-icons view-icon"><i class="fa fa-eye" aria-hidden="true"></i></i>
				                    </a>
				                    <div class="portfolio-detail">
					                    <a href="#" class="modal-close-btn"><span class="fa fa-times"></span></a>
					                    <img src="img/healthmine-business-card-02-680x408.png" alt="img">
					                    <h2>myWellnessTech</h2>
                                        <h5>Role : iOS Developer</h5>
					                    <p>This application contains the user health related information which                                      contains the user health records and which contains user day-to-day activity. This application also contains Fitbit integration and oAuth integration. This application allow user to store the prefer story as per his choice. Major task with this application is working with the collection view and card layout.
            Link: https://itunes.apple.com/us/app/mywellnesstech/id962520026?ls=1&mt=8</p>
					                   <!-- <a href="#" class="view-project-btn">Live Demo</a>-->
					                </div>
			                    </div>
			                    <div class="mix">
				                    <a href="#" class="portfolio-thumbnill">
				                        <img src="img/ehr_training_1.jpg" alt="img">
				                        <i class="material-icons view-icon"><i class="fa fa-eye" aria-hidden="true"></i></i>
				                    </a>
				                    <div class="portfolio-detail">
					                    <a href="#" class="modal-close-btn"><span class="fa fa-times"></span></a>
					                    <img src="img/ehr_training_1.jpg" alt="img">
					                    <h2>EHR</h2>
                                        <h5>Role : C#.NET Developer</h5>
					                    <p>An Electronic Health Record (EHR) is an electronic version of a patients medical history, that is maintained by the provider over time, and may include all of the key administrative clinical data relevant to that persons care under a particular provider, including demographics, progress notes, problems, medications, vital signs, past medical history, immunizations, laboratory data and radiology reports   The EHR automates access to information and has the potential to streamline the clinician's workflow.  The EHR also has the ability to support other care-related activities directly or indirectly through various interfaces, including evidence-based decision support, quality management, and outcomes reporting.</p>
					                   <!-- <a href="#" class="view-project-btn">Live Demo</a>-->
					                </div>
			                    </div>
			                    <div class="mix">
				                    <a href="#" class="portfolio-thumbnill">
				                        <img src="img/2gy5P.png" alt="img">
				                        <i class="material-icons view-icon"><i class="fa fa-eye" aria-hidden="true"></i></i>
				                    </a>
				                    <div class="portfolio-detail">
					                    <a href="#" class="modal-close-btn"><span class="fa fa-times"></span></a>
					                     <img src="img/2gy5P.png" alt="img">
					                    <h2>3D Model Generation</h2>
                                        <h5>Role : C#.NET Developer</h5>
					                    <p>The main objective of the project was to generate the 3D model of given set of objects using Kinect (camera). When Kinect is moved around an object the system generates its live 3D model without any holes in it. This creates an effect similar to image super resolution  – adding greater detail than appears visible in the raw signal , the reconstructions are high-quality, particularly given the noisy input data and speed of reconstruction. The reconstructed model can also be texture mapped using the Kinect RGB camera.</p>
					                   <!-- <a href="#" class="view-project-btn">Live Demo</a>-->
					                </div>
			                    </div>
			                    <div class="mix">
				                    <a href="#" class="portfolio-thumbnill">
				                        <img src="img/mobile-shop-management-software-500x500.jpg" alt="img">
				                        <i class="material-icons view-icon"><i class="fa fa-eye" aria-hidden="true"></i></i>
				                    </a>
				                    <div class="portfolio-detail">
					                    <a href="#" class="modal-close-btn"><span class="fa fa-times"></span></a>
					                    <img src="img/mobile-shop-management-software-500x500.jpg" alt="img">
					                    <h2>Mobile Shop Management</h2>
                                        <h5>Role : Java Developer</h5>
					                    <p>This project will provide for computerization of a small enterprise whose main goal is to keep track on their inventory and billing process and wants to change from paper based transaction to computerized transaction.The mobile store management will make storing of the stock records, employee records, purchase information, and customer information a lot easier. The supplier and sales information in the database will automatically generate bills when the customer buys the mobile. The bill history can be retrieved promptly. And reports will be generated based on different criteria’s.</p>
					                   <!-- <a href="#" class="view-project-btn">Live Demo</a>-->
					                </div>
			                    </div>
			                    <div class="mix">
				                    <a href="#" class="portfolio-thumbnill">
				                        <img src="img/movie-theater-set-up-cineplex-miniplex-multiplex-500x500.jpg" alt="img">
				                        <i class="material-icons view-icon"><i class="fa fa-eye" aria-hidden="true"></i></i>
				                    </a>
				                    <div class="portfolio-detail">
					                    <a href="#" class="modal-close-btn"><span class="fa fa-times"></span></a>
					                    <img src="img/movie-theater-set-up-cineplex-miniplex-multiplex-500x500.jpg" alt="img">
					                    <h2>Multiplex Management System</h2>
                                        <h5>Role : VB.NET Developer</h5>
					                    <p>Our project basically manages the ticket booking process of a multiplex, providing an interface to the user to book movie tickets in a more easy way. At the front end we have used VB and at the back end Oracle server. The project proceeds through a sequence of well-designed forms provided with validations to ensure consistency, reliability and most importantly correctness of information fed into the database.</p>
					                    <!--<a href="#" class="view-project-btn">Live Demo</a>-->
					                </div>
			                    </div>
			                   <!-- <div class="mix">
				                    <a href="#" class="portfolio-thumbnill">
				                        <img src="img/portfolio/fashion/fashion-3.jpg" alt="img">
				                        <i class="material-icons view-icon">pageview</i>
				                    </a>
				                    <div class="portfolio-detail">
					                    <a href="#" class="modal-close-btn"><span class="fa fa-times"></span></a>
					                    <img src="img/portfolio/fashion/fashion-3.jpg" alt="img">
					                    <h2>Portfolio Item </h2>
					                    <p>	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					                    <a href="#" class="view-project-btn">Live Demo</a>
					                </div>
			                    </div>
			                    <div class="mix">
				                    <a href="#" class="portfolio-thumbnill">
				                        <img src="img/portfolio/design/design-3.jpg" alt="img">
				                        <i class="material-icons view-icon">pageview</i>
				                    </a>
				                    <div class="portfolio-detail">
					                    <a href="#" class="modal-close-btn"><span class="fa fa-times"></span></a>
					                    <img src="img/portfolio/design/design-3.jpg" alt="img">
					                    <h2>Portfolio Item </h2>
					                    <p>	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					                    <a href="#" class="view-project-btn">Live Demo</a>
					                </div>
			                    </div>-->
		                  	</div>
		                </div>
					</div>
	            </div>
          </section>
          <!-- Start Facts -->
        <!-- Testimonial -->
       
          <!-- Start Blog -->
            <!-- Start Footer -->
          <footer id="footer" role="contentinfo">
            <!-- Start Footer Top -->
            <div class="footer-top">
              <div class="container">
                <div class="row">
                  <div class="col s12">
                    <div class="footer-top-inner">
                      <h2 class="title">Contact</h2>
                      <p>Got a project you would like me to work on? Or how about just a friendly chat? Give me an email and we can grab a lovely brew.</p>
                      <div class="contact">
                        <div class="row">
                          <div class="col s12 m6 l6">
                            <div class="contact-form">
                              <form>
                                <div class="input-field">
                                  <input type="text" class="input-box" name="contactName" id="contact-name">
                                  <label class="input-label" for="contact-name">Name</label>
                                </div>
                                <div class="input-field">
                                  <input type="email" class="input-box" name="contactEmail" id="email">
                                  <label class="input-label" for="email">Email</label>
                                </div>
                                <div class="input-field">
                                  <input type="text" class="input-box" name="contactSubject" id="subject">
                                  <label class="input-label" for="subject">Subject</label>
                                </div>
                                <div class="input-field textarea-input">
                                  <textarea class="materialize-textarea" name="contactMessage" id="textarea1"></textarea>
                                  <label class="input-label" for="textarea1">Message</label>
                                </div>
                                <button class="left waves-effect btn-flat brand-text submit-btn" type="submit">send message</button>
                              </form>
                            </div>
                          </div>
                          <div class="col s12 m6 l6">
                            <div class="contact-map">
                              <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3281.297314036103!2d-86.74954699999999!3d34.672444999999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88626565a94cdb25%3A0x74c206053b6a97c9!2s305+Intergraph+Way%2C+Madison%2C+AL+35758%2C+USA!5e0!3m2!1sen!2sbd!4v1431591462160" width="100%" height="100%" frameborder="0" style="border:0"></iframe>-->
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2897.91486316068!2d-80.45638568484274!3d43.420605479129925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b8ad2a7e24c9d%3A0x4ef2068b86ac7d31!2s341+Traynor+Ave+%23225%2C+Kitchener%2C+ON+N2C+2H4!5e0!3m2!1sen!2sca!4v1482954123775" width="100%" height="100%" frameborder="0" style="border:0"></iframe>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Start Footer Bottom -->
            <div class="footer-bottom">
              <div class="container">
                <div class="row">
                  <div class="col s12">
                    <div class="footer-inner">
                      <!-- Bottom to Up Btn -->
                      <button class="btn-floating btn-large up-btn"><i class="mdi-navigation-expand-less"></i></button>
                     <p class="design-info">Designed By <a href="http://www.markups.io/">Harshavardhan Mahale</a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </footer>
        </main>
      </div>
      <!-- jQuery Library -->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <!-- Materialize js -->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <!-- Skill Progress Bar -->
      <script src="js/appear.min.js" type="text/javascript"></script>
      <script src="js/pro-bars.min.js" type="text/javascript"></script>
      <!-- Owl slider -->      
      <script src="js/owl.carousel.min.js"></script>    
      <!-- counter -->
      <script src="js/waypoints.min.js"></script>
      <script src="js/jquery.counterup.min.js"></script>     

      <!-- Custom Js -->
      <script src="js/custom.js"></script>      
    </body>
  </html>