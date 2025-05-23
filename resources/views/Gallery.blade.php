{{-- resources/views/gallery.blade.php --}}
@extends('Layouts.app')

@section('content')
    <h1>Gallery</h1>
    <div style="display: flex; gap: 20px; flex-wrap: wrap;">
        <img src="https://via.placeholder.com/150" alt="Image 1" style="width: 100%; max-width: 200px;">
        <img src="https://via.placeholder.com/150" alt="Image 2" style="width: 100%; max-width: 200px;">
        <img src="https://via.placeholder.com/150" alt="Image 3" style="width: 100%; max-width: 200px;">
    </div>
@endsection
