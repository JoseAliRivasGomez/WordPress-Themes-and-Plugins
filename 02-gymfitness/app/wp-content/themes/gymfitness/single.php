<?php
    get_header();
?>

    <main class="contenedor seccion">
        <?php
            get_template_part('template-parts/post');
        ?>


        <div class="comentarios">
            <?php comment_form(); ?>

            <h3 class="text-center text-primary comentarios">Comentarios</h3>
            <ul class="lista-comentarios">
                <?php 
                    $comentarios = get_comments( array(
                        'post_id' => $post->ID,
                        'status' => 'approve'
                    ));

                    wp_list_comments( array(
                        'per_page' => 10,
                        'reverse_top_level' => false
                    ), $comentarios);
                ?>
            </ul>
        </div>
    </main>
    
<?php
    get_footer();
?>