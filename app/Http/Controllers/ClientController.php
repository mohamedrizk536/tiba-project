<?php

namespace App\Http\Controllers;

use App\Models\App;
use App\Models\Client;
use App\Models\Container;
use App\Models\Gas;
use App\Models\Source;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {

        $clients = Client::all();

            return view('clients',compact('clients','sources','gases','apps','conts'));
       // return view('clients');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         //dd($users);
       $gases= Gas::all();
       $sources= Source::all();
       $apps= App::all();
       $conts= Container::all();
//dd($sources);

        return view('new_client',compact('sources','gases','apps','conts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $requestObj)
    {
     //   dd($requestObj);




        // $requestObj->validate([
        //        'name' => 'required|min:3' ,
        //         'email' => 'required |email',
        //         'username' => 'required',
        //         'first_phone' => 'required',


        //     ],[
        //        'name.required' => 'please enter your name',
        //         'name.min' => 'this field must be greater than 3 letters',
        //         'email'=>"this email already existed",
        //     ]);
        //     dd($requestObj->validate());

            $file_exsetention=$requestObj->logo->getClientOriginalExtension();
            $filename=time() . "." . $file_exsetention;
            $path='images/client_images';
            $requestObj->logo->move($path,$filename);

//dd($requestObj);

       $client= Client::create([
        'email'=>$requestObj->email,
        'first_phone'=>$requestObj->first_phone,
        'second_phone_'	=>$requestObj->second_phone,
        'commercial_name'=>$requestObj->commercial_name,
    	'fax'=>$requestObj->fax,
        'logo'=>$filename,
        'sector_type'=>$requestObj->sector_type,
        'delegator'=>$requestObj->delegator,
        'client_type'=>$requestObj->client_type,
        'managment_type'=>$requestObj->managment_type,
    	'gover'=>$requestObj->gover,
        'city'=>$requestObj->city,
        'area'=>$requestObj->area,
        'active_type'=>$requestObj->active_type,
        'address'=>$requestObj->address,
        'line_number_type'=>$requestObj->line_number_type,
       // 'gas_type'=>$requestObj->gas_type,
      // 'container_type'=>$requestObj->container_type,
      // 'app'=>$requestObj->app,
      // 'source'=>$requestObj->source,
       'location'=>$requestObj->location,
       'lawer_name'=>$requestObj->lawer_name,
       	'commercial_record'=>$requestObj->commercial_record,
        'tax_record'=>$requestObj->tax_record,
       'worker_name'=>$requestObj->worker_name,
       	'job_title'=>$requestObj->job_title,
        'enternal_phone'=>$requestObj->enternal_phone,
        'worker_email'=>$requestObj->worker_email,
        'worker_phone'=>$requestObj->worker_phone,
        'whats_number'=>$requestObj->whats_number,
        'client_case'=>$requestObj->client_case,


        ]);

        $getsource= $requestObj->source;
        $sources = implode(',', $getsource);
        $data1 = new Client();
        $data1->source = $sources;
        $data1->save();

        $getapp= $requestObj->app;
       // dd($getapp);
        $apps = implode(',', $getapp);
        $data2 = new Client();
        $data2->app = $apps;
        $data2->save();

        $getcont= $requestObj->container_type;
        $conts = implode(',', $getcont);
        $data3 = new Client();
        $data3->container_type = $conts;
        $data3->save();

        $getgas= $requestObj->gas_type;
        $gases = implode(',', $getgas);
        $data4 = new Client();
        $data4->gas_type = $gases;
        $data4->save();





       return redirect()->route('client.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data= Client::find($id);
      //  dd($data);
     // $perms=Permission::all();
        return view('clients.editclient',["clientinfo"=>$data,]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }
}
