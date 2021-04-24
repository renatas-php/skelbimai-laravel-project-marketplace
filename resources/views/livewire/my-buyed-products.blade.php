<div>
    <ul class="dashboard-box-list">
        @forelse($buyedProducts as $product)
            <li id="{{ $product->id }}">
                <!-- Job Listing -->
                <div class="job-listing">

                    <!-- Job Listing Details -->
                    <div class="job-listing-details">

                        <div class="job-listing-company-logo">
                            <img src="{{ asset('storage/photos/' . $product->product->images[0]) }}" alt="">
                        </div>
                        

                        <!-- Details -->
                        <div class="job-listing-description">
                            <h3 class="job-listing-title"><a href="#">{{ $product->product->title }}</a> <span class="dashboard-status-button green">Aktyvus</span></h3>
                            <div class="price"><i class="icon-material-outline-local-atm"></i> {{ $product->price }}.00 Eur</div>
                            <!-- Job Listing Footer -->
                            <div class="job-listing-footer">
                                <ul>
                                    <li><i class="icon-material-outline-date-range"></i> Kiekis: {{ $product->qty }} vnt.</li>
                                    <li><i class="icon-material-outline-date-range"></i> Galioja iki 28 Rugpjucio, 2019</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Buttons -->
                <div class="buttons-to-right always-visible">
				<button class="button ripple-effect"><i class="icon-feather-menu"></i> Veiksmai</button>
				<!-- Veiksmai dropdown -->
					<div class="dropdown-actions" id="drop-{{ $product->id }}">
						<ul class="dropdown-nav">                            
							<li><button wire:click="getIdForReview({{ $product->seller_id }})"><i class="icon-material-outline-account-circle blue-sold-i"></i> Įvertinti</button></li>
							<li><button wire:click="" class="button ripple-effect border-30">Pridėti sekimo nr.</button></li>                            
							<li><button wire:click=""><i class="icon-material-outline-account-circle blue-sold-i"></i> Parašyti</button></li>
						</ul>
					</div>
				<!-- Veiksmai Dropdown End -->				
			    </div>
            </li>
        @empty
        @endforelse
    </ul>
    <!-- Review Add Modal -->

    <div class="modal fade" id="openReviewAddModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>

                <div class="modal-body">
                    <div class="welcome-text">                    
                       Įvertinkite pardavėją
                    </div>
                <form wire:submit.prevent="rate">
                    <div class="feedback-yes-no">
						<strong>Įvertinimas</strong>
						<div class="leave-rating">
							<input type="radio" wire:model.defer="rating" id="rating-1" value="1"/>
							<label for="rating-1" class="icon-material-outline-star"></label>
							<input type="radio" wire:model.defer="rating" id="rating-2" value="2"/>
							<label for="rating-2" class="icon-material-outline-star"></label>
							<input type="radio" wire:model.defer="rating" id="rating-3" value="3"/>
							<label for="rating-3" class="icon-material-outline-star"></label>
                            <input type="radio" wire:model.defer="rating" id="rating-radio-4" value="4" required>
							<label for="rating-radio-4" class="icon-material-outline-star"></label>
							<input type="radio" wire:model.defer="rating" id="rating-radio-5" value="5" required>
							<label for="rating-radio-5" class="icon-material-outline-star"></label>
						</div><div class="clearfix"></div>
					</div>
                    <strong>Komentaras</strong>
					<textarea class="with-border" placeholder="Jūsų komentaras" wire:model.defer="comment" cols="7"></textarea>
                    <!-- Button -->
                    <button  class="margin-top-15 button full-width button-sliding-icon ripple-effect">Įvertinti <i class="icon-material-outline-arrow-right-alt"></i></button>
                </form>
                </div>

            </div>
        </div>
    </div>
    <!-- Review Add Modal End -->
    <script>
            window.addEventListener('openReviewAddModal', event => {
                $('#openReviewAddModal').modal('show');
                $('#header-container').css('z-index', '0');

            })
            window.addEventListener('closeReviewAddModal', event => {
                $('#openReviewAddModal').modal('hide');
                $('#header-container').css('z-index', '100');
            })
        </script>
</div>
