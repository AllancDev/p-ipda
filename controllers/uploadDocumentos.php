<?php
    class uploadDocumentos {

        public function receberDocumento($doc, $caminho) {
            $_UP['pasta'] = $caminho;
            $name = explode('.', $doc['name']);
            $_UP['tamanho'] = 1024 * 1024 * 2; // 2Mb
            $_UP['extensoes'] = array('jpg', 'pdf', 'doc', 'png', 'gif', 'txt', 'docx', 'xls', 'xlsx', 'ppt', 'pps');
            $_UP['renomeia'] = true;

            // Array com os tipos de erros de upload do PHP
                $_UP['erros'][0] = 'Não houve erro';
                $_UP['erros'][1] = 'O arquivo no upload é maior do que o limite do PHP';
                $_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
                $_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
                $_UP['erros'][4] = 'Não foi feito o upload do arquivo';
            
            if($doc['error'] != 0) {
                die("Não foi possível fazer o upload, erro:<br />" . $_UP['erros'][$doc['error']] );
                exit; // Para a execução do script
            }

            $extensao = strtolower(end($name));
            if(array_search($extensao, $_UP['extensoes']) === false ) {
                return "Por favor, envie arquivos com as seguintes extensões: jpg, pdf, doc, png, gif, txt, docx, xls, xlsx, ppt ou pps";
                exit;
            } else if($_UP['tamanho'] < $doc['size']){
                return "O tamanho maximo para envio é de 2Mb.";
                exit;
            } else {
                if($_UP['renomeia'] == true) {
                    $nome_final = date('d-m-Y') . "-" . date('H-i-s') . "-" . rand(0, 99999) . "." . $extensao;
                }
            }

            if(move_uploaded_file($doc['tmp_name'], $_UP['pasta'] . $nome_final)) {
                return $nome_final;
            } else {
                return false;
            }
        }

    }

?>