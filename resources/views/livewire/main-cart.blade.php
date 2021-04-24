<div>
    <div class="flex-row">
    <div class="col-xl-8 col-lg-8 content-right-offset">
    <!-- Hedaline -->
    <h3>Prekės krepšelyje</h3>

    <div class="billing-cycle margin-top-25">
        <!-- Cart Item -->
        @forelse($products as $product)
            <div class="checkout-product">
                
                <a href="single-company-profile.html" class="product">
                    <div class="checkout-product-left">
                        <div class="product_img">
                            <img class="product_image" src="{{ asset('storage/photos/' . $product->products[0]['images'][0]) }}" alt="">
                        </div>
                    </div>                
                <div class="checkout-product-right">
                    <div class="headline"><h3>{{ $product->products[0]['title'] }}</h3>
                    <button wire:click="delete({{ $product->id }})" class="button gray" 
                    title="Pašalinti" data-tippy-placement="top"><i class="icon-feather-trash-2"></i>
                    </button>
                    </div>						
                    <div class="price">{{ $product->products[0]['price'] }}.00 Eur</div>
                    <div class="shipping-price">+ Pristatymas: {{ $product->products[0]['shipping_price'] }}.00 Eur</div>
                    <div class="shipping-price">Pristatysime: Vasario 14d.</div>		
                    <div class="shipping-price">Pardavėjas:</div>

                    <div class="user-name-rating">
                    <span class="seller_name">renatazz42</span>						
                    </div>						
                    
                </div>
                </a>					
            </div>
            @empty
            tuscia
            @endforelse
        </div>
      <!-- Summary -->		
		@if($products->count() > 0)
        @include('cart.cart-part')

        <div class="col-xl-4 col-lg-4 content-right-offset">
        	<!-- Summary -->
			<div class="boxed-widget summary margin-top-0">
				<div class="boxed-widget-headline">
					<h3>Apmokėjimas</h3>
				</div>
				<div class="boxed-widget-inner">
					<ul>
                    @forelse($products as $product)
						<li>{{ $product->products[0]['title'] }} 
                        <span class="flex-column">€{{ $product->products[0]['price'] }}.00
                        <span>+ €{{ $product->products[0]['shipping_price'] }}.00</span></span>
                        </li>
                        
                    @empty
                    @endforelse                        
                            <li class="total-sums">Viso <span>€{{ $amount }}.00</span></li>
                            <li class="total-sums">Pristatymas <span>€8.00</span></li>
                            <li class="total-costs">Iš viso <span>€{{ $amount }}.00</span></li>
                                             
					</ul>
				</div>
			</div>
			<!-- Summary / End -->

			<!-- Checkbox -->
			<div class="checkbox margin-top-30">
				<input type="checkbox" id="two-step">
				<label for="two-step"><span class="checkbox-icon"></span>  I agree to the <a href="#">Terms and Conditions</a> and the <a href="#">Automatic Renewal Terms</a></label>
			</div>
        </div>
        @endif
    </div>
</div>
