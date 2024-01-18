<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Produtos extends  Model {
    
    public function getImagem(){

        return '/uploads/produtos/'.$this->imagem;
    }

    public function getPrecoMascarado(){

    return number_format($this->preco,2,",",".");
    } 


}
?>