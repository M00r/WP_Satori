<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package materialwp
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
        
        <!-- pasek widgetow -->
        <div class="footer-widgets">
            <div class="container">
                <div class="row">
                    <?php get_sidebar('footer'); ?>
                </div>
            </div>
        </div>
        <!-- copyrights -->
<div class="footer-bottom-row">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="site-info">
                    Copyright 2018 &copy; Iwo Szczeciński
                </div><!-- .site-info -->
            </div><!-- col-lg-12 -->
        </div><!-- .row -->
    </div><!-- .containr -->
</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
