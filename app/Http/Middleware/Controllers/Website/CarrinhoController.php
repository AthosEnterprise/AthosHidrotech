<?php
namespace App\Http\Controllers\Website;
use App\Http\Controllers\Controller;
use App\Models\Produtos;
use App\Models\Carrinho;
use Illuminate\Http\Request;


class CarrinhoController extends Controller
{

    public function listar()
    {
        $carrinho = new Carrinho();
        
        $itens = $carrinho->listarItens();

        dd($itens);


        // Agora você pode usar a variável $itens para exibir os itens no carrinho de compras em sua view.
    }

    public function adicionar(Request $request)
    {

        $produtoId = 2;
        $quantidade = 50;
        $preco = 20.00;

        $carrinho = new Carrinho();
        $carrinho->adicionarItem($produtoId, $quantidade, $preco);

        return redirect()->back();

        // Você pode armazenar o carrinho em uma sessão ou em outro local, dependendo das necessidades do seu aplicativo.
    }

    public function remover($produtoId)
    {
        $carrinho = new Carrinho();
        $carrinho->removerItem($produtoId);
    }

    public function atualizar($produtoId, $quantidade)
    {
        $carrinho = new Carrinho();
        $carrinho->atualizarItem($produtoId, $quantidade);
    }

    public function total()
    {
        $carrinho = new Carrinho();
        $total = $carrinho->calcularTotal();


        // Agora, você pode usar $total em sua lógica para exibir o total com frete no carrinho de compras.
    }


}