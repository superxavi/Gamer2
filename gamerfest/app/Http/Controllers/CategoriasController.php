<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
/*use App\Models\categorias;
use App\Http\Requests\StorecategoriasRequest;
use App\Http\Requests\UpdatecategoriasRequest;
*/
class CategoriasController extends Controller
{
    public function __construct()
    {

    }
    public function list()
    {
        return Categoria::all();
    }







    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorecategoriasRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecategoriasRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\categorias  $categorias
     * @return \Illuminate\Http\Response
     */
    public function show(categorias $categorias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\categorias  $categorias
     * @return \Illuminate\Http\Response
     */
    public function edit(categorias $categorias)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecategoriasRequest  $request
     * @param  \App\Models\categorias  $categorias
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecategoriasRequest $request, categorias $categorias)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\categorias  $categorias
     * @return \Illuminate\Http\Response
     */
    public function destroy(categorias $categorias)
    {
        //
    }
}
