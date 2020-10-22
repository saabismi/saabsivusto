<?php
get_header();
?>


<section>

<?php

if (have_posts()) {
    while(have_posts()) {
        print"<article>";
        the_post();
        print"<h1 class=\"title\">";
        the_title();
        print"</h1>
        <hr class=\"titlehr\">";
        the_content();
        print"</article>";
    }
}
?>
</section>

<?php
get_footer();
?>