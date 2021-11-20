<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::orderBy("id")->get();
        $response = [
            "message" => "data info login username",
            "data" => $user
        ];
        return response()->json($response,Response::HTTP_OK);
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
       $validator = Validator::make($request->all(),
    [
        "name" => ["required","string"],
        "username" => ["required"],
        "email" => ["required","email"],
        "password" => ["required"]
    ]);
       
    if ($validator->fails()){
        return response()->json($validator,Response::HTTP_UNPROCESSABLE_ENTITY);
    }

    try {
        $user = User::create($request->all());
        $response = [
            "message" => "data created",
            "data" => $user
        ];
        return response()->json($response,Response::HTTP_CREATED);
    } catch (QueryException $err) {
        return response()->json([
            "message" => "failed" . $err->errorInfo
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
       $user = User::findOrFail($id);
       try {
            $response = [
            "message" => "result data By id",
            "data" => $user
        ];
        return response()->json($response,Response::HTTP_OK);
       } catch (QueryException $err) {
           return response()->json([
               "message" => "failed find" . $err->errorInfo
           ]);
       }

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
        $user = User::findOrFail($id);
        $validator = Validator::make($request->all(),[
            "name" => ["required"],
            "username" => ["required"],
            "email" => ["required","email"],
            "password" => ["required"],
        ]);
        if ($validator->fails()) {
            return response()->json($validator,Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        try {
            $user->update($request->all());
            $response = [
                "message" => "data updated",
                "data" => $user
            ];
            return response()->json($response,Response::HTTP_OK);
        } catch (QueryException $th) {
            return response()->json([
                "message" => "failed " . $th->errorInfo
            ]);
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
       $user = User::find($id);
       try {
           $user->delete();
           $response = [
               "message" => "data deleted",
               "key" => "alhamdulillah kelar delete nya:)"
           ];
           return response()->json($response,Response::HTTP_OK);
       } catch (QueryException $err) {
           return response()->json([
            "message" => "failed cok delet nya err nya tuh disini " . $err->errorInfo
           ]);
       }
    }
}
