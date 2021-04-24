<div>
    <div class="modal fade" id="priceOfferModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <div class="popup-tab-content" id="tab2">
				
				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3>Siūlykite savo kainą</h3>
				</div>					
				<!-- Form -->
				<form method="post" id="send-pm">
					<input type="number" class="with-border" required>
				</form>
				
				<!-- Button -->
				<button type="button" wire:click="save" class="button full-width button-sliding-icon">Siųsti</button>

			</div>
            </div>
            </div>
        </div>
    </div>
</div>
