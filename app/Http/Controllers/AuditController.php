<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Audit;

class AuditController extends Controller
{
    // Untuk memanggil halaman audit(Halaman Admin)
    public function index()
    {
        $audit = Audit::all();

        return view(
            'Backend.audit.index',
            compact(
                'audit'
            )
        );

    }

    // Untuk melihat halaman show audit(Halaman Admin)
    public function show($id)
    {
        $audit = audit::find($id);
        $cariAudit = audit::all();

        return view('Backend.audit.show')->with([
            'cariAudit' => $cariAudit,
            'audit' => $audit,

        ]);
    }
}