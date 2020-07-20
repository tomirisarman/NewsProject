<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Models\Article;
use App\Http\Models\Author;
use App\Http\Models\Rubric;
use App\Http\Requests\ArticleRequest;
use App\Http\Requests\AuthorRequest;
use App\Http\Requests\RubricRequest;
class ArticleController extends Controller
{
    public function publish(ArticleRequest $req)
    {
      $art = new Article();
      $art->authorID = $req->name;
      $art->rubricID = $req->rubric;
      $art->title = $req->title;
      $art->anounce = $req->anounce;
      $art->text = $req->text;

      $art->save();
      // return response()->json(Article::get());
      return json_encode(Article::get(), JSON_UNESCAPED_UNICODE);
    }

    public function create_author(AuthorRequest $req)
    {
      $aut = new Author();
      $aut->lastName=$req->lastName;
      $aut->firstName=$req->firstName;
      $aut->dadName=$req->dadName;
      $aut->email=$req->email;
      $aut->photo=$req->photo;
      $aut->save();
      $info = Author::select('authorID', 'lastName', 'firstName', 'dadName', 'email')->get();

      // return response()->json($info);
      return json_encode($info, JSON_UNESCAPED_UNICODE);

    }

    public function create_rubric(RubricRequest $req)
    {
      $rub = new Rubric();
      $rub->rubric = $req->rubric;
      $rub->save();
      return json_encode(Rubric::get(), JSON_UNESCAPED_UNICODE);
      // return response()->json(Rubric::get());
    }

    public function show_authors()
    {
      $info = Author::select('authorID', 'lastName', 'firstName', 'dadName', 'email')->get();
      return json_encode($info, JSON_UNESCAPED_UNICODE);
      //return response()->json($info);
    }

    public function show_articles()
    {
      //return response()->json(Article::get());
      return json_encode(Article::get(), JSON_UNESCAPED_UNICODE);
    }
    public function show_rubrics($id)
    {
      $info = Article::where('rubricID', $id)->get();
      return json_encode($info, JSON_UNESCAPED_UNICODE);
      //return response()->json($info);
    }

    public function search_authors($id)
    {
      $info = Article::where('authorID', $id)->get();
      return json_encode($info, JSON_UNESCAPED_UNICODE);
      //return response()->json($info);
    }
}
