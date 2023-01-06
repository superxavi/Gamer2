@section('title', __('Eventos'))
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<div class="float-left">
							<h4><i class="fab fa-laravel text-info"></i>
							Evento Listing </h4>
						</div>
						<div wire:poll.60s>
							<code><h5>{{ now()->format('H:i:s') }} UTC</h5></code>
						</div>
						@if (session()->has('message'))
						<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
						@endif
						<div>
							<input wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Search Eventos">
						</div>
						<div class="btn btn-sm btn-info" data-toggle="modal" data-target="#createDataModal">
						<i class="fa fa-plus"></i>  Add Eventos
						</div>
					</div>
				</div>
				
				<div class="card-body">
						@include('livewire.eventos.create')
						@include('livewire.eventos.update')
				<div class="table-responsive">
					<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr> 
								<td>#</td> 
								<th>Id Eve</th>
								<th>Nombre Eve</th>
								<th>Fecha Eve</th>
								<th>Lugar Eve</th>
								<th>Descripccion Eve</th>
								<td>ACTIONS</td>
							</tr>
						</thead>
						<tbody>
							@foreach($eventos as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td>{{ $row->ID_EVE }}</td>
								<td>{{ $row->NOMBRE_EVE }}</td>
								<td>{{ $row->FECHA_EVE }}</td>
								<td>{{ $row->LUGAR_EVE }}</td>
								<td>{{ $row->DESCRIPCCION_EVE }}</td>
								<td width="90">
								<div class="btn-group">
									<button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Actions
									</button>
									<div class="dropdown-menu dropdown-menu-right">
									<a data-toggle="modal" data-target="#updateModal" class="dropdown-item" wire:click="edit({{$row->id}})"><i class="fa fa-edit"></i> Edit </a>							 
									<a class="dropdown-item" onclick="confirm('Confirm Delete Evento id {{$row->id}}? \nDeleted Eventos cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})"><i class="fa fa-trash"></i> Delete </a>   
									</div>
								</div>
								</td>
							@endforeach
						</tbody>
					</table>						
					{{ $eventos->links() }}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
