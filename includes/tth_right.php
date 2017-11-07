<?php
if (!defined('TTH_SYSTEM')) { die('Please stop!'); }
//-------------
?>
<!-- .content-right -->
<div class="content-right">
    <div class="form-workshop">
        <h3 class="r-title t-crop"><?php echo getPage('form_register', 'name');?></h3>
        <div class="r-box">
            <?php echo getPage('form_register');?>
            <input type="hidden" name="lang_field" value="<?php echo $txtEnter_field;?>"/>
            <input type="hidden" name="lang_email" value="<?php echo $txtEnter_email;?>"/>
            <input type="hidden" name="lang_phone" value="<?php echo $txtEnter_tell;?>"/>
            <form id="_frm_order" name="frm_order" method="post" class="frm ps-error clearfix" onsubmit="return sendMail('send_order', '_frm_order');">
                <label><input type="text" name="name" placeholder="<?php echo $lgTxt_workshop_name;?>" required></label>
                <label><input type="text" name="tel" placeholder="<?php echo $lgTxt_workshop_tel;?>" required></label>
                <label><input type="text" name="email" placeholder="<?php echo $lgTxt_workshop_email;?>" required></label>
                <label><input type="text" name="address" placeholder="<?php echo $lgTxt_workshop_address;?>" required></label>
                <label><input type="text" name="number" class="auto-number" placeholder="<?php echo $lgTxt_workshop_number;?>" data-a-sep="." data-a-dec="," data-v-max="999" data-v-min="0" maxlength="3" required></label>
                <label class="alg-rht"><button type="submit" class="btn more" id="_send_order" name="btn_register"><?php echo $lgTxt_workshop_register;?></button></label>
            </form>
            <script>
                window.onload = check_order();
            </script>
        </div>
    </div>
    <div class="img f-space20"><?php echo getPage('banner_right');?></div>
    <?php
    $slug55 = getSlugCategory(55);
    ?>
    <div class="program f-space20">
        <h3 class="r-title-a t-crop"><a href="<?php echo HOME_URL_LANG . '/' . $slug55;?>"><?php echo $lgTxt_program_title;?></a></h3>
        <div class="r-box">
            <?php
            $db->table = "article_menu";
            $db->condition = "`is_active` = 1 AND `category_id` = 55";
            $db->order = "`sort` ASC";
            $db->limit = "";
            $rows = $db->select();
            if($db->RowCount>0) {
                echo '<ul>';
                foreach($rows as $row) {
                    echo '<li><a href="' . HOME_URL_LANG . '/' . $slug55 . '/' . stripslashes($row['slug']) . '">' . stripslashes($row['name']) . '</a></li>';
                }
                echo '</ul>';
            }
            ?>
        </div>
    </div>
</div>
<!-- / .content-right -->