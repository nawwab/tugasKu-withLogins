<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Homework;

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
            'file_attachments' => 'nullable|mimes:jpeg,png,jpg,doc,pdf,docx,zip,rtf',
            'details' => 'nullable|max:240'
        ]);

        if ( isset($request->file_attachments) ) {
            $fileName = $request->file_attachments->getClientOriginalName();
            $fileName = explode('.', $fileName)[0];
            $uploadName = $fileName . "-" . time() . "." . $request->file_attachments->getClientOriginalExtension();
            $request->file_attachments->move(public_path("file_attachments"), $uploadName);
        } else {
            $uploadName = null;
        }

        $request->user()->homeworks()->create([
            'subject' => $request->subject,
            'abbrev' => $request->abbrev,
            'source' => $request->source,
            'deadline_date' => $request->deadline_date,
            'deadline_time' => $request->deadline_time,
            'group' => $request->group,
            'file_attachments' => $uploadName,
            'details' => $request->details,
        ]);

        return redirect()->route('dashboard');
    }

    public function edit($id) {
        $homework = Homework::where('id', $id)->first();

        return view('homework.edit', [
            'homework' => $homework,
        ]);
    }

    public function update(Request $request, $id) {

        $homework = Homework::find($id);

        $this->validate($request, [
            'subject' => 'required|max:50',
            'abbrev' => 'nullable|max:10',
            'source' => 'nullable|max:240',
            'deadline_date' => 'required',
            'deadline_time' => 'nullable',
            'group' => 'nullable|max:3',
            'file_attachments' => 'nullable|mimes:jpeg,png,jpg,doc,pdf,docx,zip,rtf',
            'details' => 'nullable|max:240'
        ]);

      $input_empty = (bool) $request->is_empty;
      $old_file = $homework->file_attachments;

      if ( isset($request->file_attachments) ) {
         $fileName = $request->file_attachments->getClientOriginalName();
         $fileName = explode('.', $fileName)[0];
         $uploadName = $fileName . "-" . time() . "." . $request->file_attachments->getClientOriginalExtension();
         $request->file_attachments->move(public_path("file_attachments"), $uploadName);
      } else {
         $uploadName = $input_empty ? null : $old_file;
      }

      $homework->subject = $request->subject;
      $homework->abbrev = $request->abbrev;
      $homework->source = $request->source;
      $homework->deadline_date = $request->deadline_date;
      $homework->deadline_time = $request->deadline_time;
      $homework->group = $request->group;
      $homework->file_attachments = $uploadName;
      $homework->details = $request->details;
      $homework->save();
      return redirect()->route('dashboard');
    }

    public function destroy(Homework $homework) {
        $homework->delete();

        return redirect()->route('dashboard');
    }
}
