<div>
<div>
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
                <button type="button" wire:click="send" class="btn btn-primary">Siųsti</button>
            </div>
            </div>
        </div>
    </div>
</div>
    <script>
        window.addEventListener('closeModal', event => {
            $('#sendMsgModal').modal('hide');
        });
    </script>
</div>
