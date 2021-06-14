<?php

namespace App\Http\Controllers\Calculator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArithmeticController extends Controller{
    public function calculating(string $operation ,int $v1, int $v2){
        switch($operation){
            case 'IMC':
            $operationName = 'IMC';
            $symbol = 'E';
            $resultado =  $v2 * $v2/$v1;
            break;
        }
        return view('calculator.result',
        [
        'operationName'=> $operationName,   
        'symbol'=>$symbol,
        'v1'=>$v1, 
        'v2'=>$v2,
         'resultado' => $resultado]);
    }
}

?>