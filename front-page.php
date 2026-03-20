<?php get_header(); ?> <?php 
// Grab the front page ID again
$front_page_id = get_option('page_on_front'); 
?>

<section style="background-color: #F2F0F1; padding: 30px 16px 0 16px; overflow: hidden;">
  
  <h1 style="margin: 0 0 15px 0; font-size: 36px; font-weight: 900; line-height: 1; letter-spacing: -1px; text-transform: uppercase;">
    <?php echo esc_html(get_field('hero_heading', $front_page_id)); ?>
  </h1>
  
  <p style="margin: 0 0 25px 0; font-size: 14px; color: #666; line-height: 1.5;">
    <?php echo esc_html(get_field('hero_subheading', $front_page_id)); ?>
  </p>
  
  <a href="<?php echo esc_url(get_field('hero_button_link', $front_page_id)); ?>" style="display: block; background-color: black; color: white; text-align: center; padding: 16px; border-radius: 62px; text-decoration: none; font-size: 16px; font-weight: 500; margin-bottom: 30px;">
    <?php echo esc_html(get_field('hero_button_text', $front_page_id)); ?>
  </a>

  <div style="display: flex; flex-wrap: wrap; justify-content: space-between; margin-bottom: 10px;">
     <div style="width: 45%; border-right: 1px solid #ccc; margin-bottom: 15px;">
        <strong style="display: block; font-size: 24px;">200+</strong>
        <span style="font-size: 12px; color: #666;">International Brands</span>
     </div>
     <div style="width: 45%; margin-bottom: 15px; padding-left: 10px;">
        <strong style="display: block; font-size: 24px;">2,000+</strong>
        <span style="font-size: 12px; color: #666;">High-Quality Products</span>
     </div>
     <div style="width: 100%; text-align: center; margin-top: 10px;">
        <strong style="display: block; font-size: 24px;">30,000+</strong>
        <span style="font-size: 12px; color: #666;">Happy Customers</span>
     </div>
  </div>

  <?php $hero_image = get_field('hero_image', $front_page_id); ?>
  <?php if($hero_image): ?>
    <img src="<?php echo esc_url($hero_image['url']); ?>" alt="Hero Image" style="width: calc(100% + 32px); height: auto; display: block; margin: 0 -16px;">
  <?php endif; ?>

</section>