<?php
if (!defined('TTH_SYSTEM')) { die('Please stop!'); }
//-------------
?>

<!-- .footer -->
<footer class="footer">
<div class="container">
	<div class="row">
	<div class="col-md-6 col-sm-6 col-xs-12 copyringt" style="padding-left: 0px;">
		<?php echo getPage('copyright');?>
	</div>
	<div class="col-md-6 col-sm-6 col-xs-12 info_web">
		<a href="<?php echo getConstant('link_facebook');?>"><img src="<?= HOME_URL ?>/images/icon_face.png"></a>
		<a href="<?php echo getConstant('link_facebook');?>"><img src="<?= HOME_URL ?>/images/icon_inc.png " style="margin-right: 15px;"></a>
		Designed and Maintained by<a title="DanaWeb.vn" href="http://danaweb.vn" target="_blank"><img alt="DanaWeb.vn" src="<?php echo HOME_URL;?>/images/ic_dana.png"></a>
	</div>
</div>
</div>
	<!-- <div class="children wow fadeInUp">&nbsp;</div> -->
</footer>
<!-- / .footer -->
