<?php get_header(); ?>

    <?php
       $autor = get_queried_object();
      
    ?>
    <h2 class="text-center texto-primario categorias"> Autor: 
        <?php echo $autor->data->display_name; ?>
    </h2>
    <main class="pagina seccion no-sidebar contenedor">
    <ul class="listado-blog">
         <?php while(have_posts()) : the_post(); ?>
            <?php get_template_part('template-parts/loop', 'blog'); ?>
         <?php endwhile; ?>
    </ul>
</main>
<?php get_footer(); ?>