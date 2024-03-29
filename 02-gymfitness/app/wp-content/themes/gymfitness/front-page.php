<?php
    get_header();
?>

    <section class="bienvenida seccion contenedor text-center">
        <h2 class="text-primary">
            <?php the_field('encabezado_bienvenida'); ?>
        </h2>
        <p><?php the_field('texto_bienvenida'); ?></p>
    </section>

    <section class="areas">
        <div class="area">
            <?php 
                $area1 = get_field('area_1');
                $imagen = $area1['imagen']['sizes']['medium_large'];
                $texto = $area1['texto'];
            ?>
            <img src="<?php echo esc_attr( $imagen ); ?>" alt="Imagen <?php echo esc_attr($texto); ?>">
            <p><?php echo esc_html( $texto ); ?></p>
        </div>

        <div class="area">
            <?php 
                $area2 = get_field('area_2');
                $imagen2 = $area2['imagen2']['sizes']['medium_large'];
                $texto2 = $area2['texto2'];
            ?>
            <img src="<?php echo esc_attr( $imagen2 ); ?>" alt="Imagen <?php echo esc_attr($texto2); ?>">
            <p><?php echo esc_html( $texto2 ); ?></p>
        </div>

        <div class="area">
            <?php 
                $area3 = get_field('area_3');
                $imagen3 = $area3['imagen3']['sizes']['medium_large'];
                $texto3 = $area3['texto3'];
            ?>
            <img src="<?php echo esc_attr( $imagen3 ); ?>" alt="Imagen <?php echo esc_attr($texto3); ?>">
            <p><?php echo esc_html( $texto3 ); ?></p>
        </div>

        <div class="area">
            <?php 
                $area4 = get_field('area_4');
                $imagen4 = $area4['imagen4']['sizes']['medium_large'];
                $texto4 = $area4['texto4'];
            ?>
            <img src="<?php echo esc_attr( $imagen4 ); ?>" alt="Imagen <?php echo esc_attr($texto4); ?>">
            <p><?php echo esc_html( $texto4 ); ?></p>
        </div>
    </section>

    <main class="contenedor seccion">
        <h2 class="text-center text-primary">Nuestras Clases</h2>

        <?php gymfitness_lista_clases(4); ?>

        <div class="contenedor-boton">
            <a href="<?php echo esc_url( get_permalink( get_page_by_title('Nuestras Clases') ) ); ?>" class="boton boton-primario">
                Ver todas las clases
            </a>
        </div>
    </main>

    <section class="contenedor seccion">
        <h2 class="text-center text-primary">Nuestros Instructores</h2>
        <p class="text-center">Instructores profesionales que te ayudarán a lograr tus objetivos</p>

        <?php gymfitness_instructores(); ?>
    </section>

    <section class="testimoniales">
        <h2 class="text-center text-blanco">Testimoniales</h2>

        <div class="contenedor-testimoniales swiper">
            <?php gymfitness_testimoniales(); ?>
        </div>
    </section>

    <section class="contenedor seccion">
        <h2 class="text-center text-primary">Nuestro Blog</h2>
        <p class="text-center">Aprende tips de nuestros instructores expertos</p>

        <ul class="listado-grid">
            <?php 
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 4
                );
                $blog = new WP_Query($args);
                while($blog->have_posts()) {
                    $blog->the_post();

                    get_template_part('template-parts/blog');
                }
                wp_reset_postdata();
            ?>
        </ul>
    </section>
    
<?php
    get_footer();
?>