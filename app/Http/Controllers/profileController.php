<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class profileController extends Controller
{
    public function index () 
    {
        $profiles = Profile::paginate(5);
        return view('profile.index',compact('profiles'));
    }
    public function show (Profile $profile)
    {
        return view('profile.show',compact('profile'));
    }
    public function create()
    {
        return view('create');
    }
    public function store (Request $request) 
    {
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        $bio = $request->bio;

        //validation
            $request->validate([
                'name' => 'required|min:3',
                'email' => 'required|email|unique:profiles',
                'password' => 'required|min:8',
                'bio' => 'required|min:10',
            ]);

        //insertion
        Profile::create($request->post());
        return redirect()->route('profiles.index')->with('success','the profil has been created successfully.');
    }

}


?>