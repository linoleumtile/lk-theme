	<footer>
		<div class="container footer" id="footerwidgets">
			<div class="row-fluid">
				<div class="span5">
					<ul class="nobullets">
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer 1') ) : ?>
						<?php endif; ?>
					</ul>
				</div>
				<div class="span7">
					<ul class="nobullets">
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer 2') ) : ?>
						<?php endif; ?>
					</ul>
				</div>
			</div>
		</div>
	</footer>
</div> <!-- /container -->

    <?php wp_footer(); ?>

  </body>
</html>