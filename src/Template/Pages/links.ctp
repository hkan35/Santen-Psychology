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
    <link href='https://fonts.googleapis.com/css?family=Bangers|Kaushan+Script|Courgette|Playball|Pinyon+Script|Tangerine|Great+Vibes|Sansita+One' rel='stylesheet' type='text/css'>

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
					<a class="navbar-brand" ><?=$this->Html->image('logoOnly98.png', ['alt' => 'logo'])?></a>
                     <div class="top-number"><p><b><font size="7">Santen Psychology</b></font></p></div>
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
                                <li><a href="facts">Fact sheet</a></li>
                                <li><a href="privacy">Privacy Statement</a></li>
                                <li class="active"><a href="links">Links</a></li>
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
			<h2>Useful Links</h2>
            <p class="lead">
					<br><a target="_blank" href="http://www.triplezero.gov.au/Pages/default.aspx"><b><u>Emergency Services:</b></u></a> 000
					<br><a target="_blank" href="https://www.sane.org/"><b><u>Sane Australia:</b></u></a> 1800 187 263
					<br><a target="_blank" href="http://www2.betterhealth.vic.gov.au"><b><u>Better Health Channel</b></u></a>
					<br><a target="_blank" href="http://www.canmentalhealth.org.au"><b><u>Community Connections:</b></u></a> 1300 135 846
					<br><a target="_blank" href="http://www.kidshelpline.com.au"><b><u>Kids Helpline:</b></u></a> 1800 551 800
					<br><a target="_blank" href="http://www.parentline.gov.au"><b><u>Parentline:</b></u></a> 13 22 89
					<br><a target="_blank" href="http://www.lifeline.org"><b><u>Lifeline:</b></u></a> 13 11 14
					<br><a target="_blank" href="http://salvos.org.au/need-help/family-and-personal-support/salvo-care-line/"><b><u>Salvo Careline:</b></u></a> 1300 135 846
					<br><a target="_blank" href="http://www.arafmiaustralia.asn.au"><b><u>Association of Relative and Friends of the Mentally Ill (ARAFMI):</b></u></a> 9457 7130
					<br><a target="_blank" href="http://www.copmi.net.au"><b><u>Children of Parents with a Mental Illness (COPMI)</b></u></a>
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
                        <ul class="social-share">
                                <li><a <?=$this->Html->link('','http://www.facebook.com/mytherapy',['class'=>'fa fa-facebook'])?></a></li>    
                                <li><a <?=$this->Html->link('','http://www.skype.com/en/',['class'=>'fa fa-skype'])?></a></li>
								<li><a <?=$this->Html->link('','../../rev/webroot/search/search.html',['class'=>'fa fa-search'])?></a></li>
                        </ul>
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