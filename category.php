<?php
get_header();
?>


<section>

<article class="category">

<h1 class="iso"><?php print get_queried_object()->name; ?></h1>
<p><?php print get_queried_object()->description; ?></p>

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