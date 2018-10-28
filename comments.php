<div class="row">
    <div class="col-12 col-lg-8 offset-0 offset-lg-2">
		
		<div id="comments">
            
			<h2><?php printf(__( "Comentarios (%d)", "marmota" ), get_comments_number()); ?></h2>
			
            <?php if($comments) : ?>
				<div class="comments">
			        <?php
					wp_list_comments(array(
						'style' => 'div',
						'type' => 'all',
						'reply_text' => __('Responder', 'marmota') . '<img src="' . get_template_directory_uri() . '/assets/img/icons/arrow.svg" />',
						'avatar_size' => 60,
						'format' => 'html5',
					));
					?>
					<nav class="comments-navigation">
						<?php
						paginate_comments_links(array(
                            'prev_text' => '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="#C1BFBF" d="M15.41,16.58L10.83,12L15.41,7.41L14,6L8,12L14,18L15.41,16.58Z" />
                            </svg>',
                            'next_text' => '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="#C1BFBF" d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" />
                            </svg>',
                            'mid_size' => 2
                        ));
						?>
				    </nav>
			    </div>
			<?php else : ?>
			    <p><?php echo __('No hay comentarios. Sé el primero en comentar.', 'marmota'); ?></p>
			<?php endif; ?>
            
            <?php comment_form(); ?>
            
		</div>
	</div>
</div>
