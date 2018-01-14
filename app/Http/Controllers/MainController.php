<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class MainController extends Controller
{
    /**
     * Display the form
     *
     * @return Response
     */
    public function index()
    {
        return view('main.index');
    }

    /**
     * Processes the form data
     *
     * @param MainFormRequest $request
     * @return RedirectResponse
     */
    public function form(MainFormRequest $request)
    {
        //process request data
        return redirect()->action(
            'MainController@info',
            ['data' => $data]
        );
    }

    /**
     * Display the processed form data
     *
     * @param array $data
     * @return Response
     */
    public function info(array $data)
    {
        return view('main.info', ['data' => $data]);
    }
}
