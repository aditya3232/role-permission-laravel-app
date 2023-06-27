<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert as Alert;

class RoleController extends Controller
{
    public function index() {
        $title = 'Hapus Role!';
        $text = "Apakah anda yakin hapus role?";
        confirmDelete($title, $text);
        return view('mazer_template.admin.roles.index');
    }

    public function dataTable(Request $request) {
        $columns = array( 
                            0 =>'name',
                            1 => 'id', //action
                        );

        $totalData = Role::whereNotIn('name', ['admin'])->count();

        $totalFiltered = $totalData; 

        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');

        if(empty($request->input('search.value')))
        {            
            $Roles = Role::whereNotIn('name', ['admin'])
                         ->offset($start)
                         ->limit($limit)
                         ->orderBy($order,$dir)
                         ->get();
        }
        else {
            $search = $request->input('search.value'); 

            $Roles =  Role::where('id','LIKE',"%{$search}%")
                            ->orWhere('name', 'LIKE',"%{$search}%")
                            ->whereNotIn('name', ['admin'])
                            ->offset($start)
                            ->limit($limit)
                            ->orderBy($order,$dir)
                            ->get();

            $totalFiltered = Role::where('id','LIKE',"%{$search}%")
                             ->orWhere('name', 'LIKE',"%{$search}%")
                             ->whereNotIn('name', ['admin'])
                             ->count();
        }

        $data = array();
        if(!empty($Roles))
        {
            foreach ($Roles as $Role)
            {
                $edit =  route('admin.roles.edit',$Role->id);
                $destroy =  route('admin.roles.destroy',$Role->id);

                $nestedData['id'] = $Role->id;
                $nestedData['name'] = $Role->name;
                $nestedData['options'] = "&emsp;<a href='{$edit}' title='EDIT' class='btn btn-info btn-sm mt-2'><i class='bi bi-pencil-square'></i></a>
                                          &emsp;<a href='{$destroy}' title='DESTROY' class='btn btn-danger btn-sm mt-2' data-confirm-delete='true'><i class='bi bi-trash' data-confirm-delete='true'></i></a>";
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

    public function create() {
        return view('mazer_template.admin.roles.create');
    }

    public function store(Request $request) {
        $messages = [
        'required' => ':attribute wajib diisi.',
        'min' => ':attribute harus diisi minimal :min karakter.',
        'max' => ':attribute harus diisi maksimal :max karakter.',
        'size' => ':attribute harus diisi tepat :size karakter.',
        'unique' => ':attribute sudah terpakai.',
        ];

        $validator = Validator::make($request->all(),[
            'name' => 'required|unique:roles,name',
        ],$messages);

        if($validator->fails()) {
            Alert::error('Cek kembali pengisian form, terima kasih !');
            return redirect()->route('admin.roles.create')->withErrors($validator->errors())->withInput();
        }

        Role::insert([
            'name' => $request->input('name'),
        ]);

        Alert::success('Sukses', 'Tambah role berhasil');
        return redirect()->route('admin.roles.index');
    }

    public function edit($id) {
        $role = Role::findOrFail($id);

        return view('mazer_template.admin.roles.edit', compact('role'));
    }

    public function update(Request $request, $id) {
        $Role = Role::findOrFail($id);

        $messages = [
        'required' => ':attribute wajib diisi.',
        'min' => ':attribute harus diisi minimal :min karakter.',
        'max' => ':attribute harus diisi maksimal :max karakter.',
        'size' => ':attribute harus diisi tepat :size karakter.',
        'unique' => ':attribute sudah terpakai.',
        ];

        $validator = Validator::make($request->all(),[
            'name' => 'required',
        ],$messages);

        // Check if the 'name' values have changed
        if ($request->input('name') !== $Role->name) {
            $validator->addRules(['name' => 'required|unique:roles,name']);
        }

        if($validator->fails()) {
            Alert::error('Cek kembali pengisian form, terima kasih !');
            return redirect()->route('admin.roles.edit',$id)->withErrors($validator->errors())->withInput();
        }

        $upadted_at= date("Y-m-d H:i:s");
        Role::where('id',$id)
            ->update([
                'name'=>$request->input('name'),
                'updated_at'=>$upadted_at,
            ]);

        Alert::success('Sukses', 'Update role berhasil');
        return redirect()->route('admin.roles.index');
    }

    public function destroy($id) {
        $ids = $id;
        $role = Role::findOrFail($id);

        $role->delete();

        Alert::success('Sukses', 'Role berhasil dihapus');
        return redirect()->route('admin.roles.index');
    }
    
    
}