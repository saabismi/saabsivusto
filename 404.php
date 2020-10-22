<?php
get_header();
?>



<section>

<article class="regular">

<h1 class="iso">
Virhe 404!
</h1>

<hr class="titlehr">

<h2 class="red">
Pyytämääsi sivua ei löytynyt!
</h2>

<h3>Tarkista seuraavat asiat:</h3>
<ul>
<li>Osoitteen oikeinkirjoitus</li>
<li>Selaimen välimuisti</li>
<li>Jos sivustolla on mielestäsi virhe, ota yhteys järjestelmänvalvojaan: <a href="mailto: <?php bloginfo("admin_email"); ?>"><?php bloginfo("admin_email"); ?></a></li>
</ul>

</article>

</section>

<?php
get_footer();
?>