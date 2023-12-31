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

    public function update(Request $request): string {
        // Update
        $note = Notes::findOrFail($request->id);
        $note->title = $request->title;
        $note->description = $request->description;
        $note->save();
        return "Update a note";
    }

    public function delete(string $id): string {
        // Delete
        $notes = Notes::findOrFail($id);
        $notes->delete();

        return "Delete a note";
    }
}
