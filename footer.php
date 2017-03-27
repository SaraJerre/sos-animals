 <!-- FOOTER -->
      <footer class="site-footer">
        <div class="container">
          <div class="row">
            <ul class="list-inline col-md-12">
              <?php if ( is_active_sidebar( 'footer-area' ) ) : ?>
                  <?php dynamic_sidebar( 'footer-area' ); ?>
              <?php endif; ?>
            </ul><!-- /.list-inline -->
          </div> <!-- /row -->
        </div><!-- /container -->
      </footer>
    
    <?php wp_footer(); ?>
  </body>
</html>