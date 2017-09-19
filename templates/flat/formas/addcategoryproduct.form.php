<?php 
$noDebug=TRUE;
    // $menusql= "SELECT menu from menu where menu_id=$menu_id";
    //  list($menu_name)=$database->get_row($menusql);


?>






<form class="form-horizontal" action="/administracion/addcategoryproduct" method="POST">





<div class="modal-header" style="background:#2AAB2C;color:white">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title" id="myModalLabel">Agregar Categoria de Poductos</h4>
				</div>
        
        <fieldset>
    <input type="hidden" name="fn" value="add"> 
        <div class="modal-body">
                
           <!--  <legend>Form Components</legend> -->
            <div class="control-group">
                <label class="control-label" for="select01">Categoria</label>
                <div class="controls">
                    <select id="select01" class="chzn-select chzn-done" style1="display: none;" name="parent_id">
                        <option value=0>Menu principal</option>
                                      <?php
                                      $Menu->showAddListCategory(0,0,$response['variables']['menu_id']);
                                        // $query3= "SELECT menu_id,menu FROM menu ORDER BY position";
                                        // $subs = $database->get_results($query3);
                                        // foreach ($subs as $sub) {
                                        //     if ($sub['menu_id']==$menu_id) $selected=" selected "; else $selected = NULL;
                                        //     echo "<option value=".$sub['menu_id']." $selected>".$sub['menu']."</option>";
                                        // }     
                                      ?>
                                    
                        </select>
                </div>    
            </div>
          

            <div class="control-group">
                <label class="control-label" for="focusedInput">Subcategoria<span class="required">*</span></label>
                <div class="controls">
                    <input class="input-xlarge focused" id="menu_name" data-required="1" type="text" name="menu_name" value="">
                </div>
            </div>

            

        </div>

    </fieldset>

        <div class="modal-footer">
                <input type="submit" class="btn btn-primary" value="Agregar">
                <!-- <a data-dismiss="modal" class="btn btn-primary" href="#">Agregar</a> -->
                <a data-dismiss="modal" class="btn" href="#">Cancelar</a>
        </div>
</form>
  
