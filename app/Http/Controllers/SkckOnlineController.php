<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\SkckDaftarDiri;
use App\Models\SkckDaftarBapak;
use App\Models\SkckDaftarIbu;
use App\Models\SkckDaftarIstri;
use App\Models\SkckDaftarSuami;
use App\Models\SkckDaftarPelanggaran;
use App\Models\SkckDaftarPidana;
use App\Models\SkckDaftarSaudara;


class SkckOnlineController extends Controller
{
    
    public function index(Request $request) { 
        return view('mazer_template.admin.skck.daftar_skck');
    }

    public function dataTable(Request $request) {
        $columns = array( 
                            0 =>'id', 
                            1 =>'nama',
                            2 => 'no_telepon',
                            3 => 'alamat',
                            4 => 'keperluan_skck',
                            5 => 'created_at',
                            6 => 'id', //action
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
                $detail =  route('admin.skck.detail',$SkckDaftarDiri->id);
                // $edit =  route('SkckDaftarDiris.edit',$SkckDaftarDiri->id);

                $nestedData['id'] = $SkckDaftarDiri->id;
                $nestedData['nama'] = $SkckDaftarDiri->nama;
                $nestedData['no_telepon'] = $SkckDaftarDiri->no_telepon;
                $nestedData['alamat'] = $SkckDaftarDiri->alamat;
                $nestedData['keperluan_skck'] = substr(strip_tags($SkckDaftarDiri->keperluan_skck),0,50)."...";
                $nestedData['created_at'] = date('j M Y h:i a',strtotime($SkckDaftarDiri->created_at));
                // $nestedData['options'] = "&emsp;<a href='{$show}' title='SHOW' ><span class='glyphicon glyphicon-list'></span></a>
                //                           &emsp;<a href='{$edit}' title='EDIT' ><span class='glyphicon glyphicon-edit'></span></a>";
                $nestedData['options'] = "&emsp;<a href='{$detail}' title='SHOW' class='btn btn-info' target='_blank'>Detail</a>";
                $data[] = $nestedData;

            }
        }
          
        $json_data = array(
                    "draw"            => intval($request->input('draw')),  
                    "recordsTotal"    => intval($totalData),  
                    "recordsFiltered" => intval($totalFiltered), 
                    "data"            => $data   
                    );
            
        return response()->json($json_data);
    }

    public function detail($id) {
        $SkckDaftarDiri = (new SkckDaftarDiri)->getTable();
        $SkckDaftarBapak = (new SkckDaftarBapak)->getTable();
        $SkckDaftarIbu = (new SkckDaftarIbu)->getTable();
        $SkckDaftarIstri = (new SkckDaftarIstri)->getTable();
        $SkckDaftarSuami = (new SkckDaftarSuami)->getTable();
        $SkckDaftarPelanggaran = (new SkckDaftarPelanggaran)->getTable();
        $SkckDaftarPidana = (new SkckDaftarPidana)->getTable();
        $SkckDaftarSaudara = (new SkckDaftarSaudara)->getTable();
        

        $SkckDaftarDiriDetail = DB::table($SkckDaftarDiri)
        ->leftJoin($SkckDaftarBapak, $SkckDaftarBapak . '.skck_daftar_diri_id', '=', $SkckDaftarDiri . '.id')
        ->leftJoin($SkckDaftarIbu, $SkckDaftarIbu . '.skck_daftar_diri_id', '=', $SkckDaftarDiri . '.id')
        ->leftJoin($SkckDaftarIstri, $SkckDaftarIstri . '.skck_daftar_diri_id', '=', $SkckDaftarDiri . '.id')
        ->leftJoin($SkckDaftarSuami, $SkckDaftarSuami . '.skck_daftar_diri_id', '=', $SkckDaftarDiri . '.id')
        ->leftJoin($SkckDaftarPelanggaran, $SkckDaftarPelanggaran . '.skck_daftar_diri_id', '=', $SkckDaftarDiri . '.id')
        ->leftJoin($SkckDaftarPidana, $SkckDaftarPidana . '.skck_daftar_diri_id', '=', $SkckDaftarDiri . '.id')
        ->leftJoin($SkckDaftarSaudara, $SkckDaftarSaudara . '.skck_daftar_diri_id', '=', $SkckDaftarDiri . '.id')
        ->select($SkckDaftarDiri . '.*', 
                $SkckDaftarBapak . '.nama as ' . $SkckDaftarBapak . '_nama',
                $SkckDaftarBapak . '.tempat_lahir as ' . $SkckDaftarBapak . '_tempat_lahir',
                $SkckDaftarBapak . '.tanggal_lahir as ' . $SkckDaftarBapak . '_tanggal_lahir',
                $SkckDaftarBapak . '.jenis_kelamin as ' . $SkckDaftarBapak . '_jenis_kelamin',
                $SkckDaftarBapak . '.nik as ' . $SkckDaftarBapak . '_nik',
                $SkckDaftarBapak . '.pekerjaan as ' . $SkckDaftarBapak . '_pekerjaan',
                $SkckDaftarBapak . '.kebangsaan as ' . $SkckDaftarBapak . '_kebangsaan',
                $SkckDaftarBapak . '.status_perkawinan as ' . $SkckDaftarBapak . '_status_perkawinan',
                $SkckDaftarBapak . '.agama as ' . $SkckDaftarBapak . '_agama',
                $SkckDaftarBapak . '.alamat as ' . $SkckDaftarBapak . '_alamat',
                $SkckDaftarBapak . '.no_telepon as ' . $SkckDaftarBapak . '_no_telepon',
                $SkckDaftarBapak . '.email as ' . $SkckDaftarBapak . '_email',
                $SkckDaftarIbu . '.nama as ' . $SkckDaftarIbu . '_nama',
                $SkckDaftarIbu . '.tempat_lahir as ' . $SkckDaftarIbu . '_tempat_lahir',
                $SkckDaftarIbu . '.tanggal_lahir as ' . $SkckDaftarIbu . '_tanggal_lahir',
                $SkckDaftarIbu . '.jenis_kelamin as ' . $SkckDaftarIbu . '_jenis_kelamin',
                $SkckDaftarIbu . '.nik as ' . $SkckDaftarIbu . '_nik',
                $SkckDaftarIbu . '.pekerjaan as ' . $SkckDaftarIbu . '_pekerjaan',
                $SkckDaftarIbu . '.kebangsaan as ' . $SkckDaftarIbu . '_kebangsaan',
                $SkckDaftarIbu . '.status_perkawinan as ' . $SkckDaftarIbu . '_status_perkawinan',
                $SkckDaftarIbu . '.agama as ' . $SkckDaftarIbu . '_agama',
                $SkckDaftarIbu . '.alamat as ' . $SkckDaftarIbu . '_alamat',
                $SkckDaftarIbu . '.no_telepon as ' . $SkckDaftarIbu . '_no_telepon',
                $SkckDaftarIbu . '.email as ' . $SkckDaftarIbu . '_email',
                $SkckDaftarIstri . '.nama as ' . $SkckDaftarIstri . '_nama',
                $SkckDaftarIstri . '.tempat_lahir as ' . $SkckDaftarIstri . '_tempat_lahir',
                $SkckDaftarIstri . '.tanggal_lahir as ' . $SkckDaftarIstri . '_tanggal_lahir',
                $SkckDaftarIstri . '.jenis_kelamin as ' . $SkckDaftarIstri . '_jenis_kelamin',
                $SkckDaftarIstri . '.nik as ' . $SkckDaftarIstri . '_nik',
                $SkckDaftarIstri . '.pekerjaan as ' . $SkckDaftarIstri . '_pekerjaan',
                $SkckDaftarIstri . '.kebangsaan as ' . $SkckDaftarIstri . '_kebangsaan',
                $SkckDaftarIstri . '.status_perkawinan as ' . $SkckDaftarIstri . '_status_perkawinan',
                $SkckDaftarIstri . '.agama as ' . $SkckDaftarIstri . '_agama',
                $SkckDaftarIstri . '.alamat as ' . $SkckDaftarIstri . '_alamat',
                $SkckDaftarIstri . '.no_telepon as ' . $SkckDaftarIstri . '_no_telepon',
                $SkckDaftarIstri . '.email as ' . $SkckDaftarIstri . '_email',
                $SkckDaftarSuami . '.nama as ' . $SkckDaftarSuami . '_nama',
                $SkckDaftarSuami . '.tempat_lahir as ' . $SkckDaftarSuami . '_tempat_lahir',
                $SkckDaftarSuami . '.tanggal_lahir as ' . $SkckDaftarSuami . '_tanggal_lahir',
                $SkckDaftarSuami . '.jenis_kelamin as ' . $SkckDaftarSuami . '_jenis_kelamin',
                $SkckDaftarSuami . '.nik as ' . $SkckDaftarSuami . '_nik',
                $SkckDaftarSuami . '.pekerjaan as ' . $SkckDaftarSuami . '_pekerjaan',
                $SkckDaftarSuami . '.kebangsaan as ' . $SkckDaftarSuami . '_kebangsaan',
                $SkckDaftarSuami . '.status_perkawinan as ' . $SkckDaftarSuami . '_status_perkawinan',
                $SkckDaftarSuami . '.agama as ' . $SkckDaftarSuami . '_agama',
                $SkckDaftarSuami . '.alamat as ' . $SkckDaftarSuami . '_alamat',
                $SkckDaftarSuami . '.no_telepon as ' . $SkckDaftarSuami . '_no_telepon',
                $SkckDaftarSuami . '.email as ' . $SkckDaftarSuami . '_email',
                $SkckDaftarSaudara . '.nama as ' . $SkckDaftarSaudara . '_nama',
                $SkckDaftarSaudara . '.tempat_lahir as ' . $SkckDaftarSaudara . '_tempat_lahir',
                $SkckDaftarSaudara . '.tanggal_lahir as ' . $SkckDaftarSaudara . '_tanggal_lahir',
                $SkckDaftarSaudara . '.jenis_kelamin as ' . $SkckDaftarSaudara . '_jenis_kelamin',
                $SkckDaftarSaudara . '.nik as ' . $SkckDaftarSaudara . '_nik',
                $SkckDaftarSaudara . '.pekerjaan as ' . $SkckDaftarSaudara . '_pekerjaan',
                $SkckDaftarSaudara . '.kebangsaan as ' . $SkckDaftarSaudara . '_kebangsaan',
                $SkckDaftarSaudara . '.status_perkawinan as ' . $SkckDaftarSaudara . '_status_perkawinan',
                $SkckDaftarSaudara . '.agama as ' . $SkckDaftarSaudara . '_agama',
                $SkckDaftarSaudara . '.alamat as ' . $SkckDaftarSaudara . '_alamat',
                $SkckDaftarSaudara . '.no_telepon as ' . $SkckDaftarSaudara . '_no_telepon',
                $SkckDaftarSaudara . '.email as ' . $SkckDaftarSaudara . '_email',
                $SkckDaftarPelanggaran . '.pelanggaran_apa as ' . $SkckDaftarPelanggaran . '_pelanggaran_apa',
                $SkckDaftarPelanggaran . '.sejauhmana_proseshukumnya as ' . $SkckDaftarPelanggaran . '_sejauhmana_proseshukumnya',
                $SkckDaftarPidana . '.pidana_apa as ' . $SkckDaftarPidana . '_pidana_apa',
                $SkckDaftarPidana . '.sejauhmana_proseshukumnya as ' . $SkckDaftarPidana . '_sejauhmana_proseshukumnya',
                )
        ->where($SkckDaftarDiri . '.id', $id)
        ->get(); 

        // dd($SkckDaftarDiriDetail);
        
        return view('mazer_template.admin.skck.detail_skck', compact('SkckDaftarDiriDetail'));
    }

}