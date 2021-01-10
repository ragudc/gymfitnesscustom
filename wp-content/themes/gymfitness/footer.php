<footer class="site-footer">
          <hr>

          <div class="contenido-footer">
          <?php
          $args = array(
              'theme_location' => 'menu-principal',
              'container' => 'nav',
              'container_class' => 'menu-principal'
          );
           wp_nav_menu($args);
       ?>
       <p class="copyright"> Desarrollado Por <a target="_blank" href="https://www.linkedin.com/in/roberto-alejandro-agudelo-callejas-7624a334/"> Roberto A Agudelo C </a> </p>
          </div>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>