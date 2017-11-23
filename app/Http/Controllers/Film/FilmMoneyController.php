<?php

namespace App\Http\Controllers\Film;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Model\cinema;
use App\Http\Model\money;

class FilmMoneyController extends Controller
{
     public  function index()
    {

        //根据用户id 进行查询
        $res = money::where('mid',session('cid'))
                    ->join('cinema','cinema.id','=','money.mid')
                    ->select('cinema.cinema','cinema.legal','cinema.phone','money.money')
                    ->get();
                   

        return view('FilmAdmins.Money.FilmMoney',['res'=>$res]);
    }
}
