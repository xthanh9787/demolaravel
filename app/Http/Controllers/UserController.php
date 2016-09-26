<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\User;
use Illuminate\Http\Request;


class UserController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
        
    }
    public function index()
    {

    	$user = User::all();
    	return view('user.index', ['user' => $user]);
    }
    public function detail($id)
    {
	
		
		$user = $this->user->where('id', '=' ,$id)->first();
		return view('user.detail', ['user' => $user]);




    }
    public function abd()
    {
    	return "cach goi";
    }

    public function save(Request $request)
    {
    	$id = $request->input('id');
    	$user = $this->user->find($id);
    	if ($user) {
    		//Save data 
    		$username = $request->input('username');
    		$password = $request->input('password');
    		$user->username = $username;
    		$user->password = $password;
    		$user -> save();

    	} else {
    		echo 'ko co data';
    		return view('user.index', ['user' => $user]);
    	}
    	
    }
    
}
