<?php 
/**
* Template Name: PAGE::Ambassadors page
**/
get_header(); ?>

<?php
       $banner_image = get_field('banner_image');
       $banner_bg_image_url = '';
      if($banner_image){
         $banner_bg_image_url =  $banner_image['url'];
      }else{
             $banner_bg_image_url =  get_template_directory_uri().'/assets/images/ambassadors-hero.jpg';
        }
    ?>
    <section
      class="bnnr-sec innr-bnnr pimd-histry-bnnr executive-bnnr advisory-banner"
      style="background-image: url('<?php echo $banner_bg_image_url; ?>')"
    >
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-12 " data-aos="fade-right" data-aos-duration="1800">
            <div class="bnnr-cntnt title-block text-left">
            <?php  $banner_title = get_field('banner_tittle');
                   if ($banner_title) {?>
                  <h2><?php echo $banner_title; ?></h2>
            <?php }?>
              <ul class="breadcrumb">
                <li><a href="<?php echo home_url();?>">Home</a></li>
                <!-- <li><a href="#">About</a></li> -->
                <li>About - <?php echo $banner_title; ?></li>
              </ul>

            </div>
          </div>
        </div>
      </div>
    </section>
   


    <?php
    $top_team_category = get_field('top_team_category');
    $top_team_category_slug=$top_team_category->slug;
   $args = array(
    'post_type' => 'teams',
    'posts_per_page' => -1 ,
    'orderby' => 'post-id', 
    'order' => 'ASC',
    'tax_query' => array(
      array(
          'taxonomy' => 'team_categories', // the taxonomy slug
          'field'    => 'slug', // can be 'term_id', 'name', or 'slug'
          'terms'    => $top_team_category_slug, // the term (or array of terms) you want to filter by
          'operator' => 'IN', // can be 'IN', 'NOT IN', 'AND'
      ),
  ),
);
$query = new WP_Query($args);
if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post();?>
    <section class="about-pimd title-block  ambassadors-row">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 col-12" data-aos="fade-right" data-aos-duration="1800">
            <div class="abt-img">
            <?php if (has_post_thumbnail()) : ?>
                              <img src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" alt="<?php the_title_attribute(); ?>" srcset="">
                            <?php else : ?>
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/default-image.jpg'); ?>" alt="Default Image" srcset="">
                            <?php endif; ?>
            </div>
          </div>
          <div class="col-md-6 col-12" data-aos="fade-left" data-aos-duration="1800">
            <div class="abt-txt">
                <h2><?php the_title(); ?></h2>
                 <h5><?php echo esc_html(get_the_excerpt()); ?></h5>
                <?php the_content(); ?>
            </div>
          </div>
          </div>


        </div>
      </div>
    </section>
    <?php
       endwhile;
    wp_reset_postdata();
endif;
?>
    <!-- ambassadors -->
    <?php
     $other_team_category = get_field('other_team_category');
     $other_team_category_slug=$other_team_category->slug;
$i = 1;
$args = array(
    'post_type' => 'teams',
    'posts_per_page' => 4,
    'orderby' => 'post-id', 
    'order' => 'ASC',
    'tax_query' => array(
      array(
          'taxonomy' => 'team_categories', // the taxonomy slug
          'field'    => 'slug', // can be 'term_id', 'name', or 'slug'
          'terms'    => $other_team_category_slug, // the term (or array of terms) you want to filter by
          'operator' => 'IN', // can be 'IN', 'NOT IN', 'AND'
      ),
  ),
);
$query = new WP_Query($args);
if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post();
        switch ($i) {
            case 1:
                $section_class = 'section-margin title-block ambassadors-bottom executive-bottom';
                break;
            case 2:
                $section_class = 'about-pimd title-block section-margin ambassadors-row executive-row';
                break;
            case 3:
                $section_class = 'title-block ambassadors-bottom executive-bottom';
                break;
            default:
                $section_class = 'default-class'; 
                break;
        }
        ?>
        <section class="<?php echo $section_class; ?>">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 col-12" data-aos="fade-left" data-aos-duration="1800">
                        <div class="abt-img">
                            <?php if (has_post_thumbnail()) : ?>
                                <img src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" alt="<?php the_title_attribute(); ?>" srcset="">
                            <?php else : ?>
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/default-image.jpg'); ?>" alt="Default Image" srcset="">
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-md-6 col-12" data-aos="fade-right" data-aos-duration="1800">
                        <div class="abt-txt">
                            <h2><?php the_title(); ?></h2>
                            <h5><?php echo esc_html(get_the_excerpt()); ?></h5>
                              <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php
        $i++;
       endwhile;
    wp_reset_postdata();

endif;
?>
<?php get_footer(); ?>    