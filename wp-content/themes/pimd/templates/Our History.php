<?php 
/**
* Template Name: PAGE::Our-history page
**/
get_header(); ?>

 <!--history banner-->
 <?php
       $banner_image = get_field('banner_image');
       $banner_bg_image_url = '';
      if($banner_image){
         $banner_bg_image_url =  $banner_image['url'];
      }else{
             $banner_bg_image_url =  get_template_directory_uri().'/assets/images/hstry-bnnr.jpg';
        }
    ?>
 <section
      class="bnnr-sec innr-bnnr pimd-histry-bnnr"
      style="background-image: url('<?php echo $banner_bg_image_url; ?>')"
    >
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-12 " data-aos="fade-right" data-aos-duration="1800">
            <div class="bnnr-cntnt title-block text-left">
              <h2><?php the_title(); ?></h2>
              <ul class="breadcrumb">
                <li><a href="<?php echo home_url();?>">Home</a></li>
                <!-- <li><a href="#">About</a></li> -->
                <li>About - <?php the_title(); ?></li>
              </ul>

            </div>
          </div>
        </div>
      </div>
    </section>



    <!-- history of PIMD -->
    <?php
        $history_image_one = get_field('history_image_one');
        $history_title_one = get_field('history_tittle_one');
        $history_text_one = get_field('history_text_one');
        $history_image_two = get_field('history_image_two');
        $history_text_two = get_field('history_text_two');
?>
    <section class="about-pimd title-block section-margin pimd-history">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-5 col-12" data-aos="fade-right" data-aos-duration="1800">
            <div class="abt-img">
               <?php if ( $history_image_one ) : ?>
                    <img src="<?php echo esc_url($history_image_one['url']); ?>" alt="<?php echo esc_attr($history_image_one['alt']); ?>" />
                <?php endif; ?>
            </div>
          </div>
          <div class="col-md-7 col-12" data-aos="fade-left" data-aos-duration="1800">
            <div class="abt-txt">
                <?php if ($history_title_one) {?>
                      <h2><?php echo $history_title_one; ?></h2>
                <?php }?>
                <?php  $history_text_one = get_field('history_text_one');
                   if ($history_text_one) {?>
                      <?php echo $history_text_one; ?>
                <?php }?>
            </div>
          </div>
          </div>


        </div>
      </div>
    </section>

    <section class="pimd-history pimd-history-bottom section-margin title-block">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-5 col-12" data-aos="fade-left" data-aos-duration="1800">
              <div class="abt-img">
                <?php if ($history_image_two) : ?>
                    <img src="<?php echo esc_url($history_image_two['url']); ?>" alt="<?php echo esc_attr($history_image_two['alt']); ?>" />
                <?php endif; ?>
              </div>
            </div>
            <div class="col-md-7 col-12" data-aos="fade-right" data-aos-duration="1800">
              <div class="abt-txt">
              <?php  $history_text_two = get_field('history_text_two');
                   if ($history_text_two) {?>
                     <?php echo $history_text_two; ?>
                <?php }?>
            </div>
            </div>
          </div>
        </div>
    </section>

<!--------------Step---------->
<section class="step-sec title-block">
  <div class="container">
      <div class="row">
          <div class="row justify-content-center">
              <div class="col-lg-7 col-md-10" data-aos="fade-up" data-aos-duration="1800">
                  <div class="section-title text-center">
                      <h5>Take action right now</h5>
                       <h2>Help us safeguard the air we breathe, the water we drink, and the places we treasure.</h2>
                  </div>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-md-12" >
              <div class="step-wrap">
              <?php if( have_rows('steps') ): ?>
                   <?php while( have_rows('steps') ): the_row(); 
                      $step_image = get_sub_field('step_image');
                      $step_year = get_sub_field('step_year');
                      $step_description = get_sub_field('step_description');
                      $i=1;
                      switch ($i) {
                        case 1:
                            $section_class = 'row justify-end align-items-center';
                            break;
                        case 2:
                            $section_class = 'row justify-content-flex-end align-items-center';
                            break;
                        default:
                            $section_class = 'default-class'; 
                            break;
                    }
                   ?>
                  <div class="row justify-end align-items-center">
                      <div class="col-md-6" data-aos="fade-right" data-aos-duration="1800">
                          <div class="step-img">
                          <?php if ($step_image) : ?>
                    <img src="<?php echo esc_url($step_image['url']); ?>" alt="<?php echo esc_attr($step_image['alt']); ?>" />
                <?php endif; ?>   
                          </div>
                      </div>
                      <div class="col-md-6" data-aos="fade-left" data-aos-duration="1800">
                           <div class="step-content-box">
                               <?php if ($step_year) {?>
                                 <h3><?php echo $step_year; ?></h3>
                               <?php }?>
                               <?php if ($step_description) {?>
                                    <p><?php echo $step_description; ?></p>
                               <?php }?>  
                          </div>
                      </div>
                  </div>
                  <?php  $i++;
                  endwhile; 
               endif; ?>

                  <div class="header-line">
                    
                    <div class="timeline">
                      <ul>
                        <span class="default-line"></span>
                        <span class="draw-line"></span>
                        <?php if( have_rows('steps') ): ?>
                            <?php while( have_rows('steps') ): the_row(); ?>
                          <li>
                            <div>
                            </div> 
                          </li>
                          <?php endwhile; ?>
                      <?php endif; ?>

                         
                        
                         
                          
                          
                      </ul>
                    </div>
              </div>
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