<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Menampilkan table user
        $users = User::all();
        return view('users.index', [
            'users' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Menambah data user
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //menyimpan data user
        $request->validate([
            'name' => 'required', 
            'email' => 'required|email|unique:users,email', 
            'password' => 'required|confirmed', 
            'level' => 'required'
        ]);
        $array = $request->only([
            'name', 'email', 'password', 'level', 'aktif'
        ]);
        $array['password'] = bcrypt($array['password']);
        $users = User::create($array);
            return redirect()->route('users.index')->with('success_message', 'Berhasil menambah user baru');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //menampilkan form edit
        $users = User::find($id);
        if (!$users) return redirect()->route('users.index')->with('error_message', 'User dengan id' .$id. 'tidak ditemukan');
        return view('users.edit', [
            'users' => $users
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Mengedit Data User
        $request->validate([
            'name' => 'required', 
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'sometimes|nullable|confirmed', 
            'level' => 'required', 
            'aktif' => 'required'
        ]);
        $users = User::find($id);
        $users->name = $request->name;
        $users->email = $request->email;
        if ($request->password) $users->password = bcrypt($request->password);
        $users->level = $request->level;
        $users->aktif = $request->aktif;
        $users->save();
        return redirect()->route('users.index')->with('success_message', 'Berhasil mengubah user');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        //menghapus data user
        $users = User::find($id);
        if ($id == $request->users()->$id) return redirect()->route('user.idex')->with('error_message'. 'Anda tidak dapat menghapus diri sendiri.');
        if ($users) $users->delete();
        return redirect()->route('users.index')->with('success_message', 'Berhasil menghapus user');
    }
}
