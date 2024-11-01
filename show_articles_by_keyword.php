<?php
/*
 * Plugin Name: Show recent articles by keyword
 * Plugin URI: http://www.flomei.de/2014/03/18/wordpress-plugin-show-articles-by-keyword/
 * Description: Adds the shortcode [show_articles keyword=X num=Y] to display the Y latest articles including the keyword X. For more information check the Plugin URI 
 * Version: 1.0
 * Author: Florian Meier
 * Author URI: http://www.flomei.de
 */
 
function show_articles_by_keyword($atts) {
   
   global $wp_query;
   $postID = $wp_query->post->ID;

   $keyword = $atts['keyword'];
   $anzahl = (int)$atts['num'];
   $showdate = strtolower($atts['showdate']); // use: yes / no
   $order = strtolower($atts['order']);

   if($anzahl == 0 || !is_int($anzahl)) { $anzahl = 5; }
   if($showdate != 'no') { $showdate = 'yes'; }
   if($order != 'rand') { $order = 'date'; }

   // You should really give a keyword to the function, otherwise nothing is about to happen
   if(!$keyword == '') {

      $args = array('tag' => $keyword, 'numberposts' => $anzahl, 'orderby' => $order, 'exclude' => $postID);
      $articles = get_posts($args);

      // Do something with all those posts
      foreach($articles as $article ) {

         $thelink = get_page_link($article->ID);
         $title = get_the_title($article->ID);
         $current_article = get_post($article->ID);
         $date = date_i18n(get_option('date_format'), strtotime($article->post_date));

         // Do (output) magic to it
         $output .= '<section class="abk">';
         if($showdate == 'yes') { $output .= '<span class="abk_h"><a href="'.$thelink.'">'.$date.':&nbsp;'.$title.'</a></span>'; }
         else { $output .= '<span class="abk_h"><a href="'.$thelink.'">'.$title.'</a></span>'; }
         $output .= '</section>';

      }

      // Return what we just build
      return $output;
   }
}

add_shortcode('show_articles', 'show_articles_by_keyword');

?>