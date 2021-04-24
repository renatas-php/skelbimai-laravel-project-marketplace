<div>
						<div class="headline">
							<h3><i class="icon-material-outline-face"></i> Gautos žinutės</h3>
						</div>

						<div class="content">
							<ul class="dashboard-box-list">
                            @forelse($messages as $message)
								<li>
									<!-- Overview -->
									<div class="freelancer-overview">
										<div class="freelancer-overview-inner">

											<!-- Avatar -->
											<div class="freelancer-avatar">
												<div class="verified-badge"></div>
												<a href="#"><img src="images/user-avatar-big-02.jpg" alt=""></a>
											</div>

											<!-- Name -->
											<div class="freelancer-name">
												<h4><a href="#">{{ $message->user->name }} </a></h4>
												<span>{{ $message->message }}</span>	
											</div>
										</div>
									</div>
									
									<!-- Buttons -->
									<div class="buttons-to-right always-visible">
										<button wire:click="answer({{ $message->user_id }})" class="button ripple-effect border-30">Atsakyti</button>
										<button wire:click="delete({{ $message }})" class="button red ripple-effect ico border-30" title="Ištrinti" data-tippy-placement="top"><i class="icon-feather-trash-2"></i></button>

									</div>
								</li>
                                @empty 

                                @endforelse
							</ul>
							
						</div>

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
										<textarea wire:model.lazy="message" cols="5" rows="3"></textarea>
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
							})
						</script>
     
</div>
