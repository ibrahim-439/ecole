<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class EtudiantController extends Controller{

      public function etudianAction(Request $request){
            $fNameEtude=$request->input('fNameEtude');
            $LNameEtude=$request->input('LNameEtude');
            $NumberEt=$request->input('NumberEt');
            $classEtudiant=$request->input('classEtudiant');

            return view("user.affichierEtudiant",[
                  'first_name'=>$fNameEtude,
                  'last_name'=>$LNameEtude,
                  'country'=>$NumberEt,
                  'subject'=>$classEtudiant
            ]);
      }
}