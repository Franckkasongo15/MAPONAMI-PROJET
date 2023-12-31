<?php

namespace App\Http\Controllers;

use App\Models\Vote;
use App\Models\voted;
use Illuminate\Http\Request;

class UserAction extends Controller
{
    public function voterPage(){
        $info_candidats = Vote::all();


        return view('voter', [
            'info_candidats' => $info_candidats
        ]);
    }

    public function voting(Request $request){

        if(strtoupper($request->promotionUser) == strtoupper($request->promotionCandidat)){
            $isUservoted = voted::where('email', strtolower($request->usermail))->get();

            if(sizeof($isUservoted) > 0){
               return redirect()->route('voter')->with('failed', 'Vous Avez déjà voter');
            }else{

                voted::create([
                    'email' => strtolower($request->usermail)
                ]);

                $vote = Vote::where('email',$request->candidatmail)->get('vote_number');

                $vote_incrementations =0 ;
                echo "avant ". $vote_incrementations;
                foreach ($vote as $v){
                    $vote_incrementations =  $v['vote_number'];
                }

                $vote_incrementations +=1;

                Vote::where('email',$request->candidatmail)->update(['vote_number'=> $vote_incrementations]);

                $vote = Vote::where('email',$request->candidatmail)->get('vote_number');
                return redirect()->route('voter')->with('success', 'Le vote a ete effectuer avec success');
            }

        }else{
            echo "pas mm promotion";
            return redirect()->route('voter')->with('failed', 'Impossible de voter, car le candidat n\'est pass de votre premotion');
        }
        //return redirect()->route('voter')->with('success', "Le success message marche tres bien");

    }


}
