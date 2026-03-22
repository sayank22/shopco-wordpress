<?php get_header(); ?> 

<div class="page-wrap">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
  
  <style>
    body { margin: 0; padding: 0; font-family: sans-serif; background-color: #E5E5E5; }
    
   
    .page-wrap {
      max-width: 430px; 
      margin: 0 auto; 
      background: white;
      min-height: 100vh;
      overflow-x: hidden; 
      box-shadow: 0 0 20px rgba(0,0,0,0.1); 
    }
  </style>
</head>

<body <?php body_class(); ?>>

<div class="page-wrap">

<?php 
$front_page_id = get_option('page_on_front'); 
?>

<section style="background-color: #F2F0F1; padding: 40px 16px 0 16px; overflow: hidden; font-family: 'Satoshi', sans-serif;">
  
  <h1
style="
font-family:'Integral CF', sans-serif;
font-size:36px;
font-weight:700;
line-height:34px;
letter-spacing:0px;
text-transform:uppercase;
margin:0 0 16px 0;
max-width:315px;
"
>
<?php echo esc_html(get_field('hero_heading', $front_page_id)); ?>
</h1>
  
  <p
style="
font-family:'Satoshi', sans-serif;
font-size:14px;
font-weight:400;
line-height:20px;
color:rgba(0,0,0,0.6);
margin:0 0 24px 0;
"
>
<?php echo esc_html(get_field('hero_subheading', $front_page_id)); ?>
</p>
  
  <a href="<?php echo esc_url(get_field('hero_button_link', $front_page_id)); ?>"
style="
display:flex;
justify-content:center;
align-items:center;
width:100%;
height:52px;
background:#000;
color:#fff;
border-radius:62px;
text-decoration:none;
font-family:'Satoshi', sans-serif;
font-size:14px;
font-weight:500;
margin-bottom:24px;
box-sizing:border-box;
">
<?php echo esc_html(get_field('hero_button_text', $front_page_id)); ?>
</a>


 <!-- Stats Section --> 
  <div style="
display:flex;
flex-direction:column;
align-items:center;
gap:12px;
margin-bottom:12px;
">

  <div style="
  display:flex;
  align-items:center;
  justify-content:center;
  gap:28px;
  ">

    <div style="text-align:left;">
      <div style="
      font-size:24px;
      font-weight:700;
      line-height:1;
      ">
        <?php echo esc_html(get_field('stat_1_number', $front_page_id)); ?>
      </div>

      <div style="
      font-size:12px;
      color:rgba(0,0,0,0.6);
      margin-top:4px;
      ">
        <?php echo esc_html(get_field('stat_1_label', $front_page_id)); ?>
      </div>
    </div>

    <div style="
    width:1px;
    height:40px;
    background:rgba(0,0,0,0.1);
    "></div>

    <div style="text-align:left;">
      <div style="
      font-size:24px;
      font-weight:700;
      line-height:1;
      ">
        <?php echo esc_html(get_field('stat_2_number', $front_page_id)); ?>
      </div>
      <div style="
      font-size:12px;
      color:rgba(0,0,0,0.6);
      margin-top:4px;
      ">
        <?php echo esc_html(get_field('stat_2_label', $front_page_id)); ?>
      </div>
    </div>
  </div>

  <div style="
  text-align:left;
  margin-top:4px;
  ">
    <div style="
    font-size:24px;
    font-weight:700;
    line-height:1;
    ">
      <?php echo esc_html(get_field('stat_3_number', $front_page_id)); ?>
    </div>
    <div style="
    font-size:12px;
    color:rgba(0,0,0,0.6);
    margin-top:4px;
    ">
      <?php echo esc_html(get_field('stat_3_label', $front_page_id)); ?>
    </div>
  </div>
</div>

<!-- Hero Image with Stars -->
  <div style="position: relative; margin: 0 -16px;">
  <?php $hero_image = get_field('hero_image', $front_page_id); ?>
  <?php if($hero_image): ?>
    <img 
      src="<?php echo esc_url($hero_image['url']); ?>" 
      style="
        width: 100%;
        height: 448px;
        object-fit: cover;
        object-position: top;
        display: block;
      "
    >
  <?php endif; ?>

  <img src="<?php echo get_template_directory_uri(); ?>/assets/star.png"
       style="
         position:absolute;
         top:40px;
         right:21px;
         width:76px;
         height:76px;
       ">

  <img src="<?php echo get_template_directory_uri(); ?>/assets/star.png"
       style="
         position:absolute;
         top:137px;
         left:27px;
         width:44px;
         height:44px;
       ">
</div>

</section>

<!-- Brand Logos -->
<section style="
background:#000;
height:146px;
padding:16px;
box-sizing:border-box;
display:flex;
flex-direction:column;
justify-content:center;
gap:16px;
">

<div style="
display:flex;
justify-content:space-between;
align-items:center;
">

<?php
$logos = [];

for ($i = 1; $i <= 5; $i++) {
    $logos[$i] = get_field('brand_logo_' . $i, $front_page_id);
}
?>

<?php if($logos[1]) echo '<img src="'.$logos[1]['url'].'" style="height:24px;">'; ?>
<?php if($logos[2]) echo '<img src="'.$logos[2]['url'].'" style="height:24px;">'; ?>
<?php if($logos[3]) echo '<img src="'.$logos[3]['url'].'" style="height:24px;">'; ?>
</div>

<div style="
display:flex;
justify-content:center;
gap:40px;
align-items:center;
">

<?php if($logos[4]) echo '<img src="'.$logos[4]['url'].'" style="height:24px;">'; ?>
<?php if($logos[5]) echo '<img src="'.$logos[5]['url'].'" style="height:24px;">'; ?>
</div>
</section>


<!-- New Arrivals -->
<section style="
padding: 50px 16px;
background:white;
font-family:'Satoshi', sans-serif;
">

<h2 style="
font-family:'Integral CF', sans-serif;
font-size:32px;
font-weight:700;
text-transform:uppercase;
margin:0 0 24px 0;
text-align:center;
letter-spacing:0;
">
NEW ARRIVALS
</h2>


<div style="display:flex; gap:16px; overflow-x:auto; padding-bottom:8px;">

<?php
$category_id = get_field('new_arrivals', $front_page_id);

$args = array(
    'post_type'      => 'product',
    'posts_per_page' => 2,
);

if ($category_id) {
    $args['tax_query'] = array(
        array(
            'taxonomy' => 'product_cat',
            'field'    => 'term_id',
            'terms'    => $category_id,
        ),
    );
}

$loop = new WP_Query($args);

if ($loop->have_posts()) :
    while ($loop->have_posts()) : $loop->the_post();
        global $product;
        $product_id = $product->get_id();
?>

<div style="flex:0 0 calc(50% - 8px); color:black; text-decoration:none;">

    <div style="background:#F0EEED; border-radius:13px; overflow:hidden; margin-bottom:10px; aspect-ratio:1/1.2; display:flex; align-items:center; justify-content:center;">
        <?php
        echo $product->get_image(
            'medium',
            array('style'=>'width:100%;height:100%;object-fit:contain;')
        );
        ?>
    </div>

    <h3 style="font-size:14px; font-weight:700; margin:0 0 4px 0; font-family:'Satoshi', sans-serif;">
        <?php the_title(); ?>
    </h3>

    <div style="font-size:13px; margin-bottom:4px; display:flex; align-items:center; gap:6px;">

<?php
$rating_val = get_field('rating_score', $product_id);
$rating = $rating_val ? floatval($rating_val) : 5;

for ($i = 1; $i <= 5; $i++) {

    if ($rating >= $i) {

        echo '<svg width="14" height="14" viewBox="0 0 24 24" fill="#FFC633">
        <path d="M12 .587l3.668 7.431 8.2 1.193-5.934 5.787 
        1.401 8.168L12 18.896l-7.335 3.87 
        1.401-8.168L.132 9.211l8.2-1.193z"/>
        </svg>';

    } elseif ($rating > ($i - 1)) {

        echo '
        <svg width="14" height="14" viewBox="0 0 24 24">
        <defs>
            <linearGradient id="half">
                <stop offset="50%" stop-color="#FFC633"/>
                <stop offset="50%" stop-color="#E0E0E0"/>
            </linearGradient>
        </defs>
        <path fill="url(#half)" d="M12 .587l3.668 7.431 8.2 1.193-5.934 5.787 
        1.401 8.168L12 18.896l-7.335 3.87 
        1.401-8.168L.132 9.211l8.2-1.193z"/>
        </svg>
        ';
    } else {
        echo '<svg width="14" height="14" viewBox="0 0 24 24" fill="#E0E0E0">
        <path d="M12 .587l3.668 7.431 8.2 1.193-5.934 5.787 
        1.401 8.168L12 18.896l-7.335 3.87 
        1.401-8.168L.132 9.211l8.2-1.193z"/>
        </svg>';
    }
}
?>
<span style="color:rgba(0,0,0,0.6); font-size:12px; font-family:'Satoshi', sans-serif;">
    <?php echo esc_html($rating); ?>/5
</span>
</div>

    <div style="display:flex; align-items:center; gap:8px; font-family:'Satoshi', sans-serif;">
        <?php 
        $regular_price = $product->get_regular_price();
        $sale_price = $product->get_sale_price();

        if ( $product->is_on_sale() && $regular_price ) : 
            $discount_percentage = round( ( ( $regular_price - $sale_price ) / $regular_price ) * 100 );
        ?>
            <span style="font-size:18px; font-weight:700;">$<?php echo esc_html($sale_price); ?></span>
            <span style="font-size:18px; font-weight:700; color:rgba(0,0,0,0.4); text-decoration:line-through;">$<?php echo esc_html($regular_price); ?></span>
            <span style="background-color:#FFEEEE; color:#FF3333; font-size:10px; font-weight:500; padding:4px 10px; border-radius:62px;">
                -<?php echo esc_html($discount_percentage); ?>%
            </span>
        <?php else : ?>
            <span style="font-size:18px; font-weight:700;">$<?php echo esc_html($regular_price); ?></span>
        <?php endif; ?>
    </div>
</div>

<?php
    endwhile;
else:
    echo '<p>No products found</p>';
endif;

wp_reset_postdata();
?>
</div>

<a href="#"
style="
font-family:'Satoshi', sans-serif;
display:flex;
justify-content:center;
align-items:center;
height:46px;
width:100%;
margin-top:24px;
border:1px solid rgba(0,0,0,0.1);
border-radius:62px;
text-decoration:none;
color:black;
font-weight:500;
font-size:14px;
box-sizing:border-box;
">
View All
</a>

</section>

</section>

<?php get_footer(); ?>