<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
  
  <style>
    body { margin: 0; padding: 0; font-family: sans-serif; }
  </style>
</head>

<body <?php body_class(); ?>>

<?php 
// Get the ID of the page set as the Front Page
$front_page_id = get_option('page_on_front'); 
?>

<div style="background:black; color:white; text-align:center; padding:10px 5px; font-size: 14px;">
  <?php 
    $text = get_field('announcement_text', $front_page_id);
    if($text){
        // We use echo without esc_html so the <u> tag from your WP dashboard actually works!
        echo $text; 
    } else {
        echo "Announcement text not found.";
    }
  ?>
</div>

<header style="display:flex; align-items:center; justify-content:space-between; padding: 15px 16px; background: white;">

  <div style="display:flex; align-items:center; gap: 15px;">
    
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="cursor:pointer;">
      <line x1="3" y1="12" x2="21" y2="12"></line>
      <line x1="3" y1="6" x2="21" y2="6"></line>
      <line x1="3" y1="18" x2="21" y2="18"></line>
    </svg>

    <?php 
    $logo = get_field('logo_image', $front_page_id);
    if($logo){
        echo '<img src="' . esc_url($logo['url']) . '" alt="Shop.co Logo" style="height: 22px; width: auto; margin-top: 4px;">';
    } else {
        echo '<strong style="font-size: 20px; font-weight: 900; letter-spacing: -1px;">SHOP.CO</strong>';
    }
    ?>
  </div>

  <div style="display:flex; align-items:center; gap: 16px;">
    
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="cursor:pointer;">
      <circle cx="11" cy="11" r="8"></circle>
      <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
    </svg>

    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="cursor:pointer;">
      <circle cx="9" cy="21" r="1"></circle>
      <circle cx="20" cy="21" r="1"></circle>
      <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
    </svg>

    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="cursor:pointer;">
      <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
      <circle cx="12" cy="7" r="4"></circle>
    </svg>

  </div>

</header>