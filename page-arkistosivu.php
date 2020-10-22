<?php
get_header();
?>


<section>

<article>

<h1 class="title">Julkaisuarkisto kuukausittain:</h1>

<hr>

<div id="archive">

<?php wp_get_archives("type=monthly"); ?>

</div>

</article>


</section>

<?php
get_footer();
?>