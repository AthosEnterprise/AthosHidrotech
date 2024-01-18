<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;


class Carrinho
{
    public function adicionarItem($produtoId, $quantidade, $preco, $nome)
    {
        $carrinho = Session::get('carrinho', []);

        if (isset($carrinho[$produtoId])) {
            $carrinho[$produtoId]['quantidade'] += $quantidade;
        } else {
            $carrinho[$produtoId] = [
                'nome' => $nome,
                'quantidade' => $quantidade,
                'preco' => $preco,
            ];
        }

        Session::put('carrinho', $carrinho);
    }

    public function removerItem($produtoId)
    {
        $carrinho = Session::get('carrinho', []);

        if (isset($carrinho[$produtoId])) {
            unset($carrinho[$produtoId]);
            Session::put('carrinho', $carrinho);
        }
    }

    public function atualizarItem($produtoId, $quantidade)
    {
        $carrinho = Session::get('carrinho', []);

        if (isset($carrinho[$produtoId])) {
            $carrinho[$produtoId]['quantidade'] = $quantidade;
            Session::put('carrinho', $carrinho);
        }
    }

    public function calcularTotal()
    {
        $carrinho = Session::get('carrinho', []);
        $total = 0;

        foreach ($carrinho as $produtoId => $item) {
            $total += $item['quantidade'] * $item['preco'];
        }

        return $total;
    }

    public function listarItens()
    {
        return Session::get('carrinho', []);
    }
}