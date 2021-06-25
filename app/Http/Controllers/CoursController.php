<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CoursController extends Controller{


    public function coursAction(Request $request) {
        $namcour = $request->get('NameCours');
        $typecour = $request->get('Typecours');
        $DurationCour = $request->get('DurationCours');
        $coeffs = $request->get('Coeff');

        return view('user.affechierCours', [
           'NameCours' => $namcour,
           'Typecours'=>$typecour,
           'DurationCours'=>$DurationCour,
           'Coeff'=>$coeffs
        ]);

    }


}
