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
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Category Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter category name"
                    required>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Add Category</button>
        </form>
    </div>
@endsection
