<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $title = 'Hapus User!';
        $text = "Apakah anda yakin hapus user?";
        confirmDelete($title, $text);
        return view('mazer_template.admin.users.index');
    }

    public function dataTable(Request $request) {
        $columns = array( 
                            0 => 'name', 
                            1 => 'email', 
                            2 =>'role.name',
                            3 => 'id', //action
                        );

        $totalData = User::with('role')->count();

        $totalFiltered = $totalData; 

        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');

        if(empty($request->input('search.value')))
        {            
            $Users = User::with('role')
                         ->offset($start)
                         ->limit($limit)
                         ->orderBy($order,$dir)
                         ->get();
        }
        else {
            $search = $request->input('search.value'); 

            $Users =  User::with('role')
                        ->where('id', 'LIKE', "%{$search}%")
                        ->orWhere('name', 'LIKE', "%{$search}%")
                        ->orWhere('email', 'LIKE', "%{$search}%")
                        ->orWhereHas('role', function ($q) use ($search) {
                            $q->where('name', 'LIKE', "%{$search}%");
                        })
                        ->offset($start)
                        ->limit($limit)
                        ->orderBy($order, $dir)
                        ->get()
                        // map untuk role, biar bisa di search, untuk mengatasi masalah {{ Attempt to read property "name" on null }}
                        ->map(function ($user) {
                            $user->role_name = optional($user->role)->name;
                            return $user;
                        });

            $totalFiltered = User::with('role')
                        ->where('id', 'LIKE', "%{$search}%")
                        ->orWhere('name', 'LIKE', "%{$search}%")
                        ->orWhere('email', 'LIKE', "%{$search}%")
                        ->orWhereHas('role', function ($q) use ($search) {
                            $q->where('name', 'LIKE', "%{$search}%");
                        })
                        ->count();
        }

        $data = array();
        if(!empty($Users))
        {
            foreach ($Users as $User)
            {
                // $edit =  route('admin.permissions.edit',$User->id);
                // $destroy =  route('admin.permissions.destroy',$User->id);

                $nestedData['id'] = $User->id;
                $nestedData['name'] = $User->name;
                $nestedData['email'] = $User->email;
                
                $nestedData['role'] = $User->role->name;
                $nestedData['options'] = "&emsp;<a href='' title='EDIT' class='btn btn-info btn-sm mt-2'><i class='bi bi-pencil-square'></i></a>
                                          &emsp;<a href='' title='DESTROY' class='btn btn-danger btn-sm mt-2' data-confirm-delete='true'><i class='bi bi-trash' data-confirm-delete='true'></i></a>";
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
        return view('mazer_template.admin.users.create');
    }

}