<?php
namespace App\Controllers\Client;

use App\Controllers\BaseController;
use App\Models\Client\tinTuc;

class tinTucController extends BaseController
{

    // protected $tintuc;

    // public function __construct()
    // {
    //     $this->tintuc = new TinTuc();
    // }

    // public function tintuc() {
    //     $this->render('client.tintuc');
    // }


    function Tintuc() {
        // lấy dữ liệu từ model
        $sql = new TinTuc();
        $data = $sql->getAll();
        
        // hiển thị view
        $this->render('client.tintuc', ['data' => $data]);
    }
    
}



