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
                        <!--<div class="top-number"><p><i class="fa fa-phone-square"></i>  0428 766 528</p></div>--!>
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                <li><a <?=$this->Html->link('','http://www.facebook.com/mytherapy',['class'=>'fa fa-facebook'])?></a></li>
                                
								
                                <!--<li><a <?=$this->Html->link('','https://au.linkedin.com/',['class'=>'fa fa-linkedin'])?></a></li>--!> 
                                
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
				
							<a name="scroll"></a>
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a <?=$this->Html->link('Home','/pages/home')?></a></li>
						
						<li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="aboutus">My Story</a></li>
                                <li class="active"><a href="approach">My Approach</a></li>
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
						
						
						<li><a HREF="home#scroll">Emergency Contacts</a></li>
						<li><a <?=$this->Html->link('Contact Us','/pages/contactus')?></a></li>  
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
			<h2>Santen Psychology’s Eclectic Approach to Therapy</h2>
            <p class="lead">
			<br>
			<i><b>What is an eclectic approach?</i></b>
			<br>Psychologists are trained to deliver psychological services using a variety of therapeutic approaches.
			<br>Yvonne Santen considers her approach to be eclectic meaning that when working with a client, she draws 
			techniques from a variety of therapeutic approaches to suit the needs of the client.
			<br>
			<br>Below is a list the types of therapy that Yvonne Santen draws from:
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
                                <h2><a >Cognitive Behaviour Therapy (CBT)</a></h2>
                                <h3>Cognitive behaviour therapy is a focused approach based on the premise that cognitions influence feelings and behaviours, 
								and that subsequent behaviour and emotions can influence cognitions. The therapist helps individuals identify unhelpful thoughts, 
								emotions and behaviours. CBT has two aspects: behaviour therapy and cognitive therapy. Behaviour therapy is based on the theory 
								that behaviour is learned and therefore can be changed. Examples of behavioural techniques include exposure, activity scheduling, 
								relaxation, and behaviour modification. Cognitive therapy is based on the theory that distressing emotions and maladaptive behaviours 
								are the result of faulty patterns of thinking. Therefore, therapeutic interventions, such as cognitive restructuring and self-instructional 
								training are aimed at replacing such dysfunctional thoughts with more helpful cognitions, which leads to an alleviation of problem thoughts, 
								emotions and behaviour. Skills training (e.g., stress management, social skills training, parent training, and anger management), is another 
								important component of CBT.
								<br>
								<br>
								<a  href="#scroll">Back to top</a>
								</h3>
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
                                <h2><a >Motivational Interviewing (MI)</a></h2>
                                <h3>Often provided as an adjunct to CBT, motivational interviewing is a directive, person-centred counselling style that aims to enhance motivation 
								for change in individuals who are either ambivalent about, or reluctant to, change. The examination and resolution of ambivalence is its central purpose, 
								and discrepancies between the person’s current behaviour and their goals are highlighted as a vehicle to trigger behaviour change. Through therapy using 
								MI techniques, individuals are helped to identify their intrinsic motivation to support change. 
								<br>
								<br>
								<a  href="#scroll">Back to top</a>
								</h3>
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
                                <h2><a >Interpersonal Therapy (IPT)</a></h2>
								<h3>Interpersonal psychotherapy is a brief, structured approach that addresses interpersonal issues. The underlying assumption of IPT is that mental health 
								problems and interpersonal problems are interrelated. The goal of IPT is to help clients understand how these problems, operating in their current life situation, 
								lead them to become distressed, and put them at risk of mental health problems. Specific interpersonal problems, as conceptualised in IPT, include interpersonal 
								disputes, role transitions, grief, and interpersonal deficits. IPT explores individuals’ perceptions and expectations of relationships, and aims to improve 
								communication and interpersonal skills. 
								<br>
								<br>
								<a  href="#scroll">Back to top</a></h3>
                            </div>
                        </div>    
                    </div><!--/.blog-item-->
					
					<div class="blog-item">
                        <div class="row">
                             <div class="col-sm-2 text-center">
                                <div class="entry-meta"> 
                                   
                                </div>
                            </div>
							<a  name="approach4"></a> 
							
                            <div class="col-sm-10 blog-content wow fadeInDown"data-wow-duration="1000ms" data-wow-delay="600ms">
                                 <a ><?=$this->Html->image('blog/blog1.jpg', ['class' => 'img-responsive img-blog'])?></a>
                                <h2><a >Narrative Therapy</a></h2>
								<h3>Narrative therapy has been identified as a mode of working of particular value to Aboriginal and Torres Strait Islander people, as it builds on the story 
								telling that is a central part of their culture. Narrative therapy is based on understanding the ‘stories’ that people use to describe their lives. The therapist 
								listens to how people describe their problems as stories and helps them consider how the stories may restrict them from overcoming their present difficulties. 
								This therapy regards problems as being separate from people and assists individuals to recognise the range of skills, beliefs and abilities that they already 
								have and have successfully used (but may not recognise), and that they can apply to the problems in their lives. Narrative therapy reframes the ‘stories’ people 
								tell about their lives and puts a major emphasis on identifying people’s strengths, particularly those that they have used successfully in the past.
								<br>
								<br>
								<a  href="#scroll">Back to top</a></h3>
								</h3>
                            </div>
                        </div>    
                    </div><!--/.blog-item-->
					
					<div class="blog-item">
                        <div class="row">
                             <div class="col-sm-2 text-center">
                                <div class="entry-meta"> 
                                   
                                </div>
                            </div>
							<a  name="approach5"></a> 
							
                            <div class="col-sm-10 blog-content wow fadeInDown"data-wow-duration="1000ms" data-wow-delay="600ms">
                                 <a ><?=$this->Html->image('blog/blog1.jpg', ['class' => 'img-responsive img-blog'])?></a>
                                <h2><a >Solution Focused Brief Therapy (SFBT)</a></h2>
								<h3>Solution-focused brief therapy is a brief resource- oriented and goal-focused therapeutic approach that helps individuals change by constructing solutions. The 
								technique includes the search for pre-session change, miracle and scaling questions, and exploration of exceptions.
								<br>
								<br>
								<a  href="#scroll">Back to top</a></h3>
								</h3>
                            </div>
                        </div>    
                    </div><!--/.blog-item-->
					
					<div class="blog-item">
                        <div class="row">
                             <div class="col-sm-2 text-center">
                                <div class="entry-meta"> 
                                   
                                </div>
                            </div>
							<a  name="approach6"></a> 
							
                            <div class="col-sm-10 blog-content wow fadeInDown"data-wow-duration="1000ms" data-wow-delay="600ms">
                                 <a ><?=$this->Html->image('blog/blog1.jpg', ['class' => 'img-responsive img-blog'])?></a>
                                <h2><a >Psychodynamic Brief Therapy (PBT)</a></h2>
								<h3>Short-term psychodynamic psychotherapy is a brief, focal, transference-based therapeutic approach that helps individuals by 
								exploring and working through specific intra-psychic and interpersonal conflicts. It is characterised by the exploration of a 
								focus that can be identified by both the therapist and the individual. This consists of material from current and past interpersonal 
								and intra-psychic conflicts and interpretation in a process in which the therapist is active in creating the alliance and ensuring 
								the time-limited focus.
								<br>
								<br>
								<a  href="#scroll">Back to top</a></h3>
								</h3>
                            </div>
                        </div>    
                    </div><!--/.blog-item-->
					
					<div class="blog-item">
                        <div class="row">
                             <div class="col-sm-2 text-center">
                                <div class="entry-meta"> 
                                   
                                </div>
                            </div>
							<a  name="approach7"></a> 
							
                            <div class="col-sm-10 blog-content wow fadeInDown"data-wow-duration="1000ms" data-wow-delay="600ms">
                                 <a ><?=$this->Html->image('blog/blog1.jpg', ['class' => 'img-responsive img-blog'])?></a>
                                <h2><a >Emotion Focused Therapy</a></h2>
								<h3>Emotion-focused therapy combines a client-centred therapeutic approach with process-directive, marker- guided interventions derived 
								from experiential and gestalt therapies applied at in-session intrapsychic and/or interpersonal targets. These targets are thought to play 
								prominent roles in the development and exacerbation of disorders such as depression. The major interventions used in EFT (e.g., empty- chair 
								and two-chair dialogues, focusing on an unclear bodily-felt sense) facilitate creation of new meaning from bodily felt referents, letting go 
								of anger and hurt in relation to another person, increased acceptance and compassion for oneself, and development of a new view and understanding 
								of oneself.
								<br>
								<br>
								<a  href="#scroll">Back to top</a></h3>
								</h3>
                            </div>
                        </div>    
                    </div><!--/.blog-item-->
					
					<div class="blog-item">
                        <div class="row">
                             <div class="col-sm-2 text-center">
                                <div class="entry-meta"> 
                                   
                                </div>
                            </div>
							<a  name="approach8"></a> 
							
                            <div class="col-sm-10 blog-content wow fadeInDown"data-wow-duration="1000ms" data-wow-delay="600ms">
                                 <a ><?=$this->Html->image('blog/mindfulness.jpg', ['class' => 'img-responsive img-blog'])?></a>
                                <h2><a >Mindfulness</a></h2>
								<h3>Mindfulness is a state of active, open attention on the present. When you're mindful, you observe your thoughts and feelings from a distance, without 
								judging them good or bad. Instead of letting your life pass you by, mindfulness means living in the moment and awakening to experience.
								<br>
								<br>
								<a  href="#scroll">Back to top</a></h3>
								</h3>
                            </div>
                        </div>    
                    </div><!--/.blog-item-->
					
					<div class="blog-item">
                        <div class="row">
                             <div class="col-sm-2 text-center">
                                <div class="entry-meta"> 
                                   
                                </div>
                            </div>
							<a  name="approach9"></a> 
							
                            <div class="col-sm-10 blog-content wow fadeInDown"data-wow-duration="1000ms" data-wow-delay="600ms">
                                 <a ><?=$this->Html->image('blog/blog1.jpg', ['class' => 'img-responsive img-blog'])?></a>
                                <h2><a >Psychoeducation</a></h2>
								<h3>Psychoeducation is not a type of therapy but rather, a specific form of education. Psychoeducation involves the provision and explanation of information to clients 
								about what is widely known about characteristics of their diagnosis. Individuals often require specific information about their diagnosis, such as the meaning of specific 
								symptoms and what is known about the causes, effects, and implications of the problem. Information is also provided about medications, prognosis, and alleviating and 
								aggravating factors. Information is also provided about early signs of relapse and how they can be actively monitored and effectively managed. Individuals are helped 
								to understand their disorder to enhance their therapy and assist them to live more productive and fulfilled lives. Psychoeducation can be provided in an individual or group format.
								<br>
								<br>
								<a  href="#scroll">Back to top</a></h3>
							</h3>
                            </div>
                        </div>    
                    </div><!--/.blog-item-->
					
					<div class="blog-item">
                        <div class="row">
                             <div class="col-sm-2 text-center">
                                <div class="entry-meta"> 
                                   
                                </div>
                            </div>
							<a  name="approach10"></a> 
							
                            <div class="col-sm-10 blog-content wow fadeInDown"data-wow-duration="1000ms" data-wow-delay="600ms">
                                 <a ><?=$this->Html->image('blog/blog1.jpg', ['class' => 'img-responsive img-blog'])?></a>
                                <h2><a >Hypnotherapy</a></h2>
								<h3>The brain has different levels of consciousness or awareness ranging from fully awake to drowsy to fully asleep and variations in between.
								<br>Hypnotic states occur naturally and spontaneously for example:
								<br>•	Daydreaming
								<br>•	Being absorbed in a pleasant task and loosing track of time.
								<br>•	Doing a mundane task (such as washing the dishes) while thinking about something else, to the degree that you cant actually remember performing the task.
								<br>•	Getting lulled into a dreamy state by boredom, for example when listening to a dull speech.
								<br>Clinical hypnosis deliberately induces this kind of relaxed state of awareness.  Once the mind is in a relaxed state, any therapeutic suggestions can have great effect on attitudes, perceptions and behaviours.  
								The way this occurs isn’t fully understood.  Some researchers believe that hypnosis promotes particular brain wave activity that allows the mind to take in and adopt new ideas while others suggest that hypnosis accesses the ‘unconscious mind’, which is more open to new ideas than the rational ‘conscious mind’.
								<br>
								<br>
								<a  href="#scroll">Back to top</a></h3>
							</h3>
                            </div>
                        </div>    
                    </div><!--/.blog-item-->                  
                    
                </div><!--/.col-md-8-->

                <aside class="col-md-4">
                  
    			<div class="navitest">	
    				<div class="widget categories">
					
                        <a><h3><i class="fa fa-book"></i>  Navigation</h3></a>
             		<ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#approach1">Cognitive Behaviour Therapy (CBT)</a> 
						<a href="#approach2">Motivational Interviewing (MI)</a>
						<a href="#approach3">Interpersonal Therapy (IPT)</a>
						<a href="#approach4">Narrative Therapy</a>
						<a href="#approach5">Solution Focused Brief Therapy (SFBT)</a>
						<a href="#approach6">Psychodynamic Brief Therapy (PBT)</a> 
						<a href="#approach7">Emotion Focused Therapy</a> 
						<a href="#approach8">Mindfulness</a>
						<a href="#approach9">Psychoeducation</a>
						<a href="#approach10">Hypnotherapy</a>
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

	
</body>
</html>