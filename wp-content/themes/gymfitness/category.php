<?php get_header(); ?>

    <?php
       $categoria = get_queried_object();
    ?>
    <h2 class="text-center texto-primario categorias"> Categoría: 
        <?php echo $categoria->name; ?>
    </h2>
    <main class="pagina seccion no-sidebar contenedor">
   <ul class="listado-blog">
         <?php while(have_posts()) : the_post(); ?>
            <?php get_template_part('template-parts/loop', 'blog'); ?>
         <?php endwhile; ?>
   </ul>
</main>
<?php get_footer(); ?>