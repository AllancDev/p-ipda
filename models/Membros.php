<?php 

    class Membros extends Model {

        public function get_list() {
            $array = array();

            $sql = "SELECT * FROM tb_membros ORDER BY nomecompleto";
            $sql = $this -> db -> query($sql);

            $array = $sql -> fetchAll();

            return $array;
        }

        public function add($data = array()) {
            
            $sqledit = array_keys($data);
            $coluna = implode(', ', $sqledit);
            $colunaValues = ':' . implode(",:", $sqledit);
            
            $sql = "INSERT INTO tb_membros ({$coluna}) VALUES ($colunaValues)";
            $sql = $this -> db -> prepare($sql);

            foreach($data as $row => $value) {
                $sql -> bindValue(':' . $row, $value);
            }

            $sql -> execute();

            if($sql -> rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        }

    }