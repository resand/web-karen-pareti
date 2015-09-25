@if (Session::has('sesion'))
    {!!  Form::hidden('sesion', session('sesion')) !!}
@endif
<!-- Modal -->
<div class="modal fade" id="modalHome" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body center">
                <h3>PROXIMAMENTE</h3>
                <h4>MI TIENDA EN LINEA</h4>
                <h4>Con más colecciones y modelos a la venta y a la renta.</h4>
                <button type="button" class="btn btn-primary" data-dismiss="modal">INGRESAR AL SITIO</button>
            </div>
        </div>
    </div>
</div>