@extends('layouts.app')

@section('content')
    <div class="container">
        <p>
            @foreach($user->roles as $role)
                {{$role->name}}:
            <p>
                @foreach($role->permissions as $permission)
                    {{$permission->name}}
                @endforeach
            </p>

            @endforeach
        </p>

    </div>






@endsection
