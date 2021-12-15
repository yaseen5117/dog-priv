<?php

namespace App\Http\Controllers;

use App\Models\Petition;
use App\Models\PetitionStatus;
use App\Models\User;
use App\Models\Court;
use Illuminate\Http\Request;

class PetitionsController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $directory="petitions.";
    private $title_singular="Petitions";
    private $title_prural="Petitions";
    private $route_name="petitions";
    private $model;


    public function __construct()
    {
        $this->model = new Petition;
    }

    public function index()
    {

        $data['title_singular']=$this->title_singular;
        $data['title_prural']=$this->title_prural;
        $data['route_name']=$this->route_name;
        $data['records']=$this->model::orderby('display_order')->paginate(10);

        return view($this->directory."index",$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $data['title_singular']=$this->title_singular;
        $data['title_prural']=$this->title_prural;
        $data['route_name']=$this->route_name;
        $data['directory']=$this->directory;
        $data['clients']=User::role('client')->orderby('first_name')->get();        
        return view($this->directory."create",$data);
    }

    public function store(Request $request)
    {
        try {

             $client_id = "";

             $client = User::role('client')->find($request->client_id);
             
             if($client != null)
             {
                 $client_id = $client->id;
             }
             else
             {

                $ClientUser = User::create([
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'password' => bcrypt('test1234'),           
                ]);

                $ClientUser->assignRole('client');
                

                $client_id = $ClientUser->id;
             }

            
             $petition = new Petition();

             $petition->client_id = $client_id;
             $petition->court_id = $request->court_id;
             $petition->name = $request->name;
             $petition->writ_number = $request->writ_number;
             $petition->judgement = $request->judgement;
             $petition->order_sheet = $request->order_sheet;
             $petition->status = $request->status_id;
             $petition->save();

            $request->session()->flash('success', 'Created successfully!');

            return redirect(route($this->route_name.".index"));

        } catch (Exception $e) {
            
            $request->session()->flash('error', $e->getMessage());
            
            return redirect(route($this->route_name.".index"));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['directory']=$this->directory;
        $data['title_singular']=$this->title_singular;
        $data['title_prural']=$this->title_prural;
        $data['route_name']=$this->route_name;
        $data['record']=$this->model::find($id); 
        $data['id'] = $id;
 
        $data['clients']=User::role('client')->orderby('first_name')->get();
        $data['petition_status']=PetitionStatus::orderby('display_order')->get();
        $data['courts']=Court::orderby('display_order')->get();
 
        return view($this->directory."edit",$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {

             $client_id = "";

             $client = User::role('client')->find($request->client_id);
             
             if($client != null)
             {
                 $client_id = $client->id;
             }
             else
             {

                $ClientUser = User::create([
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'password' => bcrypt('test1234'),           
                ]);
               
                
                $ClientUser->assignRole('client');
                

                $client_id = $ClientUser->id;
             }

            
             $petition = Petition::find($id);

             $petition->client_id = $client_id;
             $petition->court_id = $request->court_id;
             $petition->name = $request->name;
             $petition->writ_number = $request->writ_number;
             $petition->judgement = $request->judgement;
             $petition->order_sheet = $request->order_sheet;
             $petition->status = $request->status_id;
             $petition->save();


            $request->session()->flash('success', 'Updated successfully!');
            return redirect(route($this->route_name.".index"));
        } 
        catch (\Exception $e) 
        {
            $request->session()->flash('error', $e->getMessage());
            return redirect(route($this->route_name.".index"));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $this->model::destroy($id);
            return redirect('/petitions');
            return response()->json('success', 200);
        } catch (\Exception $e) {
            return response()->json('error', $e->getCode());
        }
    }
}
