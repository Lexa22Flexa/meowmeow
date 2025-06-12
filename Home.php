<?php
// $stages = $this->zavodyYear->select("race_year.*, Count(*) as pocetZavodu")->join("stage", "stage.id_race_year = race_year.id", "inner")->where("id_race", $idRace)->groupBy("race_year.id")->findAll();
//      $data["stages"] = $stages;
// v konstruktoru: $this->load->helper("fileupload");
public function submitFile() {
    echo $image_new=fileuploadCI($nazevObrazku, "obrazky");
}
