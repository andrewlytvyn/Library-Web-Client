@extends('layouts.app')

@section('content')

    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">DOB</th>
                <th scope="col">Phone number</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
            <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->birth_date }}</td>
                <td>{{ $user->mobile_phone }}</td>
            </tr>
            @endforeach
            </tbody>
        </table>

            {{ $users->links() }}
    </div>



@endsection
