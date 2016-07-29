      </main><!-- /.main -->
    </div><!-- /.content -->
  </div><!-- /.wrap -->

<footer>
    <p class="copyright">&copy; <?php echo date('Y'); ?> Sticky Pictures</p>
    <?php footer_social_links(); ?>
</footer>
<script type="text/javascript">
  <?php if( defined('AUTOPLAY_VIDEO') && !AUTOPLAY_VIDEO ) : ?>
    var video_autoplay = false;
  <?php else: ?>
    var video_autoplay = true;
  <?php endif; ?>
</script>
<?php wp_footer(); ?>

</body>
</html>
