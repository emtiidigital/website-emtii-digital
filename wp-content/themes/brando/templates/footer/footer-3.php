<?php
/**
 * Displaying footer type 3 section
 *
 * @package Brando
 */
?>
<?php
$brando_old_page_header_meta = $brando_classes = $brando_footer_bottom_class = $brando_footer_bg_image = '';
if(!empty($post)):
    $brando_old_page_header_meta = get_post_meta( $post->ID, 'brando_enable_page_footer_single', true);
endif;
if( $brando_old_page_header_meta != '' && strlen($brando_old_page_header_meta) > 0 ){
    $brando_enable_footer = brando_option('brando_enable_page_footer');
}else{
    $brando_enable_footer = 2;  
}
if($brando_enable_footer == 1 || $brando_enable_footer == '2'){
   
    $brando_footer_bg = brando_option('brando_footer_bg_image');
    if( is_array($brando_footer_bg) ){
        $brando_footer_bg_image = $brando_footer_bg['url'];
    }else{
        $brando_footer_bg_image = $brando_footer_bg;
    }
    
    if($brando_footer_bg_image):
            $brando_footer_bg_image =  'style="background-image:url('.esc_url($brando_footer_bg_image).')"';
            $brando_classes .= 'cover-background';
    endif;

    $brando_footer_sidebar = brando_option('brando_footer_sidebar');
    $brando_enable_footer_copyright = brando_option('brando_enable_footer_copyright');
    $brando_footer_copyright = brando_option('brando_footer_copyright');
    $brando_enable_scrolltotop_button = brando_option('brando_enable_scrolltotop_button');
            
?>
<footer class="border-top <?php echo esc_attr($brando_classes); ?>" <?php echo wp_kses($brando_footer_bg_image, wp_kses_allowed_html( 'post' )); ?>>
            <div class="container">
                <div class="row border-bottom padding-five-tb xs-padding-ten-tb">
                    <?php if( !empty($brando_footer_sidebar) ){ ?>
                        <div class="col-md-12 col-sm-12 text-center">
                            <?php dynamic_sidebar($brando_footer_sidebar); ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <?php if($brando_enable_footer_copyright == 1){ ?>
                <div class="footer-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 text-center">
                                <span class="text-small text-uppercase alt-font"><?php echo wp_kses($brando_footer_copyright, wp_kses_allowed_html( 'post' )); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </footer>
<?php } ?>
<?php
    if( get_post_type( get_the_ID() ) == 'portfolio' && is_singular('portfolio') ){
        $brando_enable_ajax = get_post_meta( get_the_ID(),'brando_enable_ajax_popup_single',true);
    } else {
        $brando_enable_ajax = '';
    }
?>
<?php if( $brando_enable_scrolltotop_button == 1 && $brando_enable_ajax == ''){ ?>
<!-- scroll to top -->
    <a class="scrollToTop" href="javascript:void(0);">
        <i class="fa fa-angle-up"></i>
    </a>
<!-- scroll to top End... -->
<?php } ?>