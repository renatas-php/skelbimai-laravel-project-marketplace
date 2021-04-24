<div>
                    <ul class="dashboard-box-list">
							@forelse(auth()->user()->solds as $sold)
                                <li id="{{ $sold->id }}">
									<!-- Job Listing -->
									<div class="job-listing">

										<!-- Job Listing Details -->
										<div class="job-listing-details">

											<div class="job-listing-company-logo">
												<img src="{{ asset('storage/photos/' . $sold->product->images[0]) }}" alt="">
											</div>
											<!-- Details -->
											<div class="job-listing-description">
												<h3 class="job-listing-title"><a href="#">{{ $sold->product->title }}</a> 
                                                @if($sold->tracking)
                                                <span class="dashboard-status-button green">Išsiųstas</span>
                                                @else
                                                <span class="dashboard-status-button green">Parduotas</span>
                                                @endif
                                                </h3>
												<div class="sold-info">Pardavimo kaina: <span><i class="icon-material-outline-local-atm green-sold-i"></i> {{ $sold->price }}.00 Eur</span></div>
												<div class="sold-info">Parduotas: <span><i class="icon-material-outline-date-range"></i> {{ $sold->created_at->format('Y-m-d h:m') }}</span></div>
												<div class="sold-info">Pirkėjas: <a class=""><i class="icon-material-outline-account-circle blue-sold-i"></i> remygamork12</a></div>
                                                @if($sold->tracking)
                                                <div class="sold-info">Sekimo kodas: <a class=""><i class="icon-material-outline-flight blue-sold-i"></i> {{ $sold->tracking['tracking_nr'] }}({{ $sold->tracking['delivery_company'] }})</a></div>
                                                @endif
                                                <div class="sold-info">
                                                 <!-- Accordion Item -->											
                                                    <div class="accordion js-accordion">
                                                        <!-- Accordion Item -->
                                                        <div class="accordion__item js-accordion-item">
                                                            <div class="accordion-header js-accordion-header padding-0">Pristatymo adresas </div>
                                                            <!-- Accordtion Body -->
                                                            <div class="accordion-body js-accordion-body" style="display: none;">
                                                                <!-- Accordion Content -->
                                                                <div class="accordion-body__contents">
                                                                    <div class="sold-info">Adresas <span> {{ auth()->user()->userInfos->shipping['adress'] }}</span></div>
												                    <div class="sold-info">Miestas: <span> {{ $sold->created_at->format('Y-m-d h:m') }}</span></div>
                                                                </div>
                                                            </div>
                                                            <!-- Accordion Body / End -->
                                                        </div>                                                        
                                                    </div>
                                                    <!-- Accordion Item / End -->
                                                </div>                                                 
											</div>
										</div>
									</div>

									<!-- Buttons -->
			<div class="buttons-to-right always-visible">
				<button class="button ripple-effect"><i class="icon-feather-menu"></i> Veiksmai
				</button>
				<!-- Veiksmai dropdown -->
					<div class="dropdown-actions" id="drop-{{ $sold->id }}">
						<ul class="dropdown-nav">
							<li>
                            @if(!$sold->tracking)
							<li><a href="dashboard-manage-bidders.html"><i class="icon-material-outline-account-circle blue-sold-i"></i> Pažymėti kaip išsiųsta</a></li>
							<li><button wire:click="selectForTracking({{ $sold->id }})" class="button ripple-effect border-30">Pridėti sekimo nr.</button></li>
                            @endif
							<li><button wire:click="selectForWrite({{ $sold->user_id }})"><i class="icon-material-outline-account-circle blue-sold-i"></i> Parašyti pirkėjui</button></li>
						</ul>
					</div>

				<!-- Veiksmai Dropdown End -->				
			</div>
		</li>
    @empty

    @endforelse								
	</ul>

    <!-- Add Tracking Modal -->

    <div class="modal fade" id="openTrackingAddModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>

                <div class="modal-body">
                    <div class="welcome-text">                    
                        Pridėkite sekimo informaciją
                    </div>

                    <h5>Sekimo kodas</h5>
					<input wire:model.lazy="tracking_nr" placeholder="Note" class="with-border"></input>

                    <h5>Išsiųsta per</h5>
                    <select wire:model.lazy="delivery_company" class="with-border default margin-bottom-20" data-size="7" title="Priority">
						<option>Omniva</option>
						<option>LP Express</option>
						<option>Autobusų siuntos</option>
					</select>

                    <!-- Button -->
                    <button wire:click="addTracking" class="margin-top-15 button full-width button-sliding-icon ripple-effect">Išsaugoti <i class="icon-material-outline-arrow-right-alt"></i></button>
                </div>

            </div>
        </div>
    </div>
    <!-- Add Tracking Modal End -->

    <!-- Send Msg Modal -->

    <div class="modal fade" id="openMsgSendModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>

                <div class="modal-body">
                    <div class="welcome-text">                    
                        Prašykite žinutę
                    </div>

                    <h5>Žinutės tekstas</h5>
					<textarea wire:model.lazy="messageText" placeholder="Note" class="with-border"></textarea>

                    <!-- Button -->
                    <button wire:click="send" class="margin-top-15 button full-width button-sliding-icon ripple-effect">Išsaugoti <i class="icon-material-outline-arrow-right-alt"></i></button>
                </div>

            </div>
        </div>
    </div>
    <!-- Send Msg Modal End-->
        <script>
            window.addEventListener('openTrackingAddModal', event => {
                $('#openTrackingAddModal').modal('show');
                $('#header-container').css('z-index', '0');

            })
            window.addEventListener('closeModal', event => {
                $('#sendMsgModal').modal('hide');
                $('#header-container').css('z-index', '100');
            })
            window.addEventListener('openMsgSendModal', event => {
                $('#openMsgSendModal').modal('show');
                $('#header-container').css('z-index', '0');

            })
            window.addEventListener('closeModal', event => {
                $('#sendMsgModal').modal('hide');
                $('#header-container').css('z-index', '100');
            })
        </script>
    
</div>
