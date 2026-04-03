<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portfolio;

class PortfolioController extends Controller
{

public function index()
{
$portfolios = Portfolio::latest()->get();
return view('admin.portfolio.index', compact('portfolios'));
}

public function create()
{
return view('admin.portfolio.create');
}

public function store(Request $request)
{

$image = null;

if($request->hasFile('image')){
$image = $request->file('image')->store('portfolio','public');
}

Portfolio::create([
'title'=>$request->title,
'description'=>$request->description,
'image'=>$image,
'project_url'=>$request->project_url
]);

return redirect('/admin/portfolio')->with('success','Project Added');

}

public function delete($id)
{
Portfolio::find($id)->delete();

return back()->with('success','Deleted Successfully');
}

}