@extends ('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div  class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Nuevo Cliente</div>
                    <div class="panel-body">


                        @include ('clients.partials.messages')

                        <form role="form" method="POST" action="{{ route('client.store') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            @include('clients.partials.fields')
                        <button type="submit" class="btn btn-default">Crear Cliente</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection