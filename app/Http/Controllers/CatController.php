<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Input;
use App\Cat;
use App\LoofDocument;

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
            'cat_name' => 'required|max:128'
        );
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return response()->json(['error' => 'Bad request'], 400);
        } else {
            // store
            $cat = new Cat([
                "cat_name" => $request->get('cat_name'),
            ]);

            if ($request->loof_document) {
                $loofDocument = new LoofDocument([
                    "loof_document_url" => $request->loof_document->store('storage/loofDocuments', 'public')
                ]);
    
                $loofDocument->save();

                $cat->fk_loof_document_id = $loofDocument->loof_document_id;
            }

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

        $rules = array(
            'cat_name' => 'required'
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return response()->json(['error' => 'Bad request'], 400);
        } else {
            $cat = Cat::find($id);
            $cat->cat_name = $request->get('cat_name');
    
            $cat->save();
    
            return response()->json($cat, 200);
        }
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
            return response()->json(204);
        } else {
            return response()->json("Cat not found", 404);
        }
    }
}
