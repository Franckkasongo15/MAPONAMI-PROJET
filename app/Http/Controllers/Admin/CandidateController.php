<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CandidateRequest;
use App\Models\Candidate;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $candidates = Candidate::all();
        //dd($candidates);
        return view('admin.candidate.index', ['candidates' => $candidates]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.candidate.create', ['candidate' => new Candidate()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CandidateRequest $request, Candidate $candidate)
    {

        Candidate::create($request->validated());
        return redirect()->route('candidate.index')->with(['success' => 'le candidat a ete bien cree']);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Candidate $candidate)
    {
        return view('admin.candidate.edit', ['candidate' => $candidate]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CandidateRequest $request, Candidate $candidate)
    {
        $candidate->update($request->validated());
        return redirect()->route('candidate.index')->with(['success' => 'Le candidat a ete bien modifie']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Candidate $candidate)
    {
        $candidate->delete();
        return redirect()->back()->with(['success' => 'Le candidat a ete supprime']);
    }
}
