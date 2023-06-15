<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SkckDaftarDiri;
use DataTables;

class SkckOnlineController extends Controller
{
    
    public function index(Request $request) {
        // ## ini adalah contoh untuk menampilkan data dari database serverside nya laravel
        // $keyword = $request->search;
        // $paginate = $request->per_page;

        // if($keyword) {
        //     $daftar_skck = SkckDaftarDiri::where('id', 'like', "%" . $keyword . "%")
        //                                     ->orWhere('nama', 'like', "%" . $keyword . "%")
        //                                     ->orWhere('no_telepon', 'like', "%" . $keyword . "%")
        //                                     ->orWhere('alamat', 'like', "%" . $keyword . "%")
        //                                     ->orWhere('keperluan_skck', 'like', "%" . $keyword . "%")
        //                                     ->orderBy('id', 'DESC')
        //                                     ->paginate($paginate);

        //     $length = SkckDaftarDiri::where('id', 'like', "%" . $keyword . "%")
        //     ->orWhere('nama', 'like', "%" . $keyword . "%")
        //     ->orWhere('no_telepon', 'like', "%" . $keyword . "%")
        //     ->orWhere('alamat', 'like', "%" . $keyword . "%")
        //     ->orWhere('keperluan_skck', 'like', "%" . $keyword . "%")
        //     ->orderBy('id', 'DESC')->get();

        // } else {
        //     $daftar_skck = SkckDaftarDiri::orderBy('id', 'DESC')->paginate($paginate);
        //     $length = SkckDaftarDiri::orderBy('id', 'DESC')->get();
        // }
        
        return view('mazer_template.admin.skck.daftar_skck');
    }

    // # ini adalaah controller datable. bisa tapi g bisa ngatur column nya
    // public function dataTable() {
    //     $total = SkckDaftarDiri::get()->count();
    //     $length = intval($_REQUEST['length']);
    //     $length = $length < 0 ? $total : $length;
    //     $start = intval($_REQUEST['start']);
    //     $draw = intval($_REQUEST['draw']);
    //     $search = $_REQUEST['search']['value'];

    //     $output = array();
    //     $output['data'] = array();

    //     $end = $start + $length;
    //     $end = $end > $total ? $total : $end;

    //     if($search != '') {
    //         $query = SkckDaftarDiri::where(function($filter) use ($search){
    //             $filter->orWhere('id', 'like', "%" . $search . "%");
    //             $filter->orWhere('nama', 'like', "%" . $search . "%");
    //             $filter->orWhere('no_telepon', 'like', "%" . $search . "%");
    //             $filter->orWhere('alamat', 'like', "%" . $search . "%");
    //             $filter->orWhere('keperluan_skck', 'like', "%" . $search . "%");
    //         })
    //         ->take($length)
    //         ->skip($start)
    //         ->get();

    //         $no = $start + 1;
    //         foreach ($query as $val) {
    //             $output['data'][] = 
    //                 array(
    //                     $no,
    //                     $val->nama,
    //                     $val->no_telepon,
    //                     $val->alamat,
    //                     $val->keperluan_skck,
    //                     $val->created_at
    //                 );
    //             $no++;
    //         }

    //         $rows = SkckDaftarDiri::where(function($filter) use ($search){
    //             $filter->orWhere('id', 'like', "%" . $search . "%");
    //             $filter->orWhere('nama', 'like', "%" . $search . "%");
    //             $filter->orWhere('no_telepon', 'like', "%" . $search . "%");
    //             $filter->orWhere('alamat', 'like', "%" . $search . "%");
    //             $filter->orWhere('keperluan_skck', 'like', "%" . $search . "%");
    //         })
    //         ->get();

    //         $output['draw'] = $draw;
    //         $output['recordsTotal'] = $output['recordsFiltered'] = $rows->count();
                                    
    //     } else {
    //         $query = SkckDaftarDiri::take($length)
    //         ->skip($start)
    //         ->get();

    //         $no = $start + 1;
    //         foreach ($query as $val) {
    //             $output['data'][] = 
    //                 array(
    //                     $no,
    //                     $val->nama,
    //                     $val->no_telepon,
    //                     $val->alamat,
    //                     $val->keperluan_skck,
    //                     $val->created_at
    //                 );
    //             $no++;
    //         }

    //         $output['draw'] = $draw;
    //         $output['recordsTotal'] = $total;
    //         $output['recordsFiltered'] = $total; 
    //     }
        
    //     return response()->json($output);
    // }

    public function dataTable(Request $request) {
        $columns = array( 
                            0 =>'id', 
                            1 =>'nama',
                            2=> 'no_telepon',
                            3=> 'alamat',
                            4=> 'keperluan_skck',
                            5=> 'created_at',
                            6=> 'id', //action
                        );
  
        $totalData = SkckDaftarDiri::count();
            
        $totalFiltered = $totalData; 

        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');
            
        if(empty($request->input('search.value')))
        {            
            $SkckDaftarDiris = SkckDaftarDiri::offset($start)
                         ->limit($limit)
                         ->orderBy($order,$dir)
                         ->get();
        }
        else {
            $search = $request->input('search.value'); 

            $SkckDaftarDiris =  SkckDaftarDiri::where('id','LIKE',"%{$search}%")
                            ->orWhere('nama', 'LIKE',"%{$search}%")
                            ->orWhere('no_telepon', 'LIKE',"%{$search}%")
                            ->orWhere('alamat', 'LIKE',"%{$search}%")
                            ->orWhere('keperluan_skck', 'LIKE',"%{$search}%")
                            ->orWhere('created_at', 'LIKE',"%{$search}%")
                            ->offset($start)
                            ->limit($limit)
                            ->orderBy($order,$dir)
                            ->get();

            $totalFiltered = SkckDaftarDiri::where('id','LIKE',"%{$search}%")
                             ->orWhere('nama', 'LIKE',"%{$search}%")
                             ->orWhere('no_telepon', 'LIKE',"%{$search}%")
                             ->orWhere('alamat', 'LIKE',"%{$search}%")
                             ->orWhere('keperluan_skck', 'LIKE',"%{$search}%")
                             ->orWhere('created_at', 'LIKE',"%{$search}%")
                             ->count();
        }

        $data = array();
        if(!empty($SkckDaftarDiris))
        {
            foreach ($SkckDaftarDiris as $SkckDaftarDiri)
            {
                // $show =  route('SkckDaftarDiris.show',$SkckDaftarDiri->id);
                // $edit =  route('SkckDaftarDiris.edit',$SkckDaftarDiri->id);

                $nestedData['id'] = $SkckDaftarDiri->id;
                $nestedData['nama'] = $SkckDaftarDiri->nama;
                $nestedData['no_telepon'] = $SkckDaftarDiri->no_telepon;
                $nestedData['alamat'] = $SkckDaftarDiri->alamat;
                $nestedData['keperluan_skck'] = substr(strip_tags($SkckDaftarDiri->keperluan_skck),0,50)."...";
                $nestedData['created_at'] = date('j M Y h:i a',strtotime($SkckDaftarDiri->created_at));
                // $nestedData['options'] = "&emsp;<a href='{$show}' title='SHOW' ><span class='glyphicon glyphicon-list'></span></a>
                //                           &emsp;<a href='{$edit}' title='EDIT' ><span class='glyphicon glyphicon-edit'></span></a>";
                $nestedData['options'] = "&emsp;<a href='' title='SHOW' class='btn btn-info'>Detail</a>";
                $data[] = $nestedData;

            }
        }
          
        $json_data = array(
                    "draw"            => intval($request->input('draw')),  
                    "recordsTotal"    => intval($totalData),  
                    "recordsFiltered" => intval($totalFiltered), 
                    "data"            => $data   
                    );
            
        // echo json_encode($json_data); 
        // return response()->json_encode($json_data);
        return response()->json($json_data);
    }
}