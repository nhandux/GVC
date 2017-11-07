<?php
if (!defined('TTH_SYSTEM')) { die('Please stop!'); }
?>

 <div class="owl-carousel owl-theme silde_etem">

    <?php 
        $db->table = "article";
        $db->condition = "`is_active` = 1 AND article_menu_id IN (SELECT `article_menu_id` FROM `".TTH_DATA_PREFIX."article_menu` WHERE `category_id` = 7)";
        $db->order = "created_time DESC";
        $db->limit = "";
        $rows = $db->select();
        $i = 0;
        foreach ($rows as $row){
          $i++;
    ?>
            <div class="item">
            <div class="col-item">
                <div class="photo-shadow"></div>
                <div class="photo">
                    <img src="<?= HOME_URL ?>/uploads/article/team-<?= $row['img'] ?>" alt="<?= $row['name'] ?>-(<?= $row['comment'] ?>)">
                </div>
                <div class="info">
                    <a href="#"><div class="name"><?= $row['name'] ?></div></a>
                    <div class="degination">(<?= $row['comment'] ?>)</div>
                    <div class="social-connect">
                        <a href="<?= $row['link_face'] ?>" title="faceboook"><img src="<?= HOME_URL ?>/images/ic_face.png"></a>
                        <a href="<?= $row['link_tw'] ?>" title="twitter"><img src="<?= HOME_URL ?>/images/icon_tew.png"></a>
                        <a href="<?= $row['link_in'] ?>" title="indent"><img src="<?= HOME_URL ?>/images/ic_in.png"></a>
                    </div>
                    <div class="news_content">
                        <?= $row['content'] ?>
                      </div>
                    <div class="clearfix"></div>
                </div>
              </div>
            </div>
        <?php } ?>        
           
    </div>
      
          <script>
              $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 50,
                responsiveClass: true,
                responsive: {
                  0: {
                    items: 1,
                    nav: true
                  },
                  600: {
                    items: 2,
                    nav: false
                  },
                  1000: {
                    items: 3,
                    nav: true,
                    loop: false,
                    margin: 20
                  }
                }
              })
          </script>

  



   