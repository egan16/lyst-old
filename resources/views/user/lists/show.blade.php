@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header">
                    <h2> {{ $listModel->name }} </h2>
                    <a href="{{ route('user.lists.products.create', $listModel->id) }}" class="btn btn-primary float-right">Add</a>
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
    <br>

    <h1>{{ $listModel->name }}'s Products</h1>
    @foreach ($listModel->products as $product)
    <br>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header">
                    {{ $product->title }}
                </div>
                <div class="card-body">
                    <table class="table table hover">
                        <tbody>
                            <tr>
                                <td>Price</td>
                                <td>{{ $product->price }}</td>
                            </tr>
                            <tr>
                                <td>Product Number</td>
                                <td>{{ $product->product_num }}</td>
                            </tr>
                            <tr>
                                <td>URL</td>
                                <td>{{ $product->url }}</td>
                            </tr>
                            {{-- <tr>
                                <td>Cost</td>
                                <td>{{ $product->store }}</td>
                            </tr> --}}
                        </tbody>
                    </table>
                    <a href="{{ route('user.products.show', $product->id) }}" class="btn btn-default">View</a>
                    {{-- <a href="{{ route('admin.doctors.index') }}" class="btn btn-default">Back</a>
                    <a href="{{ route('admin.visits.edit', $visit->id) }}" class="btn btn-warning">Edit</a>
                    <form style="display:inline-block" method="POST" action="{{ route('admin.visits.destroy', $visit->id) }}">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="form-control btn btn-danger">Delete</a>
                    </form> --}}
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
