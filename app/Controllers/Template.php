<?php

namespace App\Controllers;

use App\Models\BarangModel;

class Template extends BaseController
{

    public function index()
    {
        $session = session();
        $data['web'] = array(
            'page' => 'admin/dashboard.php'
        );
        return view('admin_template', $data);
    }

    public function tables()
    {
        $data['web'] = array(
            'page' => 'admin/table.php'
        );
        return view('admin_template', $data);
    }
}