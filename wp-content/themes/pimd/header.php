<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <!-- Required meta tags -->
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1, initial-scale=1, shrink-to-fit=no">
  <title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; <?php } ?> <?php wp_title(); ?></title>
  <!-- style sheets -->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php  wp_body_open();?>



  <!-- header -->
  <header class="header-sec">
      <div class="top_head">
        <div class="container">
          <div class="top-head-wrap">
            <div class="email-sec">
              <?php 
                $header_mail= get_field('header_mail','option');
                  if($header_mail): 
                    $link_url = $header_mail['url'];
                    $link_title = $header_mail['title'];
              ?>
              <a href="<?php echo esc_url( $link_url ); ?>"
                ><i class="fa-regular fa-envelope"></i
                ><?php echo esc_html( $link_title ); ?></a
              >
              <?php endif; ?>
            </div>
            <?php if( have_rows('social_media','option') ): ?>
            <div class="socl-sec">
              <ul class="hdr-socl-menu">
                <?php while( have_rows('social_media','option') ): the_row(); 
                  $link_class = get_sub_field('link_class');
                  $link_url = get_sub_field('link_url');
                ?>  
                <li>
                   <a href="<?php echo $link_url; ?>">
                       <?php echo $link_class; ?>
                    </a>
                </li>
                <?php endwhile; ?>
              </ul>
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="bottom_head">
        <div class="container">
          <div class="hdr-main">
            <div class="hdr_logo">
              <?php if(has_custom_logo()){
                        the_custom_logo();
                    }
                ?>
            </div>
            <div class="hdr-menu-sec">
              <div class="menu-sec" id="mySideNav">
                <div class="close-menu" onclick="closeNav()">
                  <i class="fa-solid fa-xmark"></i>
                </div>
                <?php
                  wp_nav_menu(
                    array(
                    'container'            => '',
                      'container_class'      => '',
                      'container_id'         => '',
                      'items_wrap'     => '<ul id="%1$s" class="%2$s hdr-menu ">%3$s</ul>',
                      'theme_location' => 'menu-1',
                    )
                  );
                  ?> 
              </div>
              <div class="search-icon">
                <a href="javascript:void(0)"
                  ><i class="fa-solid fa-magnifying-glass"></i
                ></a>
                <div class="popover__content">
                  <div class="form-group">
                    <input name="searchword" id="mod-search-searchword98" maxlength="200" class="form-control" type="search" placeholder="Search ..."> <button class="btn btn-default"><i class="fa fa-search"></i></button> <input type="hidden" name="task" value="search">
                    <input type="hidden" name="option" value="com_search">
                    <input type="hidden" name="Itemid" value="101">
      
                  </div>
                </div>
              </div>
              <div class="mob-menu" onclick="openNav()">
                <a href="javascript:void(0)"
                  ><i class="fa-solid fa-bars"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>