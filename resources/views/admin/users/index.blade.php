@extends('admin.layout')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="">
                <div class="">Users</div>

                <div class="card-body">

                    @foreach($users as $user)
                    {{$user->name}}-{{$user->email}}
                    @endforeach
                </div>

                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Roles</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                      <tr>
                        <th scope="row">{{$user->id}}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{implode(',' , $user->roles()->get()->pluck('name')->toArray())}}</td>
                      <td>
                        <a href="{{route('admin.user.edit', $user->id)}}"><button type="button"
                            class="btn btn-primary">Edit</button></a>

                            <form action="{{route('admin.user.destroy', $user)}}" method="post" class="float-right">
                                @csrf
                                {{method_field('DELETE')}}
                            <button type="submit" class="btn btn-warning ">Delete</button>
                            </form>
                      </td>
                    </tr>
                   @endforeach
                    </tbody>
                  </table>

            </div>
        </div>
    </div>
</div>


@endsection
