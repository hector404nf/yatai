<?php

namespace App\Http\Controllers;

use App\Http\Resources\PublicacionResource;
use App\Models\Publicacion;
use Illuminate\Http\Request;

class PublicacionController extends Controller
{
    public function index() {
        return PublicacionResource::collection(Publicacion::orderBy('id_publicaciones', 'desc')->sort()->filter()->get());
    }
}
