<?php
    get_header();
?>

    <main class="seccion contenedor">
        <ul class="listado-grid">
            <?php
                while( have_posts() ) { 
                    the_post();
                    get_template_part('template-parts/blog');
                }
            ?>
        </ul>
        <?php
            the_posts_pagination();
        ?>
    </main>

<?php
    get_footer();
?>