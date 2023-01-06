<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Update Insc Individual</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span wire:click.prevent="cancel()" aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
					<input type="hidden" wire:model="selected_id">
            <div class="form-group">
                <label for="ID_INI"></label>
                <input wire:model="ID_INI" type="text" class="form-control" id="ID_INI" placeholder="Id Ini">@error('ID_INI') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="ID_VDJ"></label>
                <input wire:model="ID_VDJ" type="text" class="form-control" id="ID_VDJ" placeholder="Id Vdj">@error('ID_VDJ') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="ID_JUG"></label>
                <input wire:model="ID_JUG" type="text" class="form-control" id="ID_JUG" placeholder="Id Jug">@error('ID_JUG') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="OBSERVACION_INI"></label>
                <input wire:model="OBSERVACION_INI" type="text" class="form-control" id="OBSERVACION_INI" placeholder="Observacion Ini">@error('OBSERVACION_INI') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="update()" class="btn btn-primary" data-dismiss="modal">Save</button>
            </div>
       </div>
    </div>
</div>