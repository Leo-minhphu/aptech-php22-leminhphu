<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { $baiviet= Article::all();
        return view("articles.index",["articles"=> $baiviet]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  return view("articles.create",);
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Article;
        $post -> title= $request->title;
        $post -> slug= $request->title;
        $post -> description= $request->description;
        $post ->save();
        return redirect()->route("articles.index");
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hienthi1bai= Article::find($id);
        return view("articles.show",["article"=>$hienthi1bai]);
  
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $chinhsuabaiviet = Article::find($id);
        return view("articles.edit",["article" =>$chinhsuabaiviet]);
        

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $capnhatbaiviet= Article::find($id);
        $capnhatbaiviet-> title = $request->title;
        $capnhatbaiviet-> description= $request->description;
       
        $capnhatbaiviet-> save();
        return redirect()->route("acticles.index");
     }
    
//    public function update($id)
//     {
//         $baiviet=$_POST["title"];
//         $mota=$_POST["description"];
//         Article::where("id",$id)->update(
//             ["title"=>$baiviet,
//             "description"=>$mota,
//             ]);       
//             return redirect()->route("articles.index");

        
//     }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }
}
