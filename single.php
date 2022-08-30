<?php

   get_header();
?>
<main class="main">
   <div class="container">
<?php
while(have_posts()){
   the_post();
   the_title();
   the_content();
}

?>
</div>
</main>
<?php 

get_footer();

?>