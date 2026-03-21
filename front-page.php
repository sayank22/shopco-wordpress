<?php get_header(); ?> <?php 
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

<section style="background-color: black; padding: 25px 16px; display: flex; flex-wrap: wrap; justify-content: center; align-items: center; gap: 20px;">
  
  <?php 
  // Loop through the 5 possible ACF image slots dynamically
  for ($i = 1; $i <= 5; $i++) {
      
      // Construct the field name (brand_logo_1, brand_logo_2, etc.)
      $logo_field = 'brand_logo_' . $i;
      $brand_logo = get_field($logo_field, $front_page_id);
      
      // If the user uploaded an image in this slot, render it
      if ($brand_logo) {
          echo '<img src="' . esc_url($brand_logo['url']) . '" alt="Brand Logo" style="height: 24px; max-width: 100%; object-fit: contain;">';
      }
  }
  ?>

</section>

<section style="padding: 40px 16px; text-align: center; background: white;">
  
  <h2 style="margin: 0 0 30px 0; font-size: 32px; font-weight: 900; text-transform: uppercase;">New Arrivals</h2>

  <div style="display: flex; gap: 15px; text-align: left; overflow-x: auto; padding-bottom: 10px;">
    <?php
    // 1. Get the category ID chosen by the user in ACF
    $category_id = get_field('new_arrivals', $front_page_id);

    // 2. Set up the "Database Query" arguments
    $args = array(
        'post_type'      => 'product',
        'posts_per_page' => 2, // Only fetch 2 products as per assignment
    );

    // 3. If the user selected a category, filter by it
    if ($category_id) {
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'product_cat',
                'field'    => 'term_id',
                'terms'    => $category_id,
            ),
        );
    }

    // 4. Run the query
    $loop = new WP_Query($args);

    if ($loop->have_posts()) :
        while ($loop->have_posts()) : $loop->the_post(); 
            global $product; // Get access to WooCommerce product data
            ?>
            
            <div style="flex: 0 0 calc(50% - 7.5px); text-decoration: none; color: black;">
                
                <div style="background: #F0EEED; border-radius: 13px; overflow: hidden; margin-bottom: 10px; aspect-ratio: 4/5;">
                    <?php echo $product->get_image('medium', array('style' => 'width: 100%; height: 100%; object-fit: cover;')); ?>
                </div>
                
                <h3 style="font-size: 16px; font-weight: 700; margin: 0 0 5px 0;">
                    <?php the_title(); ?>
                </h3>
                
                <div style="color: #FFC633; font-size: 14px; margin-bottom: 5px;">
                    ★★★★<span style="color: #ccc;">★</span> <span style="color: black; font-size: 12px;">4.5/5</span>
                </div>
                
                <div style="font-size: 20px; font-weight: 700;">
                    <?php echo $product->get_price_html(); ?>
                </div>

            </div>

        <?php 
        endwhile;
    else:
        echo '<p>No products found in this category.</p>';
    endif;
    
    // Reset post data to keep WordPress clean
    wp_reset_postdata(); 
    ?>
  </div>

  <a href="#" style="display: block; margin-top: 25px; padding: 15px; border: 1px solid #e0e0e0; border-radius: 62px; text-decoration: none; color: black; font-weight: 500; font-size: 14px;">
    View All
  </a>

</section>