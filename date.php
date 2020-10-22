<?php
get_header();
?>


<section>

<article>

<h1 class="iso">Valitun kuukauden kaikki julkaisut:</h1>

<br>

<div class="catgrid">


<?php

if (have_posts()) {
    while(have_posts()) {
        the_post();
        print "<a href=\"";
        print get_permalink();
        print "\">";
        print "<div class=\"littlecard center\">";
        print"<p class=\"catpictitle\">";
        the_title();
        print"</p>";
        //print "<hr class=\"titlehr\">";
        print "</div>";
        print "</a>";
    }
}
?>

</div>

</article>

</section>

<?php
get_footer();
?>