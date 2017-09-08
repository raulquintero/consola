

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



<!-- <form class="form-horizontal" action="/catalogo/<?php echo $response['variables']['person']?>/0/perfil/nuevo" method="POST"> -->


        <div class="block-header">
            <button data-dismiss="modal" class="close" type="button">&times;</button>
            <!-- <h3> &nbsp;&nbsp;Base de datos </h3> -->
    <input type="hidden" name="fn" value="add"> 
    <input type="hidden" name="path" value="<?php echo $path?>">
        </div>
        <fieldset>
        <div class="modal-body">
                
            <legend>Base de Datos</legend>
            
          

            <div class="control-group">
                <label class="control-label" for="focusedInput"></label>
                <div class="controls">
                
                    Desea Continuar con el proceso de Respaldo de Base de Datos?
                    <!-- <input class="input-xlarge focused" autocomplete='off' id="curp" oninput="validarInput(this)"  placeholder="Ingrese su CURP" data-required="1" type="text" name="curp" value=""> -->
                    <br>
                <span id="resultado"><br></span>
                </div>
            </div>

           


        </div>

    </fieldset>

        <div class="modal-footer">
                <input type="button" onclick="gotoURL('/configuracion/dataBase/respaldar')" id=continuar class="btn btn-primary" value="Continuar">
                <a data-dismiss="modal" class="btn" href="#">Cancelar</a>
        </div>
</form>
  
