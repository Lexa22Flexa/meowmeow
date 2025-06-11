<?php //ve složce helper!!!
defined("BASEPATH") OR exit("No direct script access allowed"); //už tam bylo

if (!function_exists("fileuploadCI")) {
    function fileuploadCI($nazevObrazku, $slozka) {
        $obrazek=$_FILES[$nazevObrazku]["nazev"]; //udělat asi náhodné:
        $CI =& get_instance();
        $config=array(
            "upload_path" => $slozka,
            "allowed_types" => "png|jpg|jpeg|svg",
            "max_size" => "10000",
            "file_name" => $obrazek
        );
        $CI->load->library("upload", $config);
        $CI->upload->initialize($config);
        if ($CI->upload->do_upload($nazevObrazku)) {
            return $obrazek;
        } else {
            return "Nenahráno!";
        }
    }
}


?>