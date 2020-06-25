<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;
class LoginController extends Controller
{
    public function login(Request $req)
    {
		try {
		    $req->validate([
		      'email' => 'email|required',
		      'password' => 'required'
		    ]);
		    $credentials = request(['email', 'password']);
		    if (!Auth::attempt($credentials)) {
		      return response()->json([
		        'status_code' => 500,
		        'message' => 'Unauthorized'
		      ]);
		    }
		    $user = User::where('email', $req->email)->first();
		    if ( ! \Hash::check($req->password, $user->password, [])) {
		       throw new \Exception('Error in Login');
		    }
		    $tokenResult = $user->createToken('authToken')->plainTextToken;
		    return response()->json([
		      'status_code' => 200,
		      'access_token' => $tokenResult,
		      'token_type' => 'Bearer',
		    ]);
		} catch (Exception $error) {
		    return response()->json([
		      'status_code' => 500,
		      'message' => 'Error in Login',
		      'error' => $error,
		    ]);
		}
	}

	public function logout()
	{
		$user = Auth::user();
		$user->tokens()->delete();
		if ($user) {
			return response()->json(['error'=>0,'msg'=>'Logout success!']);
		}
		
	}
}
