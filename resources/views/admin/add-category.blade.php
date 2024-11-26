@extends('admin.Layout.main')

@section('contact')
    <div class="container mt-5">
        <h2>Add Category</h2>

        <!-- Display Validation Errors -->

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <!-- Success Message -->
        @if (session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('message') }}
                <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        @endif


        <form action="{{ route('add-category') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Category Name</label>
                <input type="text" name="category_name" id="name" class="form-control"
                    placeholder="Enter category name">
            </div>

            <button type="submit" class="btn btn-primary mt-3">Add Category</button>
        </form>
    </div>
@endsection
