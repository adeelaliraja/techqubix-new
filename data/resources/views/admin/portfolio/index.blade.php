<!-- Always remember that you are absolutely unique. Just like everyone else. - Margaret Mead -->
@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h1 class="mt-4">Portfolio Items</h1>
    <a href="{{ route('portfolio.create') }}" class="btn btn-primary mb-3">Add New Portfolio</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($portfolios as $portfolio)
                <tr>
                    <td>{{ $portfolio->id }}</td>
                    <td>{{ $portfolio->title }}</td>
                    <td>{{ Str::limit($portfolio->description, 50) }}</td>
                    <td>
                        <img src="{{ asset('storage/' . $portfolio->image) }}" alt="Portfolio Image" width="100">
                    </td>
                    <td>
                        <a href="{{ route('portfolio.edit', $portfolio->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('portfolio.destroy', $portfolio->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
