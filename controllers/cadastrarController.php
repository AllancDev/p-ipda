<?php

class cadastrarController extends Controller
{
    public function __construct(){
        $this->user = new Users;
        if (!$this->user->verifyLogin()) {
            header("Location: " . BASE_URL . "login");
            exit;
        }
    }


    public function index(){
        $data = array();
        $this->loadView('cadastrar', $data);
    }

    public function get_membros(){
        $array = $_POST;
        echo json_encode($array);
    }


    public function add_membros() {
        $data = $_POST;
        $data['dtnascimento'] = date('Y-m-d', strtotime(str_replace('/', '-', $data['dtnascimento'])));
        $data['dtbatismo'] = date('Y-m-d', strtotime(str_replace('/', '-', $data['dtbatismo'])));
        $data['cpfcnpj'] = $data['cpf/cnpj'];
        unset($data['cpf/cnpj']);

        $statusImg = (isset($_FILES['image']['name']) && !empty($_FILES['image']['name']) ? $_FILES['image']['name'] : null);
        $statusDoc = (isset($_FILES['anexoarquivo']['name']) && !empty($_FILES['anexoarquivo']['name']) ? $_FILES['anexoarquivo']['name'] : null);

        if($statusImg !== null) {
            $move = new Redimencionar();
            $url_image = ROOT_SYSTEM . '/upload/';
            $local = $move -> Redimenciona($_FILES['image'], 200, $url_image);
        }

        if($statusDoc !== null) {
            $url_doc = ROOT_SYSTEM . 'doc/';
            $moveDoc = new uploadDocumentos();
            $resposta = $moveDoc -> receberDocumento($_FILES['anexoarquivo'], $url_doc);
        }

        $data['nome_anexo'] = (isset($resposta) && !empty($resposta) ? $resposta : "");
        $data['nome_image'] = (isset($local) ? $local : "");

        $membros = new Membros();

        if(!empty($data['nomecompleto'])) {
            $res = $membros -> add($data);

            if($res) {
                header('Location: ' . BASE_URL . '?add=1');
                exit;
            } else {
                header('Location: ' . BASE_URL . 'cadastrar?e=1');
                exit;
            }
            
        }
    }
}
