<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\MainFormRequest;
use Illuminate\Support\Facades\Storage;

class MainController extends Controller
{
    /**
     * Display the form
     *
     * @return Response
     */
    public function index()
    {
        $states = \App\States::get();
        return view('main.index', ['states' => $states]);
    }

    /**
     * Processes the form data
     *
     * @param MainFormRequest $request
     * @return RedirectResponse
     */
    public function form(MainFormRequest $request)
    {
        $data = $request->all();
        $path = $request->file('id')->store('public');
        $data['photoId'] = str_replace('public/', '', $path);
        unset($data['_token'], $data['id']);
        session(['data' => $data]);
        return redirect()->action(
            'MainController@info'
        );
    }

    /**
     * Display the processed form data
     *
     * @return Response
     */
    public function info()
    {
        $data = session('data');
        $data['state'] = \App\States::getStateName($data['state']);
        return view('main.info', ['data' => $data]);
    }
}
