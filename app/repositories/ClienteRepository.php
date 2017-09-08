<?php
namespace App\Repositories;

//use Core\{Auth};
use App\Models\{Cliente};
//use Execption;

class ClienteRepository {
	private $cliente;

	public function __construct() {
		$this->cliente= new Cliente;
	}

	public function listar() : string {

	}

}
