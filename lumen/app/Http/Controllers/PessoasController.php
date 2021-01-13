<?php

namespace App\Http\Controllers;
use DB;

class PessoasController extends Controller
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

    
    /**
     * @OA\Get(
     *     path="/pessoas/get",
     *     tags={"Pessoas"},
     *     @OA\Response(
     *         response="200",
     *         description="Busca as pessoas cadastradas pelo xml.",
     *         @OA\JsonContent()
     *     ),
     *     @OA\Response(
     *         response="400",
     *         description="Erro: Problema ao buscar as pessoas.",
     *     ),
     * )
     */
    public function get(){
        try{
            $pessoas = DB::table('pessoas')->get();
            return response()->json([
                'pessoas'=>json_encode($pessoas),
                'status'=>200
            ],200);
        }catch(Exception $ex){
            return response()->json([
                'erro'=>'Ocorreu um erro ao tentar publicar a mensagem: '.$ex
            ],400);
        }
    }
}
