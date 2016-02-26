@extends ('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div  class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Nuevo Servicio Tecnico</div>
                    <div class="panel-body">


                        @include ('st.partials.messages')

                        <form role="form" method="POST" action="{{ route('st.store') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            @include('st.partials.fields')
                        <button type="submit" class="btn btn-default">Crear Servicio</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <form id="form-cliente" role="form" action="{{ route('client.getClient',':CLIENT_ID') }}">
        <input name="_method" type="hidden" value="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </form>

@endsection

@section('scripts')
<script>

    $(document).ready(function (){

        $("#var_mobile").prop('readonly', true);
        $("#var_telephone").prop('readonly', true);
        $("#var_email").prop('readonly', true);
        $("#var_address").prop('readonly', true);
        $("#var_located").prop('readonly', true);

        $("#cliente").change(function(){

            $("#cliente").prop('disabled', true);

            var form = $('#form-cliente');
            var id = $(this).val();
            var url = form.attr('action').replace(':CLIENT_ID',id);
            var data = form.serialize();

            $.post(url,data,function(result){

                $('input[name="var_mobile"]').val(result['mobile']);
                $('input[name="var_telephone"]').val(result['telephone']);
                $('input[name="var_email"]').val(result['mail']);
                $('input[name="var_address"]').val(result['address']);


                $("#cliente").prop('disabled', false);

            }).fail(function (){
                alert('El cliente no fue eliminado');

                $("#cliente").prop('disabled', false);
            });
        });
    });
</script>
@endsection

