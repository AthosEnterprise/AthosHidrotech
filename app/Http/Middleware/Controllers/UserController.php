<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

public function create(Request $request){
    
    
    $user = new User;

    $user->nomeCompleto = $request->nomeCompleto;
    $user->cpf = $request->cpf;
    $user->dataNascimento = $request->datanascimento;
    $user->email = $request->email;
    $user->password = bcrypt($request->password);
    $user->status = 1;

    $user->save();

    return view('website.Login');
    
 
  
    
}
public function logar(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/')
                        ->withSuccess('You have Successfully loggedin');
        }
  
        return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');
    }
}




?>