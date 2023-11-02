<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\Voted;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    private function isUserVoted(): bool|RedirectResponse
    {
        $isUservoted = Voted::where('email' ,strtolower(Auth::user()->email))->get();
        if (sizeof($isUservoted)) {
            return redirect()->route('user.vote')->with('failed', 'Vous Avez déjà voter');
        }
        return false;
    }

    public function votePage(){
        $candidates = Candidate::all()->sortByDesc('created_at');

        return view('voter', [
            'candidates' => $candidates
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
            echo "pas de la meme promotion";
            return redirect()->route('user.vote')->with('failed', 'Impossible de voter, car le candidat n\'est pass de votre premotion');
        }
        //return redirect()->route('voter')->with('success', "Le success message marche tres bien");

    }

    public function publicVote(Request $request, Candidate $candidate){
        if(!$this->isUserVoted($request)) {
            Voted::create(['email' => Auth::user()->email ]);
            $candidate['count_vote'] = $candidate['count_vote'] + 1;
            $candidate->update($candidate->attributesToArray());
            return redirect()->route('user.vote')->with(['success' => 'vous avez bien voté']);

        } else {
            return redirect()->route('user.vote')->with(['failed' => 'Vous avez deja voté']);
        }
    }

}
