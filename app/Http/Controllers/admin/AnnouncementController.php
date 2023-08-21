<?php

namespace App\Http\Controllers\admin;

use App\Models\Announcement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.admin.announcement.index', [
            'annoucements' => Announcement::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.announcement.form', [
            "route" => route('admin.announcement.store'),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
        $data['user_id'] = Auth::user()->id;

        $data = Announcement::create($data);

        if ($request->has('lampiran')) {
            $data->addMediaFromRequest('lampiran')
                ->toMediaCollection('lampiran');
        };

        toast('Annoucement Added Successfully...', 'success');
        return redirect()->route('admin.announcement.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('pages.admin.announcement.show',[
            "value"=> Announcement::with(['user','announcementComment'])->find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Int $id)
    {
        return view('pages.admin.announcement.form', [
            "route" => route('admin.announcement.update', $id),
            "old" => Announcement::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $data['user_id'] = Auth::user()->id;

        $data_model = Announcement::find($id);

        $data_model->update($data);

        if ($request->has('lampiran')) {
            $data_model->clearMediaCollection('lampiran');
            $data_model->addMediaFromRequest('lampiran')
                ->toMediaCollection('lampiran');
        };

        toast('Annoucement Updated Successfully...', 'success');
        return redirect()->route('admin.announcement.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Announcement::findOrfail($id);
        $data->delete();
        $data->clearMediaCollection('lampiran');
        toast('Your Announcement has been deleted', 'success');
        return back();
      
    }
}
