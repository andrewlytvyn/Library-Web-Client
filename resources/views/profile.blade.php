@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach($user->roles as $role)
            {{$role->name}}
        @endforeach
    </div>






@endsection
