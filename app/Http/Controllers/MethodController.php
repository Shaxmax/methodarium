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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
