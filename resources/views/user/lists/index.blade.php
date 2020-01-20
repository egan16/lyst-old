{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Visits
                    <a href="{{ route('user.lists.create') }}" class="btn btn-primary float-right">Add</a>
                </div>
                <div class="card-body">

                    @if (count($listModels) ===0)
                    <p>There are no lysts!</p>
                    @else
                    <table id="table-lists" class="table table hover">
                        <thead>
                            <th>Name</th>
                            <th>Public</th>
                            <th>Created by</th>
                        </thead>
                        <tbody>
                            @foreach ($listModels as $listModel)
                            <tr data-id="{{ $listModel->id }}">
                                <td>{{ $listModel->date }}</td>
                                <td>{{ $listModel->time }}</td>
                                <td>{{ $listModel->user->name }}</td>
                                <td>
                                    <a href="{{ route('user.lists.show', $listModel->id) }}" class="btn btn-default">View</a>
                                    <a href="{{ route('user.lists.edit', $listModel->id) }}" class="btn btn-warning">Edit</a>
                                    <form style="display:inline-block" method="POST" action="{{ route('user.lists.destroy', $listModel->id) }}">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="form-control btn btn-danger">Delete</a>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif


                    {{-- @endforeach --}}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
