<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller{

        public function index(){
            $users= User::all();
            return view('users.index',compact('users'));
        }
        public function edit(User $user){
            return view('users.edit',compact('user'));
        }
        public function update(Request $request, User $user){
            $data=$request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email',
                'role' => 'required|string',
            ]);
            $user->update($data);
            return redirect()->route('users.index')->with('success','User updated successfully');
        }
        public function destroy(User $user)
        {
            $user->delete();
            return redirect()->route('users.index')->with('success','User deleted successfully');
        }
}
