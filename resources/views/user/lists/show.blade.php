@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header">
                    Lyst: {{ $listModel->name }}
                </div>
                <div class="card-body">

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <td>Name</td>
                                <td>{{ $listModel->name }}</td>
                            </tr>
                            <tr>
                                <td>Public</td>
                                <td>{{ $listModel->is_public }}</td>
                            </tr>
                            <tr>
                                <td>Created By</td>
                                <td>{{ $listModel->user_uuid }}</td>
                            </tr>
                        </tbody>

                    </table>
                    <a href="{{ route('user.lists.index') }}" class="btn btn-default">Back</a>
                    <a href="{{ route('user.lists.edit', $listModel->id) }}" class="btn btn-warning">Edit</a>
                    <form style="display:inline-block" method="POST" action="{{ route('user.lists.destroy', $listModel->id) }}">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="form-control btn btn-danger">Delete</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
