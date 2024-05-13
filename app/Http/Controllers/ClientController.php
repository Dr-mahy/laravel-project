<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    private $columns=['clientname','phone','email','website'];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients=client::get();
       return view('clients',compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     $clientname=request->clientname;
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function store()
    // {
    //    $client= new client();
    //    $client->clientname="egypt airfly";
    //    $client->phone="132146";
    //    $client->email="egypt@gmail.com";
    //    $client->website="https//egyptfly.com";
    //     $client->save();
    //     return "inserted successfully";
    // }
    public function create(){
        return view('addclient');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $client = new Client();
        // $client->clientName = $request->clientname;
        // $client->phone =$request->phone;
        // $client->email =$request->email;
        // $client->website =$request->website;
        // $client->save();
        // return 'Data inserted Successfully :))';
        client::create($request->only($this->columns));
        return redirect('clients');
    }

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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
