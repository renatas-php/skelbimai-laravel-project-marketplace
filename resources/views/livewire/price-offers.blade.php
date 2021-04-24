<div>
        <div class="content">
			<ul class="dashboard-box-list">
                @forelse($priceOffers as $priceOffer)
				<li>
					<!-- Overview -->
					<div class="freelancer-overview manage-candidates">
						<div class="freelancer-overview-inner">

							<!-- Avatar -->
							<div class="freelancer-avatar">
							    <div class="verified-badge"></div>
							    <a href="#"><img src="images/user-avatar-big-02.jpg" alt=""></a>
							</div>

							<!-- Name -->
							<div class="freelancer-name">
								<h4><a href="#">{{ $priceOffer->user->name }} </a></h4>

								<!-- Details 
								<span class="freelancer-detail-item"><a href="#"><i class="icon-feather-mail"></i> david@example.com</a></span> 
								-->

								<!-- Rating -->
							<div class="freelancer-rating">
								<button wire:click="take({{ $priceOffer->id }})" class="button ripple-effect border-30 green-blue">Priimti pasiūlymą</button>
                                <button wire:click="answer({{ $priceOffer->user_id }})" class="button ripple-effect border-30">Parašyti</button>
                                <button wire:click="delete({{ $priceOffer }})" class="button red ripple-effect ico border-30" title="Ištrinti" data-tippy-placement="top"><i class="icon-feather-trash-2"></i></button>
							</div>

							<!-- Bid Details -->
							<ul class="dashboard-task-info bid-info">
								<li><strong>${{ $priceOffer->price_offer }}.00</strong><span>Pasiūlyta kaina</span></li>
								<li class="flex-row"><img class="price-offer-product margin-right-10" src="{{ asset('storage/photos/' . $priceOffer->product->images[0]) }}" alt="">
                                <strong>{{ $priceOffer->product->title }}</strong></li>
							</ul>

												
							</div>
						</div>
					</div>
				</li>
                @empty

                @endforelse
			</ul>
		</div>

        <!-- Msg Modal -->

        <div class="modal fade" id="sendMsgModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<div class="submit-field">
										<h5>Žinutės tekstas</h5>
										<textarea wire:model.lazy="messageText" cols="5" rows="3"></textarea>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Uždaryti</button>
									<button wire:click="send" class="btn btn-primary">Siųsti</button>
								</div>
								</div>
							</div>
						</div>
						<script>
							window.addEventListener('openModal', event => {
								$('#sendMsgModal').modal('show');
								$('#header-container').css('z-index', '0');

							})
							window.addEventListener('closeModal', event => {
								$('#sendMsgModal').modal('hide');
                                $('#header-container').css('z-index', '100');
							})
						</script>

        <!-- Msg Modal End-->

        <!-- Offer Modal -->

        <div class="modal fade" id="openOfferModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
								</div>

                                    <div class="modal-body">
                                        <div class="welcome-text">
                                            <h3></h3>
                                            <div class="bid-acceptance margin-top-15">
                                                $
                                            </div>

                                        </div>
                                        <form id="terms">
                                            <div class="radio">
                                                <input id="radio-1" name="radio" type="radio" required>
                                                <label for="radio-1"><span class="radio-label"></span>  I have read and agree to the Terms and Conditions</label>
                                            </div>
                                        </form>
                                        <!-- Button -->
                                        <button class="margin-top-15 button full-width button-sliding-icon ripple-effect">Accept <i class="icon-material-outline-arrow-right-alt"></i></button>
                                    </div>

								</div>
							</div>
						</div>
						<script>
							window.addEventListener('openOfferModal', event => {
								$('#openOfferModal').modal('show');
								$('#header-container').css('z-index', '0');

							})
							window.addEventListener('closeModal', event => {
								$('#sendMsgModal').modal('hide');
                                $('#header-container').css('z-index', '100');
							})
						</script>

        <!-- Offer Modal End-->
</div>
