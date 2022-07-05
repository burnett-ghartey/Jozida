<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
use App\Models\Service;
use Illuminate\Support\Facades\Session;
use DB;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::paginate(6);
        return view('admin.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        if($file = $request->file('file')){
            $name = time().$file->getClientOriginalName();
            $file->move('images/services', $name);

            $image = Photo::create(['filename'=>$name]);

            $input['photo_id'] = $image->id;

            
        }
        // $input['user_id'] = Auth::user()->id;

        Service::create($input);
        Session::flash('flash_admin', 'The service has been created');
        return redirect('/admin/services');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::find($id);
        return view('admin.services.edit', compact('service'));
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
        $service  = Service::findOrFail($id);
        
        $input = $request->all();

        if($file = $request->file('file')){
            $name = time().$file->getClientOriginalName();
            $file->move('images/services', $name);

            $image = Photo::create(['filename'=>$name]);

            $input['photo_id'] = $image->id;

            
        }

        $service->update($input);
        Session::flash('flash_admin', 'The service has been updated');
        return redirect('/admin/services');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service =  Service::findorFail($id);
        unlink(public_path('images/services/'. $service->photo->filename));
        $service->delete();
      return redirect()->back();
         
    }

    public function actions(Request $request){
        // return $request->input('checkBoxArray');
         $memberString[] =  $request->input('checkBoxArray');
 
            foreach($memberString as $service_id){
                if($service_id){
                       $bulk_options =  $request->input('bulk_options');
                switch($bulk_options){
                            case 'delete':
                                $deleted = DB::table('services')->whereIn('id', [$service_id])->delete();
                      return redirect()->back();
                                break;
                }
                }else{
                    return redirect()->back();
                }
                
    
             
                
                
            }
        }
}
