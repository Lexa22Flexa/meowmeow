<?php

// v konstruktoru: $this->load->helper("fileupload");
public function submitFile() {
    echo $image_new=fileuploadCI($nazevObrazku, "obrazky");
}