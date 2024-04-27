<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\patient;
use App\Models\Record;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\View\View
     */
    public function index(User $model)
    {
        return view('users.index', ['users' => $model->paginate(15)]);
    }

    public function read()
    {
        $users = User::all(); // Assuming User model
        return view('index', compact('users')); // Pass $users to 'index' view
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|min:4',
            'email' => 'required|email',
            'password' => 'required|min:6',
            

        ]);

        User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> $request->password,

        ]);

        return redirect('/user')->with('success','Data User Berhasil Ditambahkan');
    }

    public function destroy($id){
        $user = User :: find($id);
        $user->delete();

        return redirect('/user')->with('success', 'Data Berhasil Dihapus');

        

    }

    public function dashboard()
    {
        $userCount = User::count();
        $pasienCount = Patient::count();
        $recordCount = Record::count();

        return view('pages.dashboard', compact('userCount', 'pasienCount', 'recordCount'));
    }


}
