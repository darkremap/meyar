<?php get_header(); ?>

<main >
  <?php
  // Get the page with homeContent template
  $home_page = get_pages(array(
      'meta_key' => '_wp_page_template',
      'meta_value' => 'homeContent.php'
  ));

  if($home_page) {
      // Set up post data
      global $post;
      $post = $home_page[0];
      setup_postdata($post);
      
      // Load the template
      get_template_part('homeContent');
      
      // Reset post data
      wp_reset_postdata();
  }
  ?>

</main>


<?php get_footer(); ?>