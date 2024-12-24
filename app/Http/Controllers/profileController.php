<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Profile;
use App\Http\Requests\ProfileRequest;

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
    public function store (ProfileRequest $request) 
    {
        //insertion
        $formFields = $request->validated();
        $formFields['password'] = Hash::make($request->password);
        Profile::create($formFields);
        return redirect()->route('profiles.index')->with('success','the profil has been created successfully.');
    }

    public function destroy(Profile $profile)
    {
        $profile->delete();
        return redirect()->route('profiles.index')->with('success','the profil was deleted successfully.');
    }

}


?>