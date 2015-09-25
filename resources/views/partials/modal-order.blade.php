
<!-- Modal -->
<div class="modal fade" id="modalOrder" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Ordenar</h4>
            </div>
            <div class="modal-body">
                {!! Form::open(['route' => 'order', 'method' => 'POST']) !!}
                    <div class="form-group">
                        <div class="col-sm-8 col-md-offset-2">
                            {!! Form::label('name', 'Nombre') !!}
                            {!! Form::text('name', null, ['class' => 'form-control', 'required']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-8 col-md-offset-2">
                            {!! Form::label('telephone', 'Teléfono') !!}
                            {!! Form::text('telephone', null, ['class' => 'form-control', 'required']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-8 col-md-offset-2">
                            {!! Form::label('email', 'Email') !!}
                            {!! Form::email('email', null, ['class' => 'form-control', 'required']) !!}
                        </div>
                    </div>
                    {!! Form::hidden('model', null, ['id' => 'input-model']) !!}
                <div class="form-group">
                    <div class="col-sm-8 col-md-offset-2">
                        &nbsp;
                    </div>
                </div>
                    <div class="form-group">
                        <div class="col-sm-8 col-md-offset-2">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Ordenar</button>
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>