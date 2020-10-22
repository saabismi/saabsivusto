<?php
get_header();
?>

<section>

<article>

<?php
global $wp_query;
$total_results = $wp_query->found_posts;
global $otsikko;

print"<h1 class=\"title2\">Hakusanalla <span class=\"pinkki\">";
the_search_query();

if ($total_results == 1) {
  print"</span> löytyi " . $total_results . " tulos:</h1>";
} else if ($total_results == 0) {
  print"</span> ei löytynyt yhtään tulosta.</h1>";
} else {
  print"</span> löytyi " . $total_results . " tulosta:</h1>";
} 
?>
</article>


<?php if ( have_posts() ) { ?>

            <ul>

            <?php while ( have_posts() ) { the_post(); ?>

            <article class="notopmargin">
               <li>
                 <h3><a href="<?php echo get_permalink(); ?>">
                   <?php the_title();  ?>
                 </a></h3>
                 <?php  the_post_thumbnail('medium') ?>
                 <?php echo substr(get_the_excerpt(), 0,200); ?>
                 <div> <a href="<?php the_permalink(); ?>">Lue lisää</a></div>
               </li>
            </article>

            <?php } ?>

            </ul>

           <?php echo paginate_links(); ?>

        <?php } ?>



</section>

<?php
get_footer();
?>