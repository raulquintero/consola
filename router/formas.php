<?php

switch ($q) {

    case "/forma":
        $frm = $uri[1];
        $menu_id=$uri[2];
        switch ($frm) {
            case "editarmenu":
                require_once DIR_TEMPLATES."formas/editcategory.form.php";
                exit;
                break;
            
            case "addcategory":
                require_once DIR_TEMPLATES."formas/addcategory.form.php";
                exit;
                break;
            
            case "addcurp":
                $op=$uri[3];
                require_once DIR_TEMPLATES."formas/addcurp.form.php";
                exit;
                break;
        }

        break;
}