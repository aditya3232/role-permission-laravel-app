<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkckOnlineController extends Controller
{
    
    public function index(Request $request) {
        $keyword = $request->search;
        $paginate = $request->per_page;
        if($keyword){
            $daftar_skck = master_kanwil::where('branchcode_kanwil', 'like', "%" . $keyword . "%")->where('is_deleted',0)
                                            ->orWhere('kanwil', 'like', "%" . $keyword . "%")->where('is_deleted',0)
                                            ->orderBy('id', 'DESC')
                                            ->paginate($paginate);
            $length = master_kanwil::where('branchcode_kanwil', 'like', "%" . $keyword . "%")->where('is_deleted',0)
            ->orWhere('kanwil', 'like', "%" . $keyword . "%")->where('is_deleted',0)
            ->orderBy('id', 'DESC')->get();
        }else{
            $daftar_skck = master_kanwil::where('is_deleted',0)->orderBy('id', 'DESC')->paginate($paginate);
            $length = master_kanwil::where('is_deleted',0)->orderBy('id', 'DESC')->get();
        }
        
        return view('mazer_template.admin.skck.daftar_skck');
    }
}