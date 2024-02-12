<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    public function index() {
        $articles = \App|Article::all();
    
        return view('gfg')->with('articles', $articles);
    }
    
    public function insert() {
        $articles = new Article;
        $articles ->topic = "View In Laravel";
        $articles ->content = "View is the data display at the user end,";
        $articles->save();

    echo "inster Succesful!";
    }
    
    public function delete() {
        $article = \App\Article::find(1);
        $article->delete();

        echo "Delete Succesfull!";
    }
}
