<?php
if (!defined('TTH_SYSTEM')) { die('Please stop!'); }
//-------------
$stringObj = new String();
?>
<!-- .slider -->
 <div id="custom_carousel1" class="carousel slide" data-ride="carousel" data-interval="4000">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
         <?php 
                $db->table = "article";
                $db->condition = "`is_active` = 1 AND article_menu_id IN (SELECT `article_menu_id` FROM `".TTH_DATA_PREFIX."article_menu` WHERE `category_id` = 5)";
                $db->order = "created_time DESC";
                $db->limit = "1";
                $rows = $db->select();
                $i = 0;
                if($db->RowCount > 0){
                foreach ($rows as $row){
                  $i++;
            ?> 
            <div class="item active">
                <div class="container-fluid">
                    <div class="row">
                        <div class="top col-md-6 col-sm-6 col-xs-12">
                          <div>
                           <h2 class="animated zoomInRight" data-wow-delay="0.8s" data-wow-duration="2s"><?= $row['name'] ?></h2>
                           <p class="animated zoomInLeft" data-wow-delay="1.4s" data-wow-duration="2s">
                               <?= $row['comment'] ?>
                           </p>
                           </div>
                        </div>
                        <div class="content col-md-6 col-sm-6 col-xs-12 ">

                            <img src="<?= HOME_URL ?>/uploads/article/exp-<?= $row['img'] ?>" class="img-responsive animated zoomInRight" data-wow-delay="2.8s" data-wow-duration="2s">
                            
                        </div>
                    </div>
                </div>            
            </div> 
            <?php }} ?>
            <?php 
                $db->table = "article";
                $db->condition = "`is_active` = 1 AND article_menu_id IN (SELECT `article_menu_id` FROM `".TTH_DATA_PREFIX."article_menu` WHERE `category_id` = 5)";
                $db->order = "created_time DESC";
                $db->limit = "1,50";
                $rows1 = $db->select();
                $i = 0;
                if($db->RowCount > 0){
                foreach ($rows1 as $row1){
                  $i++;
            ?> 
            <div class="item">
                <div class="container-fluid">
                    <div class="row">
                        <div class="top col-md-6 col-sm-6 col-xs-12">
                          <div>
                             <h2  class="animated zoomInRight" data-wow-delay="0.8s" data-wow-duration="2s"><?= $row1['name'] ?></h2>
                           <p class="animated zoomInLeft" data-wow-delay="1.4s" data-wow-duration="2s"><?= $row1['comment'] ?></p>
                       </div>

                        </div>
                        <div class="content col-md-6 col-sm-6 col-xs-12" >
                            <img src="<?= HOME_URL ?>/uploads/article/exp-<?= $row1['img'] ?>" class="img-responsive animated zoomInRight"  data-wow-delay="2.8s"  data-wow-duration="2s">
                            
                        </div>
                    </div>
                </div>            
            </div> 
            <?php } } ?>
           

        <!-- End Item -->
        </div>
        <a data-slide="prev" href="#custom_carousel1" class="izq carousel-control">‹</a>
        <a data-slide="next" href="#custom_carousel1" class="der carousel-control">›</a>
        <!-- End Carousel Inner -->
                <div class="controls draggable ui-widget-content col-md-6 col-xs-12">
            
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function(ev){
    var items = $(".nav li").length;
    var leftRight=0;
    if(items>5){
        leftRight=(items-5)*50*-1;
    }
    $('#custom_carousel1').on('slide.bs.carousel', function (evt) {
        
 
      $('#custom_carousel1 .controls li.active').removeClass('active');
      $('#custom_carousel1 .controls li:eq('+$(evt.relatedTarget).index()+')').addClass('active');
    })
    $('.nav').draggable({
        autoplaySpeed: 7000, 
        axis: "x",
         stop: function() {
            var ml = parseInt($(this).css('left'));
            if(ml>0)
            $(this).animate({left:"0px"});
                if(ml<leftRight)
                    $(this).animate({left:leftRight+"px"});
                    
        }
      
    });
});
    </script>