

<?php 
$noDdebug = TRUE;
// var_dump($response['codigos']);
 ?>



                <label for="text" class="control-label col-sm-1 left">Colonia</label>
                <div class="col-sm-2">
                    <select  <?=$response['readonly']?> name="colonia_id" id="colonia_id" data-rule-required="true" <?php echo $style_white?> >
                        <option value="">-- Seleccione --</option>
                        <?php 
                        // var_dump($response['variables']);
                            foreach ($response['codigos'] as $data) {
                                if($response['variables']['colonia_id']==$data['id']) $selected = " selected "; else $selected = "";
                                echo "<option value='".$data['id']."' $selected>&nbsp;&nbsp;".ucwords($data['asentamiento']).", ". $response['codigos'][0]['municipio'].",  ".$response['codigos'][0]['estado']."</option>";
                                
                            }

                            ?>
                        
                    </select>
                </div>

           

          


  
