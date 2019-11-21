<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Hash;
use DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.index');
    }

    public function showTable()
    {
      $users = DB::table('users')
        ->select('users.*')
        ->get();

        return Datatables::of($users)
        ->addColumn('btn', 'user.actions')
        ->rawColumns(['btn'])
      ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'clave' => "rovero",
          ]);
          $msg = [
              'title' => 'Creado!',
              'text' => 'Usuario creado exitosamente.',
              'icon' => 'success',
          ];
          return redirect('user')->with('message', $msg);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('user.show')->with('user',$user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = User::findOrFail($request->user_id);
        $user->name = $request->name;
        $user->email = $request->email;
        if($user->password != null)
        {
            $user->password = Hash::make($request->password);
        }   
        $user->save();
        $msg = [
            'title' => 'Modificado!',
            'text' => 'Usuario modificado exitosamente.',
            'icon' => 'success'
        ];

      return redirect('user')->with('message', $msg);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user) //User $user
    {
        $user->delete();
        $msg = [
            'title' => "Eliminado!",
            'text' => 'Usuario eliminado exitosamente.',
            'icon' => 'success'
        ];
        return response()->json($msg);
    }
}
