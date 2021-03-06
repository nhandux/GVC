<?php
if (!defined('TTH_SYSTEM')) { die('Please stop!'); }
//-------------

$date = new DateClass();
$stringObj = new String();

?>
<section class="program">
 <div class="container who-we-are margin_padding"  id="who-we-are"> 
  <div class="row">
    <div class="col-md-12 grand_who">
      <h1 class="who_are">Who we are</h1>
    
        <?php 
            $db->table = "article";
            $db->condition = "`is_active` = 1 AND article_menu_id IN (SELECT `article_menu_id` FROM `".TTH_DATA_PREFIX."article_menu` WHERE `category_id` = 1)";
            $db->order = "created_time asc";
            $db->limit = "1";
            $rows = $db->select();
            $i = 0;
            foreach ($rows as $row){
               echo $row['content'];
            }
        ?>
      <h2 class="we_focus">
        We focus in the following strategic areas:
      </h2>
    </div>
    <?php 
            $db->table = "article_menu";
            $db->condition = "`is_active` = 1 AND `category_id` = 10";
            $db->order = "created_time asc";
            $db->limit = "3";
            $rowfos = $db->select();
           
            foreach ($rowfos as $rowfo){
          
    ?>
    <div class="col-md-4 col-sm-4 col-xs-12 insigh">
      <img src="<?= HOME_URL ?>/uploads/article_menu/focus-<?= $rowfo['img'] ?>">
      <span class="market_re"><?= $rowfo['name'] ?></span>
    </div>
   <?php } ?>
 </div>
</div>
<div class="container-fluid">

  <div class="row div_vision">
<?php 
            $db->table = "article_menu";
            $db->condition = "`is_active` = 1 AND `category_id` = 11";
            $db->order = "created_time asc";
            $db->limit = "3";
            $rowfo1s = $db->select();
           
            foreach ($rowfo1s as $rowfo1){
          
    ?>
    <div class="col-md-4 col-sm-4 col-xs-12" style="background-image: url('<?= HOME_URL ?>/uploads/article_menu/about-<?= $rowfo1['img'] ?>')">
      <div class="content_vision">
        <h1><?= $rowfo1['name'] ?></h1>
        <p><?= $rowfo1['comment'] ?></p>
      </div>
    </div>
    <?php } ?>
    
  </div>
</div>

<div class="container div_cor">
 <div class="row">
   <div class="col-md-12">
    <h1 class="corporate wow fadeInLeft" data-wow-delay="0.1s" data-wow-duration="0.9s">
      Corporate Social Responsibilities
    </h1>
  </div>
  <div class="col-md-6 col-sm-12 col-xs-12 consulation wow fadeInLeft" data-wow-delay="0.3s" data-wow-duration="0.9s">
        <?php 
            $db->table = "article";
            $db->condition = "`is_active` = 1 AND article_menu_id IN (SELECT `article_menu_id` FROM `".TTH_DATA_PREFIX."article_menu` WHERE `category_id` = 12)";
            $db->order = "created_time asc";
            $db->limit = "1";
            $rows = $db->select();
            $i = 0;
            foreach ($rows as $row){
               echo $row['content'];
            }
        ?>
 </div>
 <div class="col-md-6 col-sm-12 col-xs-12 conent_main">
   <div class="round wow fadeInRight" data-wow-delay="0.3s" data-wow-duration="0.9s">
     <?php $rows1 = getSoPo('3');
    foreach ($rows1 as $row1) {
       ?>
    <div class="center_row">
      <div>
        <span><?= $row1['name'] ?></span>
        <h1><?= $row1['comment']?></h1>
      </div>
    </div>
    <?php } ?>
    <!-- top -->
    <?php $rows1 = getSoPo('1');
    foreach ($rows1 as $row1) {
       ?>
    <div class="grend_top">
     <div>
       <img src="<?= HOME_URL ?>/uploads/article_menu/for-<?= $row1['img'] ?>">
       <h2><?= $row1['name'] ?></h2>
     </div>
   </div>
   <?php } 
    $rows1 = getSoPo('2');
    foreach ($rows1 as $row1) {
       ?>
   <!-- right -->
   <div class="grend_right">
    <div>
      <img src="<?= HOME_URL ?>/uploads/article_menu/for-<?= $row1['img'] ?>">
      <h2><?= $row1['name'] ?></h2>
    </div>
  </div>
  <?php } $rows1 = getSoPo('4');
    foreach ($rows1 as $row1) {
       ?>
  <!-- bottom -->
  <div class="grend_bottom">
    <div>
      <img src="<?= HOME_URL ?>/uploads/article_menu/for-<?= $row1['img'] ?>">
      <h2><?= $row1['name'] ?></h2>
    </div>
  </div>
<?php  
 } $rows1 = getSoPo('5');
    foreach ($rows1 as $row1) {
?>
  <div class="grend_left">
    <div>
      <img src="<?= HOME_URL ?>/uploads/article_menu/for-<?= $row1['img'] ?>">
      <h2><?= $row1['name'] ?></h2>
    </div>
  </div>
  <?php } ?>
</div>

</div>

</div>
</div>

   

<!-- slide tin -->
<div class="margin_padding"  id="our-services">
<div class="content_mainer" >
  <div class="container " >
    <h1 class="our_services">
      Our services
    </h1>
    <div class="slide_new"> 
     <!-- slide tin tuc -->
     <?php include(_F_INCLUDES . DS . "tth_slider_tin.php"); ?>
     <!-- end slide tin tuc -->
   </div>

 </div>
</div>
</div>

<!-- end slide tin -->
<!-- slide nước suối -->
<div class="margin_padding"  id="industries">
<div class="container content_over">
  <h1 class="our_services">
    Industries
  </h1>
</div>

<div class="mai_water">

 <?php include(_F_INCLUDES . DS . "tth_slide_water.php"); ?>

</div>
</div>
<!-- end slide nước suối -->
<div class="margin_padding" id="our-team">
<div class="container" >
  <h1 class="our_services">
    Our team
  </h1>
  <div class="slide_ourteam">

    <?php include(_F_INCLUDES . DS . "tth_slider_team.php"); ?>

  </div>

</div>
</div>

<div class="content_mainer">
  <div class="container teamember">
    <div class="row">
            <?php 
                $db->table = "article";
                $db->condition = "`is_active` = 1 AND article_menu_id IN (SELECT `article_menu_id` FROM `".TTH_DATA_PREFIX."article_menu` WHERE `category_id` = 9)";
                $db->order = "created_time DESC";
                $db->limit = "1";
                $rows = $db->select();
                if($db->RowCount > 0){
                foreach ($rows as $row){
            ?> 
                  <div class="col-md-6 col-sm-7 wow fadeInLeft" data-wow-delay="0.3s" data-wow-duration="0.9s">
                    <img src="<?= HOME_URL ?>/uploads/article/mem-<?= $row['img'] ?>">
                  </div>
                  <div class="col-md-6 col-sm-5 text_overnow wow fadeInRight" data-wow-delay="0.3s" data-wow-duration="0.9s">
                    <?= $row['content'] ?>

               </div>
        <?php }} ?>
    </div>
  </div>
</div>

<div class="margin_padding"  id="our-experience"> 
<div class="container content_over">
  <h1 class="our_services" >
    Our experices
  </h1>
</div>
<div class="content_mainer1">
  <div class="container">
   <div class="slide_new" style="margin-top: 0px;padding-top: 15px;margin-bottom: 20px;"> 
     <!-- slide tin tuc -->
     <?php include(_F_INCLUDES . DS . "tth_slider_tin_bot.php"); ?>
     <!-- end slide tin tuc -->
   </div>

 </div>
</div>
</div>

<div class="margin_padding"  id="our-clients">
<div class="content_contact">
  <div class="container">
    <h1 class="our_services" >
      Our clients
    </h1>
    <div class="slide_ourteam contact_team">

      <?php include(_F_INCLUDES . DS . "tth_slider_contact.php"); ?>

    </div>

  </div>
</div>
</div>
<div class="margin_padding" id="career">
  <?php
      $db->table     = "article_menu";
      $db->condition = "category_id = 8";
      $db->order     = "";
      $db->limit     = "";
      $rowcars       = $db->select();
      foreach ($rowcars as $rowcar) {

          $db->table      = "article";
          $db->condition  = "article_menu_id = ".$rowcar['article_menu_id'];
          $db->order      = "";
          $db->limit      = 1;
          $rowitemcars    = $db->select();  
            foreach ($rowitemcars as $rowitemcar) {
  ?>
  <div class="content_phone" style="background-image: url('<?= HOME_URL ?>/uploads/article/career-<?= $rowitemcar['img']?>');">
    <div class="container">
      <h1 class="our_services">
        Career
      </h1>
      <div class="content_text">
        <?= $rowitemcar['content']; ?>     
      </div>
    </div>
  </div>
  <?php
     }
  }
  ?>
</div>
<div class="margin_padding" id="contact">
<div class="main_contact" >
  <div class="row trust">
    <div class="col-md-6 col-sm-6 col-xs-12" style="padding-right: 0px;" data-mh="trust">
      <div class="content_map" style="width: 100%;height: 100%;">
        <?php echo getPage('contact_maps')?>

        <div class="over_bottom">
          <div class="content_text_left">
            <?php echo getPage('contact_page')?>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-12 google_map" style="padding-left: 0px;"  data-mh="trust">
      <div class="ct_map">
       <h1 class="our_services">
        <?php echo getPage('getcontactus','comment')?>
      </h1>
     <?php echo getPage('getcontactus')?>

      <div class="form_acr">
        <input type="hidden" name="lang_field" value="<?php echo $txtEnter_field;?>"/>
        <input type="hidden" name="lang_email" value="<?php echo $txtEnter_email;?>"/>
        <input type="hidden" name="lang_phone" value="<?php echo $txtEnter_tell;?>"/>
        <form id="_frm_contact" name="frm_contact" class="frm f-space20" method="post" onsubmit="return sendMail('send_contact', '_frm_contact');">
          <div class="f-space05 clearfix">
            <div class="form-item form-md">
              <input type="text" name="full_name" placeholder="Full Name" value="" maxlength="250">

            </div>
            <div class="form-item form-md">
              <input type="text" name="address" placeholder="Company Name" value="" maxlength="250">

            </div>
            <div class="clearfix"></div>
            <div class="form-item form-sm">
              <input type="text" name="email" placeholder="Email" value="" maxlength="250">

            </div>
            <div class="form-item form-sm">
              <input type="text" name="tel" placeholder="Phone" value="" maxlength="20">

            </div>
          </div>
          <div class="form-item form-bg">
            <textarea name="content" placeholder="Message" cols="60" rows="5"></textarea>

          </div>
          <div class="form-bg clearfix">
            <div class="form-sm hidden-xs">&nbsp;</div>
            <div class="form-item form-sm text-right form_contract">
              <input type="submit" id="_send_contact" name="send_contact" value=" Submit">
            </div>
          </div>
        </form>
        <script>
          window.onload = check_contact();
        </script>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<!-- end contact -->
<div class="contact_footer">
    <div class="container">
       <div class="row">
         <div class="col-md-2 botter_nhan">
          <div class="bottom_left">
           <img src="<?= HOME_URL ?>/images/logo_bot.png">
         </div>
         </div>
         <div class="col-md-10">
              <div class="row url_botom">
                  <div class="col-md-3 col-sm-3 col-xs-6" data-mh="url_botom">
                    <h1>About us</h1>
                    <ul>
                        <?php 
                        $db->table = "article_menu";
                        $db->condition = "`is_active` = 1 AND `category_id` = 1";
                        $db->order = "";
                        $db->limit = "";
                        $rows = $db->select();
                        foreach ($rows as $row) {
                          echo '<li><a href="javscript:{0}">'.$row["name"].'</a></li>';
                        }
                        ?>
                    </ul>
                  </div>
                  <div class="col-md-3 col-sm-3 col-xs-6"  data-mh="url_botom">
                     <h1>Services</h1>
                    <ul>
                         <?php 
                              $list_tin = getDsAr('Our services');
                              foreach ($list_tin as $row) {
                                echo  '<li><a href="javscript:{0}">'.$row["name"].'</a></li>';
                              }
                           ?>
                    </ul>
                  </div>
                  <div class="col-md-3 col-sm-3 col-xs-6"  data-mh="url_botom">
                     <h1>Industries</h1>
                       <ul>
                           <?php 
                              $list_tin = getDsAr('Industries?');
                              foreach ($list_tin as $row) {
                                echo  '<li><a href="javscript:{0}">'.$row["name"].'</a></li>';
                              }
                           ?>
                        </ul>
                  </div>
                  <div class="col-md-3 col-sm-3 col-xs-6"  data-mh="url_botom">
                    <h1>Our Experiences</h1>
                    <ul>
                       <?php 
                              $list_tin = getDsAr('Our experience');
                              foreach ($list_tin as $row) {
                                echo  '<li><a href="javscript:{0}">'.$row["name"].'</a></li>';
                              }
                           ?>
                    </ul>
                  </div>
              </div>
         </div>

       </div>
    </div>
</div>
<script type="text/javascript">
  $(function() {
    $('.url_botom > div').matchHeight();
});
</script>
<!-- end contact_footer -->
</section>
