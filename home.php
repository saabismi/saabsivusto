<?php
get_header();
?>


<section>


<article>

<h1 class="iso">Uusimmat julkaisut</h1>
<p>Täällä on listattuna kaikki viimeisimmät julkaisut sivustolla.</p>


<div class="catgrid">

<!--
<a href="">
<div class="littlecard center">
<img src="">
<p class="pinkki catpictitle">Tekstiä</p>
</div>
</a>-->


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

<?php




/*
if (have_posts()) {
    while(have_posts()) {
        print"<article class=\"notopmargin\">";
        the_post();
        print"<h1 class=\"title\">";
        the_title();
        print"</h1>
        <hr class=\"titlehr\">";
        the_content();
        print"</article>";
    }
}*/
?>
</section>

<?php
get_footer();
?>