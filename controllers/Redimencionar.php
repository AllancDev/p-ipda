<?php 


    class Redimencionar {
        public function Redimenciona($img, $largura, $pasta) {
            $name = md5(uniqid(rand(), true));

            if($img['type'] == 'image/jpeg' ) {
                $imgmod = imagecreatefromjpeg($img['tmp_name']);
            } else if($img['type'] == 'image/gif') {
                $imgmod = imagecreatefromgif($img['tmp_name']);
            } else if($img['type'] == 'image/png') {
                $imgmod = imagecreatefrompng($img['tmp_name']);
            }

            $x = imagesx($imgmod);
            $y = imagesy($imgmod);

            $altura = ($largura * $y) / $x;

            $nova = imagecreatetruecolor($largura, $altura);
            imagecopyresampled($nova, $imgmod, 0, 0, 0, 0, $largura, $altura, $x, $y);       
        
            if($img['type'] == "image/jpeg") {
                $name = $name . ".jpg";
                $local = $pasta . $name . ".jpg";
                imagejpeg($nova, $local);
            } else if ($img['type']=="image/gif"){
                $name = $name . ".gif";
                $local= $pasta/$name .".gif";
                imagejpeg($nova, $local);
            } else if ($img['type']=="image/png"){
                $name = $name . ".png";
                $local="$pasta/$name".".png";
                imagejpeg($nova, $local);
            }		

            imagedestroy($imgmod);
            imagedestroy($nova);

            return $name;
        }
    } 