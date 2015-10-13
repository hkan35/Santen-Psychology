<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
   	<?= $this->Html->css('bootstrap.min.css') ?>
	<?= $this->Html->css('font-awesome.min.css') ?>
	<?= $this->Html->css('animate.min.css') ?>
	<?= $this->Html->css('prettyPhoto.css') ?>
	<?= $this->Html->css('main.css') ?>
	<?= $this->Html->css('responsive.css') ?>

</head>
<body>
  
	   <div class="container">

      		   
		   			<div class="clients-area center wow fadeInDown">
                <h2>Admin Panel</h2></a>
                <p class="lead">Click below</p>
            </div>
            

            <div class="row">
                <div class="col-md-4 wow fadeInDown">
                    <div class="clients-comments text-center">
                        <?=$this->Html->image('user.png', ['class' => 'img-circle','url' => ['controller' => 'Users', 'action' => 'index']])?>
                        <h2>User</h2>
                        <h4></h4>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInDown">
                    <div class="clients-comments text-center">
                        <?=$this->Html->image('appointment.png', ['class' => 'img-circle','url' => ['controller' => 'Appointments', 'action' => 'index']])?>
                        <h2>Appointment</h2>
                        <h4></h4>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInDown">
                    <div class="clients-comments text-center">
                        <?=$this->Html->image('appointmenttype.png', ['class' => 'img-circle','url' => ['controller' => 'Invoices', 'action' => 'index']])?>
                        <h2>Invoices</h2>
                        <h4></h4>
                    </div>
                </div>
				  <div class="col-md-4 wow fadeInDown">
                    <div class="clients-comments text-center">
                        <?=$this->Html->image('report.png', ['class' => 'img-circle','url' => ['controller' => 'reports', 'action' => 'index']])?>
                        <h2>Report</h2>
                        <h4></h4>
                    </div>
                </div>
				  <div class="col-md-4 wow fadeInDown">
                    <div class="clients-comments text-center">
                        <?=$this->Html->image('note.png', ['class' => 'img-circle','url' => ['controller' => 'notes', 'action' => 'index']])?>
                        <h2>Note</h2>
                        <h4></h4>
                    </div>
                </div>
           </div>

        </div><!--/.container-->
 
</body>
   

</html>
