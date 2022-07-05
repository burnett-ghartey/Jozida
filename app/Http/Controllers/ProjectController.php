<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Photo;
use Illuminate\Support\Facades\Session;

use DB;


class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::paginate(6);
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.projects.create');
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
            $file->move('images/projects', $name);

            $image = Photo::create(['filename'=>$name]);

            $input['photo_id'] = $image->id;

            
        }
        // $input['user_id'] = Auth::user()->id;

        Project::create($input);
        Session::flash('flash_admin', 'The project has been created');
        return redirect('/admin/projects');
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
        $project = Project::find($id);
        return view('admin.projects.edit', compact('project'));
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
        $project  = Project::findOrFail($id);
       
        
        $input = $request->all();

        if($file = $request->file('file')){
            $name = time().$file->getClientOriginalName();
            $file->move('images/projects', $name);

            $image = Photo::create(['filename'=>$name]);

            $input['photo_id'] = $image->id;

            
        }

        $project->update($input);
        Session::flash('flash_admin', 'The project has been updated');
        return redirect('/admin/projects');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project =  Project::findorFail($id);
        unlink(public_path('images/projects/'. $project->photo->filename));
        $project->delete();
      return redirect()->back();
    }


    public function actions(Request $request){
        // return $request->input('checkBoxArray');
         $memberString[] =  $request->input('checkBoxArray');
 
            foreach($memberString as $project_id){
                if($project_id){
                       $bulk_options =  $request->input('bulk_options');
                switch($bulk_options){
                            case 'delete':
                                $deleted = DB::table('projects')->whereIn('id', [$project_id])->delete();
                      return redirect()->back();
                                break;
                }
                }else{
                    return redirect()->back();
                }

            }
        }
}
