<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreComicRequest;
use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();

        // dd($comics);
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreComicRequest $request)
    {
        // $this->validation($request->all());
        $request->validated();

        $newComic = new Comic();

        // $newComic->title = $request->title;
        // $newComic->description = $request->description;
        // $newComic->thumb = $request->thumb;
        // $newComic->price = $request->price;
        // $newComic->series = $request->series;
        // $newComic->sale_date = $request->sale_date;
        // $newComic->type = $request->type;
        // $newComic->artists = $request->artists;
        // $newComic->writers = $request->writers;
        $newComic->fill($request->all());

        $newComic->save();

        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        // $comic = Comic::find($id);

        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreComicRequest $request, Comic $comic)
    {
        // $this->validation($request->all());
        $request->validated();

        // $comic->title = $request->title;
        // $comic->description = $request->description;
        // $comic->thumb = $request->thumb;
        // $comic->price = $request->price;
        // $comic->series = $request->series;
        // $comic->sale_date = $request->sale_date;
        // $comic->type = $request->type;
        // $comic->artists = $request->artists;
        // $comic->writers = $request->writers;
        $comic->update($request->all());

        $comic->save();

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }

    // private function validation($data) {

    //     $validator = Validator::make($data, [
    //         'title' => 'required|max:255',
    //         'description' => 'required',
    //         'thumb' => 'required',
    //         'price' => 'required|max:30',
    //         'series' => 'required|max:255',
    //         'sale_date' => 'required|date_format:Y-m-d',
    //         'type' => 'required|max:30',
    //         'artists' => 'required',
    //         'writers' => 'required'

    //     ], [
    //         'max' => 'Il campo :attribute deve avere massimo :max caratteri',
    //         'required' => 'Il campo :attribute non è stato inserito',
    //         'date_format' => 'Il campo :attribute deve essere nel formato YYYY-MM-DD',

    //     ])->validate();
    // }
}
