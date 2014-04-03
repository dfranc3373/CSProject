<?php /* Smarty version Smarty-3.1.12, created on 2014-04-03 01:45:25
         compiled from "/var/www/database/smarty/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2858739635331f57e0ae424-38957050%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8cde557d5e912fb75c8522f60a6240eb3dbcf94b' => 
    array (
      0 => '/var/www/database/smarty/templates/index.tpl',
      1 => 1396503924,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2858739635331f57e0ae424-38957050',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5331f57e0c3306_33397564',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5331f57e0c3306_33397564')) {function content_5331f57e0c3306_33397564($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div align="center" style="color: rgb(255, 255, 255); background: url(&quot;http://today.ttu.edu/wp-content/gallery/tulips-in-bloom-2013/tulips-amdin-horiz2-2013.jpg&quot;) repeat fixed center 0px transparent;">

<button type="button" class="btn btn-default disabled" style="margin-top: 100px; opacity: .89;">

<div style="text-shadow: 4px 0 10px #000000, 0 -1px 0 #000000;">

	<h1 style="font-size: 50px;">Texas Tech - Computer Science System</h1>
	
	<h2>Please Sign In</h2></div>
	
	</button>
	
		<div align="center" style="margin-top: 80px;" class="container">
	
	      <form method="POST" action="login.php" class="form-signin">
	        <input type="text" name="username" style="max-width: 200px;" autofocus="" placeholder="Username" class="form-control">
	        <input type="password" name="password" style="max-width: 200px;" placeholder="Password" class="form-control">
	        <button style="max-width: 200px; margin-top: 10px;" type="submit" class="btn btn-lg btn-primary btn-block">Sign in</button>
	        
	       </form>
	      
	    </div>

</div>

<button align="center" type="button" class="btn btn-warning btn-lg btn-block"><h1>Project for Database Class</h1>

<div align="center" style="font-size: 19px;">Noah Metzger</div>
<div align="center" style="font-size: 19px;">Brian Fairbanks</div>
<div align="center" style="font-size: 19px;">Derrick Franco</div>

</button><?php }} ?>