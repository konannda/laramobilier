<?php

namespace App\Http\Controllers;

use App\Articles;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\FichePictures;
use App\Http\Controllers\getClientOriginalExtension;
use Illuminate\Http\File;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Validator;
use Redirect;
use View;
use App\Http\Requests;
use Image;

class AnnoncesController extends Controller
{
	/**
     * Update the avatar for the user.
     *
     * @param  Request  $request
     * @return Response
     */
    public function list()
    {
    	$articles = Articles::all();
    	return view('annonce/annonce')->with('articles', $articles);
    	var_dump($articles); die;
    }
    public function listAdmin()
    {
    	$articles = Articles::all();
    	return view('annonce/admin')->with('articles', $articles);
    }

    public function detail($slug)
    {
    	$article = Articles::where('slug', '=', $slug)->first();
    	return view('annonce/single')->with('article', $article);
    }



    public function ajout(Request $request)
    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */
    {
    //validate($request,['image' => 'required|image|mimes:jpeg,png,jpg|max:2048']);
   	$date = new \DateTime(null);
    	$image=$request->image;
    	$fileName   = $date->format('dmYhis').'.'.$image->getClientOriginalExtension();
    	$image->move('img/', $fileName);
    	$articles = new Articles();
    	$articles->nom = $request->nom;
    	$articles->prenom = $request->prenom;
    	$articles->email = $request->email;
    	$articles->tel = $request->tel;
    	$articles->appelation = $request->appelation;
    	$articles->description = $request->description;
    	$articles->localite = $request->localite;
    	$articles->prix = $request->prix;
    	$articles->superficie = $request->superficie;
    	$articles->chambre = $request->chambre;
    	$articles->salon = $request->salon;
    	$articles->douche = $request->douche;
    	$articles->garage = $request->garage;
    	$articles->type_offre = $request->type_offre;
    	$articles->slug = Str::slug($request->nom.$date->format('dmYhis'));
    	$articles->image = $fileName;
    	$articles->save();

    	return back()->with('success', 'annonce publiée avec succès');
    }
   /* public function modif(Request $request, $slug)

    	return view('annonce/update')->with('article', $article);
    }*/
    public function suprim($slug)
    {
    	$article = Articles::where('slug', '=', $slug)->first();
    	$article->delete();
    	return back()->with('success', 'article supprimé avec succès');
    }
}
