<?php
if (!defined('TTH_SYSTEM')) { die('Please stop!'); }
?>

 <div class="owl-carousel owl-theme silde_etem" id="cus_contact">
    <?php 
        $db->table = "gallery";
        $db->condition = "`is_active` = 1 AND gallery_menu_id IN (SELECT `gallery_menu_id` FROM `".TTH_DATA_PREFIX."gallery_menu` WHERE `category_id` = 2)";
        $db->order = "created_time DESC";
        $db->limit = "";
        $rows = $db->select();
        foreach ($rows as $row){
    ?> 
      <div class="item">
          <div class="col_item">
                 <a href="<?= $row['link'] ?>"> <img src="<?= HOME_URL ?>/uploads/gallery/client-<?= $row['img'] ?>" alt="<?= $row['name'] ?>"></a>
          </div>
      </div>
    <? } ?>

 </div>
      
          <script>
              $('#cus_contact').owlCarousel({
                loop: true,
                margin: 10,
                responsiveClass: true,
                autoplay: true,
                autoplayTimeout: 1000,
                responsive: {
                  0: {
                    items: 1,
                     autoplayTimeout: 2000,
                    nav: true
                  },
                  480: {
                     items: 2,
                      nav: true
                  },
                  700: {
                    items: 3,
                    nav: false
                  },
                  1000: {
                    items: 5,
                    nav: true,
                    loop: true,
                    autoplayTimeout: 2000,
                    margin: 0
                  }
                }
              })
          </script>

  



   