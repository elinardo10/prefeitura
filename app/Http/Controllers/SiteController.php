<?php

namespace prefeitura\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class SiteController extends Controller
{
    public function index(){
//dt = Carbon::now('America/Sao_Paulo');
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
 $data = strftime('%d de %B de %Y '/*, strtotime('today')) . date('H:i:s')*/);
/*
setlocale(LC_TIME, 'pt_BR.utf8');

$issued = sprintf("%s às %s",
$dt->formatLocalized('%d de %B de %Y'),
$dt->toTimeString()
);*/



     return view('site.index')->with(compact('data'));
    }
}
