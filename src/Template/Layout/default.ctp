<?php
/*
  default.thtml design for CakePHP (http://www.cakephp.org)
  ported from http://www.oswd.org/ (open source template)
  
  The designs distributed at OSWD each carry their own seperate
  open source license which is chosen by the designer 
  when it is submitted to the site.
  
  ported by Shunro Dozono (dozono :@nospam@: gmail.com)
  2006/7/10
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>hello</title>
 
	<meta name="description" content="Studio7designs - Professional Photography and Graphic Designs, Victoria BC Canada" />
	<meta name="keywords" content="Studio7designs" />
	<meta name="author" content="Aran / Original design: Aran Down - http://www.studio7designs.com" />
          
		  
	<title>
     
    </title>
    <?= $this->Html->meta('icon') ?>
	
	
  

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

</head>

<body>






<div id="content">
	<?= $this->Flash->render() ?>

            <div class="row">
                <?= $this->fetch('content') ?>
            </div>
</div>

	
</body>
</html>
