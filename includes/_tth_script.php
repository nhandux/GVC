<?php
if (!defined('TTH_SYSTEM')) { die('Please stop!'); }
?>

<script type="text/javascript" src="<?php echo HOME_URL;?>/js/jquery/jquery-1.11.0.js"></script>


<script type="text/javascript" src="<?php echo HOME_URL;?>/js/bootstrap/bootstrap.js"></script>

<script type="text/javascript" src="<?php echo HOME_URL;?>/js/modernizr.custom.js"></script>

<!-- <script type="text/javascript" src="<?php echo HOME_URL;?>/js/jquery.slider/jquery.bxslider.js"></script> -->
<script type="text/javascript" src="<?php echo HOME_URL;?>/js/jquery.mmenu.min.all.js"></script>
<script type="text/javascript" src="<?php echo HOME_URL;?>/js/jquery.easing.js"></script>
<script type="text/javascript" src="<?php echo HOME_URL;?>/js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="<?php echo HOME_URL;?>/js/jquery.carousels-slider.min.js"></script>
<script type="text/javascript" src="<?php echo HOME_URL;?>/js/jquery.popup/jquery.modal.min.js"></script>
<script type="text/javascript" src="<?php echo HOME_URL;?>/js/auto-numeric.js"></script>
<script type="text/javascript" src="<?php echo HOME_URL;?>/js/wow.min.js"></script>
<script type="text/javascript" src="<?php echo HOME_URL;?>/js/script.js"></script>
<script type="text/javascript" src="<?php echo HOME_URL;?>/js/gridify.js"></script>
<script type="text/javascript" src="<?php echo HOME_URL;?>/js/fancybox/jquery.fancybox.js?v=2.1.5"></script>
<script type="text/javascript" src="<?php echo HOME_URL;?>/js/fancybox/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="<?php echo HOME_URL;?>/js/fancybox/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
<script type="text/javascript" src="<?php echo HOME_URL;?>/js/jquery.popup/jquery.boxes.js"></script>
<script type="text/javascript" src="<?php echo HOME_URL;?>/js/jquery.popup/jquery.boxes.repopup.js"></script>
<script type="text/javascript" src="<?php echo HOME_URL;?>/js/owl.carousel.js"></script>
<script type="text/javascript" src="<?php echo HOME_URL;?>/js/jquery.nav.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.0/jquery.matchHeight-min.js"></script>

<script type="text/javascript">
    $(function() {
        $('nav#menu').mmenu({
            extensions	: [ 'effect-slide-menu', 'pageshadow' ],
            searchfield	: true,
            counters	: false,
            navbar 		: {
                title		: 'Grand Valley Consultinge'
            },
            offCanvas: {
                position: "right"
            }, 
            // onClick     : {
            //     blockUI         : true,
            //     preventDefault  : function() {
            //         return this.rel != 'external';
            //     }
            // },
            navbars		: [
                {
                    position	: 'top',
                    content		: [ 'searchfield' ]
                }, {
                    position	: 'top',
                    content		: [
                        'prev',
                        'title',
                        'close'
                    ]
                }
            ]
        });
    });
      

// var $menu = $('#menu');
//     var api = $menu.data("mmenu");
    // alert(api)
</script>

<?php echo getConstant('google_analytics')?>
<?php echo getConstant('chat_online')?>