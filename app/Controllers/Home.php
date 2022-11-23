
<?php

namespace App\Controllers;
use App\Models\Contatos;
use App\Models\Clientes;

class Home extends BaseController
{
    public function cadastro()
    {return view('cliente_cadastro');}
    
    public function index()
    {
        //return view('welcome_message');
        $clientes = new Clientes();
        $clientes->select("idc,nome");
        $clientes = $clientes->findAll();

        foreach($clientes as $x){ $result[] = [$x['idc'], $x['nome']]; }
        $clientes = ['data' => $result];
        echo json_encode($clientes);            
    }

    public function contatos()
    {
        $dados = new Contatos();
        $dados->select("id,nome");
        $clientes = $clientes->findAll();

        foreach($clientes as $x){ $result[] = [$x['idc'], $x['nome']]; }
        $clientes = ['data' => $result];
        echo json_encode($clientes);            
    }
    
    public function clientes()
    {
        //return view('welcome_message');
        $clientes = new Clientes();
        $clientes->select("idc,nome");
        $clientes = $clientes->findAll();

        foreach($clientes as $x){ $result[] = [$x['idc'], $x['nome']]; }
        $clientes = ['data' => $result];
        echo json_encode($clientes);            
    }
}

