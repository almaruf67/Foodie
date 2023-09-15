@extends('admin-template.layouts.admin-app')
@section('admin-template')

    <div class="container">

        <div class="row mb-2 pt-2">
            <div class="col-sm-12">
                <h2 class="text-center">Manage All User Information</h2>
            </div>
        </div>
        <!-- Create Button -->
        
        <div class="row pt-3">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table display" id="sortable-table">
                            <thead>
                                <tr>
                                    <th>SL.</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Type</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                        <tbody>
                        @foreach($Users as $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->type }}</td>
                                
                                <td >
                                     
                                    @if ($user->type!='user' && auth()->user()->type==='manager')
                                        
                                    @else
                                    <form action="{{ route('user.destroy', $user->id) }}" method="post" style="display: inline-block;">
                                        @method("DELETE")
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                    <a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary">Edit</a>
                                
                                    @endif
                                    
                                </td>
                               
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    {{ $Users->links() }}
                </div>
            </div>
        </div>
    </div>

@endsection


