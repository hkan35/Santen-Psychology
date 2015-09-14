<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Blog Single | Corlate</title>
    
    <!-- core CSS -->
	<?= $this->Html->css('bootstrap.min.css') ?>
	<?= $this->Html->css('font-awesome.min.css') ?>
	<?= $this->Html->css('animate.min.css') ?>
	<?= $this->Html->css('prettyPhoto.css') ?>
	<?= $this->Html->css('main.css') ?>
	<?= $this->Html->css('responsive.css') ?>
    
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>

<header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                        <!--<div class="top-number"><p><i class="fa fa-phone-square"></i>  0428 766 528</p></div>--!>
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                <li><a <?=$this->Html->link('','http://www.facebook.com/mytherapy',['class'=>'fa fa-facebook'])?></a></li>
                                
								
                                <!--<li><a <?=$this->Html->link('','https://au.linkedin.com/',['class'=>'fa fa-linkedin'])?></a></li> --!>
                                
                                <li><a <?=$this->Html->link('','http://www.skype.com/en/',['class'=>'fa fa-skype'])?></a></li>
								<li><a <?=$this->Html->link('','http://www.google.com.au',['class'=>'fa fa-search'])?></a></li>
                            </ul>
                      
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                   <!--<a class="navbar-brand" ><?=$this->Html->image('logo.png', ['alt' => 'logo'])?></a>--!>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a <?=$this->Html->link('Home','/pages/home')?></a></li>
						
						<li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="aboutus">My Story</a></li>
                                <li><a href="approach">My Approach</a></li>
                            </ul>
                        </li>
						
						<li><a <?=$this->Html->link('New Client','/pages/newclient')?></a></li>
					
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Documentation <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li class="active"><a href="facts">Fact sheet</a></li>
                                <li><a href="privacy">Privacy Statement</a></li>
                                <li><a href="links">Links</a></li>
                                <li><a href=fees>Fee Schedule</a></li>
                            </ul>
                        </li>

                            <li><a <?=$this->Html->link('Services','/pages/services')?></a></li>
                             
                            
                        </li>
						
						
						<li><a HREF="home#scroll">Emergency Contacts</a></li>
						<li><a <?=$this->Html->link('Contact Us','/pages/contactus')?></a></li>  
                        <li><a <?=  $this->Html->link('Login',['controller' => 'Users', 'action' => 'login', '_full' => true]);?></a></li> 
                                              
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
		
    </header><!--/header-->

    <section id="contact-info">
  
		

        <div class="gmap-area">
            <div class="container">
                <div class="row">
				
			 <div class="center">                
            <br>
			<h2>Useful Fact Sheets</h2>
            <p class="lead">Below are some ueful fact sheets, click on any topic to download the relevant fact sheet</p>
			<p class="lead">
			<a target="_blank" href="http://ie.infotech.monash.edu.au/team04/build4/dev/3/webroot/docs/factsheets/Antenatal_Depression.pdf "download>Antenatal_Depression</a>
			<br><a target="_blank" href="http://ie.infotech.monash.edu.au/team04/build4/dev/3/webroot/docs/factsheets/Anti-depressants.pdf "download>Anti-depressants</a>
			<br><a target="_blank" href="http://ie.infotech.monash.edu.au/team04/build4/dev/3/webroot/docs/factsheets/Antipsychotic Medications.pdf "download>Antipsychotic Medications</a>
			<br><a target="_blank" href="http://ie.infotech.monash.edu.au/team04/build4/dev/3/webroot/docs/factsheets/Anxiety.pdf "download>Anxiety</a>
			<br><a target="_blank" href="http://ie.infotech.monash.edu.au/team04/build4/dev/3/webroot/docs/factsheets/Bipolar Disorder.pdf "download>Bipolar Disorder</a>
			<br><a target="_blank" href="http://ie.infotech.monash.edu.au/team04/build4/dev/3/webroot/docs/factsheets/Borderline Personality Disorder.pdf "download>Borderline Personality Disorder</a>
			<br><a target="_blank" href="http://ie.infotech.monash.edu.au/team04/build4/dev/3/webroot/docs/factsheets/Depression.pdf "download>Depression</a>
			<br><a target="_blank" href="http://ie.infotech.monash.edu.au/team04/build4/dev/3/webroot/docs/factsheets/Eating Disorders.pdf "download>Eating Disorders</a>
			<br><a target="_blank" href="http://ie.infotech.monash.edu.au/team04/build4/dev/3/webroot/docs/factsheets/ECT.pdf "download>ECT</a>
			<br><a target="_blank" href="http://ie.infotech.monash.edu.au/team04/build4/dev/3/webroot/docs/factsheets/Evidence-Based-Psychological-Interventions.pdf "download>Evidence-Based-Psychological-Interventions</a>
			<br><a target="_blank" href="http://ie.infotech.monash.edu.au/team04/build4/dev/3/webroot/docs/factsheets/Families and Mental Illness.pdf "download>Families and Mental Illness</a>
			<br><a target="_blank" href="http://ie.infotech.monash.edu.au/team04/build4/dev/3/webroot/docs/factsheets/Grief Supports.pdf "download>Grief Supports</a>
			<br><a target="_blank" href="http://ie.infotech.monash.edu.au/team04/build4/dev/3/webroot/docs/factsheets/Healthy Living.pdf "download>Healthy Living</a>
			<br><a target="_blank" href="http://ie.infotech.monash.edu.au/team04/build4/dev/3/webroot/docs/factsheets/medicare_consumer_fact_sheet.pdf "download>medicare_consumer_fact_sheet</a>
			<br><a target="_blank" href="http://ie.infotech.monash.edu.au/team04/build4/dev/3/webroot/docs/factsheets/Mental Illness and Bereavement.pdf "download>Mental Illness and Bereavement</a>
			<br><a target="_blank" href="http://ie.infotech.monash.edu.au/team04/build4/dev/3/webroot/docs/factsheets/Mental illness and Canabis.pdf "download>Mental illness and Canabis</a>
			<br><a target="_blank" href="http://ie.infotech.monash.edu.au/team04/build4/dev/3/webroot/docs/factsheets/Mental Illness and Complementary Therapy.pdf "download>Mental Illness and Complementary Therapy</a>
			<br><a target="_blank" href="http://ie.infotech.monash.edu.au/team04/build4/dev/3/webroot/docs/factsheets/Mental Illness and diabetes.pdf "download>Mental Illness and diabetes</a>
			<br><a target="_blank" href="http://ie.infotech.monash.edu.au/team04/build4/dev/3/webroot/docs/factsheets/Mental Illness and Drugs.pdf "download>Mental Illness and Drugs</a>
			<br><a target="_blank" href="http://ie.infotech.monash.edu.au/team04/build4/dev/3/webroot/docs/factsheets/Mental illness and loss.pdf "download>Mental illness and loss</a>
			<br><a target="_blank" href="http://ie.infotech.monash.edu.au/team04/build4/dev/3/webroot/docs/factsheets/Mental illness and Physical Health.pdf "download>Mental illness and Physical Health</a>
			<br><a target="_blank" href="http://ie.infotech.monash.edu.au/team04/build4/dev/3/webroot/docs/factsheets/Mental Illness and Recovery.pdf "download>Mental Illness and Recovery</a>
			<br><a target="_blank" href="http://ie.infotech.monash.edu.au/team04/build4/dev/3/webroot/docs/factsheets/Mental Illness and Self Care.pdf "download>Mental Illness and Self Care</a>
			<br><a target="_blank" href="http://ie.infotech.monash.edu.au/team04/build4/dev/3/webroot/docs/factsheets/Mental Illness and Smoking.pdf "download>Mental Illness and Smoking</a>
			<br><a target="_blank" href="http://ie.infotech.monash.edu.au/team04/build4/dev/3/webroot/docs/factsheets/Mental Illness and Spinal Injury.pdf "download>Mental Illness and Spinal Injury</a>
			<br><a target="_blank" href="http://ie.infotech.monash.edu.au/team04/build4/dev/3/webroot/docs/factsheets/Mental Illness and Sucide.pdf "download>Mental Illness and Sucide</a>
			<br><a target="_blank" href="http://ie.infotech.monash.edu.au/team04/build4/dev/3/webroot/docs/factsheets/Mental Illness and Trauma.pdf "download>Mental Illness and Trauma</a>
			<br><a target="_blank" href="http://ie.infotech.monash.edu.au/team04/build4/dev/3/webroot/docs/factsheets/Mental Illness and Violence.pdf "download>Mental Illness and Violence</a>
			<br><a target="_blank" href="http://ie.infotech.monash.edu.au/team04/build4/dev/3/webroot/docs/factsheets/Mental Illness and Work.pdf "download>Mental Illness and Work</a>
			<br><a target="_blank" href="http://ie.infotech.monash.edu.au/team04/build4/dev/3/webroot/docs/factsheets/Mental Illness Facts and Figures.pdf "download>Mental Illness Facts and Figures</a>
			<br><a target="_blank" href="http://ie.infotech.monash.edu.au/team04/build4/dev/3/webroot/docs/factsheets/Myths and Mental Illness.pdf "download>Myths and Mental Illness</a>
			<br><a target="_blank" href="http://ie.infotech.monash.edu.au/team04/build4/dev/3/webroot/docs/factsheets/OCD.pdf "download>OCD</a>
			<br><a target="_blank" href="http://ie.infotech.monash.edu.au/team04/build4/dev/3/webroot/docs/factsheets/Panic_attack.pdf "download>Panic_attack</a>
			<br><a target="_blank" href="http://ie.infotech.monash.edu.au/team04/build4/dev/3/webroot/docs/factsheets/PostNatalDepression_FAcopy.pdf "download>PostNatalDepression_FAcopy</a>
			<br><a target="_blank" href="http://ie.infotech.monash.edu.au/team04/build4/dev/3/webroot/docs/factsheets/Posttraumatic Stress.pdf "download>Posttraumatic Stress</a>
			<br><a target="_blank" href="http://ie.infotech.monash.edu.au/team04/build4/dev/3/webroot/docs/factsheets/privacy-fact-sheet-17-australian-privacy-principles_2.pdf "download>privacy-fact-sheet-17-australian-privacy-principles_2</a>
			<br><a target="_blank" href="http://ie.infotech.monash.edu.au/team04/build4/dev/3/webroot/docs/factsheets/Psychological Treatments.pdf "download>Psychological Treatments</a>
			<br><a target="_blank" href="http://ie.infotech.monash.edu.au/team04/build4/dev/3/webroot/docs/factsheets/Psychosis.pdf "download>Psychosis</a>
			<br><a target="_blank" href="http://ie.infotech.monash.edu.au/team04/build4/dev/3/webroot/docs/factsheets/RecoveringfromPND.pdf "download>RecoveringfromPND</a>
			<br><a target="_blank" href="http://ie.infotech.monash.edu.au/team04/build4/dev/3/webroot/docs/factsheets/Schizophenia.pdf "download>Schizophenia</a>
			<br><a target="_blank" href="http://ie.infotech.monash.edu.au/team04/build4/dev/3/webroot/docs/factsheets/Somethings Not Quite Right info.pdf "download>Somethings Not Quite Right info</a>
			<br><a target="_blank" href="http://ie.infotech.monash.edu.au/team04/build4/dev/3/webroot/docs/factsheets/Somethings Not Quite Right.pdf "download>Somethings Not Quite Right</a>
			<br><a target="_blank" href="http://ie.infotech.monash.edu.au/team04/build4/dev/3/webroot/docs/factsheets/Treatments for Mental Illness.pdf "download>Treatments for Mental Illness</a>
			<br><a target="_blank" href="http://ie.infotech.monash.edu.au/team04/build4/dev/3/webroot/docs/factsheets/When Sadness Wont Go Away.pdf "download>When Sadness Wont Go Away</a>
			<br><a target="_blank" href="http://ie.infotech.monash.edu.au/team04/build4/dev/3/webroot/docs/factsheets/WomenPostNatalDepression_FAcopy.pdf "download>WomenPostNatalDepression_FAcopy</a>
			</p>
        </div>
    </section>  <!--/gmap_area -->

    

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2015 Santen Psychology. &nbsp;&nbsp;&nbsp;&nbsp; ABN: 89 005 900 103
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li ><a <?=$this->Html->link('Home','/pages/home')?></a></li>
                        <li><a <?=$this->Html->link('About Us','/pages/aboutus')?></a></li>
                        <li><a <?=$this->Html->link('Contact Us','/pages/contactus')?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

	<?= $this->Html->script('jquery')?>
	<?= $this->Html->script('bootstrap.min')?>
	<?= $this->Html->script('jquery.prettyPhoto')?>
	<?= $this->Html->script('jquery.isotope.min')?>
	<?= $this->Html->script('main')?>
	<?= $this->Html->script('wow.min')?>
</body>
</html>