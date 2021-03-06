@extends('layouts.admin')
@section('title')
Categories list
@endsection
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Categories list</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            
        <a href="{{ route('admin.categories.create')}}" class="btn btn-sm btn-outline-secondary">Add category</a>
        </div>
        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
        </button>
        </div>
    </div>
    <x-alert type="danger" message="error"/>
    <x-alert type="success" message="success"/>
@endsection
