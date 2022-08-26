<?php

namespace App\Http\Controllers\admin;


use App\Models\Ripcheck;
use Illuminate\Http\Request;
use App\Http\Requests\RipRequest;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RipcheckController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Ripchecks = Ripcheck
        ::select('ripchecks.*', 'votes.sign', 'users.name')        
        // ::select(DB::raw('ripchecks.*,votes.sign,users.name,SUM(sign) from votes GROUP by votes.ripcheck_id'))
            // ->whereRaw("attendance_date > DATE(now() + INTERVAL - 12 MONTH)")
            // ->groupByRaw('users.id')
            // ->withCount('votes.sign')
            ->leftJoin('votes', function ($join) {
                $join->on('ripchecks.id', '=', 'votes.ripcheck_id');
                $join->where('votes.user_id', Auth::user()->id);
            })
            ->leftJoin('users', function ($join) {
                $join->on('ripchecks.rip_user_id', '=', 'users.id');
            })
            ->orderBy('rip_status', 'asc')
            ->orderBy('ripchecks.id', 'asc')
            ->paginate(7);
        return view('admin.Ripcheck.index', compact('Ripchecks'));
    }
    // public function trustedOld()
    // {
    //     $Ripchecks = Ripcheck::where('rip_status', '=', 0)
    //         ->orderBy('id', 'asc')
    //         ->paginate(10);
    //     return view('admin.Ripcheck.index')->with('Ripchecks', $Ripchecks);
    // }
    public function trusted()
    {
        // $trusted= Ripcheck->GetVote();
        $Ripchecks = Ripcheck::where('rip_status', '=', 0)
            ->orderBy('id', 'asc')
            ->paginate(10);
        return view('admin.Ripcheck.index', compact('Ripchecks'));
    }
    public function fake()
    {
        $Ripchecks = Ripcheck::whereIn('rip_status', [1, 2])
            ->orderBy('id', 'asc')
            ->paginate(10);
        return view('admin.Ripcheck.index')->with('Ripchecks', $Ripchecks);
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $Ripchecks = Ripcheck
        ::select('ripchecks.*', 'votes.sign', 'users.name')
            ->leftJoin('votes', function ($join) {
                $join->on('ripchecks.id', '=', 'votes.ripcheck_id');
                $join->where('votes.user_id', Auth::user()->id);
            })
            ->leftJoin('users', function ($join) {
                $join->on('ripchecks.rip_user_id', '=', 'users.id');
            })
            ->where('rip_number', 'LIKE', "%$query%")
            ->orWhere('rip_name', 'LIKE', "%$query%")
            ->orWhere('rip_email', 'LIKE', "%$query%")
            ->orderBy('id', 'asc')
            ->paginate(20);
        return view('admin.Ripcheck.index', compact('Ripchecks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!Auth::user()->isManager()) abort(403);
        return view('admin.Ripcheck.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RipRequest $request)
    {
        $rip = new ripcheck([
            'rip_name' => $request->get('rip_name'),
            'rip_number' => $request->get('rip_number'),
            'rip_phone' => $request->get('rip_phone'),
            'rip_email' => $request->get('rip_email'),
        ]);
        $rip->rip_status = '2';
        $rip->rip_user_id = Auth::user()->id;
        try {
            $rip->save();

            if ($rip) {
                return redirect('/user/Ripcheck')->with('success', 'Congrats RIP Saved Successfully!');
            }
        } catch (\Throwable $th) {
            throw $th;
        }
        return redirect('/user/Ripcheck')->with('error', 'Opps! RIP Fail to Create!');
    }
    public function vote($id)
    {
        error_log($id);
        // $rip_id = RipRequest::find($id);
        // $userid = RipRequest::find($userid);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ripcheck  $ripcheck
     * @return \Illuminate\Http\Response
     */
    public function show(ripcheck $ripcheck)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ripcheck  $ripcheck
     * @return \Illuminate\Http\Response
     */
    public function edit(ripcheck $ripcheck)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ripcheck  $ripcheck
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ripcheck $ripcheck)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ripcheck  $ripcheck
     * @return \Illuminate\Http\Response
     */
    public function destroy(ripcheck $ripcheck)
    {
        //
    }
}
