<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */
 $images = $attributes['images'] ?? [];
 if ( ! empty( $images )  ) :
?>
<div <?php echo get_block_wrapper_attributes(); ?>>
	<div class="ss-carousel-container">
		<div class="ss-carousel-control">
			<div class="ss-carousel-btn-container">
				<button id="next-btn">
					<svg width="13" height="15" viewBox="0 0 13 15" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M-1.46031e-07 14.1V10.5L8.94 7.77V7.23L-1.46031e-07 4.5V0.9L12.6 5.16V9.84L-1.46031e-07 14.1Z" fill="#FFF2D7"/>
					</svg>
				</button>
				<button id="prev-btn">
					<svg width="13" height="15" viewBox="0 0 13 15" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M12.6 14.1L-1.46031e-07 9.84V5.16L12.6 0.9V4.5L3.66 7.23V7.77L12.6 10.5V14.1Z" fill="#FFF2D7"/>
					</svg>
				</button>
			</div>
			<div class="ss-carousel-radio-container">
				<div class="ss-radio-container">
					<?php for ( $i = 0; $i < count ( $images ); $i++ ) : ?>
					<input type="radio" class="carousel-radio" name="carousel-radio" id="carousel-radio-<?= $i + 1; ?>" value="<?= $i + 1; ?>" data-target="#carousel-accent-<?= $i + 1; ?>" value="<?= $i + 1; ?>" />
					<?php endfor; ?>
				</div>
				<div class="ss-radio-accent-container">
					<?php for ( $i = 0; $i < count ( $images ); $i++ ) : ?>
					<div class="ss-radio-accent" id="carousel-accent-<?= $i + 1; ?>"></div>
					<?php endfor; ?>
				</div>
			</div>
		</div>
		<div class="ss-carousel-window">
			<div class="ss-carousel-slider">
				<?php foreach ( $images as $img ) : ?>
				<div class="ss-carousel-slide">
					<img src="<?= esc_url( $img['url'] ); ?>" alt="">
				</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
