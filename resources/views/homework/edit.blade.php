@extends('layouts.app')

@section('content')
<div class="w-full py-4 px-4 flex flex-col items-center lg:mb-2">
    <div class="bg-white rounded p-8">
        <h1 class="text-2xl mb-4">Create a Homework</h1>

        <form action="{{ route('homework.update', ['edit' => $homework->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="flex">
                <div class="flex flex-col mr-8">
                    <div class="mb-4">
                        <label for="subject" class="">Mata Kuliah<span class="text-red-600">*</span></label>
                        <input type="text" name="subject" id="subject" placeholder="Mata Kuliah"
                        class="p-2 rounded border @error('subject') border-red-600 @enderror w-full bg-gray-100"
                        value="{{ old('subject') ? old('subject') : $homework->subject }}">
                        @error('subject')
                            <div class="text-red-600">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="abbrev" class="">Singkatan</label>
                        <input type="text" name="abbrev" id="abbrev" placeholder="Matkul"
                        class="p-2 rounded border @error('abbrev') border-red-600 @enderror w-full bg-gray-100"
                        value="{{ old('abbrev') ? old('abbrev') : $homework->abbrev }}">
                        @error('abbrev')
                            <div class="text-red-600">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="source" class="">Web Asal</label>
                        <input type="text" name="source" id="source" placeholder="Web dimana kamu mendapatkan informasi"
                        class="p-2 rounded border @error('source') border-red-600 @enderror w-full bg-gray-100"
                        value="{{ old('source') ? old('source') : $homework->source }}">
                        @error('source')
                            <div class="text-red-600">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="mb-4">
                        <label for="group" class="">Kelas</label>
                        <input type="text" name="group" id="group" placeholder="Web dimana kamu mendapatkan informasi"
                        class="p-2 rounded border @error('group') border-red-600 @enderror w-full bg-gray-100"
                        value="{{ old('group') ? old('group') : $homework->group }}">
                        @error('group')
                            <div class="text-red-600">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="deadline_date" class="">Tanggal Deadline<span class="text-red-600">*</span></label>
                        <input type="date" name="deadline_date" id="deadline_date"
                        class="p-2 rounded border @error('deadline_date') border-red-600 @enderror w-full bg-gray-100"
                        value="{{ old('deadline_date') ? old('deadline_date') : $homework->deadline_date }}">
                        @error('deadline_date')
                            <div class="text-red-600">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="deadline_time" class="">Waktu Deadline</label>
                        <input type="time" name="deadline_time" id="deadline_time"
                        class="p-2 rounded border @error('deadline_time') border-red-600 @enderror w-full bg-gray-100"
                        value="{{ old('deadline_time') ? old('deadline_time') : $homework->deadline_time }}">
                        @error('deadline_time')
                            <div class="text-red-600">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="border p-4 flex flex-col mb-4">
                <div class="mb-4">
                    <label for="details">Detail<span class="text-red-600">*</span></label>
                    <textarea class="p-2 rounded border @error('details') border-red-600 @enderror w-full bg-gray-100"
                    name="details" id="details" cols="30" rows="10">{{ old('details') ? old('details') : $homework->details}}</textarea>
                    @error('details')
                        <div class="text-red-600">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="flex flex-col">
                    <label for="file_attachments" class="mb-2">File Lampiran
                        <input type="file" name="file_attachments" id="file_attachments">
                    </label>
                    @if ( isset($homework->file_attachments) )
                    <div class="flex items-center">
                        <span class="mr-2">Current File: </span>
                        <span class="p-2 bg-gray-100 rounded border">
                            {{ $homework->file_attachments }}
                        </span>
                    </div>
                    @endif
                    @error('file_attachments')
                        <div class="text-red-600">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="flex">
                <button class="px-4 py-2 rounded bg-blue-500 text-white mr-4" type="submit">Update</button>
        </form>
                <form onsubmit="alertBeforeDelete()" id="delete" action="{{ route('homework.delete', ['homework' => $homework]) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="px-4 py-2 rounded bg-red-500 text-white mr-4" type="submit">Delete</button>
                </form>
            </div>
    </div>
</div>

<script>
    function alertBeforeDelete() {
        confirm('are you sure to delete this homework?')
    }
</script>
@endsection
