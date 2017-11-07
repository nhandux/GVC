<?php
if (!defined('TTH_SYSTEM')) { die('Please stop!'); }
//-------------
?>
<!-- .header -->
<header class="header">
    <div class="box-wp clearfix header_top">
        <div class="header-left">
            <div class="logo wow zoomInDown">
                <a href="<?php echo HOME_URL_LANG;?>" title="<?php echo getConstant('title');?>">
                    <img src="<?php echo HOME_URL ;?>/images/logo.png" alt="<?php echo getConstant('meta_site_name');?>">
                </a>
            </div>
        </div>
        <div class="header-right">
            <div class="top">
            </div>
            <nav class="navigation" role="navigation">
                <ul id="nav">
                    <?php
                    $db->table = "category";
                    $db->condition = "`is_active` = 1 and `menu_main` = 1";
                    $db->order = "`sort_hide` ASC";
                    $db->limit = "";
                    $rows = $db->select();
                    $count = 0;
                    $io = 0;
                    foreach($rows as $row){
                    $io ++;
                    $count++;
                    $speed = 0.2 * $count;
					?>
					<li class="<?php if($count == 1 ) echo 'current babc'; else echo ""; ?> wow flipInX" data-wow-delay="<?php echo $speed;?>s">
						<a href="#<?= $row['slug'];?>" class="nhan_<?= $io ?>" title="<?php echo stripslashes($row['name']); ?>">
							<span><?php echo stripslashes($row['name']); ?></span>
						</a>
						<?php
                        if($row['type_id']+0 == 1) {
                            $db->table = "article_menu";
                            $db->condition = "is_active = 1 and parent = 0 and category_id = ".($row['category_id']+0);
                            $db->order = "sort ASC";
                            $db->limit = "";
                            $rows2 = $db->select();
                           
                        } else {}
                        ?>
					</li>
					<?php }
                    $speed = 0.2 * ($count+1);
                    $io++
                    ?>
                    <li class=" wow flipInX" data-wow-delay="<?php echo $speed;?>s">
                        <a href="#<?= $lgTxt_slug_contact; ?>" class="nhan_<?= $io ?>" title="<?php echo $lgTxt_menu_contact; ?>" >
                            <span><?php echo $lgTxt_menu_contact; ?></span>
                        </a>
                    </li>
                    <li class=" wow flipInX" data-wow-delay="<?php echo $speed;?>s">
                        <a href="javascript:{}" onclick="nguyennhan(1)" class="bottle" title="<?php echo $lgTxt_menu_contact; ?>" >
                            <span class="chuamenu"><img src="<?= HOME_URL ?>/images/menu.png"></span>
                        </a>
                    </li>
                     <li class=" wow flipInX" data-wow-delay="<?php echo $speed;?>s">
                        <a href="javascript:{}" onclick="nguyenducnhan(<?= $io ?>)" class="hienthi" style="display: none" title="<?php echo $lgTxt_menu_contact; ?>" >
                            <span class="chuamenu"><img src="<?= HOME_URL ?>/images/menu.png"></span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<script type="text/javascript">
  var orm =  1;
    function opacy(cla){
        cla.css('opacity',orm)
        console.log(orm)
        if(orm >= 0 )
        {
            orm = orm - 0.1
            setTimeout(function(){
            opacy(cla)
        },10)
        }else{
       
        }
    }

    var orn =  0;
    function opacity(clas){
        clas.css('opacity',orn)
        orn = orn + 0.1
        if(orn <= 1 )
        {
            setTimeout(function(){
            opacity(clas)
        },10)
        }else{
       
        }
    }

 function nguyennhan(i){
    orm =  1;
    opacy($('#nav li a.nhan_'+i))

    if(i < <?= $io ?>){
        i = i + 1
        setTimeout(function(){
          nguyennhan(i)
        },100)    
    }
    else{
        $('#nav li a').not(':last').css('display','none')
        $('.hienthi').css('display','block')
        $('.bottle').css('display','none')
    }
   
 }

   function nguyenducnhan(i){
     orn =  0;
    if(i == <?= $io ?> )
        {

            $('#nav li a').not(':last').css('display','block')
            $('.bottle').css('display','block')
            $('.hienthi').css('display','none')
        }
     opacity($('#nav li a.nhan_'+i))
    if(i >= 1){
        i = i - 1
        setTimeout(function(){
          nguyenducnhan(i)
        },100)    
    }
    else{
        $('#nav li.babc').addClass('current')
    }
   }

// $('#nav li a:last').click(function(event) {
//      Act on the event 
//     setTimeout(function(){
//         console.log
//     },2000)
// });
    // function loadnhan(){
    //     // $('#nav li a').not(':last').toggleClass('show_div');
    //     $('#nav li a').each(function() {
    //         // this.checked = false;
    //         console.log(this)
    //     });
    // }
</script>

<header class="header-sm Fixed clearfix">
    <div class="logo animated zoomInLeft">
        <a href="<?php echo HOME_URL_LANG;?>" title="<?php echo getConstant('title');?>">
            <img src="<?php echo HOME_URL?>/images/logo-sm.jpg" alt="<?php echo getConstant('meta_site_name');?>">
        </a>
    </div>
    <div class="top">
        <ul class="social">
            <li class="animated rotateIn"><a target="_blank" href="<?php echo getConstant('link_facebook');?>" title="Facebook"><img src="<?php echo HOME_URL;?>/images/icon-facebook.png" alt="Facebook"></a></li>
            <li class="animated rotateIn"><a target="_blank" href="<?php echo getConstant('link_googleplus');?>" title="Google Plus"><img src="<?php echo HOME_URL;?>/images/icon-google-plus.png" alt="Google Plus"></a></li>
            <li class="animated rotateIn"><a target="_blank" href="<?php echo getConstant('link_twitter');?>" title="Twitter"><img src="<?php echo HOME_URL;?>/images/icon-twitter.png" alt="Twitter"></a></li>
            <li class="animated rotateIn"><a target="_blank" href="<?php echo getConstant('link_youtube');?>" title="Youtube"><img src="<?php echo HOME_URL;?>/images/icon-youtube.png" alt="Youtube"></a></li>
        </ul>
    </div>
    <a id="hamburger" href="#menu"><span></span></a>
</header>
<!-- / .header -->