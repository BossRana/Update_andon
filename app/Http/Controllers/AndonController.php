<?php

namespace App\Http\Controllers;

use App\Models\db2;
use App\Models\db1;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class AndonController extends Controller
{
    public function index()
    {

        $db2s = db2::all();
        $db2s = DB::connection('mysql2')->table("mhs")->get();
        foreach ($db2s as $db2){
            $res[] = [
                'nim'=>$db2->nim,
                'namamhs'=>$db2->namamhs,
                'alamat'=>$db2->alamat,
            ];

        };
        return response()->json($res);

    }
    


    public function getRecord()
    {
        $db2Model = new db2();
        $db2Model->setConnection('mysql2');
        $find = $db2Model->find(1);
        return $find;
    }


    
    

   
    
}

