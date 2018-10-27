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
					<div class="navigation">
						<?php
						paginate_comments_links( array( 'type' => 'list' ) );
						?>
				    </div>
			    </div>
			<?php else : ?>
			    <p><?php echo __('Sé el primero', 'marmota'); ?></p>
			<?php endif; ?>
		</div>
		
	</div>
</div>
