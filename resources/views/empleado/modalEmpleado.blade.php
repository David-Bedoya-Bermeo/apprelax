<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1"
    id="modal-delete-{{$emp->id}}">
    {{Form::Open(array('action'=>array('App\http\Controllers\EmpleadoController@destroy',$emp->id),'method'=>'delete'))}}
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Eliminar Empleado</h5> <button type="button" class="close" data-dismiss="modal"
                    aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            </div>
            <div class="modal-body">
                <p>Confirme si desea Eliminar El Empleado</p>
            </div>
            <div class="modal-footer"> <button type="submit" class="btn btn-primary">Confirmar</button> <button
                    type="button" class="btn btn-secondary" data-dismiss="modalEmpleado">Cerrar</button> </div>
        </div>
    </div>
</div> {{Form::Close()}}