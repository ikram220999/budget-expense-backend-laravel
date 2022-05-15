<?php

namespace App\Http\Controllers;

use App\Budget;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BudgetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $budget = Budget::all();
        // $budget->expense;

        return response()->json($budget, Response::HTTP_OK);
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
        //

        $budget = new Budget();

        $budget->name = $request->name;
        $budget->amount = $request->amount;
        $budget->cur_amount = 0;
        $budget->save();

        return response()->json($budget, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Budget  $budget
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $budget = Budget::find($id);
        $budget->expense;

        if($budget){
            return response()->json($budget, Response::HTTP_OK);
        }else{
            return response()->json($budget, Response::HTTP_NOT_FOUND);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Budget  $budget
     * @return \Illuminate\Http\Response
     */
    public function edit(Budget $budget)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Budget  $budget
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $budget =  Budget::find($id);

        if($budget){

            $budget->name = $request->name;
            $budget->amount = $request->amount;

            $budget->save();

            return response()->json($budget, Response::HTTP_ACCEPTED);
        }else{
            return response()->json($budget, Response::HTTP_NOT_FOUND);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Budget  $budget
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $budget =  Budget::find($id);

        if($budget){

            $budget->delete();

            return response()->json($budget, Response::HTTP_NO_CONTENT);
        }else{
            return response()->json($budget, Response::HTTP_NOT_FOUND);
        }
    }
}
