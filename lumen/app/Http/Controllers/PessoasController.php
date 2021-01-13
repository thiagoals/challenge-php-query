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

    //
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
