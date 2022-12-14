<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;
use App\Models\Category;

class CategoriesController extends Controller
{
    //
    public  function show(Category $category,Topic $topic ,Request $request){
        $topics=$topic->where('category_id',$category->id)->withOrder($request->order)->paginate(20);
        return view('topics.index',compact('category','topics'));
    }

}
