<?php
use Core\{Router};
use App\Controller\{GenericController,FormaController};


if  ($variables = Router::request('/blog/{year}/{month}/{day}/{nota}','get')) {$response = GenericController::showPage("tiles",$variables);}
elseif  ($variables = Router::request('/blog/{year}/{month}/{day}','get'))         {$response = GenericController::showPage("showPost",$variables);}


