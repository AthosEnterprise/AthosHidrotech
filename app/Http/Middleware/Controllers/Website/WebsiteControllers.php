<?php
namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\Produtos;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;


class WebsiteControllers extends Controller
{

    public function cadastro()
    {
        return view('website.Cadastro');
    }
    public function home()
    {
        $produtos = Produtos::get()->toArray();
        return view('website.home',compact('produtos'));
    }
    public function privacidade()
    {
        return view('website.PoliticaPrivacidade');
    }
    public function capacetes()
    {  $produtos = Produtos::get()->toArray();
        return view('website.Capacetes',compact('produtos'));
    }
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
      }
    public function login()
    {

        return view('website.login');

    }

    public function categoria()
    {
        $produtos = Produtos::get();
        return view('website.ProtudosCategorias');
    }
    public function carrinho()
    {
        return view('website.carrinho');
    }
    public function detalhes()
    {

        return view('website.ProtudosDetalhes', compact('produtos'));
    }
    public function listagem()
    {

        return view('website.ProtudosListagem');
    }
    public function faleconosco()
    {
        return view('website.FaleConosco');
    }
    public function quemsomos()
    {
        return view('website.QuemSomos');
    }
    public function usuario()
    {
        return view('website.UsuarioPerfil');
    }

    public function produto($produto)
    {

        $produto = Produtos::where('idProdutos', $produto)->get();
        return view('website.ProdutoDetalhes', compact('produto'));

    }




    

}
?>