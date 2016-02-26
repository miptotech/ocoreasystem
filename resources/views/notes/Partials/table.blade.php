<div class="panel-body">
	<div class="row"> 
	@foreach ($note as $note)
	<div class="col-md-3 note" style="margin-top:8px;" data-id="{{$note->id}}">
		<h4 style="margin-top:50px; text-align: center;">#{{ $note->id }} - {{ $note->var_title }}</h4>
		<p style="text-align: center;">{{ $note->date_note }}</p>
		<p  style="height: 180px;">{{ $note->var_description }}</p>
		<p align="right">  <a href="#!" class="btn-delete"><img src="{{ asset('imgs/trash.png') }}" width="35px" alt="eliminar" style="float:left;"></a><a href="{{ route('note.edit', $note->id)}}"> <img style="margin-left: 125px;" src="{{ asset('imgs/edit.png') }}" width="35px" alt="editar"></a></p>
		</div>
    @endforeach
	</div>
</div>
