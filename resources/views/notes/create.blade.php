@extends ('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div  class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Nueva Nota</div>
                    <div class="panel-body">


                        @include ('St.partials.messages')

                        <form role="form" method="POST" action="{{ route('note.store') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            @include('notes.Partials.fields')
                        <button type="submit" class="btn btn-default">Crear Nota</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


