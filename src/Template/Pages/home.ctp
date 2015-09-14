<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Landing Page - Start Bootstrap Theme</title>

   	<?= $this->Html->css('bootstrap.min.css') ?>
	<?= $this->Html->css('font-awesome.min.css') ?>
	<?= $this->Html->css('animate.min.css') ?>
	<?= $this->Html->css('prettyPhoto.css') ?>
	<?= $this->Html->css('main.css') ?>
	<?= $this->Html->css('responsive.css') ?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>


<body class="homepage">
<div class="navfix">
    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
					<a class="navbar-brand" ><?=$this->Html->image('favicon.ico', ['alt' => 'logo'])?></a>
                     <div class="top-number"><p></i><b><font size="5">&nbsp Santen Psychology</b></font></p></div>

                     <!--<font size="7"; color="white">This is some text!</font>-->
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                <li><a <?=$this->Html->link('','http://www.facebook.com/mytherapy',['class'=>'fa fa-facebook'])?></a></li>
                                
								
                                <!--<li><a <?=$this->Html->link('','https://au.linkedin.com/',['class'=>'fa fa-linkedin'])?></a></li>--!> 
                                
                                <li><a <?=$this->Html->link('','http://www.skype.com/en/',['class'=>'fa fa-skype'])?></a></li>
								<li><a <?=$this->Html->link('','../../../Santen-Psychology/webroot/googlesearch.php',['class'=>'fa fa-search'])?></a></li>



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
                        <li class="active"><a <?=$this->Html->link('Home','/pages/home')?></a></li>
						
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
                                <li><a href="links">Links</a></li>
                                <li><a href=fees>Fee Schedule</a></li>
                            </ul>
                        </li>

                            <li><a <?=$this->Html->link('Services','/pages/services')?></a></li>
                             
                            
                        </li>
						
						
						<li><a  href="#scroll">Emergency Contacts</a></li>
						<li><a <?=$this->Html->link('Contact Us','/pages/contactus')?></a></li>  
                        <li><a <?=  $this->Html->link('Login',['controller' => 'Users', 'action' => 'login', '_full' => true]);?></a></li> 
                                              
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
		
    </header><!--/header-->
</div>
  
	<section id="first" class="service-item">
    
	        <div class="container">
            <br>
			<br>
			<div class="center wow fadeInDown"data-wow-duration="1000ms" data-wow-delay="600ms">
                <h1><font size="7"></font></h1>
                <p class="lead"></p>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				 <a><iframe width='310' height='100' src='http://ie.infotech.monash.edu.au/team04/build4/rev/webroot/images/ScrollDown.png' frameBorder="0"></iframe></a>
			</div>
			  <!--<div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
								<?=$this->Html->image('services/services1.png', ['class' => 'img-responsive'])?>
                                    <img src="images/slider/img2.png" class="img-responsive">
                                </div>
                            </div>-->
            </div>    

   <br>
			<br>
			<br>
			<br>
			<br>     
        </div><!--/.container-->
        <br>
			
    
</section>
    <section id="feature" >
        <div class="container">
           <div class="center wow fadeInDown">
		   <br>
		   <br>
		   
                <h2>Our Services</h2>
                <p class="lead">We provide an extensive cover of psychological services including, but not limited to, the following:</p>
				<a><?=$this->Html->link('Click here for more details','/pages/services')?></a>
            </div>

            <div class="row">
                <div class="features">
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-user"></i>
                            <h2>Face to Face</h2>
                            <h3>A face to face consultation, the traditional form of counselling.</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-heart"></i>
                            <h2>Couples</h2>
                            <h3>Face to face therapy sessions for couples.<br>&nbsp;</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-phone"></i>
                            <h2>Phone</h2>
                            <h3>Individual counselling conducted over the phone.<br>&nbsp;</h3>
                        </div>
                    </div><!--/.col-md-4-->
                
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-skype"></i>
                            <h2>Skype</h2>
                            <h3>Individual counselling conducted via video chat app Skype.</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-desktop"></i>
                            <h2>Internet</h2>
                            <h3>Individual counselling conducted via email.<br>&nbsp;</h3>
                        </div>
                    </div><!--/.col-md-4-->
					
					<div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-eye"></i>
                            <h2>Hypnotherapy</h2>
                            <h3>Therapy that iduces a relaxed state of mind in order to implant positive suggestions.</h3>
                        </div>
                    </div><!--/.col-md-4-->
                </div><!--/.services-->
            </div><!--/.row-->    
        </div><!--/.container-->
    </section><!--/#feature-->

    

    <section id="services" class="service-item">
	   <div class="container">
            <div class="center wow fadeInDown">
			<br>
			<br>
                <h2>Our Approach</h2>
                <p class="lead">With my extensive training and life experience I can tailor therapeutic treatment to suit the individual client, couple or program.
				<br>I can also modify, develop and tailor a program to suit any organisations needs.</p>
            </div>

            <div class="row">

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
						<?=$this->Html->image('services/services1.png', ['class' => 'img-responsive'])?>                         
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">CBT</h3>
                            <p>Cognitive Behaviour Therapy. <font color="white">This is some text!</font></p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <?=$this->Html->image('services/services2.png', ['class' => 'img-responsive'])?>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">MI</h3>
                            <p>Motivational Interviewing. <font color="white">This is some text!</font></p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <?=$this->Html->image('services/services3.png', ['class' => 'img-responsive'])?>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">IPT</h3>
                            <p>Interpersonal Therapy. <font color="white">This is some text!</font></p>
                        </div>
                    </div>
                </div>  

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <?=$this->Html->image('services/services4.png', ['class' => 'img-responsive'])?>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Narrative Therapy</h3>
                            <p>Narrative Therapy.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <?=$this->Html->image('services/services5.png', ['class' => 'img-responsive'])?>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">SFBT</h3>
                            <p>Solution Focused Brief Therapy. <font color="white">This is some text!</font></p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <?=$this->Html->image('services/services6.png', ['class' => 'img-responsive'])?>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Find out more!</h3>
                            <p>Click her for more details on my approach</p>
                        </div>
                    </div>
                </div>           			  				
            </div><!--/.row-->
			
        </div><!--/.container-->
    </section><!--/#services-->

   
<a name="scroll"></a>
    <section id="content">
	<br>
	<br>
	<br>
	<br>
	
	
        <div class="container">
		<h2>Contact us</h2>
		<div class="black"><a <?=$this->Html->link('Click here for more details','/pages/contactus')?></a></div>
		<br>
            <div class="row">
                <div class="col-xs-12 col-sm-8 wow fadeInDown">
                   <div class="tab-wrap"> 
                        <div class="media">
                            <div class="parrent pull-left">
                                <ul class="nav nav-tabs nav-stacked">
                                    <li class="active"><a href="#tab1" data-toggle="tab" class="analistic-01">Phone</a></li>
                                     <li class=""><a href="#tab2" data-toggle="tab" class="analistic-01">Fax</a></li>
                                    <li class=""><a href="#tab3" data-toggle="tab" class="analistic-02">Email</a></li>
                                    <li class=""><a href="#tab4" data-toggle="tab" class="tehnical">Address</a></li>
                                    <li class=""><a href="#tab5" data-toggle="tab" class="tehnical">Office Hours</a></li>
                                   
                                </ul>
                            </div>

                            <div class="parrent media-body">
                                <div class="tab-content">
                                    <div class="tab-pane fade active in" id="tab1">
                                        <div class="media">
                                           <div class="pull-left">
										   <?=$this->Html->image('tab1.png', ['class' => 'img-responsive'])?>                                           
                                            </div>
                                            <div class="media-body">
                                                 <h2>Telephone Number</h2>
                                                 <h3>We can be reached on this number 
												 <br><strong><font color="green">0428 766 528</font></strong> during business hours.</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab2">
                                        <div class="media">
                                           <div class="pull-left">
										   <?=$this->Html->image('tab1.png', ['class' => 'img-responsive'])?>                                           
                                            </div>
                                            <div class="media-body">
                                                 <h2>Fax Number</h2>
                                                 <h3>You can send us a fax at this number
												 <br><strong><font color="green">0395783420</font></strong> during business hours.</h3>
                                            </div>
                                        </div>
                                    </div>

                                     <div class="tab-pane fade" id="tab3">
                                        <div class="media">
                                           <div class="pull-left">
                                                <?=$this->Html->image('tab1.png', ['class' => 'img-responsive'])?>
                                            </div>
                                            <div class="media-body">
                                                 <h2>Email</h2>
                                                 <h3>We can be reached via email at 
												 <br><strong><font color="green">info@santenpsychology.com.au</font></strong> at any time but replies should only be expected during business hours.
                                                 </h3>
                                            </div>
                                        </div>
                                     </div>

                                     <div class="tab-pane fade" id="tab4">
									 <div class="media">
                                           <div class="pull-left">
                                                <?=$this->Html->image('tab1.png', ['class' => 'img-responsive'])?>
                                            </div>
                                            <div class="media-body">
                                                 <h2>Address</h2>
                                                 <h3>Santen Psychology is located at 
												 <br><strong><font color="green">435 Kooyong Rd, Elsternwick VIC 3185</font></strong>.
                                                 </h3>
                                            </div>
                                        </div>
									 </div>
                                     
                                     <div class="tab-pane fade" id="tab5">
									  <div class="media">
                                           <div class="pull-left">
                                                <?=$this->Html->image('tab1.png', ['class' => 'img-responsive'])?>
                                            </div>
                                            <div class="media-body">
                                                 <h2>Office Hours</h2>
                                                 <h3>Consultation by Appointment 
												 <br><strong><font color="green">Monday to Saturday. Day Appointments and Evenings available</font></strong>.
                                                 </h3>
                                            </div>
                                        </div>
									 </div>

                                    
                                </div> <!--/.tab-content-->  
                            </div> <!--/.media-body--> 
                        </div> <!--/.media-->     
                    </div><!--/.tab-wrap-->               
                </div><!--/.col-sm-6-->

                <div class="col-xs-12 col-sm-4 wow fadeInDown">
                    <div class="testimonial">
                       
                         <div class="media testimonial-inner">
                            <div class="pull-left">
							<h2>Emergency</h2>
                            
                            </div>
                            <div class="media-body">
                                <p>
								<br><a target="_blank" href="http://www.triplezero.gov.au/Pages/default.aspx">Emergency Services</a>: 000
								<br><a target="_blank" href="http://www.kidshelpline.com.au">Kids Helpline</a>: 1800 551 800
								<br><a target="_blank" href="http://www.lifeline.org">Lifeline</a>: 13 11 14
								<br><a target="_blank" href="http://salvos.org.au/need-help/family-and-personal-support/salvo-care-line/">Salvo Careline</a>: 1300 135 846
								<br><a target="_blank" href="http://www.suicidecallbackservice.org.au">Suicide Callback</a>: 1300 659 467
								<br><a target="_blank" href="http://www.healthdirect.gov.au/">Health Direct</a>: 1800 022 222
								<br><a target="_blank" href="http://www.health.vic.gov.au/mentalhealth/services/adult/inurbaneast-a.htm">Psychiatric Triage</a>: 1300 558 862
								<br><a target="_blank" href="http://www.bendigohealth.org.au/services.documentid.7092.aspx">Psychiatric Regional Triage</a>: 1300 363 788
								</p>
                                <span><strong></span>
                            </div>
                         </div>

                       
                         </div>

                    </div>
                </div>

            </div><!--/.row-->
                 <br><br><br>
		
		
		
		
		</div><!--/.container-->
    </section><!--/#content-->

    <section id="partner">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2><br>Accreditations</h2>
                <p class="lead"></p>
             <br><br>
			 <?=$this->Html->image('APS.png', ['alt' => 'APS'])?>
			 <?=$this->Html->image('Worksafe.png', ['alt' => 'Worksafe'])?>
			</div>    
       
        </div><!--/.container-->
    </section><!--/#partner-->

    <section id="conatcat-info">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="media contact-info wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="pull-left">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="media-body">
                            <h2>Have a question or need help?</h2>
                            <p>If you have any queries regarding Santen Psychology and the services offered please contact us on <u>0428 766 528</u> or send an email to <u>info@santenpsychology.com.au</u></p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->    
    </section><!--/#conatcat-info-->

   

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
