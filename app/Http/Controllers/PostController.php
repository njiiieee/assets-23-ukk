<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostReq;
use App\Http\Requests\StoreUpdateReq;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $posts = Post::all();

        return view('homeUser', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('homeUser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StorePostReq  $request
     * @return RedirectResponse
     */
    public function store(StorePostReq $request): RedirectResponse
    {
        Post::create($request->validated());

        return redirect()->route('homeUser');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Post  $product
     * @return View
     */
    public function edit(Post $product): View
    {
        return view('fitur.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateProductRequest  $request
     * @param  Product  $product
     * @return RedirectResponse
     */
    public function update(StoreUpdateReq $request, Post $posts): RedirectResponse
    {
        $posts->update($request->validated());

        return redirect()->route('homeUser');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Product  $product
     * @return RedirectResponse
     */
    public function destroy(Post $posts): RedirectResponse
    {
        $posts->delete();

        return redirect()->route('homeUser');
    }
}
