<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;


class Apartamento extends Model{


    protected $table = 'apartamento';


    public function bloco(){
        return $this->hasOne(Bloco::class,'id','numeroBloco');
    }
}
?>