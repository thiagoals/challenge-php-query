<?php

namespace App\Http\Controllers;
use DB;

class OrdensController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    //
    public function get($id_pessoa){
        try{
            $ordens = DB::table('ordens')
            //->join('telefones','pessoas.id','=','telefones.id_pessoa')
            //->join('ordens','pessoas.id','=','ordens.id_pessoa')
            ->join('itens','ordens.id','=','itens.id_ordem')
            ->join('destinatarios','ordens.id','=','destinatarios.id_ordem')
            ->where('ordens.id_pessoa',$id_pessoa)->get();
            return response()->json([
                'ordens'=>json_encode($ordens),
                'status'=>200
            ],200);
        }catch(Exception $ex){
            return response()->json([
                'erro'=>'Ocorreu um erro ao tentar publicar a mensagem: '.$ex
            ],400);
        }
    }
}
