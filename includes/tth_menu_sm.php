<?php
if (!defined('TTH_SYSTEM')) { die('Please stop!'); }

$stringObj = new String();

?>
<nav id="menu">
	<ul id="nav">
		<?php
		$db->table = "category";
		$db->condition = "`is_active` = 1 and `menu_main` = 1";
		$db->order = "`sort_hide` ASC";
		$db->limit = "";
		$rows = $db->select();
		foreach($rows as $row){
			?>
		<li <?php if($slug_cat==$row['slug']) echo 'class="mm-selected"'; ?>>
			<a <?php if($row['slug']!='gioi-thieu') echo 'href="/#' . $row['slug'] . '"'; ?>><i class="<?php echo stripslashes($row['icon']); ?>"></i> <?php echo stripslashes($row['name']); ?></a>
			</li>
		<?php } ?>
		<li <?php if($slug_cat=='lien-he') echo 'class="mm-selected"'; ?> ><a href="<?= HOME_URL ?>/#<?= $lgTxt_slug_contact; ?>"><i class="fa fa-comments fa-lg fa-fw"></i> <?php echo $lgTxt_menu_contact; ?></a></li>
	</ul>
</nav>

<script type="text/javascript">

	// $('nav#menu li a').click(function(e){
	// })	

	</script>

