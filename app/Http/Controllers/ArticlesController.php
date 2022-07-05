<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use DB;
use Illuminate\Support\Facades\Input;
 
use App\Models\Photo;
use App\Models\Article;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
{
      $this->middleware('auth');
    
}


    public function index()
    {
        $articles = Article::paginate(6);
        return view('admin.articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.articles.create');
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
            $file->move('images/articles', $name);

            $image = Photo::create(['filename'=>$name]);

            $input['photo_id'] = $image->id;

            
        }
        // $input['user_id'] = Auth::user()->id;

        Article::create($input);
        Session::flash('flash_admin', 'The article has been created');
        return redirect('/admin/articles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       

        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        return view('admin.articles.edit', compact('article'));
     
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
        $article  = Article::findOrFail($id);
        
        $input = $request->all();

        if($file = $request->file('file')){
            $name = time().$file->getClientOriginalName();
            $file->move('/images/articles', $name);

            $image = Photo::create(['filename'=>$name]);

            $input['photo_id'] = $image->id;

            
        }
        // $input['user_id'] = Auth::user()->id;

        // Artcile::whereId($id)->first()->update($input);
        $article->update($input);
        Session::flash('flash_admin', 'The article has been updated');
        return redirect('/admin/articles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        $article =  Article::findorFail($id);
          unlink(public_path('images/articles/'. $article->photo->filename));
          $article->delete();
        return redirect()->back();
    }

    public function actions(Request $request){
        // return $request->input('checkBoxArray');
    
         $memberString[] =  $request->input('checkBoxArray');
        //  return $memberString;
           
            foreach($memberString as $article_id){
                if($article_id){
                    $bulk_options =  $request->input('bulk_options');
                    switch($bulk_options){
                        case 'published':
                            $affected = DB::table('articles')
                  ->whereIn('id', $article_id)
                  ->update(['status' => $bulk_options]);
                  return redirect()->back();
                            break;
    
                            case 'draft':
                                $affected = DB::table('articles')
                      ->whereIn('id', $article_id)
                      ->update(['status' => $bulk_options]);
                      return redirect()->back();
                                break;
    
                                case 'delete':
                                    $deleted = DB::table('articles')->whereIn('id', $article_id)->delete();
                          return redirect()->back();
                                    break;
                    }
                }else{
                    return redirect()->back();
                }
                   
              
    
               
                
                
            }
     }
}
