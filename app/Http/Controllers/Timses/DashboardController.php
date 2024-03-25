<?php

namespace App\Http\Controllers\Timses;

use App\Models\Ktp;
use Illuminate\Http\Request;
use App\Http\Requests\KtpRequest;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $ktp = Ktp::where('user_id', '=', $request->user()->id)->get();
        return view('timses.index', compact('ktp')); 
    }

    public function store(KtpRequest $request)
    {
        $request->validated();

        $fileName = $request->nik .".". $request->file('file')->extension();

        Ktp::create([
            'user_id' => $request->user()->id,
            'nik' => $request->nik,
            'name' => $request->name,
            'file' => $fileName
        ]);

        $request->file('file')->storePubliclyAs('ktp', $fileName);

        return back();
    }
    public function show(Ktp $ktp)
    {
        //
    }
    public function edit(Ktp $ktp)
    {
        //
    }

    public function update(Request $request, Ktp $ktp)
    {
        //
    }
      public function destroy(Request $request):RedirectResponse
    {
        $validated = $request->validate([
            'fileName' => ['string']
        ]);

        Ktp::where('user_id', '=', $request->user()->id)
                        ->where('file', '=', $validated['fileName'])
                        ->delete();
        Storage::delete("ktp/{$validated['fileName']}");
        return redirect()->route('timses.dashboard');
    }
}
