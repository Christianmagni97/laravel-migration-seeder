<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Train;
class TrainController extends Controller

{
    public function index(){
        return view('train.index', compact('trains'));
        $trains = Train::whereDate('data_di_partenza', today())->get();
    }
}