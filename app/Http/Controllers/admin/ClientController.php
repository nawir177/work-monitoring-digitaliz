<?php

namespace App\Http\Controllers\admin;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
  
   
        return view('pages.admin.client.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('pages.admin.client.form',[
            "route"=>route('admin.client.store')
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "name"=>"required",
            "company"=>"required",
            "email"=>"required",
            "phone"=>"required",
            "address"=>"required",
            "project_type"=>"required",
            "project_description"=>"required"
        ]);

        Client::create($data);
        toast('Data added successfully !', 'success');
        return redirect()->route('admin.client.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('pages.admin.client.show',[
            "client"=>Client::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('pages.admin.client.form',[
            "route"=>route('admin.client.update',$id),
            "old"=>Client::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {     

   
        $data = $request->validate([
            "name" => "required",
            "company" => "required",
            "email" => "required",
            "phone" => "required",
            "address" => "required",
            "project_type" => "required",
            "project_description" => "required"
        ]);

        Client::find($id)->update($data);
        toast('Data updated successfully !', 'success');
        return redirect()->route('admin.client.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $client = Client::find($id);
        $client->delete();
        toast("Data deleted successfully","success");
        return back();
    }
}
