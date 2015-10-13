<html>
<head>

<?= $this->Html->css('bootstrap.css') ?>
<?= $this->Html->css('font-awesome.css') ?>
<?= $this->Html->css('style.css') ?>


</head>
<body>
<div class="navfix">
    <header id="header">


        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                  
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                  
                        
						<li class="dropdown" >
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Appointments <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li ><a <?=$this->Html->link('Home','/appointments/index')?></a></li>
                                <li><a <?=$this->Html->link('Add new appointment','/appointments/add')?></a></li>
                                <li ><a <?=$this->Html->link('Manage appointment types','/appointmenttypes/index')?></a></li>
                             	<li><a <?=$this->Html->link('Add new appointment types','/appointmenttypes/add')?></a></li>
                            </ul>
                        </li>
						
					<li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Invoices <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a <?=$this->Html->link('Home','/invoices/index')?></a></li>
                                <li><a <?=$this->Html->link('Add new invoice','/invoices/add')?></a></li>
                             	<li ><a <?=$this->Html->link('Manage payment','/payments/index')?></a></li>
                             	<li><a <?=$this->Html->link('Add new payment','/payments/add')?></a></li>
                             	<li><a <?=$this->Html->link('Manage payment types','/paymenttypes/index')?></a></li>
                             	<li><a <?=$this->Html->link('Add new payment types','/paymenttypes/add')?></a></li>
                            </ul>
                        </li>
						
						<li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><strong>Users</strong> <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a <?=$this->Html->link('Home','/users/index')?></a></li>
                                <li><a <?=$this->Html->link('Add new user','/users/add')?></a></li>
                                <li class="active"><a <?=$this->Html->link('Manage clinic','/clinics/index')?></a></li>
                                <li><a <?=$this->Html->link('Add new clinic','/clinics/add')?></a></li>
                                <li><a <?=$this->Html->link('Manage referrer','/referrers/index')?></a></li>
                                <li><a <?=$this->Html->link('Add new referrer','/referrers/add')?></a></li>
                             
                            </ul>
                        </li>
						
						<li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Reports <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a <?=$this->Html->link('Home','/reports/index')?></a></li>
                                <li><a <?=$this->Html->link('Add new report','/reports/add')?></a></li>
								<li><a <?=$this->Html->link('Manage report types','/reporttypes/index')?></a></li>
                             	<li><a <?=$this->Html->link('Add new report types','/reporttypes/add')?></a></li>
                            </ul>
                        </li>
						
						
						
						<li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Notes <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a <?=$this->Html->link('Home','/notes/index')?></a></li>
                                <li><a <?=$this->Html->link('Add new note','/notes/add')?></a></li>
                             
                            </ul>
                        </li>
						 
                        <li><a <?=  $this->Html->link('Logout',['controller' => 'Users', 'action' => 'logout', '_full' => true]);?></a></li> 
                                              
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
		
    </header><!--/header-->
</div>



<br>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
<div class="container">
	<div class="row">
		
        
        <div class="col-md-12">
        <h4>Clinics</h4>
        <div class="table-responsive">

                
              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>
                   
                   <th><?= $this->Paginator->sort('id') ?></th>
                   <th><?= $this->Paginator->sort('clinic_name') ?></th>
                    <th><?= $this->Paginator->sort('clinic_phone') ?></th>
                     <th><?= $this->Paginator->sort('clinic_email') ?></th>
                     <th><?= $this->Paginator->sort('clinic_address') ?></th>
                     
                      <th><?= 'Action' ?></th>
				
                      
                     
                   </thead>
    <tbody>
    <?php foreach ($clinics as $clinic): ?>
    
	<tr>
    <td><?= $this->Number->format($clinic->id) ?></td>
    <td><?= h($clinic->clinic_name) ?></td>
    <td><?= h($clinic->clinic_phone) ?></td>
    <td><?= h($clinic->clinic_email) ?></td>
    <td><?= h($clinic->clinic_address) ?></td>
    
	
	<td>
	<?= $this->Html->link(
    '',
    ['action' => 'view', $clinic->id],
	['class' => 'btn btn-primary btn-xs glyphicon glyphicon-list-alt']
)?>
	
	<?= $this->Html->link(
    '',
    ['action' => 'edit', $clinic->id],
	['class' => 'btn btn-primary btn-xs glyphicon glyphicon-pencil']
)?>
	
	<?= $this->Form->postLink(
    '',
    ['action' => 'delete', $clinic->id],
	['class' => 'btn btn-primary btn-xs glyphicon glyphicon-trash','confirm' => __('Are you sure you want to delete # {0}?', $clinic->id)]
)?>
	</td>
    
	</tr>
     <?php endforeach; ?>
    
   
    
    </tbody>
        
</table>


 <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
                
            </div>
            
        </div>
	</div>
</div>

</body>
</html>