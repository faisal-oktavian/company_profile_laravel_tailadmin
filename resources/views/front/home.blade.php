<!-- front home -->
@extends('layouts.fullscreen-layout')

@section('content')
    <div class="p-6 max-w-3xl mx-auto text-center">
        <h1 class="text-2xl font-semibold mb-4">Welcome to the Frontend</h1>
        <p class="mb-4">This is the public frontend landing page. Use the link below to access the admin area.</p>
        <a href="{{ route('admin.login') }}" class="inline-block rounded bg-brand-500 px-4 py-2 text-white">Admin Login</a>
    </div>
@endsection
