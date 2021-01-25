<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeworkController extends Controller
{
    public function index() {
        return view('homework.create');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'subject' => 'required|max:50',
            'abbrev' => 'nullable|max:10',
            'source' => 'nullable|max:240',
            'deadline_date' => 'required',
            'deadline_time' => 'nullable',
            'group' => 'nullable|max:3',
            'file_attachments' => 'nullable|max:100',
            'details' => 'nullable|max:240'
        ]);

        $request->user()->homeworks()->create([
            'subject' => $request->subject,
            'abbrev' => $request->abbrev,
            'source' => $request->source,
            'deadline_date' => $request->deadline_date,
            'deadline_time' => $request->deadline_time,
            'group' => $request->group,
            'file_attachments' => $request->file_attachments,
            'details' => $request->details,
        ]);

        return back();
    }
}
