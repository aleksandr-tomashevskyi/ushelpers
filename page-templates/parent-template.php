<?php /* Template Name: parent-template */ ?>

<?php
get_header();
?>
     <main class="main">
            <?php
               get_template_part( 'template-parts/main-block');
            ?>
         <section class="parent-section">
            <div class="container">
            <?php
               get_template_part( 'template-parts/four-column-grid');
            ?>
            </div>
         </section>
         <?php
            get_template_part( 'template-parts/choice-links');
         ?>
</main>
<?php
get_footer();
?>