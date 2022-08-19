<?php


namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Ripcheck;
use App\Models\Vote;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    public function votechange(Request $request)
    {
        //init
        $user_id =$request->get('user_id');
        $ripcheck_id =$request->get('ripcheck_id');
        $sign =$request->get('sign');

        //change id sign
        // $rip = Ripcheck::find($ripcheck_id);
        // $rip->rip_vote = $sign;
        // $rip->save();
        
        //remove user id and rip id relation
        Vote::where('user_id', $user_id)->where('ripcheck_id', $ripcheck_id)->delete();

        //create new user id and rip id relation
        $vote = new Vote([
            'user_id'     => $user_id,
            'ripcheck_id' => $ripcheck_id,
            'sign'        => $sign,
        ]);
        $vote->save();
        return 1;
    }
}
