<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
    use HasFactory;

    protected $table = 'publicaciones';

    protected $primaryKey = 'id_publicaciones';

    protected $fillable = [
        'titulo',
        'descripcion',
        'precio',
        'path_adjunto',
        'user_id',
        'fk_categoria',
        'fk_tipopublicacion',
        'fk_estado',
    ];

    public function scopeFilter(Builder $query)
    {
        if(!empty(request('search_producto'))) {
            $search_producto = request('search_producto');
            $query->where('titulo', 'LIKE', '%' . $search_producto . '%');
        }
    }

    public function scopeSort(Builder $query)
  {
    $campo = request('campo');
    $direccion = request('direccion');

    return $query->orderBy($campo, $direccion);
  }
}
