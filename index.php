<?php
@session_start();
// System
define( 'TTH_SYSTEM', true );

$url = isset($_GET['url']) ? $_GET['url'] : 'home';
$path = array();
$path = explode('/',$url);
if($path[0]=='en') {
	$_SESSION["language"] = 'en';
} elseif($path[0]=='vi') {
	$_SESSION["language"] = 'vi';
} else {
	$_SESSION["language"] = 'vi';
	array_unshift($path, 'vi');
}
//----------------------------------------------------------------------------------------------------------------------
require_once(str_replace( DIRECTORY_SEPARATOR, '/', dirname( __file__ ) ) . '/define.php');
require_once(ROOT_DIR . DS ."lang" . DS . TTH_LANGUAGE . ".lang");
include_once(_F_FUNCTIONS . DS . "Function.php");
try {
	$db =  new ActiveRecord(TTH_DB_HOST, TTH_DB_USER, TTH_DB_PASS, TTH_DB_NAME);
}
catch(DatabaseConnException $e) {
	echo $e->getMessage();
}
$account["id"] = empty($_SESSION["user_id"]) ? 0 : $_SESSION["user_id"]+0;
include_once(_F_INCLUDES . DS . "_tth_constants.php");
include_once(_F_INCLUDES . DS . "_tth_url.php");
include_once(_F_INCLUDES . DS . "_tth_online_daily.php");
?>
<!DOCTYPE html>
<html lang="<?php echo TTH_LANGUAGE;?>">
<head>
	<?php
	include(_F_INCLUDES . DS . "_tth_head.php");
	include(_F_INCLUDES . DS . "_tth_script.php");
	?>
</head>

<body>
<?=getConstant('script_body')?>
<!-- #wrapper -->
<div id="wrapper">
	<?php
	include(_F_INCLUDES . DS . "tth_header.php");
	include(_F_INCLUDES . DS . "tth_slider.php");
	?>
	<!-- .container -->
	<section class="container1">
		<?php
		include(_F_MODULES . DS .  str_replace('-','_',$slug_cat) . ".php");
		?>
	</section>
	<!-- / .container -->
	<?php
	include(_F_INCLUDES . DS . "tth_footer.php");
	include(_F_INCLUDES . DS . "tth_menu_sm.php");
	?>
	<!-- <a class="hotline animated tada" href="tel:<?php echo getConstant('tell_contact');?>">HOTLINE : <?php echo getConstant('tell_contact');?></a> -->
</div>
<!-- / #wrapper -->
<a href="javascript:void(0)" title="Lên đầu trang" id="go-top"></a>
 <script type="text/javascript">
	// $('#nav').onePageNav();
	
 	$('#nav').onePageNav({
 		currentClass: 'current',
		changeHash: true,
		
		scrollSpeed: 1000,
		scrollThreshold: 0.5,
		filter: ':not(.external)',
		easing: 'swing',
		begin: function() {
			// $('#').prepend('<div id="device-dummy" style="height: 100px;"></div>');
		},
		end: function() {
			// $('#device-dummy').remove();
		},
		scrollChange: function(jQuerycurrentListItem) {
			
		}
	});
</script>

<div id="_loading"></div>
<?php
echo getConstant('script_bottom');
//if($slug_cat=='home'){ require_once("popup" . DS . "popup.php");}
?>
</body>
</html>