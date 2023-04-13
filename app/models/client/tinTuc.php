<?php
namespace App\Models\Client;

use App\Models\BaseModel;
class tinTuc extends BaseModel {
    public function tintuc() {
        $sql = "SELECT * FROM tin_tuc";
        $this->setQuery($sql);
        $this->execute();
        return $this->fetchAll();
    }
}