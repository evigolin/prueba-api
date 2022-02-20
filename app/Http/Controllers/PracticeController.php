<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

        /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function printMatrix(Request $request)
    {
        $i; 
        $k = 0; 
        $l = 0;
     
        // initialize the count
        $cnt = 0;
     
        // total number of
        // elements in matrix
        $total = $m * $n;
     
        while ($k < $m and $l < $n)
        {
            if ($cnt == $total)
                break;
     
            // Print the first column
            // from the remaining columns
            for ($i = $k; $i < $m; ++$i)
            {
                echo $arr[$i][$l] ," ";
                $cnt++;
            }
            $l++;
     
            if ($cnt == $total)
                break;
     
            // Print the last row from
            // the remaining rows
            for ($i = $l; $i < $n; ++$i)
            {
                echo $arr[$m - 1][$i] , " ";
                $cnt++;
            }
            $m--;
     
            if ($cnt == $total)
                break;
     
            // Print the last column
            // from the remaining columns
            if ($k < $m)
            {
                for ($i = $m - 1; $i >= $k; --$i)
                {
                    echo $arr[$i][$n - 1] , " ";
                    $cnt++;
                }
                $n--;
            }
     
            if ($cnt == $total)
                break;
     
            // Print the first row
            // from the remaining rows
            if ($l < $n) {
                for ($i = $n - 1; $i >= $l; --$i)
                {
                    echo $arr[$k][$i] , " ";
                    $cnt++;
                }
                $k++;
            }
        }
    }
}
