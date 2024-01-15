<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Models\Usser;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
 
        $users=User::select('id','name','email')->get();
        
        return view('user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(UserRequest $request)
    // {
    //    //
    // }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
//     public function update(userRequest $request, string $id)
//     {
//  //

//         //way 2
// //            $category->update(['title'=>$request->title]);
// //            $category->update($request->all());

//         return redirect()->route('user.index');
//     }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function findCategory($id)
    {
       return User::find($id);
    }
}
