<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Method;
use App\Models\Category;

class MethodController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $title = $request->input('title');
        
        $methods = Method::when(
            $title,
            function($query, $title) {
                return $query->title($title);
            })
            ->leftJoin('categories', 'methods.category_id', '=', 'categories.id')
            ->select('methods.*', 'categories.id AS category_id', 'categories.prefix', 'categories.category', 'categories.font_color', 'categories.color_code')
            ->get();
        
        return view('methods.index', ['methods' => $methods]);

    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        $categories = Category::select('category', 'id')->get();
        
        return view('methods.create', ['categories' => $categories]);
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $incomingFields = $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'goal' => 'required',
            'stage' => 'required|array|min:1',
            'complexity' => 'required',
            'duration' => 'required',
            'participants' => 'required',
            'social_form' => 'required',
            'learning_environment' => 'required', 
            'explanation' => 'required',
            'example' => 'nullable',
            'obstacles' => 'nullable',
            'tips' => 'nullable',
            'preparation_level' => 'required',
            'preparation' => 'required',
            'material' => 'required',
            'source' => 'nullable',
            'online' => 'nullable',
            'author' => 'required'
        ]);

                
        $validatedFields['title'] = strip_tags($incomingFields['title']);
        $validatedFields['category_id'] = strip_tags($incomingFields['category_id']);
        $validatedFields['goal'] = strip_tags($incomingFields['goal']);
        $validatedFields['stage'] = json_encode($incomingFields['stage']);
        $validatedFields['complexity'] = strip_tags($incomingFields['complexity']);
        $validatedFields['duration'] = strip_tags($incomingFields['duration']);
        $validatedFields['participants'] = strip_tags($incomingFields['participants']);
        $validatedFields['social_form'] = strip_tags($incomingFields['social_form']);
        $validatedFields['learning_environment'] = strip_tags($incomingFields['learning_environment']);
        $validatedFields['explanation'] = strip_tags($incomingFields['explanation']);
        $validatedFields['example'] = strip_tags($incomingFields['example']);
        $validatedFields['obstacles'] = strip_tags($incomingFields['obstacles']);
        $validatedFields['tips'] = strip_tags($incomingFields['tips']);
        $validatedFields['preparation_level'] = strip_tags($incomingFields['preparation_level']);
        $validatedFields['preparation'] = strip_tags($incomingFields['preparation']);
        $validatedFields['material'] = strip_tags($incomingFields['material']);
        $validatedFields['source'] = strip_tags($incomingFields['source']);
        $validatedFields['online'] = strip_tags($incomingFields['online']);
        $validatedFields['author'] = strip_tags($incomingFields['author']);       

        Method::create($validatedFields);

        return redirect(route('methods.index'));

    }

    /**
     * Display the specified resource.
     */
    public function show(Method $method)
    {
        return view('methods.show', ['method' => $method]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
