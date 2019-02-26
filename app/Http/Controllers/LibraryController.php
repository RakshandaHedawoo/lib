<?php

namespace App\Http\Controllers;
use App\Library;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
  public function index()
  {
      $books=Library::all();
      return view('books.index',compact('books'));

  }
  public function create()
 {
    return view('books.create');
 }
 public function store(Request $request)
 {
   $books=new Library;
   $books->title=$request->title;
   $books->author=$request->author;
   $books->price=$request->price;
   $books->save();
   return redirect()->route('books.index');
 }
 public function edit($id)
 {
  $books=Library::findOrFail($id);
  return view('books.edit',compact('books'));
 }
 public function update(Request $request,$id)
 {
   $books=Library::findOrFail($id);
   $books->title=$request->title;
   $books->author=$request->author;
   $books->price=$request->price;
   $books->update();
   return redirect()->route('books.index');
 }

}
