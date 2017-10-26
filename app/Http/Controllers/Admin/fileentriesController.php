<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\fileentry;
use Illuminate\Http\Request;
use Session;

class fileentriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $fileentries = fileentry::where('userid', 'LIKE', "%$keyword%")
				->orWhere('type', 'LIKE', "%$keyword%")
				->orWhere('filename', 'LIKE', "%$keyword%")
				->orWhere('mime', 'LIKE', "%$keyword%")
				->orWhere('originalfilename', 'LIKE', "%$keyword%")
				
                ->paginate($perPage);
        } else {
            $fileentries = fileentry::paginate($perPage);
        }

        return view('admin.fileentries.index', compact('fileentries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.fileentries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        fileentry::create($requestData);

        Session::flash('flash_message', 'fileentry added!');

        return redirect('admin/fileentries');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $fileentry = fileentry::findOrFail($id);

        return view('admin.fileentries.show', compact('fileentry'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $fileentry = fileentry::findOrFail($id);

        return view('admin.fileentries.edit', compact('fileentry'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        
        $requestData = $request->all();
        
        $fileentry = fileentry::findOrFail($id);
        $fileentry->update($requestData);

        Session::flash('flash_message', 'fileentry updated!');

        return redirect('admin/fileentries');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        fileentry::destroy($id);

        Session::flash('flash_message', 'fileentry deleted!');

        return redirect('admin/fileentries');
    }
}
