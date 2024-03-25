<?php

namespace App\Http\Controllers;

use App\Models\Ktp;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadKtpController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $fileName = uniqid(). '.png';
        Ktp::create([
            'user_id' => $request->user()->id,
            'file' => $fileName
        ]);

        $request->file('file')->storePubliclyAs('ktp', $fileName);

        return back();
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
        return redirect()->route('dashboard');
    }
}
