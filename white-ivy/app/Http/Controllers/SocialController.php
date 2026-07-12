<?php

namespace App\Http\Controllers;

use App\Http\Requests\SocialRequest;
use App\Models\Social;

class SocialController extends Controller
{
    public function index()
    {
        $socials = Social::latest()->get();

        return view('admin.socials.index', compact('socials'));
    }

    public function create()
    {
        return view('admin.socials.create');
    }

    public function store(SocialRequest $request)
    {
        Social::create($request->validated());

        return redirect()
            ->route('socials.index')
            ->with('success', 'Social Media berhasil ditambahkan.');
    }

    public function edit(Social $social)
    {
        return view('admin.socials.edit', compact('social'));
    }

    public function update(SocialRequest $request, Social $social)
    {
        $social->update($request->validated());

        return redirect()
            ->route('socials.index')
            ->with('success', 'Social Media berhasil diperbarui.');
    }

    public function destroy(Social $social)
    {
        $social->delete();

        return redirect()
            ->route('socials.index')
            ->with('success', 'Social Media berhasil dihapus.');
    }
}