# SHOP.CO E-commerce Mobile Homepage - WordPress Assignment

A dynamic, mobile-optimized e-commerce homepage built as a custom WordPress theme. This project translates a high-fidelity Figma design into a fully manageable CMS, allowing non-technical users to update marketing content, business statistics, and product collections without touching the code.

## Key Features

* **Pixel-Perfect Mobile Layout**: Strictly adheres to the Figma design specifications, locked to a 430px "Mobile Letterbox" view for consistent presentation on all devices.
* **Fully Dynamic CMS**: Powered by Advanced Custom Fields (ACF), allowing administrators to edit the announcement bar, hero banners, and brand partnerships.
* **WooCommerce Integration**: Products are pulled directly from the WooCommerce database. Changing a price in the dashboard automatically calculates and displays the discount percentage badge on the frontend.
* **Smart Rating System**: A custom PHP logic calculates and renders star icons dynamically based on a numerical rating score (1-5) assigned to each product.
* **Optimized Performance**: Built with a "vanilla" approach using clean PHP and inline CSS to ensure rapid loading times and zero dependency bloat.

## 🛠️ Tech Stack

* **CMS**: WordPress 
* **E-commerce**: WooCommerce 
* **Custom Fields**: ACF (Advanced Custom Fields) 
* **Frontend**: PHP, HTML5, CSS3 (Flexbox/Grid)
* **Environment**: Local WP / XAMPP 

## Project Structure

* `header.php`: Contains the site-wide mobile wrapper, dynamic announcement bar, and navigation.
* `front-page.php`: The main template file handling the Hero section, Stats, and the WooCommerce product loop.
* `functions.php`: Handles theme supports (WooCommerce, Title-tags) and custom security/UI filters.
* `footer.php`: Closes the layout wrapper and ensures proper script injection via `wp_footer()`.
* `/assets`: Stores local images and branding elements.

## Setup & Installation

1.  Ensure you have a local WordPress environment running (Local WP, XAMPP, etc.).
2.  Install and activate the **WooCommerce** and **Advanced Custom Fields** plugins.
3.  Clone this repository into your `/wp-content/themes/` directory.
4.  Activate the **Shop.co Assignment** theme from the WordPress Dashboard.
5.  Import the provided ACF field groups or recreate them based on the video demonstration.

## Video Demonstration

A full walkthrough of the frontend responsiveness and backend CMS management can be found here:
**[[Link of Loom Video](https://www.loom.com/share/3d1ad2d71b7346d5963f7f08d054e38d)]** 

---
**Developed by Sayan Kundu**