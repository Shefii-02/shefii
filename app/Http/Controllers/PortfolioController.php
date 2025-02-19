<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePortfolioRequest;
use App\Http\Requests\UpdatePortfolioRequest;
use App\Models\Portfolio;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PortfolioController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    

    public function admin() {  
    
        return view('admin.index');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $projects = Portfolio::all();
        return view('admin.added-post',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.new-post');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePortfolioRequest $request)
    {
        //
        
        $new = new Portfolio();
        $new->category = $request->category;
        $new->title = $request->title;
        $new->description = $request->editor1;
        $new->image = $this->_uploaded_file('picture','portfolio');
        $new->demo_link = $request->demo_link;
        $new->language = $request->language;
        $new->position = $request->has('position') ? $request->position : 1;
        $new->status = $request->has('status') ? 1 :0;
        $new->save();

     return redirect()->back()->with('message', 'successfully added'); 

    }

    /**
     * Display the specified resource.
     */
    public function show(Portfolio $portfolio,$id)
    {
        //
        dd($portfolio->whereId($id)->first());

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Portfolio $portfolio,$id)
    {
        //
        $single = $portfolio->whereId($id)->first();
        return view('admin.new-post',compact('single'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePortfolioRequest $request, Portfolio $portfolio,$id)
    {
        //
        $new = Portfolio::whereId($id)->first() ?? abort(404);
        $new->category = $request->category;
        $new->title = $request->title;
        $new->description = $request->editor1;
        // if($request->has('picture')){
        //     $this->__deleteImage($new->image,'portfolio');
        //     $new->image = $this->_uploaded_file('picture','portfolio');
        // }
        $new->demo_link = $request->demo_link;
        $new->language = $request->language;
        $new->position = $request->has('position') ? $request->position : 1;
        $new->status = $request->has('status') ? 1 :0;
        $new->save();

        return redirect()->route('added-post')->with('message', 'successfully updated'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Portfolio $portfolio,$id)
    {
        $del = $portfolio->whereId($id)->first();
        
        $this->__deleteImage($del->image,'portfolio');
        $del->delete();
        
        return redirect()->route('added-post')->with('message', 'successfully deleted'); 
    }

    public function status(Portfolio $portfolio,$id,Request $request){
        $sts = $portfolio->whereId($id)->first();
        $sts->status = $request->has('status') ? 1 :0;
        $new->save();
    }

    public function _uploaded_file($existing = '',$path='images') {
        
        if (!empty(request()->input($existing)) && strlen(request()->input($existing)) > 6) {
             $picture = request()->input($existing);
             if (preg_match('/data:image/', $picture)) {
                 list($type, $picture) = explode(';', $picture);
                 list($i, $picture) = explode(',', $picture);
                 $picture = base64_decode($picture);
                 $image_name = Str::random(30) . '.png';
                 Storage::put('images/'.$path.'/' . $image_name, $picture);
                 // $user->profile_picture = $image_name;
                 // $category->picture = $image_name;
                 return $image_name;
             }
         }
         
         return null;
     }
     public function __deleteImage($existing = '',$path='images') {
         if($existing != '')
          
        @unlink('images/'.$path.'/'.$existing);
     }


     public function profile(){

     }
}
