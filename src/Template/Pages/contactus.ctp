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
                        <div class="top-number"><p><i class="fa fa-phone-square"></i>  0428 766 528</p></div>
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                <li><a <?=$this->Html->link('','http://www.facebook.com',['class'=>'fa fa-facebook'])?></a></li>
                                
								
                                <li><a <?=$this->Html->link('','https://au.linkedin.com/',['class'=>'fa fa-linkedin'])?></a></li> 
                                
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
					
                    <a class="navbar-brand" ><?=$this->Html->image('logo.png', ['alt' => 'logo'])?></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li ><a <?=$this->Html->link('Home','/pages/home')?></a></li>
                        <li><a <?=$this->Html->link('About Us','/pages/aboutus')?></a></li>
						<li><a <?=$this->Html->link('Services','/pages/services')?></a></li>
						<li><a <?=$this->Html->link('Approach','/pages/approach')?></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Documentation <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="facts">Fact sheet</a></li>
                                <li><a href="privacy">Privacy Statement</a></li>
                                <li><a href="links">Links</a></li>
                                <li><a href=fees>Fee Schedule</a></li>
                            </ul>
                        </li>
						<li class="active"><a <?=$this->Html->link('Contact','/pages/contactus')?></a></li>  
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
			<h2>Call or Email Us</h2>
            <p class="lead">If you have any queries regarding Santen Psychology and the services offered please contact us using one of the following methods</p>
        </div>
		<div class="row">
                <div class="features">
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-envelope-o"></i>
                            <h2>Email</h2>
                            <h3>info@santenpsychology<br>.com.au </h3>
                        </div>
                    </div><!--/.col-md-4-->
					
					<div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-phone"></i>
                            <h2>Phone</h2>
                            <h3>0428766528</h3>
                        </div>
                    </div><!--/.col-md-4-->
                
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-facebook"></i>
                            <h2>Facebook</h2>
                            <h3>Facebook.com/<br>SantenPsychology</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    
                         <div class="center">                
            <br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			
			<h2>How to Find Us?</h2>
            <p class="lead">Santen Psychology is located at 435 Kooyong Rd, Elsternwick VIC 3185.</p>
        </div>
		
		<div class="gmap1">
		<center><iframe width="600" height="300" src="http://regiohelden.de/google-maps/map_en.php?width=600&amp;height=300&amp;hl=en&amp;q=435%20Kooyong%20Road%2C%20%20Elsternwick%2C%20Victoria%20%20Australia%2C%203185+(Santen%20Psychology)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=A&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
		<a href="http://www.regiohelden.de/google-maps/">Google Maps Script</a> von <a href="http://www.regiohelden.de/">RegioHelden</a></iframe><br />
		<span style="font-size: 9px;">Google Maps</a>
		</span>
		</center>
		</div>

                    
                </div><!--/.services-->
            
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