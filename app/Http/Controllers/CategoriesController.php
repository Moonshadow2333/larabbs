<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;
use App\Models\Category;

class CategoriesController extends Controller
{
    public function show(Category $category, Request $request, Topic $topic){
        // 读取分类ID关联换题，并按每20条分页。
        // $topics = Topic::where('category_id',$category->id)->paginate(20);
        // 解决N+1问题
        $topics = $topic->withOrder($request->order)->where('category_id',$category->id)->with('user','category')->paginate(20);
        // 传参变量话题和分类模板中
        return view('topics.index',compact('topics','category'));
    }
}
