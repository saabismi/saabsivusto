<?php
get_header();
?>

<section>

<article>

<h2><?php print get_queried_object()->name; ?></h2>
<p><?php print get_queried_object()->description; ?></p>

<div class="catgrid">

<?php


$id = get_queried_object()->term_id;
$tyyppi = get_queried_object()->taxonomy;
$alikategoriat = get_term_children($id, $tyyppi);
//$otsikko = get_term_children($id, 

foreach($alikategoriat as $alikategoria):
    $termi = get_term_by("id", $alikategoria, $tyyppi);

?>

<a href="<?php print get_term_link($alikategoria, $tyyppi); ?>">
<div class="littlecard center">
<!--<img src="http://localhost/wordpress/wp-content/uploads/2020/08/IMG_20200809_135028-1024x576.jpg <?php //the_post_thumbnail("large"); ?>" class="catpic">-->
<p class="catpictitle"><?php print $termi->name; ?></p>
<p>
<?php print substr(category_description($termi->term_id), 0, 100); ?>
<?php
$pituus = strlen(category_description($termi->term_id));
if ($pituus > 100) { print "...";} ?>
</p>
</div>
</a>

<?php endforeach; ?>

</div>

</article>

</section>

<?php
get_header();
?>