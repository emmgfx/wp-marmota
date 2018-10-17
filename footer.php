    </main> <!-- main#content -->
    
    <footer>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-4">
                    <a class="footer-brand" href="<?php echo get_home_url(); ?>"><?php echo get_bloginfo('name'); ?></a>
                </div>
                <div class="col-4 text-center">
                    <ul class="list-unstyled list-inline m-0">
                        <?php foreach( marmota_get_social_networks() as $slug => $label ): ?>
                        <?php $url = esc_url(get_theme_mod($slug)); if(empty($url)) continue; ?>
                        <li class="list-inline-item"><a href="<?php echo $url; ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/social/<?php echo str_replace('social_', '', $slug); ?>.svg" /></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="col-4 text-right">
                    Legal links
                </div>
            </div>
        </div>
    </footer>
    
    <?php wp_footer(); ?>
</body>
</html>
