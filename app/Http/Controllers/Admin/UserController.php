<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Auth\Events\Validated;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    protected function name(): Attribute
    {
        return new Attribute(
            
            set: fn ($value)=>ucwords($value)

        );
    }

    public function pdf(){
        $users = User::all();
         $pdf = Pdf::loadView('admin.users.pdf', compact('users'));
         return $pdf->stream();
     }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate(
            ['name'=>'required', 
            'identify'=>'required',
            'birth'=>'required', 
            'blood'=>'required',
            'city'=>'required',
            'phone'=>'required',
            'grade'=>'required',
            'email'=>'required',
            'password'=>'required'
            ]
        );
        $user = User::create($request->all());
        return redirect()->route('admin.users.edit', $user)->with('mensaje','Registrado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
        return view('admin.users.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
        $roles=Role::all();
        return view('admin.users.edit', compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
               
        $request->validate(
            ['name'=>'required', 
            'identify'=>'required',
            'birth'=>'required', 
            'blood'=>'required',
            'city'=>'required',
            'phone'=>'required',
            'grade'=>'required'
            ]
            
        );
       
        $user->update($request->all());
        return redirect()->route('admin.users.edit', $user)->with('mensaje','Registrado correctamente');

        $user->roles()->sync($request->roles);
        return redirect()->route('admin.users.edit', $user)->with('mensaje', 'se asigno rol correctamente'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
        $user->delete();
        return redirect()->route('admin.users.index')->with('mensaje','Registro eliminado correctamente');
    }
}
