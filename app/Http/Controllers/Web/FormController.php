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
use Vanguard\Bounties;


class FormController extends Controller
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
    
    public function register()
    {
        return view('citizen/bounty-hunter/registerbounty');
    }
    
    public function doregister(Request $request)
    {
        $id = 'bcx-' . rand();
        $title = $request->only('title');
        $description = $request->only('description');
        $latitude = $request->only('latitude');
        $longitude = $request->only('longitude');
        $project_intake = $request->only('project_intake');
        $bounty = $request->only('bounty');
        $starts = $request->only('starts');
        $ends = $request->only('ends');

        
        Bounties::create(
        [
        'id' => $id,
        'title' => $title,
        'description' => $description,
        'latitude' => $latitude,
        'longitude' => $longitude,
        'project_intake' => $project_intake,
        'bounty' => $bounty,
        'starts' => $starts,
        'ends' => $ends
        ]);
        
        Rehive::credit($bounty, $id);
        Rehive::registeraccount($id);
        
        return redirect('/');
    }
}
