<?php 
/**
* Template Name: PAGE::Home Page 
**/
get_header(); ?>

<!-- banner -->
<?php
$banner_image = get_field('banner_image');
$banner_bg_image_url = '';
if($banner_image){
  $banner_bg_image_url =  $banner_image['url'];
}else{
  $banner_bg_image_url =  get_template_directory_uri().'/assets/images/home_hro-img.jpg';
}

?>
<section
      class="bnnr-sec"
      style="background-image: url('<?php echo $banner_bg_image_url; ?>')"
                  
    >
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-12 " data-aos="fade-right" data-aos-duration="1800">
            <div class="bnnr-cntnt title-block text-left">
            <?php  $banner_title = get_field('banner_tittle');
                   if ($banner_title) {?>
                  <h1><?php echo $banner_title; ?></h1>
            <?php }?>
            <?php  $banner_describtion = get_field('banner_describtion');
                   if ($banner_describtion) {?>
                  <p><?php echo $banner_describtion; ?></p>
            <?php }?>
              <?php 
                $banner_button= get_field('banner_button');
                  if($banner_button): 
                    $link_url = $banner_button['url'];
                    $link_title = $banner_button['title'];
              ?>
              <a href="<?php echo esc_url( $link_url ); ?>" class="cstm-btn"
                ><?php echo esc_html( $link_title ); ?>
                <span class="rght-arrw"
                  ><i class="fa-solid fa-arrow-right"></i></span
              ></a>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- banner-form -->
    <?php  $contact_from_text = get_field('contact_from_text');
              ?>    
  <section class="bnnr-form-sec title-block " data-aos="fade-up" data-aos-duration="1800">
      <div class="container">
        <div class="row">
          <div class="col-md-9 col-12">
             <?php  $banner_contact_tittle = get_field('banner_contact_tittle');
                   if ($banner_contact_tittle) {?>
                  <h2><?php echo $banner_contact_tittle; ?></h2>
            <?php }
             echo do_shortcode($contact_from_text);
            
            ?>
            
          </div>
          <div class="col-md-3 col-12">
            <div class="form-img">
            <?php  $banner_contact_image = get_field('banner_contact_image');
                   if ($banner_contact_image) {?>
                   <img src="<?php echo esc_url($banner_contact_image['url']); ?>" alt="<?php echo esc_attr($banner_contact_image['alt']);?>" srcset="" />
            <?php }?>
            </div>
          </div>
        </div>
      </div>
    </section>
    

    <!-- what we do -->
    <section class="what-we-do title-block section-margin" data-aos="fade-up" data-aos-duration="1800" >
      <div class="container">
        <div class="row text-center justify-content-center">
          <div class="col-md-8 col-12">
           <?php  $content_tittle = get_field('content_tittle');
                   if ($content_tittle) {?>
                  <h2><?php echo $content_tittle; ?></h2>
            <?php }?>
            <?php  $content_describtion = get_field('content_describtion');
                   if ($content_describtion) {?>
                     <p><?php echo $content_describtion; ?></p>
            <?php }?>
          </div>
        </div>
        <?php if ( have_rows('what_we_do') ) : ?>
        <div class="row">
        <?php while ( have_rows('what_we_do') ) : the_row(); 
                   $image = get_sub_field('what_we_image');
                   $what_we_tittle = get_sub_field('what_we_tittle');
                   $items = get_sub_field('what_we_describtion');
          ?>
          <div class="col-md-4 col-sm-6 d-flex" data-aos="fade-up" data-aos-duration="1800">
            <div class="do-card">
              <div class="do-img">
              <?php if ( $image ) : ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
              </div>
              <div class="do-txt">
                <?php if ($what_we_tittle) {?>
                 <h4><?php echo $what_we_tittle; ?></h4>
                <?php }?>
                <?php if ($items) {?>
                   <?php echo $items; ?>
                <?php }?>
              </div>
            </div>
          </div>
          <?php endwhile ?>
          </div>
          <?php endif; ?>
      </div>
    </section>

    <!-- about PIMD -->
      <?php
        $about_image = get_field('about_image');
        $about_title = get_field('about_tittle');
        $about_describtion = get_field('about_describtion');
        $about_button_link = get_field('about_button_link');
      ?>
    <section class="about-pimd title-block section-margin">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-5" data-aos="fade-right" data-aos-duration="1800">
            <div class="abt-img">
            <?php
            if( $about_image): ?>
              <img src="<?php echo esc_url($about_image['url']); ?>" alt="<?php echo esc_attr($about_image['alt']); ?>">
          <?php endif; ?>
            </div>
          </div>
          <div class="col-md-7" data-aos="fade-left" data-aos-duration="1800">
            <div class="abt-txt">
              <?php if ($about_title) {?>
                 <h2><?php echo $about_title; ?></h2>
                <?php }?>
                <?php if ($about_describtion) {?>
                 <h2><?php echo $about_describtion; ?></h2>
                <?php }?>
              <?php 
                $about_button_link= get_field('about_button_link');
                  if($about_button_link): 
                    $link_url = $about_button_link['url'];
                    $link_title = $about_button_link['title'];
              ?> 
              <a href="<?php echo esc_url( $link_url ); ?>" class="cstm-btn"
                ><?php echo esc_html( $link_title ); ?>
                <span class="rght-arrw"
                  ><i class="fa-solid fa-arrow-right"></i></span
              ></a>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- about us -->
    <?php
      $about_us_bg_image = get_field('about_us_bg_image');
      $about_us_bg_image_url = '';
      if($about_us_bg_image){
        $about_us_bg_image_url =  $about_us_bg_image['url'];
      }else{
      $about_us_bg_image_url =  get_template_directory_uri().'/assets/images/about-img.jpg';
      }
      $about_us_tittle = get_field('about_us_tittle');
      $about_us_describtion = get_field('about_us_describtion');
    ?>
<section class="about-us title-block" style="background-image:url('<?php echo $about_us_bg_image_url; ?>');">
         <div class="container">
           <div class="row ">
             <div class="col-md-12" data-aos="fade-up" data-aos-duration="1800">
               <div class="about-us-txt">
                  <?php if ($about_us_tittle) {?>
                    <h2><?php echo $about_us_tittle; ?></h2>
                  <?php }?>
                    <?php if ($about_us_describtion) {?>
                      <p><?php echo $about_us_describtion; ?></p>
                    <?php }?>
                </div>
              </div>
            </div>
          </div>
     </section>

     <!-- mission -->
     <?php
        $mission_icon_image = get_field('mission_icon_image');
        $mission_tittle = get_field('mission_tittle');
        $mission_describtion = get_field('mission_describtion');
        $vission_icon_image = get_field('vission_icon_image');
        $vission_tittle = get_field('vission_tittle');
        $vission_describtion = get_field('vission_describtion');
      ?>
      <section class="mission title-block section-margin" data-aos="fade-up" data-aos-duration="1800">
        <div class="container">
          <div class="row">
             <div class="col-md-6 col-12 d-flex">
                <div class="mission-card">
                   <div class="mission-img">
                      <?php if ($mission_icon_image): ?>
                        <img src="<?php echo esc_url($mission_icon_image['url']); ?>" alt="<?php echo esc_attr($mission_icon_image['alt']); ?>" srcset="">
                      <?php endif; ?>
                   </div>
                    <div class="mission-content">
                      <?php if ($mission_tittle) {?>
                        <h2><?php echo $mission_tittle; ?></h2>
                      <?php }?>
                     <?php if ($mission_describtion) {?>
                       <p><?php echo $mission_describtion; ?></p>
                     <?php }?>
                    </div>
                </div>
             </div>
             <div class="col-md-6 col-12 d-flex">
               <div class="mission-card">
                  <div class="mission-img">
                    <?php if ($vission_icon_image): ?>
                      <img src="<?php echo esc_url($vission_icon_image['url']); ?>" alt="<?php echo esc_attr($vission_icon_image['alt']); ?>" srcset="">
                    <?php endif; ?>
                  </div>
                   <div class="mission-content">
                     <?php if ($vission_tittle) {?>
                        <h2><?php echo $vission_tittle; ?></h2>
                      <?php }?>
                     <?php if ($vission_describtion) {?>
                       <p><?php echo $vission_describtion; ?></p>
                      <?php }?>
                   </div>
               </div>
             </div>
          </div>
        </div>
      </section>

      <!--peerImg-->
      <section class="peerImg">
         <div class="container">
            <div class="row">
               <div class="col-md-12" data-aos="fade-up" data-aos-duration="1800">
                  <div class="peer-img-sec">
                      <?php
                        $peer_image = get_field('peer_image');
                        if ($peer_image): ?>
                          <img src="<?php echo esc_url($peer_image['url']); ?>" alt="<?php echo esc_attr($peer_image['alt']); ?>" srcset="">
                      <?php endif; ?>
                  </div>
               </div>
            </div>
         </div>
      </section>

       <!-- peercontent -->
       <?php $peer_describtion= get_field('peer_describtion');
             $peer_tittle=get_field('peer_tittle');?> 
        <section class="peerContent title-block section-margin">
            <div class="container">
               <div class="peer-wrap" data-aos="fade-up" data-aos-duration="1800">
                  <div class="row" >
                     <div class="col-md-4 col-sm-6 d-flex">
                        <div class="peer-lft">
                        <?php
                          $peer_icon = get_field('peer_icon');
                          if ($peer_icon): ?>
                            <img src="<?php echo esc_url($peer_icon['url']); ?>" alt="<?php echo esc_attr($peer_icon['alt']); ?>" srcset="">
                          <?php endif; ?>
                        </div>
                     </div>
                      <div class="col-md-8 col-sm-6 d-flex">
                        <div class="peer-right">
                           <?php if ($peer_tittle) {?>
                              <h2><?php echo $peer_tittle; ?></h2>
                           <?php }?>
                            <?php  if ($peer_describtion) {?>
                              <p><?php echo $peer_describtion; ?></p>
                            <?php }?>
                        </div>
                      </div>
                  </div>
               </div>

            </div>
        </section>
        

        <!-- testimonial -->
        <?php $testimonial_tittle= get_field('testimonial_tittle','option');
             $testimonial_description=get_field('testimonial_description','option');?> 
         <section class="testimonial title-block section-margin">
            <div class="container">
               <div class="row align-items-center justify-content-between">
                  <div class="col-md-7 col-12" data-aos="fade-right" data-aos-duration="1800">
                  <?php if ($testimonial_tittle) {?>
                              <h2><?php echo $testimonial_tittle; ?></h2>
                           <?php }?>
                            <?php  if ($testimonial_description) {?>
                              <p><?php echo $testimonial_description; ?></p>
                            <?php }?>
                  </div>
                    <?php 
                      $testimonial_btn= get_field('testimonial_btn','options');
                     if($testimonial_btn): 
                        $link_url = $testimonial_btn['url'];
                        $link_title = $testimonial_btn['title'];
                   ?> 
                  <div class="col-md-2 col-12" data-aos="fade-left" data-aos-duration="1800">
                     <a href="<?php echo esc_url( $link_url ); ?>" class="cstm-btn"><?php echo esc_html( $link_title ); ?>
                        <span class="rght-arrw"><svg class="svg-inline--fa fa-arrow-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"></path></svg></span></a>
                        <?php endif; ?>
                  </div>
               </div>
                <div class="testimonial_tab_sec">
                  <div class="tab_links">
                  <?php if (have_rows('testimonial','option')):?>
                    <?php $i=1;?>
                    <?php while (have_rows('testimonial','option')): the_row(); ?>
                      <?php 
                        $testimonial_image= get_sub_field('testimonial_image'); 
                        $testimonial_tittle = get_sub_field('testimonial_tittle');
                        $testimonial_description= get_sub_field('testimonial_description');
                        
                      ?>
                     <button class="tablinks" onclick="openTab(event, '<?php echo $i; ?>Tab')" id="defaultOpen">
                       <div class="testimonial_img">
                            <?php
                               if ($testimonial_image): ?>
                                <img src="<?php echo esc_url($testimonial_image['url']); ?>" alt="<?php echo esc_attr($peer_icon['alt']);  ?>" srcset="">
                            <?php endif; ?>
                       </div>
                         <div class="testimonial_txt">
                          <?php if ($testimonial_tittle) {?>
                              <h5><?php echo $testimonial_tittle; ?></h5>
                           <?php }?>
                            <?php  if ($testimonial_description) {?>
                              <p><?php echo $testimonial_description; ?></p>
                          <?php }?>
                         </div>
                    </button>
                    <?php $i++;?>
                    <?php endwhile; ?>
                    <?php endif; ?>
                  </div>
                    <div class="tab_content">
                      <?php if (have_rows('testimonial','option')):
                            $j=1;
                          while (have_rows('testimonial','option')): the_row();
                            $star_rating=get_sub_field('star_rating');
                            $testimonial_content= get_sub_field('testimonial_content');
                      ?>
                      <div id="<?php echo $j; ?>Tab" class="tabcontent" data-aos="fade-left" data-aos-duration="1800">
                      <?php  if ($testimonial_content) {?>
                              <p><?php echo $testimonial_content; ?></p>
                          <?php }?>
                        <?php $emptystar=5-$star_rating;?>
                        <ul class="review-sec">
                           <?php
                              for($i=0;$i<$star_rating;$i++) 
                              {
                                 echo '<li><a class="fullstar" href="javascript:void(0)"><i class="fa-solid fa-star"></i></a></li>';
                              }
                              if($star_rating > 0)
                              {
                                for($i=0;$i<$emptystar;$i++)
                                {
                                  echo '<li><a class="emptystar" href="javascript:void(0)"><i class="fa-regular fa-star"></i></a></li>';
                                }
                              }
                            ?>

                          
                        </ul>
                      </div>
                      <?php $j++;?>
                      <?php endwhile; ?>
                      <?php endif; ?>
                    </div>
                </div>
            </div>
         </section>

        <!-- partners -->
        <?php $partner_tittle= get_field('partner_tittle','option');
             $partner_describtion=get_field('partner_describtion','option');?> 
         <section class="our-partners title-block ">
             <div class="container-fluid">
                <div class="row justify-content-center text-center">
                   <div class="col-md-8" data-aos="fade-up" data-aos-duration="1800">
                      <div class="partner-head">
                          <?php if ($partner_tittle) {?>
                              <h2><?php echo $partner_tittle; ?></h2>
                          <?php }?>
                          <?php  if ($partner_describtion) {?>
                              <p><?php echo $partner_describtion; ?></p>
                          <?php }?>
                      </div> 
                   </div>
                  <div class="partner-slider">
                    <?php
                      $partner_logo = get_field('partner_logo','option');
                      if ($partner_logo):
                        foreach ($partner_logo as $logo):
                           if (isset($logo['url'])): ?>
                      <div class="partner-item">
                         <div class="partner-img">
                            <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" srcset="">
                         </div>
                      </div>
                    <?php endif;
                      endforeach;
                    endif; ?>
                  </div>
                </div>
             </div>
         </section>

<?php get_footer(); ?>