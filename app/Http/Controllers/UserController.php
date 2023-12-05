<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\User;
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

    public function publicVote(){
        $candidates = Candidate::where('bde', '=', 1)->orderBy('vote_number', 'desc')->get();
        return view('vote.public', [
            'candidates' => $candidates
        ]);
    }

    public function promotionVote(){
        $candidates = Candidate::where('promotion', Auth::user()->promotion)
            ->where('bde', '=', 0)
            ->get();
        return view('vote.promotion', [
            'candidates' => $candidates
        ]);
    }


    public function doPromotionVote( Candidate $candidate ){

        if (Auth::user()->promotion == $candidate->getAttribute('promotion')
            and (Auth::user()->promotion_vote == 0))
        {
            $candidate['count_vote'] = $candidate['count_vote'] + 1;
            $candidate->update($candidate->attributesToArray());
            $user = User::where('email', Auth::user()->email)->get();
            $user = $user[0];
            /** @var User $user*/
            $user['promotion_vote'] = 1;
            $user->update($user->attributesToArray());
            return redirect()->route('user.promotionVote', $candidate)->with(['success' => 'vous avez bien voté']);
        }
        return redirect()->route('user.promotionVote')->with(['failed' => 'Vous avez deja voté']);
    }

    public function doPublicVote(Candidate $candidate){
        if(Auth::user()->public_vote == 0) {
            $candidate['count_vote'] = $candidate['count_vote'] + 1;
            $candidate->update($candidate->attributesToArray());
            $user = User::where('email', Auth::user()->email)->get();
            $user = $user[0];
            /** @var User $user*/
            $user['public_vote'] = 1;
            $user->update($user->attributesToArray());
            return redirect()->route('user.publicVote')->with(['success' => 'vous avez bien voté']);

        } else {
            return redirect()->route('user.publicVote')->with(['failed' => 'Vous avez deja voté']);
        }
    }


}
