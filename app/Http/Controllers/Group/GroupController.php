<?php

namespace App\Http\Controllers\Group;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\User;
use App\Models\UsersGroups;

class GroupController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = auth()->user();
        return view('group/view', [
            'own_group_count' => 0,
            'member_group_count' => $user->groups()->count()
        ]);
    }

    public function getGroups()
    {
        if (auth()->user()) {
            $groups = auth()->user()->groups()->with([
                'members:id,name',
                'owner:id,name'
            ])->get();
            $groups->each(function ($group) {
                $group->isOwner = $group->owner->id === auth()->id();
                $group->members->each(function ($member) use ($group) {
                    $member->isOwner = $group->owner->id === $member->id;
                });
            });
            return response()->json(['json' => $groups], 200);
        } else {
            return response()->json(['error' => 'User not found'], 404);
        }
    }


    public function create()
    {
        $user = auth()->user();
        $userGroup = null;
        $group = Group::create([
            'user_id' => $user->id
        ]);

        if ($group) {
            $userGroup = UsersGroups::create([
                'group_id' => $group->id,
                'user_id' => $user->id
            ]);
        }
        return response()->json(['success' => true, 'message' => 'Group created successfully', 'group' => $group, 'userGroup' => $userGroup], 200);
    }

    public function update()
    {
    }

    public function delete()
    {
    }
}
