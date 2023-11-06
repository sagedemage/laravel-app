<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notes;

class NotesController extends Controller
{
    //
    public function get(string $id): Notes {
        // Read
        $notes = Notes::findOrFail($id);
        return $notes;
    }

    public function create(Request $request): string {
        // Create
        $note = new Notes;
        $note->title = $request->title;
        $note->description = $request->description;

        $note->save();
        return "Add a note";
    }
}
