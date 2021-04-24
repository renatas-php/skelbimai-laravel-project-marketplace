<div class="header-notifications">
    	<!-- Cart -->
        
						<div class="header-notifications-trigger">
							<a href="#"><i class="icon-feather-shopping-cart"></i><span>{{ $products->count() }}</span></a>
						</div>

						<!-- Dropdown -->
						<div class="header-notifications-dropdown">

							<div class="header-notifications-content">
								<div class="header-notifications-scroll" data-simplebar>
									<ul>
                                        <!-- Item -->
                                        @forelse($products as $product)
										<li class="notifications-not-read">
											<a>
												<span class="notification-product"><img src="{{ asset('storage/photos/' . $product->products[0]['images'][0]) }}" alt=""></span>
												<div class="notification-text">
													<strong>{{ $product->products[0]['title'] }}</strong>													
													<div class="flex-column">
													<span class="color">{{ $product->products[0]['price'] }}.00 Eur</span>
													<p class="notification-msg-text">+ {{ $product->products[0]['shipping_price'] }}.00 Eur</p>
													</div>
												</div>
												<button wire:click="delete({{ $product->id }})" class="cart-delete-btn"><i class="icon-feather-trash-2"></i></button>
											</a>
										</li>
                                        @empty
											<div class="basket-empty">
												Krepšelis tuščias
											</div>
                                        @endforelse						
									</ul>
								</div>
							</div>
							<a href="{{ route('cart') }}" class="header-notifications-button ripple-effect button-sliding-icon">Krepšelis<i class="icon-material-outline-arrow-right-alt"></i></a>
						</div>					
</div>

