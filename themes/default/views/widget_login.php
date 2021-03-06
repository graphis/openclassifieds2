<?php defined('SYSPATH') or die('No direct script access.');?>
<?if (Auth::instance()->logged_in()):?>
<a class="btn btn-success"
	href="<?=Route::url('user',array('controller'=>'profile','action'=>'index'))?>">
	<i class="icon-user icon-white"></i> <?=Auth::instance()->get_user()->email?>
</a>
<a class="btn dropdown-toggle btn-success" data-toggle="dropdown"
	href="#"> <span class="caret"></span>
</a>
<ul class="dropdown-menu">
	<?if (Auth::instance()->get_user()->role == Model_User::ROLE_ADMIN):?>
	<li><a	href="<?=Route::url('user',array('directory'=>'admin','controller'=>'home','action'=>'index'))?>"><i
			class="icon-cog"></i> <?=__('Admin')?></a></li>
	<?endif;?>
	<li><a	href="<?=Route::url('user',array('controller'=>'profile','action'=>'edit'))?>"><i
			class="icon-edit"></i> <?=__('Edit profile')?></a></li>
	<li><a	href="<?=Route::url('user',array('controller'=>'profile','action'=>'changepass'))?>"><i
			class="icon-lock"></i> <?=__('Change Password')?></a></li>
	<li class="divider"></li>
	<li><a
		href="<?=Route::url('user',array('directory'=>'user','controller'=>'auth','action'=>'logout'))?>">
			<i class="icon-off"></i> <?=__('Logout')?>
	</a>
	</li>
</ul>

<?else:?>
<a class="btn" data-toggle="modal" title="<?=__('Login')?>"
	href="<?=Route::url('user',array('directory'=>'user','controller'=>'auth','action'=>'login'))?>#login-modal">
	<i class="icon-user"></i> <?=__('Login')?>
</a>
<?endif?>