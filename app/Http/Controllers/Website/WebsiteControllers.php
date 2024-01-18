<?php
namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Condominos;
use Illuminate\Http\Request;
use App\Models\Bloco;
use App\Models\Apartamento;
use App\Models\Sensor;
use App\Models\Caixaagua;
use App\Models\Consumo;
use App\Models\Administrador;
use Illuminate\Http\RedirectResponse;
use Auth;


class WebsiteControllers extends Controller
{

    public function homeusuario()
    {
        if (!Auth::guard('condominos')->check()) {
            return redirect('/');
        }
        return view('paginas.PaginadoUsuario');
    }
    public function login()
    {
        return view('paginas.Paginalogin');
    }
    public function homeadm()
    {
        if (!Auth::guard('administrador')->check()) {
            return redirect('/');
        }
        return view('paginas.PaginadoAdministrador');
    }

    public function cadastrar(request $request)
    {
        if (!Auth::guard('administrador')->check()) {
            return redirect('/');
        }

                $condominos = new Condominos;

                $condominos->nome = $request->nome;
                $condominos->email = $request->email;
                $condominos->password = bcrypt($request->password);
                $condominos->numeroAp = $request->numeroAp;
                $condominos->status = 1;

                $condominos->save();

                return redirect()->back();
        }
    public function cadastrarCaixa(request $request)
    {
        if (!Auth::guard('administrador')->check()) {
            return redirect('/');
        }

        $caixadagua = new Caixaagua;

        $caixadagua->capacidade = $request->capacidade;
        $caixadagua->nivelagua = $request->nivelagua;
        $caixadagua->numeroSensor = $request->numeroSensor;



        $caixadagua->save();

        return redirect()->back();
    }
    public function cadastrarSensor(request $request)
    {
        if (!Auth::guard('administrador')->check()) {
            return redirect('/');
        }

        $sensor = new Sensor;

        $sensor->idAp = $request->idAp;
        $sensor->idCaixaAgua = $request->idCaixaAgua;


        $sensor->save();

        return redirect()->back();
    }
    public function cadastrarApartamento(request $request)
    {
        if (!Auth::guard('administrador')->check()) {
            return redirect('/');
        }

        $apartamento = new Apartamento;

        $apartamento->nomeCondomino = $request->nomeCondomino;
        $apartamento->numeroAp = $request->numeroAp;
        $apartamento->numeroSensor = $request->numeroSensor;
        $apartamento->numeroAndar = $request->numeroAndar;
        $apartamento->numeroBloco = $request->numeroBloco;


        $apartamento->save();

        return redirect()->back();
    }
    public function cadastrarBloco(request $request)
    {
        if (!Auth::guard('administrador')->check()) {
            return redirect('/');
        }

        $bloco = new Bloco;

        $bloco->numero = $request->numero;
        $bloco->quantidadeAp = $request->quantidadeAp;
        $bloco->quantidadeAndar = $request->quantidadeAndar;



        $bloco->save();

        return redirect('ListarBloco');
    }
    public function listar()
    {
        if (!Auth::guard('administrador')->check()) {
            return redirect('/');
        }
        $condominos = Condominos::get()->toArray();
        return view('paginas.listar', compact('condominos'));
    }
    public function listarcaixa()
    {
        if (!Auth::guard('administrador')->check()) {
            return redirect('/');
        }
        $caixa = Caixaagua::get()->toArray();
        return view('paginas.ListarCaixa', compact('caixa'));
    }
    public function listarapartamento()
    {
        if (!Auth::guard('administrador')->check()) {
            return redirect('/');
        }
        $apartamento = Apartamento::get();
        return view('paginas.ListarApartamento', compact('apartamento'));
    }
    public function listarsensor()
    {
        if (!Auth::guard('administrador')->check()) {
            return redirect('/');
        }
        $sensor = Sensor::get()->toArray();
        return view('paginas.ListarSensor', compact('sensor'));
    }
    public function listarbloco()
    {
        if (!Auth::guard('administrador')->check()) {
            return redirect('/');
        }
        $bloco = Bloco::get()->toArray();
        return view('paginas.ListarBloco', compact('bloco'));
    }
    public function logout(Request $request)
    {
        Auth::guard('administrador')->logout();
        Auth::guard('condominos')->logout();

        return redirect('/');
    }



    public function logar(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::guard('condominos')->attempt($credentials)) {
            return redirect()->intended('/homeusuario')
                ->withSuccess('You have Successfully loggedin');
        }

        if (Auth::guard('administrador')->attempt($credentials)) {
            return redirect()->intended('/homeadm')
                ->withSuccess('You have Successfully loggedin');
        }

        return redirect("/")->withErrors('Dados incorretos');
    }
    public function editarAdm(Request $request)
    {
        if (!Auth::guard('administrador')->check()) {
            return redirect('/');
        }
        $user = Administrador::where('id', Auth::guard('administrador')->user()->id)->first();
        $user->nome = $request->nome;
        $user->email = $request->email;
        $user->save();
        return redirect('/homeadm');
    }
    public function editarUsuario(Request $request)
    {
        if (!Auth::guard('administrador')->check()) {
            return redirect('/');
        }
        $user = Condominos::where('id', Auth::guard('condominos')->user()->id)->first();
        $user->nome = $request->nome;
        $user->email = $request->email;
        $user->save();
        return redirect('/homeadm');
    }

    public function condominos()
    {
        if (!Auth::guard('administrador')->check()) {
            return redirect('/');
        }
        $id = $_GET['id'];
        $condominos = Condominos::find($id);
        return view('paginas.Editarcondomino', compact('condominos'));

    }
    public function apartamento()
    {
        if (!Auth::guard('administrador')->check()) {
            return redirect('/');
        }
        $id = $_GET['id'];
        $apartamento = Apartamento::find($id);
        return view('paginas.Editarapartamento', compact('apartamento'));

    }
    public function sensor()
    {
        if (!Auth::guard('administrador')->check()) {
            return redirect('/');
        }
        $id = $_GET['id'];
        $sensor = Sensor::find($id);
        return view('paginas.Editarsensor', compact('sensor'));

    }
    public function caixadagua()
    {
        if (!Auth::guard('administrador')->check()) {
            return redirect('/');
        }
        $id = $_GET['id'];
        $caixadagua = Caixaagua::find($id);
        return view('paginas.Editarcaixadagua', compact('caixadagua'));

    }
    public function deletar()
    {
        if (!Auth::guard('administrador')->check()) {
            return redirect('/');
        }
        $id = $_GET['id'];
        $tipo = $_GET['tipo'];
        if ($tipo == 1){
            $caixadagua = Condominos::find($id);
            $caixadagua->delete();
            return redirect('Listar');
        }
        if ($tipo == 2){
            $caixadagua = Apartamento::find($id);
            $caixadagua->delete();
            return redirect('ListarApartamento');
        }
        if ($tipo == 3){
            $caixadagua = Sensor::find($id);
            $caixadagua->delete();
            return redirect('ListarSensor');
        }
        if ($tipo == 4){
            $caixadagua = Caixaagua::find($id);
            $caixadagua->delete();
            return redirect('ListarCaixa');
        }
        if ($tipo == 5){
            $caixadagua = Bloco::find($id);
            $caixadagua->delete();
            return redirect('ListarBloco');
        }

    }
    public function salvarcondomino(request $request)
    {
        if (!Auth::guard('administrador')->check()) {
            return redirect('/');
        }

        $condominos = Condominos::findOrFail($request->id);
        $condominos->nome = $request->nome;
        $condominos->email = $request->email;
        $condominos->numeroAp = $request->numeroAp;
        $condominos->save();
        return redirect('Listar');
    }
    public function salvarapartamento(request $request)
    {
        if (!Auth::guard('administrador')->check()) {
            return redirect('/');
        }

        $apartamento = Apartamento::findOrFail($request->id);
        $apartamento->nomeCondomino = $request->nomeCondomino;
        $apartamento->numeroAp = $request->numeroAp;
        $apartamento->numeroSensor = $request->numeroSensor;
        $apartamento->numeroAndar = $request->numeroAndar;
        $apartamento->numeroBloco = $request->numeroBloco;
        $apartamento->save();
        return redirect('ListarApartamento');

    }
    public function salvarsensor(request $request)
    {
        if (!Auth::guard('administrador')->check()) {
            return redirect('/');
        }

        $sensor = Sensor::findOrFail($request->id);
        $sensor->idAp = $request->idAp;
        $sensor->idCaixaAgua = $request->idCaixaAgua;
        $sensor->save();
        return redirect('ListarSensor');
    }
    public function salvarcaixadagua(request $request)
    {
        if (!Auth::guard('administrador')->check()) {
            return redirect('/');
        }

        $condominos = Caixaagua::findOrFail($request->id);
        $condominos->capacidade = $request->capacidade;
        $condominos->nivelAgua = $request->nivelAgua;
        $condominos->numeroSensor = $request->numeroSensor;
        $condominos->save();
        return redirect('ListarCaixa');
    }





}
?>