@extends ('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div  class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Notas</div>

                    <p id="eliminado" style="display:none" class="alert alert-success"></p>


                    <div class="panel-body">
                        <p>
                            <a class="btn btn-info" href="{{ route('note.create') }}" role="button">
                                Crear nota
                            </a>
                        </p>
                        <p> hay {{ $note->lastPage() }} páginas </p>
                        <p> {{ $note->total() }} notas </p>
                        @include('notes.partials.table')
                        {!! $note->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>


    <form id="form-delete" role="form" action="{{ route('note.destroy',':NOTE_ID') }}">
        <input name="_method" type="hidden" value="DELETE">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </form>

@endsection

@section('scripts')
    <script>
        $(document).ready(function (){
            $('.btn-delete').click(function(e){

                e.preventDefault();

                var row = $(this).parents('tr');
                var id = row.data('id');
                var form = $('#form-delete');
                var url = form.attr('action').replace(':NOTE_ID',id);
                var data = form.serialize();

                row.fadeOut();

                $.post(url,data,function(result){

                    $("#eliminado").html(result);
                    $("#eliminado").show();

                }).fail(function (){
                    alert('El cliente no fue eliminado');
                    row.show();
                });
            });
        });
    </script>
@endsection