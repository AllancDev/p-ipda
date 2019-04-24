<?php

    /**
     * Classe Users.php
     * 
     * @author Allan Cristian
     */


     class Users extends Model {
         private $uid;

         public function verifyLogin() {
             if(!empty($_SESSION['ipdahashlogin'])) {
                 $s = $_SESSION['ipdahashlogin']; // ARMAZENANDO SESSÃO

                 $sql = "SELECT * FROM tb_users WHERE loginhash = :hash";
                 $sql = $this -> db -> prepare($sql);
                 $sql -> bindValue(":hash", $s);
                 $sql -> execute();

                 if($sql -> rowCount() > 0) {
                     $data = $sql -> fetch();
                     $this -> uid = $data['id'];
                     return true;
                 } else {
                     return false;
                 }
             } else {
                 return false;
             }
         }


         public function validateEmail($e) {
             if(filter_var($e, FILTER_VALIDATE_EMAIL)) {
                 return true;
             } else {
                 return false;
             }
         }


         public function emailExists($e) {
            $sql = "SELECT * FROM tb_users WHERE email = :email";
            $sql = $this -> db -> prepare($sql);
            $sql -> bindValue(":email", $e);
            $sql -> execute();

            if($sql -> rowCount() > 0) {
                return true;
            } else {
                return false;
            }
         }

         public function emailValidate($email, $pass) {
             $sql = "SELECT * FROM tb_users WHERE email = :e";
             $sql = $this -> db -> prepare($sql);
             $sql -> bindValue(":e", $email);
             $sql -> execute();

             if($sql -> rowCount() > 0) {
                $info = $sql -> fetch();
                if(password_verify($pass, $info['password'])) {
                    $loginhash = md5(rand(0, 99999) . time() . $info['id'] . $info['email']);
                    $this -> setloginhash($info['id'], $loginhash);
                    $_SESSION['ipdahashlogin'] = $loginhash;
                    $_SESSION['infogeral'] = $info;
                    return true;
                } else {
                    return false;
                }

            } else {
                return false;
            }
         }

         public function setLoginHash($uid, $hash) {
             $sql = "UPDATE tb_users SET loginhash = :hash WHERE id = :id";
             $sql = $this -> db -> prepare($sql);
             $sql -> bindValue(":hash", $hash);
             $sql -> bindValue(":id", $uid);
             $sql -> execute();

             if($sql  -> rowCount() > 0) {
                 return true;
             } else {
                 return false;
             }
         }

         public function getUid() {
             return $this -> uid;
         }

     }