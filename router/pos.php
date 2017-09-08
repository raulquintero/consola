<?php

switch ($q) {
    case '/pos':

        $op1 = "/".$uri[1];
        $theme = "theme-grey";
        $focusto = "#codebar";
        $layout = "no";
        $template = "xpos";
        switch ($op1) {
            case "/cobrar":
                echo $op2 = "/".$uri[2];
                switch ($op2) {
                    case '/efectivo':
                        $location = "Location: /notaventa";
                        break;
                }
                break;
            case "/notaventa":
                $template = "notaVenta";
                break;
        }
        break;
}

