<!-- footer -->
 <?php  $footer_content=get_field('footer_content','option');
        $footer_mail= get_field('footer_mail','option');
        $footer_image=get_field('footer_image','option');
 ?> 
<footer class="footer-sec">
        <div class="container">
            <div class="top-ftr">
            <div class="row flex-column align-items-center">
                <div class="col-md-2">
                       
                    <div class="ftr-logo">
                        <?php if ($footer_image): ?>
                            <img src="<?php echo esc_url($footer_image['url']); ?>" alt="<?php echo esc_attr($footer_image['alt']);  ?>" srcset="">
                        <?php endif; ?>
                    </div>
                </div>
                    <div class="col-md-8">
                        <?php
                           wp_nav_menu(
                            array(
                               'container'            => 'div',
                               'container_class'      => 'ftr-menu',
                               'container_id'         => '',
                               'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                               'theme_location' => 'menu-2',
                           ));
                        ?> 
                    </div>
                    <div class="col-md-2">
                    <div class="ftr-email-socl-wrap">
                        <div class="ftr-email-sec">
                            <?php 
                               $footer_mail= get_field('footer_mail','option');
                               if($footer_mail): 
                                   $link_url = $footer_mail['url'];
                                   $link_title = $footer_mail['title'];
                            ?>
                        <a href="<?php echo esc_url( $link_url ); ?>"><svg class="svg-inline--fa fa-envelope" aria-hidden="true" focusable="false" data-prefix="far" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M64 112c-8.8 0-16 7.2-16 16l0 22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1l0-22.1c0-8.8-7.2-16-16-16L64 112zM48 212.2L48 384c0 8.8 7.2 16 16 16l384 0c8.8 0 16-7.2 16-16l0-171.8L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64l384 0c35.3 0 64 28.7 64 64l0 256c0 35.3-28.7 64-64 64L64 448c-35.3 0-64-28.7-64-64L0 128z"></path></svg><!-- <i class="fa-regular fa-envelope"></i> Font Awesome fontawesome.com --><?php echo esc_html( $link_title ); ?></a>
                        <?php endif; ?>
                        </div>
                        <?php if( have_rows('social_media','option') ): ?>
                        <div class="socl-sec">
                           <ul class="ftr-socl-menu">
                               <?php while( have_rows('social_media','option') ): the_row(); 
                                    $link_class = get_sub_field('link_class');
                                    $link_url = get_sub_field('link_url');
                                ?>  
                              <li>
                                   <a href="<?php echo $link_url; ?>"><?php echo $link_class; ?></a>
                               </li>
                              <?php endwhile; ?>
                            </ul>
                        </div>
                        <?php endif; ?>
                    </div>

                    </div>
            </div>
                
            </div>
            <div class="btm-ftr title-block text-center">
                   <?php  if ($footer_content) {?>
                        <p><?php echo $footer_content; ?></p>
                    <?php }?>
            </div>
        </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>	
