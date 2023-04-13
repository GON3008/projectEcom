<?php
namespace App\Controllers\Client;

use App\Controllers\BaseController;
// use App\Models\Client\TrangChu;
class TrangController extends BaseController{
    function hienThi() {
        return $this->render('client.lienhe');
    }
}