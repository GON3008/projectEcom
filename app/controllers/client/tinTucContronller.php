<?php
namespace App\Controllers\Client;

use App\Controllers\BaseController;
use App\Models\Client\tinTuc;

class tinTucController extends BaseController
{

    protected $tintuc;

    public function __construct()
    {
        $this->tintuc = new tinTuc();
    }

    public function tintuc() {
        $this->render('client.tintuc');
    }
}