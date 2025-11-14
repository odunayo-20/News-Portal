@extends('layouts.admin-app')

@section('content')
    <livewire:admin.post.index :posts="$posts" />
    {{-- <livewire:admin.post.index :posts="$posts" :categories="$categories" /> --}}
    
@endsection
@section('title', '- Post')
