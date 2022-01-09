<?php if (!isset($attributes['bg-image']['url']) || empty($attributes['bg-image']['url'])) : ?>
    <section class="banner">
<?php else : ?>
    <section class="banner" style="background-image: url('<?php echo $attributes['bg-image']['url']; ?>')">
<?php endif; ?>
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12 col-xl-7">
				<div class="block">
					<div class="divider mb-3"></div>
					<span class="text-uppercase text-sm letter-spacing "><?php echo esc_html($attributes['helper-text']); ?></span>
					<h1 class="mb-3 mt-3"><?php echo esc_html($attributes['main-text']); ?></h1>

					<p class="mb-4 pr-5"><?php echo esc_html($attributes['description-text']); ?></p>
					<div class="btn-container ">
						<a href="<?php the_permalink($attributes['button-url']); ?>" target="_blank" class="btn btn-main-2 btn-icon btn-round-full">
							<?php echo esc_html($attributes['button-text']); ?>
                            <i class="icofont-simple-right ml-2  "></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>