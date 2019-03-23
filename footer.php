    </main> <!-- main#content -->
    
    <?php if ( is_active_sidebar( 'above_footer' ) ) : ?>
    <aside id="above_footer-sidebar" class="container" role="complementary">
        <div class="row">
            <?php dynamic_sidebar( 'above_footer' ); ?>
        </div>
    </aside>
    <?php endif; ?>

    <footer>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-4">
                    <a class="footer-brand" href="<?php echo esc_url(get_home_url()); ?>"><?php echo get_bloginfo('name'); ?></a>
                </div>
                <div class="col-4 text-center">
                    <ul class="list-unstyled list-inline m-0">
                        <?php foreach( marmota_get_social_networks() as $slug => $label ): ?>
                        <?php $url = esc_url(get_theme_mod($slug)); if(empty($url)) continue; ?>
                        <li class="list-inline-item"><a href="<?php echo $url; ?>" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/social/<?php echo str_replace('social_', '', $slug); ?>.svg" /></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php if(has_nav_menu('footer')): ?>
                <div class="col-4 text-right">
                    <?php
                    wp_nav_menu(array(
                        'theme_location'	=> 'footer',
                        'depth'				=> 0, // 1 = with dropdowns, 0 = no dropdowns.
                        'container_id'  	=> 'menu-footer',
                    ));
                    ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </footer>
    
    <?php wp_footer(); ?>
</body>
</html>
