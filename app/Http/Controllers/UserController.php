<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Restaurant;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    public function index(){
        return view('user.index')->with('records' , User::paginate(5));
    }


    public function create()
    {
        return view('user.create')
            ->with(['roles' => Role::all()]);
    }

    public function store(UserRequest $request)
    {
        $data = $request->all();
        $user = $this->storeUser($data);

        if($user->role->name === 'Employee'){
            $restaurant = Restaurant::findOrFail($data['restaurant_id']);
            $restaurant->users()->attach($user);
        }

        return redirect()->route('users.index' , app()->getLocale())->with(['message' => 'User Added']);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function storeUser(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role_id' => $data['role_id']
        ]);

    }


    public function edit(Request $request){

        $id =  $request->route()->parameter('user');
        $user = User::find($id);
        return view('user.edit')
            ->with(
                [
                    'record' => $user,
                    'roles' => Role::all()
                ]);
    }

    public function update(UserRequest $request){

        $data = $request->all();
        $user = User::find($data['id']);
        if($data['password'] !== $user['password']){
            $data['password'] = Hash::make($data['password']);
        }
        $res = $user->update($data);
        return redirect()->route('users.index' , app()->getLocale())->with(['message' => 'User Updated']);

    }

    public function destroy(Request $request)
    {
        $id =  $request->route()->parameter('user');
        $user = User::find($id);
        $user->delete();
        return redirect()->route('users.index' , app()->getLocale())->with(['message' => 'User Deleted']);
    }
}
