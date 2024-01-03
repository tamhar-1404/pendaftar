<?php

namespace App\Http\Controllers;

use App\Models\Aproval;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ApprovalController extends Controller
{
    /**
     * destroy
     *
     * @param  mixed $approval
     * @return RedirectResponse
     */
    public function destroy(Aproval $approval): RedirectResponse
    {
        $approval->delete();
        return to_route('registration.index')->with('success', 'Berhasil menghapus data');
    }
}
