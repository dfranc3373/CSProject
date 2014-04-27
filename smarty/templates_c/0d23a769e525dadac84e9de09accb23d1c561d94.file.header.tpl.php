<?php /* Smarty version Smarty-3.1.12, created on 2014-04-27 21:38:25
         compiled from "D:\Program Files (x86)\EasyPHP-DevServer-14.1VC11\data\localweb\CSProject\smarty\templates\home\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28932535d5cb1c86300-47601980%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d23a769e525dadac84e9de09accb23d1c561d94' => 
    array (
      0 => 'D:\\Program Files (x86)\\EasyPHP-DevServer-14.1VC11\\data\\localweb\\CSProject\\smarty\\templates\\home\\header.tpl',
      1 => 1398625849,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28932535d5cb1c86300-47601980',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'file' => 0,
    'nav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_535d5cb1ce0099_56640882',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535d5cb1ce0099_56640882')) {function content_535d5cb1ce0099_56640882($_smarty_tpl) {?><html itemscope itemtype="http://schema.org/app">
<head>

<!-- Add the following three tags inside head. -->
<meta itemprop="name" content="Texas Tech Project">
<meta itemprop="description" content="">
<meta itemprop="image" content="<?php echo $_smarty_tpl->tpl_vars['file']->value;?>
images/banner.png">
	<script src="<?php echo $_smarty_tpl->tpl_vars['file']->value;?>
jquery-1.9.1.js" type="text/javascript"></script>
	<!-- Bootstrap core CSS -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['file']->value;?>
bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="bootstrap/js/html5shiv.js"></script>
      <script src="bootstrap/js/respond.min.js"></script>
    <![endif]-->
    
    <script src="https://json-sans-eval.googlecode.com/files/json-minified.js"></script>
    
<meta name="description" content="">
<title>Texas Tech Computer Science System</title>

</head>

<body style="margin-bottom: 10px;">

<div class="navbar navbar-default" style="margin-bottom: 0px;">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['nav']->value;?>
index.php" style="margin-left: 40px;">Texas Tech Computer Science System</a>
  </div>
  <div class="navbar-collapse collapse navbar-responsive-collapse">
    <ul class="nav navbar-nav">
      <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value;?>
index.php">Home</a></li>
      <li><a href="#">Add Instructor</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </div>
</div><?php }} ?>