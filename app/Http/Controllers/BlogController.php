<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Contact;
use App\Models\Newsletter;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Request as HttpFoundationRequest;

class BlogController extends Controller
{

    function detail(Request $request, $slug)
    {
        $article = Post::where('slug', $slug)->first();
        return view('detailarticle', compact(['article']));
    }

    public function articles(Request $request)
    {
        if ($request->post != null ) {
            $posts =  DB::table('posts')
            ->where('title', 'LIKE', '%' .$request->post.'%')
                ->paginate(5);
        } elseif($request->categorie !=null){
            $posts =  DB::table('posts')
            ->where('categorie_id', '=', $request->categorie)
                ->paginate(5);
        }
        else {
            $posts =  DB::table('posts')
                ->paginate(5);
        }

        $categories = Categorie::all();

        return view('articles', compact(['posts', 'categories']));
    }

    public function apropos()
    {
        return view('apropos');
    }

    public function contact()
    {
        return view('contact');
    }

    public function envoyercontact(Request $request){
        $contact = new Contact();
        $contact->nom = $request->nom;
        $contact->sujet = $request->email;
        $contact->message = $request->message;
        $contact->save();
        
        return redirect('/contact')->with('success', 'Le formulaire a été envoyé avec succès !');
    }

    public function newsletterenvoyer(Request $request){
        $newletter = new Newsletter();
        $newletter->mail=$request->mail;
        $newletter->save();

        return redirect('/')->with('success', 'Le formulaire a été envoyé avec succès !');
    }

    
}
