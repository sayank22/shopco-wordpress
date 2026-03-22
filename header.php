<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
  
  <style>
    body {
      margin:0;
      padding:0;
      font-family:sans-serif;
      background-color: #E5E5E5; 
    }

    html {
      margin:0 !important;
      padding:0;
    }

    * {
      box-sizing:border-box;
    }

    header,
    div {
      margin:0;
    }

    /* 2. The Mobile Wrapper Class */
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

<div style="background:black; color:white; font-size: clamp(10px, 2vw, 12px); min-height: 34px; padding: 8px 16px; display: flex; align-items: center; justify-content: center; box-sizing: border-box; text-align: center;">
  <?php 
    $text = get_field('announcement_text', $front_page_id);
    if($text){
        echo $text; 
    }
  ?>
</div>

<header style="
display:flex;
align-items:center;
justify-content:space-between;
padding: 23px 16px 16px 16px;
background:white;
">

<div style="
display:flex;
align-items:center;
gap:16px;
">

<svg width="24" height="24" viewBox="0 0 24 24"
fill="none" stroke="black" stroke-width="2"
stroke-linecap="round" stroke-linejoin="round"
style="cursor:pointer;">
<line x1="3" y1="12" x2="21" y2="12"></line>
<line x1="3" y1="6" x2="21" y2="6"></line>
<line x1="3" y1="18" x2="21" y2="18"></line>
</svg>

<?php 
$logo = get_field('logo_image', $front_page_id);
if($logo){
echo '<img src="' . esc_url($logo['url']) . '" 
style="width:126px;height:18px;object-fit:contain;">';
}
?>

</div>


<div style="
display:flex;
align-items:center;
gap:12px;
">

<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
stroke="black" stroke-width="2"
stroke-linecap="round" stroke-linejoin="round">
<circle cx="11" cy="11" r="8"></circle>
<line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>

<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
stroke="black" stroke-width="2"
stroke-linecap="round" stroke-linejoin="round">
<circle cx="9" cy="21" r="1"></circle>
<circle cx="20" cy="21" r="1"></circle>
<path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
</svg>

<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
stroke="black" stroke-width="2"
stroke-linecap="round" stroke-linejoin="round">
<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
<circle cx="12" cy="7" r="4"></circle>
</svg>

</div>

</header>