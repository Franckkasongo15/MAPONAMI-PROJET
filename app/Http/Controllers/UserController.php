<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\Voted;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function votePage(){
        $info_candidats = Candidate::all()->sortByDesc('created_at');

        return view('voter', [
            'info_candidats' => $info_candidats
        ]);
    }

    public function doVote(Request $request){

        if(strtoupper($request->promotionUser) == strtoupper($request->promotionCandidat)){
            $isUservoted = Voted::where('email' ,strtolower($request->usermail))->get();

            if(sizeof($isUservoted) > 0){
                return redirect()->route('user.vote')->with('failed', 'Vous Avez déjà voter');
            }else{

                voted::create([
                    'email' => strtolower($request->usermail)
                ]);

                $vote = Candidate::where('email',$request->candidatmail)->get('vote_number');

                $vote_incrementations =0 ;
                echo "avant ". $vote_incrementations;
                foreach ($vote as $v){
                    $vote_incrementations =  $v['vote_number'];
                }

                $vote_incrementations +=1;

                Candidate::where('email',$request->candidatmail)->update(['vote_number'=> $vote_incrementations]);

                $vote = Candidate::where('email',$request->candidatmail)->get('vote_number');
                return redirect()->route('user.vote')->with('success', 'Le vote a ete effectuer avec success');
            }

        }else{
            echo "pas mm promotion";
            return redirect()->route('user.vote')->with('failed', 'Impossible de voter, car le candidat n\'est pass de votre premotion');
        }
        //return redirect()->route('voter')->with('success', "Le success message marche tres bien");

    }

}
