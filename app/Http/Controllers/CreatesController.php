<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\File;
use App\indexCar;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Html\FormFacade;

class CreatesController extends Controller
{
    public function home(){
    	$articles = Article::all();
    	return view('backend/home', ['articles' => $articles]);
    }

    public function add(Request $request){
    	$this->validate($request, [
    		'title' => 'required',
    		'description' => 'required'
    	]);
        $articles = new Article;
        $articles->title = $request->input('title');
        $articles->description = $request->input('description');
        $articles->save();
        return redirect('/')->with('info', 'Article Saved Successfully!');
    }

    public function update($id){
        $articles = Article::find($id);
        return view('backend/update', ['articles' => $articles]);
    }

    public function edit(Request $request, $id){

        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);


        $data = array(
            'title' => $request->input('title'),
            'description' => $request->input('description')
        );
        Article::where('id', $id)->update($data);
        return redirect('/')->with('info', 'Article Updated Successfully!');
    }

    public function read($id){
        $articles = Article::find($id);
        return view('read', ['articles' => $articles]);
    }

    public function delete($id){
        Article::where('id', $id)->delete();
        return redirect('/')->with('info', 'Article Deleted Successfully!');
    }

    public function upload(){
        return view('backend/upload');
    }

    public function store(Request $request) {
        /*$request->file('image');
        if($request->hasFile('image')){
            //$imgFile = $request->image->store('public');
            //$request->image->path(); path
            //return Storage::putFile('public/images', $request->file('image'));
            return $request->image->storeAs('public', 'sample.jpg');
        }
        else {
            return 'No file selected';
        }*/

        if($request->hasFile('file')) {

            $fileName = $request->file->getClientOriginalName();
            $fileSize = $request->file->getClientSize();
            $request->file->storeAs('public/upload', $fileName);
            $file = new File;
            $file->name = $fileName;
            $file->size = $fileSize;
            $file->save();
            return 'yes';
        }
        else{
            return 'no';
        }

        return $request->all();
    }



    //*********************************************************************front end controller

    public function indexCarousel(Request $request) {
        if($request->hasFile('image')) {

            $fileName = $request->image->getClientOriginalName();
            $fileSize = $request->image->getClientSize();
            $request->image->storeAs('public/indexCarousel', $fileName);
            $request->input('imageURL');


            $car1 = DB::table('index_cars')->where('id', 1)->first();
            $car1name = $car1->name;
            $car1size = $car1->size;
            $car1link = $car1->link;

            $car2 = DB::table('index_cars')->where('id', 2)->first();
            $car2name = $car2->name;
            $car2size = $car2->size;
            $car2link = $car2->link;

            DB::table('index_cars')->where('id', 2)->update(['name' => $car1name]);
            DB::table('index_cars')->where('id', 2)->update(['size' => $car1size]);
            DB::table('index_cars')->where('id', 2)->update(['link' => $car1link]);

            DB::table('index_cars')->where('id', 3)->update(['name' => $car2name]);
            DB::table('index_cars')->where('id', 3)->update(['size' => $car2size]);
            DB::table('index_cars')->where('id', 3)->update(['link' => $car2link]);

            DB::table('index_cars')->where('id', 1)->update(['name' => $fileName]);
            DB::table('index_cars')->where('id', 1)->update(['size' => $fileSize]);
            DB::table('index_cars')->where('id', 1)->update(['link' => $request->input('imageURL')]);

            $car1 = DB::table('index_cars')->where('id', 1)->first();
            $car2 = DB::table('index_cars')->where('id', 2)->first();
            $car3 = DB::table('index_cars')->where('id', 3)->first();

            return 'Success';
        } 
        else {
            return 'fail';
        }

    }

    
}
