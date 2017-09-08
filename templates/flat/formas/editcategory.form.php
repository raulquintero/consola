<?php 
use Libs\Traits\{Crypto64};


echo DIR_BASE.'/libs/traits/Crypto64.php';


        $query="SELECT parent_id, menu, path_option,parametros,position From menu WHERE menu_id='".$response['variables']['menu_id']."'";

        list($parent_id,$menu_name,$menu_ruta,$parametros,$position) = $Database->get_row( $query );
    // $parametros = Crypto64::decode($parametros);


?>

                <form class="form-horizontal" action="/mantenimiento/actualizarmenu/<?php echo $response['variables']['menu_id']?>" method="POST">
                    <!-- <input type="hidden" name="sub" value="menu">  -->
                    <input type="hidden" name="fn" value="edit"> 
                    <input type="hidden" name="menu_id" value="<?php echo $response['variables']['menu_id'] ?>"> 
 <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">&times;</button>
                <h3>Editar Categoria: <?php echo strtoupper($menu_name)?></h3>
            </div>
            <div class="modal-body">
                

                    <fieldset>
                       <!--  <legend>Form Components</legend> -->
                        <div class="control-group">
                            <label class="control-label" for="select01">Padre</label>
                                <div class="controls">
                                    <select id="select01" name="parent_id" class="chzn-select chzn-done" style1="display: none;">
                                      <option value=0>Menu principal</option>
                                      <?php
                                      $Menu->showAddListCategory(0,0,$parent_id);?>
                                   
                                    </select>
                                    <!-- <div class="chzn-container chzn-container-single" style="width: 220px;" title="" id="select01_chzn"><a href="javascript:void(0)" class="chzn-single" tabindex="-1"><span>something</span><div><b></b></div></a><div class="chzn-drop"><div class="chzn-search"><input type="text" autocomplete="off"></div><ul class="chzn-results"><li class="active-result result-selected" style="" data-option-array-index="0">something</li><li class="active-result" style="" data-option-array-index="1">2</li><li class="active-result" style="" data-option-array-index="2">3</li><li class="active-result" style="" data-option-array-index="3">4</li><li class="active-result" style="" data-option-array-index="4">5</li></ul></div></div> -->
                                  </div>    
                        </div>


                        <div class="control-group">
                            <label class="control-label" for="focusedInput">Categoria</label>
                            <div class="controls">
                                <input class="input-xlarge focused" id="focusedInput" type="text" name="menu_name" value="<?php echo $menu_name ?>">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="focusedInput">Ruta</label>
                            <div class="controls">
                                <input class="input-xlarge focused" id="focusedInput" type="text" name="path_option" value="<?php echo $menu_ruta ?>">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="parametros">Parametros</label>
                            <div class="controls">
                                <input class="input-xlarge" id="parametros" type="text" name="parametros" value="<?php echo $parametros ?>"> 
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="focusedInput">Posicion</label>
                            <div class="controls">
                                <input class="input-xlarge focused" id="focusedInput" type="text" name="position" value="<?php echo $position ?>">
                            </div>
                        </div>

                    </fieldset>














            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-primary" value="Actualizare">
                <!-- <a data-dismiss="modal" class="btn btn-primary" href="#">Actualizar</a> -->
                <a data-dismiss="modal" class="btn" href="#">Cancelar</a>
            </div>

</form>










