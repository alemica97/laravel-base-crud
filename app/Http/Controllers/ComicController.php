<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index',compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //allo store arriveranno i dati che vengono inseriti nel form della pagina create
    public function store(Request $request)
    {
        $data = $request->all(); //$data è l'array associativo contenente i dati immessi nel form
        //qui andrà la validazione dei dati
        $request->validate([
            'title' => 'required|max:100',
            'description' => 'nullable',
            'thumb' => 'required|url',
            'price' => 'required|regex:/^[$]([0-9]+[.][0-9]+)/', //espressione regolare che accetta una stringa: '$xx.xx'
            'series' => 'required|max:50',
            'sale_date' => 'required|date',
            'type' => [
                'required',
                Rule::in(['comic book','graphic novel']),
                ],
            'artists' => 'required|min:4',
            'writers' => 'required|min:4' 
        ]);

        $comic = new Comic();

        $comic->title = $data['title'];
        $comic->description = $data['description'];
        $comic->thumb = $data['thumb'];
        $comic->price = $data['price'];
        $comic->series = $data['series'];
        $comic->sale_date = $data['sale_date'];
        $comic->type = $data['type'];
        $comic->artists = explode(",", $data['artists']);
        $comic->writers = explode(",", $data['writers']);

        $comic->save();
        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show($id) //passo un'istanza del Model Comic
    {
        $comic = Comic::findOrFail($id);
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $request->validate([
            'title' => 'required|max:100',
            'description' => 'nullable',
            'thumb' => 'required|url',
            'price' => 'required|regex:/^[$]([0-9]+[.][0-9]+)/', //espressione regolare che accetta una stringa: '$xx.xx'
            'series' => 'required|max:50',
            'sale_date' => 'required|date',
            'type' => [
                'required',
                Rule::in(['comic book','graphic novel']),
                ],
            'artists' => 'required|min:4',
            'writers' => 'required|min:4',
            'created_at' => 'nullable|date'
        ]);

        $data = $request->all();
        $data['artists'] = explode(",", $data['artists']);
        $data['writers'] = explode(",", $data['writers']);
        $comic->update($data);
        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
    
}
