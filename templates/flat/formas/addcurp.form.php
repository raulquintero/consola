<?php 
$noDebug =TRUE;

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
<div class="modal-header" style="background:#2AAB2C;color:white">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title" id="myModalLabel">Nuevo</h4>
				</div>

<?php echo "LOMF590827HDFPTR01 - LASL470825HCLRRS08 - masm020203mdfrnta6" ?>
<form class="form-horizontal" action="/catalogo/<?php echo $response['variables']['person']?>/0/perfil/nuevo" method="POST">


        <div class="block-header">
           
    <input type="hidden" name="fn" value="add"> 
    <input type="hidden" name="path" value="<?php echo $path?>">
        </div>
        <fieldset>
        <div class="modal-body">
                
           <!--  <legend>Form Components</legend> -->
            
          

            <div class="control-group">
                <label class="control-label" for="focusedInput">Curp<span class="required">*</span></label>
                <div class="controls">
                

                    <input class="input-xlarge focused" autocomplete='off' id="curp" oninput="validarInput(this)"  placeholder="Ingrese su CURP" data-required="1" type="text" name="curp" value="">
                    <br>
                <span id="resultado"><br></span>
                </div>
            </div>

           


        </div>
    </fieldset>

        <div class="modal-footer">
                <input type="submit" disabled id=continuar class="btn btn-primary" value="Continuar">
                <!-- <a data-dismiss="modal" class="btn btn-primary" href="#">Agregar</a> -->
                <a data-dismiss="modal" class="btn" href="#">Cancelar</a>
        </div>
</form>
  
