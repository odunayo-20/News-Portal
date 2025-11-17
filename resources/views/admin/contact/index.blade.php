@extends('layouts.admin-app')


@section('content')
    {{-- @livewire('admin.contact.index') --}}
     <livewire:admin.contact.index :contacts="$contacts" />
@endsection
