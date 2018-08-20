<?php

namespace Vanguard\Http\Controllers\Web;

use Illuminate\Http\Request;
use Vanguard\Http\Controllers\Controller;
use Vanguard\Repositories\Activity\ActivityRepository;
use Vanguard\Repositories\User\UserRepository;
use Vanguard\Support\Enum\UserStatus;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Vanguard\Rehive;

class LandingController extends Controller
{
    /**
     * @var UserRepository
     */
    private $users;
    /**
     * @var ActivityRepository
     */
    private $activities;
    
    
    public function __construct(UserRepository $users, ActivityRepository $activities)
    {
        $this->middleware('auth');
        $this->users = $users;
        $this->activities = $activities;
    }
    
    public function index(Request $request)
    {
        $user = Auth::user();
        $bounties = DB::table('bounties')->get();
        return view('citizen/default/home', compact('user', 'bounties'));
    }
    
    public function bounties()
    {
        $user = Auth::user();
        $bounties = DB::table('bounties')->get();
        return view('citizen/default/bounties', compact('user', 'bounties'));
        //Rehive::credit(900, 'lvkgn'); 
        //Rehive::getbalance();  
        //Rehive::registeruser('tumelo', 'tumelobaloyi350+test@gmail.com', 'citizen4', 'Sekitle123');
        
    }
    
    public function bounty($id)
    {
        $user = Auth::user();
        $bounties = DB::table('bounties')->where('id', $id)->get();
        $projects = DB::table('projects')->where('bounty_id', $id)->get();
        $pool = Rehive::getbalance();

        return view('citizen/default/bounty', compact('user', 'bounties', 'projects', 'pool'));
    }
}
