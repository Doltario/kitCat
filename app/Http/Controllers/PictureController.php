<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Input;
use App\Picture;

class PictureController extends Controller
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
            'picture_description' => 'required|max:255',
            'image' => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return response()->json(['error' => 'Bad request'], 400);
        } else {
            // store
            $picture = new Picture([
                "picture_description" => $request->get('picture_description'),
                "picture_url" => $request->image->store('storage/loofDocuments', 'public')
            ]);
            $picture->save();
            try {
                $picture->cats()->attach(json_decode($request->get('cats_ids')));
            } catch (\Throwable $th) {
                return response()->json($th, 400);
            }
            

            return response()->json($picture, 201);
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
        $picture = Picture::find($id);
        if ($picture->picture_url) {
            $picture->picture_url = $request->get('picture_url');
            $cat->save();
            return response()->json($picture, 200);
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
        $picture = Picture::find($id);
        if ($picture) {
            $picture->delete();
            return response()->json(204);
        } else {
            return response()->json("Picture not found", 404);
        }
    }
}
