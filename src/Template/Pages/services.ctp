<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Services | Corlate</title>
    
 
    
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
                                <li><a href="facts">Fact sheet</a></li>
                                <li><a href="privacy">Privacy Statement</a></li>
                                <li><a href="links">Links</a></li>
                                <li><a href=fees>Fee Schedule</a></li>
                            </ul>
                        </li>

                            <li class="active"><a <?=$this->Html->link('Services','/pages/services')?></a></li>
                             
                            
                        </li>
						
						
						<li><a HREF="home#scroll">Emergency Contacts</a></li>
						<li><a <?=$this->Html->link('Contact Us','/pages/contactus')?></a></li>  
                        <li><a <?=  $this->Html->link('Login',['controller' => 'Users', 'action' => 'login', '_full' => true]);?></a></li> 
                                              
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
		
    </header><!--/header-->

    <section id="feature" class="transparent-bg">
        <div class="container">
		
		


 
			
           <div class="center wow fadeInDown">
		   <br>
		   <br>
                <h2>Services Offered</h2>
                <p class="lead">We provide an extensive cover of psychological services including, but not limited to, the following:</p>
            </div>

            <div class="row">
                <div class="features">
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-info"></i>
                            <h2>Face to Face</h2>
                            <h3>A face to face consultation, the traditional form of counselling.</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-heart"></i>
                            <h2>Couple</h2>
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

			
						<div class="get-started center wow fadeInDown">
                <h2>Client Types</h2>
				<br>
				<font size="100"><i class="fa fa-user"></i></font>
				
				<p class="lead">We can cater programs to individual adults of all ages, from young to old.</p>
				<br>
				<font size="100"><i class="fa fa-users"></i></font>
                <p class="lead">We can also cater to couples and groups including married couples and organisations seeking group therapy programs</p>
           
            </div><!--/.get-started-->
			
			
			
			
			
			<div class="clients-area center wow fadeInDown">
                <h2>Services Provided</h2>
                <p class="lead">We provide an extensive cover of psychological services including, but not limited to, the following:</p>
            </div>
            

            <div class="row">
                <div class="col-md-4 wow fadeInDown">
                    <div class="clients-comments text-center">
					<?=$this->Html->image('client1.png', ['class' => 'img-circle'])?>
                        
                        <h3>Anxiety and Phobias</h3>
                        <h4></h4>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInDown">
                    <div class="clients-comments text-center">
                        <?=$this->Html->image('client2.png', ['class' => 'img-circle'])?>
                        <h3>Bipolar Disorder</h3>
                        <h4></h4>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInDown">
                    <div class="clients-comments text-center">
                        <?=$this->Html->image('client3.png', ['class' => 'img-circle'])?>
                        <h3>Bullying</h3>
                        <h4></h4>
                    </div>
                </div>
           </div>
		   
		   <div class="row">
                <div class="col-md-4 wow fadeInDown">
                    <div class="clients-comments text-center">
					<?=$this->Html->image('client1.png', ['class' => 'img-circle'])?>
                        
                        <h3>Chronic Disease Management</h3>
                        <h4></h4>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInDown">
                    <div class="clients-comments text-center">
                        <?=$this->Html->image('client2.png', ['class' => 'img-circle'])?>
                        <h3>Carer Support</h3>
                        <h4></h4>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInDown">
                    <div class="clients-comments text-center">
                        <?=$this->Html->image('client3.png', ['class' => 'img-circle'])?>
                        <h3>Depression</h3>
                        <h4></h4>
                    </div>
                </div>
           </div>
		   
		   <div class="row">
                <div class="col-md-4 wow fadeInDown">
                    <div class="clients-comments text-center">
					<?=$this->Html->image('client1.png', ['class' => 'img-circle'])?>
                        
                        <h3>Domestic Viloence</h3>
                        <h4></h4>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInDown">
                    <div class="clients-comments text-center">
                        <?=$this->Html->image('client2.png', ['class' => 'img-circle'])?>
                        <h3>Divorce/Separation</h3>
                        <h4></h4>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInDown">
                    <div class="clients-comments text-center">
                        <?=$this->Html->image('client3.png', ['class' => 'img-circle'])?>
                        <h3>Grief & Loss</h3>
                        <h4></h4>
                    </div>
                </div>
           </div>
		   
		   <div class="row">
                <div class="col-md-4 wow fadeInDown">
                    <div class="clients-comments text-center">
					<?=$this->Html->image('client1.png', ['class' => 'img-circle'])?>
                        
                        <h3>Gambling</h3>
                        <h4></h4>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInDown">
                    <div class="clients-comments text-center">
                        <?=$this->Html->image('client2.png', ['class' => 'img-circle'])?>
                        <h3>Impulsive Behaviours</h3>
                        <h4></h4>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInDown">
                    <div class="clients-comments text-center">
                        <?=$this->Html->image('client3.png', ['class' => 'img-circle'])?>
                        <h3>Mental Illness</h3>
                        <h4></h4>
                    </div>
                </div>
           </div>
		   
		   <div class="row">
                <div class="col-md-4 wow fadeInDown">
                    <div class="clients-comments text-center">
					<?=$this->Html->image('client1.png', ['class' => 'img-circle'])?>
                        
                        <h3>Post-natal Depression</h3>
                        <h4></h4>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInDown">
                    <div class="clients-comments text-center">
                        <?=$this->Html->image('client2.png', ['class' => 'img-circle'])?>
                        <h3>Parenting</h3>
                        <h4></h4>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInDown">
                    <div class="clients-comments text-center">
                        <?=$this->Html->image('client3.png', ['class' => 'img-circle'])?>
                        <h3>Physical Disability</h3>
                        <h4></h4>
                    </div>
                </div>
           </div>
		   
		   <div class="row">
                <div class="col-md-4 wow fadeInDown">
                    <div class="clients-comments text-center">
					<?=$this->Html->image('client1.png', ['class' => 'img-circle'])?>
                        
                        <h3>Relationships</h3>
                        <h4></h4>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInDown">
                    <div class="clients-comments text-center">
                        <?=$this->Html->image('client2.png', ['class' => 'img-circle'])?>
                        <h3>Smoking Cessation</h3>
                        <h4></h4>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInDown">
                    <div class="clients-comments text-center">
                        <?=$this->Html->image('client3.png', ['class' => 'img-circle'])?>
                        <h3>Stress Management</h3>
                        <h4></h4>
                    </div>
                </div>
           </div>
		   
		   <div class="row">
                <div class="col-md-4 wow fadeInDown">
                    <div class="clients-comments text-center">
					<?=$this->Html->image('client1.png', ['class' => 'img-circle'])?>
                        
                        <h3>Work Stress</h3>
                        <h4></h4>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInDown">
                    <div class="clients-comments text-center">
                        <?=$this->Html->image('client2.png', ['class' => 'img-circle'])?>
                        <h3>Workplace Bullying</h3>
                        <h4></h4>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInDown">
                    <div class="clients-comments text-center">
                        <?=$this->Html->image('client3.png', ['class' => 'img-circle'])?>
                        <h3>Non-directive Pregnancy Counselling</h3>
                        <h4></h4>
                    </div>
                </div>
           </div>
		   
		   			<div class="clients-area center wow fadeInDown">
                <h2>Organisation/Corporate Services </h2>
                <p class="lead">I have extensive experience having written and run a variety of group programs tailored to the individual needs of the client or businesses including:</p>
            </div>
            

            <div class="row">
                <div class="col-md-4 wow fadeInDown">
                    <div class="clients-comments text-center">
                        <?=$this->Html->image('smoking.png', ['class' => 'img-circle'])?>
                        <h3>Smoking Cessation</h3>
                        <h4></h4>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInDown">
                    <div class="clients-comments text-center">
                        <?=$this->Html->image('mens.png', ['class' => 'img-circle'])?>
                        <h3>Mens Behaviour Change Programs</h3>
                        <h4></h4>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInDown">
                    <div class="clients-comments text-center">
                        <?=$this->Html->image('parents.png', ['class' => 'img-circle'])?>
                        <h3>Parenting Program</h3>
                        <h4></h4>
                    </div>
                </div>
           </div>

        </div><!--/.container-->
    </section><!--/#feature-->



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