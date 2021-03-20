<?php get_header();?>

<div class="box">

<h1 class="header-text">Heading</h1>
<p class="header-paragraph">Lorem ipsum dolor sit amet, consect etur adipiscing elit.</p>
<br></br>




<?php
   if( have_posts() ){

    while( have_posts() ){

        the_post();
        the_content();
    }

   }

?>




</div>


<?php get_footer();?>