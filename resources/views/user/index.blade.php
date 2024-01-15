@extends('layout.master')

@section('title')
    catgories
@endsection

@section('content')
    <br><br>

    <div class="row">
        <div class="col-sm-6">
            <br>
            <h2>List of users</h2>
            <table class="table">
                <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th>Name</th>
                    <th>User role</th>
                    <th class="text-right">Actions</th>
                </tr>
                </thead>
                <tbody>

                @if($users)
                    @foreach($users as $key => $users)
                        <tr>
                            <td class="text-center">{{$key + 1}}</td>
                            <td>{{$users->name}}</td>
                            <td>--</td>
                            
                                <td class="td-actions text-right">
                                    <a href="{{route('user.edit',$users->id)}}">
                                        <button type="button" rel="tooltip" class="btn btn-success btn-sm btn-icon">
                                            <i class="now-ui-icons ui-2_settings-90"></i>
                                        </button>
                                    </a>
                                    <button type="button" rel="tooltip" class="btn btn-danger btn-sm btn-icon">
                                        <i class="now-ui-icons ui-1_simple-remove"></i>
                                    </button>
                                </td>
                            

                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>



@endsection
