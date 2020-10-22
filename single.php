<?php
get_header();
?>


<section>
<?php

if (have_posts()) {
    while(have_posts()) {
        print"<article>";
        the_post();
        print"<h2 class=\"title\">";
        the_title();
        print"</h2>";
        print"<hr class=\"titlehr\">";
        the_content();
        print"</article>";
    }
}

?>
<article class="notopmargin">
<p class="center">
<span class="alignleft"><?php previous_post_link();?></span>
|
<span class="alignright"><?php next_post_link();?></span>
</p>
</article>

<article class="notopmargin">

<div class="comments">
<?php comments_template(); ?>
</div>

</article>

</section>

<?php
get_footer();
?>