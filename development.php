<?php

$packages = [
	// __DIR__ . '/awethemes/skeleton/skeleton.php',
	// __DIR__ . '/awethemes/skeleton/vendor/autoload.php',
	// __DIR__ . '/awethemes/container/vendor/autoload.php',
	// __DIR__ . '/awethemes/wp-http/vendor/autoload.php',
	// __DIR__ . '/awethemes/wp-object/vendor/autoload.php',
	// __DIR__ . '/awethemes/wp-session/vendor/autoload.php',
];

foreach ( $packages as $path ) {
	require $path;
}

use AweBooking\Support\Carbonate;
use AweBooking\Calendar\Resource\Resource;
use AweBooking\Calendar\Provider\Pricing_Provider;

add_action( 'awebooking/booted', function () {
	// include __DIR__ . '/inc/Reservation/Reservation.php';
	// exit;
});

function awebooking_availability_template( $atts ) {
	$atts = shortcode_atts( array(
		'has-sidebar' => false,
	), $atts, 'awebooking_availability_template' );
	$el_class = [
		'awebooking-availability-container',
		$atts['has-sidebar'] ? 'has-sidebar' : '',
	];
	?>
	<div class="<?php echo esc_attr( implode( ' ', $el_class ) ); ?>">
		<ul class="room_types awebooking-availability-room-types">
			<li class="awebooking-availability-room-type">

				<div class="awebooking-availability-room-type__media">
					<div class="awebooking-availability-room-type__thumbnail">
						<a href="http://demo.awethemes.com/awebooking/our-rooms/classic-room/">
							<img width="553" height="400" src="http://demo.awethemes.com/awebooking/wp-content/uploads/2017/06/classic-room-1.jpg" class="attachment-awebooking_catalog size-awebooking_catalog wp-post-image">
						</a>

						<h2 class="awebooking-availability-room-type__title">
							<a href="http://demo.awethemes.com/awebooking/our-rooms/classic-room/" rel="bookmark">
								Classic Room
							</a>
						</h2>
					</div>
				</div>

				<div class="awebooking-availability-room-type__info">
					<div class="awebooking-rates">

						<div id="rate-1" class="awebooking-rate js-awebooking-rate">
							<div class="awebooking-rate__body">
								<div class="awebooking-discount">
									<span>Special Deal</span>
								</div>

								<h2 class="awebooking-rate__name">Stay for 2 nights and get exclusive 20% discount</h2>

								<div class="awebooking-rate__content">
									<div class="awebooking-rate__price">
										<div class="price">
											<del>
												<span class="awebooking-price-amount amount">
													<span class="awebooking-price-currencySymbol">$</span>99.00
												</span>
											</del>

											<ins>
												<span class="awebooking-price-amount amount">
													<span class="awebooking-price-currencySymbol">$</span>87.00
												</span>
											</ins>
											<a href="#popup-rate-01" class="awebooking-price__info awebooking-price-info"><strong>&#161;</strong></a>
										</div>

										<div class="awebooking-rate__price_detail">
											<p>price for 61 Nights</p>
											<p>2 Adults , 1 Child,  1 Room</p>
										</div>
									</div>

									<div class="awebooking-rate__info">
										<p class="awebooking-rate__occupancy">Maximum Occupancy: 2 adults, 1 child</p>
										<p class="awebooking-rate__desc">Tax included in room price</p>
										<p class="awebooking-rate__included">Breakfast included , Free Cancellation</p>
									</div>

								</div>
							</div>

							<div class="awebooking-rate__bottom">
								<div class="awebooking-rate__actions-left">
									<a class="awebooking-rate__service-btn" href="#" data-init="awebooking-dropdown" data-dropdown="#dr-rate-1">Extra services<i>&#x25BC;</i></a>
									<span class="awebooking-rate__list-services js-awebooking-list-service"></span>
								</div>

								<div class="awebooking-rate__actions-right js-awebooking-rate-actions">
									<span class="awebooking-rate__rooms"><span class="count js-awebooking-room-left">10</span> Rooms Left</span>
									<div class="awebooking-rate__book-action">
										<a class="awebooking-rate__book js-awebooking-add-room" href="#">Add room</a>
									</div>

								</div>

							</div>
							<div class="awebooking-rate__services awebooking-dropdown-content" id="dr-rate-1">
								<form action="" class="awebooking-booking-form" id="awebooking-booking-form">
									<div class="awebooking-service-items" id="awebooking-service-items">
										<div class="awebooking-service__item">
											<input type="checkbox" id="extra_id_14" name="awebooking_services[]" value="14">
											<label for="extra_id_14">Buffet Breakfast</label>
											<span> + $20 x person  to price</span>
										</div>
										<div class="awebooking-service__item">
											<input type="checkbox" id="extra_id_13" name="awebooking_services[]" value="13">
											<label for="extra_id_13">Gym Ticket</label>
											<span> + $160 x person  to price</span>
										</div>
										<div class="awebooking-service__item">
											<input type="checkbox" id="extra_id_12" name="awebooking_services[]" value="12">
											<label for="extra_id_12">Spa Ticket</label>
											<span> + $120 x person  to price</span>
										</div>
									</div>
								</form>
							</div>

							<!-- <div class="awebooking-rate__bottom">
								<div class="awebooking-rate__actions-left">
									<a href="#">Room Info</a>
									<a href="#">Enquire</a>
								</div>

								<div class="awebooking-rate__actions-right">
									<span class="awebooking-rate__rooms"><span class="count js-awebooking-room-left">10</span> Rooms Left</span>
									<div class="awebooking-rate__book-action">
										<div class="awebooking-rate__nums">
											<a class="awebooking-cal js-awebooking-decrease-room" href="#">-</a>
											<span class="js-awebooking-count-room">0</span>
											<a class="awebooking-cal js-awebooking-increase-room" href="#">+</a>
										</div>
									</div>
								</div>

							</div> -->

							<div id="popup-rate-01" class="breakdown-popup mfp-hide">
								<div class="awebooking-breakdown">
									<div class="awebooking-breakdown__wrapper">
										<div class="awebooking-breakdown__header">
											<h3>Rate Informations</h3>
										</div>
										<div class="awebooking-breakdown__content">
											<h5 class="awebooking-breakdown__title">Stay for 2 nights and get exclusive 20% discount</h5>

											<table class="table table-condensed awebooking-breakdown__table">
												<thead>
													<tr>
													<th>Date</th>
													<th>Per night</th>
													<th>Extra Adults Cost</th>
													<th>Extra Children Cost</th>
													</tr>
												</thead>

												<tbody>
													<tr>
														<td>Mon 11, Dec</td>
														<td><del>5500</del>400</td>
														<td>3300</td>
														<td>1100</td>
													</tr>

													<tr>
														<td>Mon 11, Dec</td>
														<td><del>5500</del>400</td>
														<td>3300</td>
														<td>1100</td>
													<tr>

												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="awebooking-rate">
							<div class="awebooking-rate__body">
								<div class="awebooking-discount">
									<span>Special Deal</span>
								</div>

								<h2 class="awebooking-rate__name">Exclude</h2>

								<div class="awebooking-rate__content">
									<div class="awebooking-rate__price">
										<div class="price">
											<del>
												<span class="awebooking-price-amount amount">
													<span class="awebooking-price-currencySymbol">$</span>99.00
												</span>
											</del>

											<ins>
												<span class="awebooking-price-amount amount">
													<span class="awebooking-price-currencySymbol">$</span>87.00
												</span>
											</ins>
											<a href="#popup-rate-01" class="awebooking-price__info awebooking-price-info"><strong>i</strong></a>
										</div>

										<div class="awebooking-rate__price_detail">
											<p>price for 61 Nights</p>
											<p>2 Adults , 1 Child,  1 Room</p>
										</div>
									</div>

									<div class="awebooking-rate__info">
										<p class="awebooking-rate__occupancy">Maximum Occupancy: 2 adults, 1 child</p>
										<p class="awebooking-rate__desc">Tax included in room price</p>
										<p class="awebooking-rate__included">Breakfast included , Free Cancellation</p>
									</div>

								</div>
							</div>

							<div class="awebooking-rate__bottom">
								<div class="awebooking-rate__actions-left">
									<a href="#">Room Info</a>
									<a href="#">Enquire</a>
								</div>

								<div class="awebooking-rate__actions-right">
									<span class="awebooking-rate__rooms"><span class="count">10</span> Rooms Left</span>
									<a class="awebooking-rate__book js-awebooking-add-room" href="#">Add room</a>
								</div>

							</div>

							<div id="rate-02" class="breakdown-popup  mfp-hide">
								Popup content 02
							</div>
						</div>

					</div>
				</div>
			</li>
		</ul>

		<div class="awebooking-availability-sidebar">

			<h2 class="awebooking-cart-title">Booking Summary</h2>

			<div class="awebooking-cart">

				<div class="awebooking-cart__header">
					<div class="awebooking-cart__checktime">
						<label for="">Dates</label>
						<p>
							14 Dec 2017 - 16 Dec 2017
						</p>
					</div>

					<div class="awebooking-cart__nights">
						<label for="">Nights</label>
						<p>
							2
						</p>
					</div>
				</div>

				<div class="awebooking-cart__items">
					<ul>
						<li class="awebooking-cart-item">
							<div class="awebooking-cart-item__info">
								<h5 class="awebooking-cart-item__rate">
									Stay for 2 nights and get exclusive 20% discount
								</h5>

								<p class="awebooking-cart-item__guess">
									2 Adults ,2 Children ,1 Room
								</p>
							</div>

							<p class="awebooking-cart-item__price">
								8800$
							</p>

							<a href="#" class="awebooking-cart-item__remove js-awebooking-remove-cart">&#x2715;</a>
						</li>
					</ul>
				</div>

				<div class="awebooking-cart__footer">
					<div class="awebooking-cart__total">
						<label for="">Total</label>
						<p class="awebooking-cart__total-amount">15000$</p>
					</div>
					<div class="awebooking-cart__buttons">
						<a class="btn button awebooking-button" href="#">Book</a>
					</div>
				</div>

			</div>

		</div>
	</div>
	<?php
}
add_shortcode( 'awebooking_availability_template', 'awebooking_availability_template' );
