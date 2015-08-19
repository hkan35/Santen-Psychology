<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Santen Psychology Approach</title>
    
    <!-- core CSS -->
	<?= $this->Html->css('bootstrap.min.css') ?>
	<?= $this->Html->css('font-awesome.min.css') ?>
	<?= $this->Html->css('animate.min.css') ?>
	<?= $this->Html->css('prettyPhoto.css') ?>
	<?= $this->Html->css('main.css') ?>
	<?= $this->Html->css('responsive.css') ?>
    
	<?= $this->Html->script('jquery')?>
	<?= $this->Html->script('bootstrap.min')?>
	<?= $this->Html->script('jquery.prettyPhoto')?>
	<?= $this->Html->script('jquery.isotope.min')?>
	<?= $this->Html->script('main')?>
	<?= $this->Html->script('wow.min')?>
	<?= $this->Html->script('html5shiv.min')?>
	<?= $this->Html->script('respond.min.min')?>
    <!--[if lt IE 9]>

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
                    <a class="navbar-brand"><?=$this->Html->image('logo.png', ['alt' => 'logo'])?></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li ><a <?=$this->Html->link('Home','/pages/home')?></a></li>
                        <li><a <?=$this->Html->link('About Us','/pages/aboutus')?></a></li>
						<li><a <?=$this->Html->link('Services','/pages/services')?></a></li>
						<li class="active"><a <?=$this->Html->link('Approach','/pages/approach')?></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Documentation <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="facts">Fact sheet</a></li>
                                <li><a href="privacy">Privacy Statement</a></li>
                                <li><a href="links">Links</a></li>
                                <li><a href=fees>Fee Schedule</a></li>
                            </ul>
                        </li>
						<li><a <?=$this->Html->link('Contact','/pages/contactus')?></a></li>  
                        <li><a <?=  $this->Html->link('Login',['controller' => 'Users', 'action' => 'login', '_full' => true]);?></a></li> 
                                              
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
		
    </header><!--/header-->
    <section id="blog" class="container">
        <div class="center">
            <br>
			<br>
			<br>
			<h2>Our Approach</h2>
            <p class="lead">With my extensive training and life experience I can tailor therapeutic treatment to suit the individual client, couple or program.
				<br>We can also modify, develop and tailor a program to suit any organisations needs.</p>
            </p>
        </div>

        <div class="blog">
            <div class="row">
                 <div class="col-md-8">
                    <div class="blog-item">
                        <div class="row">
                            <div class="col-xs-12 col-sm-2 text-center">
                                <div class="entry-meta">
                              
                                </div>
                            </div>
                            <a  name="approach1"></a>   
                            <div class="col-xs-12 col-sm-10 blog-content wow fadeInDown"data-wow-duration="1000ms" data-wow-delay="600ms">
							
                                <a ><?=$this->Html->image('blog/blog1.jpg', ['class' => 'img-responsive img-blog'])?></a>
                                <h2><a >Brief Psychodynamic Therapy</a></h2>
                                <h3>Psychodynamic therapy, focuses on unconscious processes as they are manifested in a person's present behavior. The goals of psychodynamic therapy are a client's self-awareness and understanding of the influence of the past on present behavior.</h3>
                            </div>    
                           
                        </div>    
                    </div><!--/.blog-item-->
                        
                    <div class="blog-item">
                        <div class="row">
                             <div class="col-sm-2 text-center">
                                <div class="entry-meta"> 
                                   
                                </div>
                            </div>
							<a  name="approach2"></a> 
							
                            <div class="col-sm-10 blog-content wow fadeInDown"data-wow-duration="1000ms" data-wow-delay="600ms">
                                 <a ><?=$this->Html->image('blog/blog2.jpg', ['class' => 'img-responsive img-blog'])?></a>
                                <h2><a >Cognitive Behaviour Therapy</a></h2>
                                <h3>Cognitive behaviour therapy (CBT) is a type of psychotherapy that helps people to change unhelpful or unhealthy thinking habits, feelings and behaviours.</h3>
                                
                            </div>
                        </div>    
                    </div><!--/.blog-item-->
					
					<div class="blog-item">
                        <div class="row">
                             <div class="col-sm-2 text-center">
                                <div class="entry-meta"> 
                                   
                                </div>
                            </div>
							<a  name="approach3"></a> 
							
                            <div class="col-sm-10 blog-content wow fadeInDown"data-wow-duration="1000ms" data-wow-delay="600ms">
                                 <a ><?=$this->Html->image('blog/blog1.jpg', ['class' => 'img-responsive img-blog'])?></a>
                                <h2><a >Interpersonal Psychotherapy</a></h2>
                                <h3>Interpersonal psychotherapy (IPT) is a time-limited treatment that encourages the patient to regain control of mood and functioning.</h3>
                                
                            </div>
                        </div>    
                    </div><!--/.blog-item-->
                        
                    
                </div><!--/.col-md-8-->

                <aside class="col-md-4">
                  
    			<div class="navitest">	
    				<div class="widget categories">
					
                        <a><h3><i class="fa fa-book"></i>  Approach navigation</h3></a>
             		<ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#approach1">Brief Psychodynamic Therapy</a> 
						<a href="#approach2">Cognitive Behaviour Therapy</a> 
						<a href="#approach3">Interpersonal Psychotherapy</a>
                    </li>
					<li>
					<a href="#approach1">Approach 1</a> 
						<a href="#approach2">Approach 2</a> 
						<a href="#approach3">Approach 3</a>
					</li>
					</ul>         
                    </div><!--/.recent comments-->
				</div>                       
	
    			</aside>  
            </div><!--/.row-->
        </div>
    </section><!--/#blog-->

     <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2015 <a>Santen Psychology</a>. All Rights Reserved.
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

	
</body>
</html>