<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use App\Traits\GetUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller {
    /**
    * Traits
    */
    use GetUsers;

    /**
    * Constructor
    */

    /*public function __construct() {
        $this->middleware("auth");
        $this->middleware("verified");
    }*/

    /**
    * Display a listing of the resource.
    */

    public function index() {
        abort(404,"Test is not implemented");
        //dd($request->session()->all());
        return view('welcome', ['users' => $this->getUsers()]);
    }

    /**
    * Show the form for creating a new resource.
    */

    public function create() {
        //
    }

    /**
    * Store a newly created resource in storage.
    */

    public function store( Request $request ) {
        //
    }

    /**
    * Display the specified resource.
    */

    public function show( User $user ) {
        return view( 'see', [ 'user' => User::find( $user ) ] );
    }

    /**
    * Show the form for editing the specified resource.
    */

    public function edit( string $id ) {
        //
    }

    /**
    * Update the specified resource in storage.
    */

    public function update( Request $request, string $id ) {
        //
    }

    /**
    * Remove the specified resource from storage.
    */

    public function destroy( string $id ) {
        //
    }

    public function login(){

        if(Auth::user()){
            return redirect()->route("home",200);
        }else{
            return view("login");
        }
    }
}
