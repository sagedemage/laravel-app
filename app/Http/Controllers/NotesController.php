<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notes;

class NotesController extends Controller
{
    //
    public function get(string $id): Notes {
        $notes = Notes::findOrFail($id);
        return $notes;
    }
}
