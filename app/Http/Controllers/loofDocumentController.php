<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Input;
use App\LoofDocument;

class loofDocumentController extends Controller
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
            'loof_document_url'   => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return response()->json(['error' => 'Bad request'], 400);
        } else {
            // store
            $loofDocument = new LoofDocument([
                "loof_document_url" => $request->get('loof_document_url')
            ]);
            $loofDocument->save();
            return response()->json($loofDocument, 201);
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
        $loofDocument = LoofDocument::find($id);
        if ($loofDocument->loof_document_url) {
            $loofDocument->loof_document_url = $request->get('loof_document_url');
            $cat->save();
            return response()->json($loofDocument, 200);
        } else {
            return response()->json("Nothing to update", 204);
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
        $loofDocument = LoofDocument::find($id);
        if ($loofDocument) {
            $loofDocument->delete();
            return response()->json(204);
        } else {
            return response()->json("LoofDocument not found", 404);
        }
    }
}
