<?php

use App\Http\Controllers\NoteController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, "welcome"]);

// // Get all notes
// Route::get("/notes", [NoteController::class, "index"])->name("note.index");

// // Add a new note
// Route::post("/notes", [NoteController::class, "store"])->name("note.store");

// // Get a spicific note
// Route::get("/notes/{id}", [NoteController::class, "show"])->name("note.show");

// // form to create a new note
// Route::get("/notes/create", [NoteController::class, "create"])->name("note.create");

// // Delete a specific note
// Route::delete("/notes/{id}", [NoteController::class, "destroy"])->name("note.destroy");

// // form to edit a note
// Route::get("/notes/{id}/edit", [NoteController::class, "edit"])->name("note.edit");

// // Edit a note
// Route::patch("/notes/{id}", [NoteController::class, "update"])->name("note.update");

Route::resource("notes", NoteController::class);
