<?php
namespace App\Models\Client;

use App\Models\BaseModel;
class tinTuc extends BaseModel {
    function Tintuc() {
        // lấy dữ liệu từ model
        $model = new TinTuc();
        $data = $model->getAll();
        
        // hiển thị view
        $this->render('client.tintuc', ['data' => $data]);
    }
    
}


