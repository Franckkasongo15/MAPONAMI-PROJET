<?php

namespace App\Http\Controllers;

use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
use Image;
use App\Models\User;
use App\Models\Candidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function login(){
        return view('admin.login');
    }

    public function home(){
        $informations = Candidate::all();

        $l1_infos = [];
        $l2_infos = [];
        $l3_infos = [];
        foreach($informations as $infos){

            if($infos['promotion'] == "l1"){
                $l1_infos [] = [$infos];
            }

            if($infos['promotion'] == "l2"){
                $l2_infos [] = [$infos];
            }

            if($infos['promotion'] == "l3"){
                $l3_infos [] = [$infos];
            }

        }


        return view('admin.dash',[
            'l2_infos' => $l2_infos,
            'l1_infos' => $l1_infos,
            'l3_infos' => $l3_infos,
        ]);
    }

    public function doLogin(Request $request){
        if (strpos($request->email, 'esisalama.org')) {
            $credentials = [
                    'email' => $request->email,
                    'password' => $request->password,
                ];

            $get_admin = User::where('email', $request->email)->get('admin');
            $true_admin = "";
            foreach($get_admin as $admin){
                $true_admin = $admin['admin'];
            }

            if($true_admin != 'admin'){
                return redirect()->route('admin.login')->withErrors([
                    'email' => 'Vous n\'etes pas admin !'
                ]);
            }


            if (Auth::attempt($credentials)) {
                    $request->session()->regenerate();
                    return redirect()->intended(route('admin.dash.index'));
            }else{
                return redirect()->route('admin.login')->withErrors([
                    'notfound' => 'Aucun utilisateur trouvé!'
                ]);
            }
        }else{
            return redirect()->route('admin.login')->withErrors([
                'email' => 'Le mail n\'est pas correct !'
            ]);
        }

    }



    public function AdminCreer(){

        $mdp = "123456";

        if(User::create([
            'name' => "Jeam-michel Mbuyi" ,
            'email' => "15kk150@esisalama.org",
            'admin' => "admin",
            'password' => Hash::make($mdp)
        ])){
            echo "admin cree";
        }

    }



    public function registerform(){
        return view('admin.registerUser');
    }

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function storeCandidate(Request $request){


        /*Traitement de l'image */

        $this->validate($request, [

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);



        if($request->hasFile('image')) {

            $isUserExist = Candidate::where('email', $request->email)->get();
            if(sizeof($isUserExist)  > 0){

                return redirect()->route('admin.registerUser')->withErrors([
                    'email' => 'L\'adresse email déjà été utiliser',
                ]);



            }else{

                //dd($request->file('image'));

                $image = \Image::make($request->file('image'));

                $imageName = time().'-'.$request->file('image')->getClientOriginalName();

                $destinationPathThumbnail = public_path('img_user/');

                $image->fit(100,100);

                $image->save($destinationPathThumbnail.$imageName);

                Candidate::create([
                    'name' => strtolower($request->name),
                    'prenom' => strtolower($request->prenom),
                    'pseudo' => strtolower($request->pseudo),
                    'genre' => strtolower($request->genre),
                    'numero' => $request->phone,
                    'photo' => $imageName,
                    'motivation' => strtolower($request->motivation),
                    'promotion' => strtolower($request->filiere),
                    'slogan' => strtolower($request->slogan),
                    'email' => strtolower($request->email),
                    'vote_number' => 0,
                ]);



                return back()

                ->with('success','Le candidact a ete ajouter avec succés');
            }
        }else{
            echo "echec !";
        }

    }


    public function registerUser(){
        return view('user.register');
    }

    public function uploadUser() {

        Excel::import(new UsersImport, request()->file('file'));

        return redirect()->back()->with('success', 'Le fichier Excel a été importé avec succès.');
    }

}
