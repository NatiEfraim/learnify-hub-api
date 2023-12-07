<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Chart;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    //
    public function onAllSelect()
    {
        $result = Chart::all(); ///get all data from the tabel.
        return $result;
    }
}
