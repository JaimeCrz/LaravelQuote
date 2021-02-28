<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quote;

class QuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $indexQuotes = Quote::orderBy('created_at', 'DESC')->get();

        if ( count($indexQuotes) <= 0 ) {
            return "No quotes has been created.";
        }

        return Quote::orderBy('created_at', 'DESC')->get();
        //Returns all items, a normal index action 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        $newQuote = new Quote;
        $newQuote->sentence = $request->quote["sentence"];
        $newQuote->save();

        return $newQuote;
        // Saves the new sentence. could also be created in create.
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $exitingQuote = Quote::find($id);

        // something happens here =) but not today!

        return $exitingQuote;
        // update action like on Rails
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $excitingQuote = Quote::find($id);

        if ($excitingQuote) {
            $excitingQuote->delete();
            return "Quote has been deleted.";
        }

        return "The quote you are trying to delete does not exist.";

        //Destroying BOOM! =)
    }
}
