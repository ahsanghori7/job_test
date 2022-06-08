<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use Validator;
use App\Models\Comment;

class FilmApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        return Film::with("genres","comments")->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $rules = array(
            'name'  =>"required",
            'description'  =>"required",
            'release_date'  =>"required",
            'rating'  =>"required",
            'ticket_price'  =>"required",
            'country'  =>"required",
            "photo" =>"required",
        );

       try {

        $validator=Validator::make($request->all(),$rules);

        if($validator->fails())
        {
            return $validator->errors();
        }
         $Film = Film::create($request->all());

         $Film->genres()->attach($request['genre'], ['created_at' => now()]);
         

         return response()->json(['message'=>'Film has been added !!',201]);

         } catch (\Exception $e) {
            \Log::error($e->getMessage());
            return response()->json([
                'message'=>'Something goes wrong while adding a film !!'
            ]);
        }

    }



    public function comment(Request $request)
    {   
        $rules = array(
            'film_id'  =>"required",
            'comment'  =>"required",
        );

       try{

        $validator=Validator::make($request->all(),$rules);

        if($validator->fails())
        {
            return $validator->errors();
        }
         $Film = Comment::create($request->all());


        return response()->json(['message'=>'Comment has been added !!']);


          } catch (\Exception $e) {
            \Log::error($e->getMessage());
            return response()->json([
                'message'=>'Something goes wrong while commenting !!'
            ]);
        }
    } 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Film::find($id);
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         
    }
}
