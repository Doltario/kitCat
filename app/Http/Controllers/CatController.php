<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Input;
use App\Cat;

class CatController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
            'cat_name'   => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return response()->json(['error' => 'Bad request'], 400);
        } else {
            // store
            $cat = new Cat([
                "cat_name" => $request->get('cat_name')
            ]);
            $cat->save();
            return response()->json($cat, 201);
        }
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
        // $cat = Cat::find($id);

        // // show the edit form and pass the nerd
        // return View::make('nerds.edit')
        //     ->with('nerd', $nerd);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat = Cat::find($id);
        if ($cat) {
            $cat->delete();
            return response()->json(201);
        } else {
            return response()->json("Cat not found", 404);
        }
    }
}
