

<?php 

    // $menusql= "SELECT menu from menu where menu_id=$menu_id";
    //  list($menu_name)=$database->get_row($menusql);
// $response['variables']['type'];

// switch($response['variables']['type']){
//     case 'empleado' :           $path = "/catalogo/empleados/nuevo";break;
//     case 'solicitudempleo' :    $path = "/catalogo/solicitudempleo/nuevo";break;
//     case 'usuario' :            $path = "/catalogo/usuarios/nuevo";break;
//     case 'cliente' :            $path = "/catalogo/clientes/nuevo";break;

// }
 ?>


<style>
#resultado {
    /* background-color: red; */
    color: red;
    font-weight: bold;
}
#resultado.ok {
    color: green;
}
</style>








<div class="modal-dialog">
    <!-- <div class="block-header">
            <button data-dismiss="modal" class="close" type="button">&times;</button>
            <h3> &nbsp;&nbsp;Base de datos </h3>
    </div> -->
    <div class="modal-body">
                
            <legend>Restauracion de  Base de Datos</legend>
            
          

            <div class="control-group">
                <label class="control-label" for="focusedInput"></label>
                <div class="controls">
                <br>
                    Desea continuar con la restauracion  : {file.sql}?
                   
                </div>
            </div>

           


    </div>


    <div class="modal-footer">
                <input type="button" onclick="gotoURL('/configuracion/dataBase/restaurar')" id=continuar class="btn btn-primary" value="Continuar">
                <a data-dismiss="modal" class="btn" href="#">Cancelar</a>
    </div>
</div>
