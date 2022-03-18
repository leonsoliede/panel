<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;

class UserController extends Controller
{
    public function profile() 
    {
        return view('profile', array('user' => Auth::user()));
    }

    public function updateAvatar(Request $request)
    {
        //Handle upload of avatar
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save(public_path('uploads/avatars/' . $filename));

            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }
        return view('profile', array('user' => Auth::user()));
    }

    public function totalUsers() {
                $users = DB::table('users')->get();
                return view('/', ['users' => $users]);
    }

    public function destroy($id){
       
        User::destroy($id);

        $user = \User::find(Auth::user()->id);

        Auth::logout();
    
        if ($user->delete()) {
    
             return Redirect::route('/')->with('global', 'Your account has been deleted!');
        }
        
    }

    public function change_password(){ 
        return view('profile.change_password');
    }


    public function update_password(Request $request){
        $request->validate([
        'old_password'=>'required|min:6|max:100',
        'new_password'=>'required|min:6|max:100',
        'confirm_password'=>'required|same:new_password'
        ]);

        $current_user=auth()->user();

        if(Hash::check($request->old_password,$current_user->password)){

            $current_user->update([
                'password'=>bcrypt($request->new_password)
            ]);

            return redirect()->back()->with('success','Password successfully updated.');

        }else{
            return redirect()->back()->with('error','New password did not match your old one. Please try again.');
        }



    }
}
