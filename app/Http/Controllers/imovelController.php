<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imovel;
use Validator;

class imovelController extends Controller
{

	protected function validarFormulario($request){

		$validador = Validator::make($request->all(), [

			"descricao" => "required",
			"logradouroEndereco" => "required",
			"bairroEndereco" => "required",
			"numeroEndereco" => "required | numeric",
			"cepEndereco" => "required",
			"cidadeEndereco" => "required",
			"preco" => "required | numeric",
			"qtdQuartos" => "required | numeric",
			"tipo" => "required",
			"finalidade" => "required",
		]);

		return $validador;

	}


	public function index(){


	}


	public function create(){

		return view('imoveis.create');
	}




	public function store(Request $request){

		$validador = $this->validarFormulario($request);

		if($validador->fails()){

			 return redirect()->back()->withErrors($validador->errors());
		}

		$dados = $request->all();
		Imovel::create($dados);

		return redirect()->route('imoveis.index');

	}



	public function show($id){

        //
	}


	public function edit($id){

        //
	}


	public function update(Request $request, $id){

        //
	}


	public function destroy($id){

        //
	}
}
