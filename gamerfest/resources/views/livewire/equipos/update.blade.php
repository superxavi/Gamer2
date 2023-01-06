<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Update Equipo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span wire:click.prevent="cancel()" aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
					<input type="hidden" wire:model="selected_id">
            <div class="form-group">
                <label for="ID_EQU"></label>
                <input wire:model="ID_EQU" type="text" class="form-control" id="ID_EQU" placeholder="Id Equ">@error('ID_EQU') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="NOMBRE_EQU"></label>
                <input wire:model="NOMBRE_EQU" type="text" class="form-control" id="NOMBRE_EQU" placeholder="Nombre Equ">@error('NOMBRE_EQU') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="OBSERVACION_EQU"></label>
                <input wire:model="OBSERVACION_EQU" type="text" class="form-control" id="OBSERVACION_EQU" placeholder="Observacion Equ">@error('OBSERVACION_EQU') <span class="error text-danger">{{ $message }}</span> @enderror
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
