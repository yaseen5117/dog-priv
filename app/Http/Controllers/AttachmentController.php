<?php

namespace App\Http\Controllers;

use App\Models\Attachment;
use App\Models\Petition;
use App\Models\PetitionDocument;
use App\Models\Sample;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Session;
 

class AttachmentController extends Controller
{
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $directory='petition_documents.';
    private $title_singular='Petition Document';
    private $title_prural='Petition Documents';
    private $route_name='petition_documents';
    private $model;


    public function __construct()
    {
        $this->middleware('auth');

        $this->model = new Attachment();
    }


    public function index()
    {

        $data['title_singular']=$this->title_singular;
        $data['title_prural']=$this->title_prural;
        $data['route_name']=$this->route_name;
        $data['records']=$this->model::paginate(10);
        return view($this->directory."index",$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {        
        $data['title_singular']=$this->title_singular;
        $data['title_prural']=$this->title_prural;
        $data['route_name']=$this->route_name;
        $data['directory']=$this->directory;
        $data['petition_id'] = $request->petition_id;
        //$data['record']=$this->model::find($request->petition_id);
        //$data['rates']=Rate::orderby('display_order')->get();;
        //dd($data['records']);
        return view($this->directory."create",$data);
    }
    public function moveFile($from_directory, $to_directory)
    {
        if (Storage::exists($from_directory)) {
            Storage::move($from_directory, $to_directory);
        }
    }
    public function store(Request $request)
    {
        try {            
            if (!Session::has('file.petition_document_file')) {
                request()->validate([
                    'petition_document_file' => 'required',
                ]);
            }  
            $this->validatePetitionDocuments($request);            
             
            //$record=$this->model::query()->create($request->except('_token','rates'));
            /*$rates_data=[];
            if (count($request->rates)>0) {
                DeliveryPointRate::where('delivery_point_id',$record->id)->delete();
                foreach ($request->rates as $key => $value) {
                    $rates_data['rate_id']=$key;
                    $rates_data['active']=isset($value['active'])?1:0;
                    $rates_data['price']=isset($value['price'])?:0;
                    $rates_data['delivery_point_id']=$record->id;
                    DeliveryPointRate::create($rates_data);
                }
            }*/
            $title = $request->title;
            $file_original_name = 'petition_document_file';
            $mime_type = "";
            $attachmentable_id = $request->petition_id;
            $attachmentable_type = "App\Models\Petition";
            $root = "petitions";            
            $comment = $request->comment;                         
             
            uploadFile($request,$title,$file_original_name,$comment,$mime_type,$attachmentable_id,$attachmentable_type,$root);


            $request->session()->flash('success', 'Created successfully!');
            
            //return redirect(route($this->route_name.".create"));

        } catch (Exception $e) {
            
            $request->session()->flash('error', $e->getMessage());
            
            return redirect(route($this->route_name.".index"));
        }
    }

    public function validatePetitionDocuments(Request $request){
        $validations = [
            'title' => 'required|max:190',             
        ];
        return request()->validate($validations);
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
        $a = $data['record']=$this->model::find($id); 
        $data['petition_id'] =$a->attachmentable_id;
        //$data['rates']=Rate::orderby('display_order')->get();;
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
        //dd($request->all());

        $this->validatePetitionDocuments($request);
        $record = $this->model::query()->findOrFail($id);         
        /*$rates_data=[];
        if (count($request->rates)>0) {
            DeliveryPointRate::where('delivery_point_id',$record->id)->delete();
            foreach ($request->rates as $key => $value) {
                $rates_data['rate_id']=$key;
                $rates_data['active']=isset($value['active'])?1:0;
                $rates_data['price']=$value['price'];
                $rates_data['delivery_point_id']=$record->id;
                DeliveryPointRate::create($rates_data);
            }
        }*/
        //dd($request->petition_id);

        try {
             
            $title = $request->title;
            $file_original_name = 'petition_document_file';
            $mime_type = "";
            $attachmentable_id = $request->petition_id;
            $attachmentable_type = "App\Models\Petition";
            $root = "petitions";            
            $comment = $request->comment;
            $request->merge([
                'id' => $id
            ]);                      
             
            uploadFile($request,$title,$file_original_name,$comment,$mime_type,$attachmentable_id,$attachmentable_type,$root);

            $request->session()->flash('success', 'Updated successfully!');
            return redirect(route($this->directory.".create"));
        } catch (\Exception $e) {
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
            return response()->json('success', 200);
        } catch (\Exception $e) {
            return response()->json('error', $e->getCode());
        }
    }
    
    public function uploadPetitionDocuments(Request $request)
    {    
        try{
            $file_input_id = "petition_document_file";
            $root_directory = "petitions";
            $id = $request->petition_id;
            upload($request,$root_directory,$file_input_id,$id);
        }
        catch(\Exception $e) {
            return response()->json('error', $e->getCode());
        }               
    }
    public function getDocuments(Request $request)
    { 
        $petition = Petition::find($request->petition_id);                     
        $petition_documents = $petition->attachments;
        return response()->json([
            'petition_documents' => $petition_documents,
        ]);
    }
}
