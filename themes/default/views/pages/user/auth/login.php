<?php defined('SYSPATH') or die('No direct script access.');?>
<div class="row-fluid">
	<?=View::factory('sidebar')?>
	<div class="span10">
	
	<div class="page-header">
		<h1><?=__('Login')?></h1>
	</div>
	
	<?=View::factory('pages/user/auth/login-form')?>
	  
	</div><!--/span--> 
</div><!--/row-->