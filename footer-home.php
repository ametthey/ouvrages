            <footer>

                <a href="#">mentions légales</a>

                <div class="footer--credits"><a href="#">Graphisme: Current Matters.ltd</a> <a href="#">Développement: Albin Metthey</a></div>

                <!-- COPYRIGHT AND YEAR -->
                <?php $footer_message = '&copy;' . date( 'Y' ) . ' ' . get_bloginfo( 'name' ); ?>
                <p><?php echo apply_filters( '_themename_footer_message', $footer_message ); ?></p>

            </footer>


        <?php wp_footer(); ?>
	</body>
</html>
