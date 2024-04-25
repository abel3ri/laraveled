<x-layout>
    <div class="main">
        <div class="note-container">
            <div class="note-header">
                <h1>All Notes</h1>
                <a href="{{route("notes.create")}}" class="new-note-btn">New Note</a>
            </div>
            @foreach ($notes as $note)
                <div class="note">
                <p class="note-text"> {{Str::words($note->note, 30)}} </p>
                <div class="note-methods">
                    <a href="{{route("notes.show", $note)}}" class="view-btn">View</a>
                    <a href="{{route("notes.edit", $note)}}" class="edit-btn">Edit</a>
                    <a href="{{route("notes.destroy", $note)}}" class="delete-btn">Delete</a>
                </div>
                {{-- <div class="note-properties">
                    <p class="created-at">{{$note->created_at}}</p>
                    <p class="user_id">{{$note->user_id}}</p>
                </div> --}}
                </div>
            @endforeach
        </div>
    </div>
</x-layout>