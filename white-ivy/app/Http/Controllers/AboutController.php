<?php

namespace App\Http\Controllers;

use App\Http\Requests\AboutRequest;
use App\Models\About;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function edit()
    {
        $about = About::first();

        if (!$about) {
            $about = About::create([
                'channel_name' => 'White Ivy',
                'tagline' => 'Let The Smile Always Stay',
                'description' => '',
                'profile_image' => null,
            ]);
        }

        return view('admin.about.edit', compact('about'));
    }

    public function update(AboutRequest $request)
    {
        $about = About::first();

        $data = $request->validated();

        if ($request->hasFile('profile_image')) {

            if ($about->profile_image) {
                Storage::disk('public')->delete($about->profile_image);
            }

            $data['profile_image'] = $request
                ->file('profile_image')
                ->store('profile', 'public');
        }

        $about->update($data);

        return redirect()
            ->route('about.edit')
            ->with('success', 'About Channel berhasil diperbarui.');
    }
}