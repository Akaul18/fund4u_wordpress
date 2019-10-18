<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fundforu
 */

get_header();
?>
<div id="primary" class="content-area">
  <main id="main" class="site-main">

    <div>
      <section>
      <?php
      $sections = array(
        array(
          'category_name'    =>  'Home',
          'posts_per_page'   =>  '1',
          'order'            =>  'DESC'
        ),
        array(
          'category_name'    =>  'Features',
          'posts_per_page'   =>  '1',
          'order'            =>  'DESC'
        ),
        array(
          'category_name'    =>  'Screenshots',
          'posts_per_page'   =>  '1',
          'order'            =>  'DESC'
        ),
        array(
          'category_name'    =>  'About',
          'posts_per_page'   =>  '2',
          'order'            =>  'ASC'
        ),
        array(
          'category_name'    =>  'Download',
          'posts_per_page'   =>  '1',
          'order'            =>  'DESC'
        ),
        array(
          'category_name'    =>  'Contact',
          'posts_per_page'   =>  '1',
          'order'            =>  'DESC'
        )
      );
      foreach($sections as $section)
      {
        $my_loop = new WP_Query($section);
        if($my_loop->have_posts()) :
          while($my_loop->have_posts()):
            $my_loop->the_post();
            get_template_part('template-parts/content', get_post_type());
          endwhile;
        else:
            get_template_part('template-parts/content', 'none');
        endif;
        wp_reset_postdata();
      }

      ?>
  </section>
  </div>


</main>
</div>
<?php
  get_footer();
?>
