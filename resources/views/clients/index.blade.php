@extends ('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div  class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Clientes</div>

                    <p id="eliminado" style="display:none" class="alert alert-success"></p>


                    <div class="panel-body">


                            {!! Form::open(['route'=>'client.index', 'method' => 'GET', 'class'=>'navbar-form navbar-left pull-right','role'=>'search']) !!}
                            <div class="form-group">
                                {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre del cliente']) !!}
                            </div>
                            <button type="submit" class="btn btn-default">Buscar</button>
                            {!! Form::close() !!}

                        <p>
                            <a class="btn btn-info" href="{{ route('client.create') }}" role="button">
                                Crear cliente
                            </a>
                        </p>
                        <p> hay {{ $clients->lastPage() }} páginas </p>
                        <p> {{ $clients->total() }} clientes </p>
                        @include('clients.partials.table')
                        {!! $clients->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>


    <form id="form-delete" role="form" action="{{ route('client.destroy',':USER_ID') }}">
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
                var url = form.attr('action').replace(':USER_ID',id);
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