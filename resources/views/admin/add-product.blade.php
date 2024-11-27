@extends('admin.Layout.main') <!-- Extend your layout -->

@section('contact')
    <div class="container mt-5">
        <h2>Add Product</h2>

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
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <!-- Product Form -->
        <form action="{{ route('add-product') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group mb-3">
                <label for="title">Product Title</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Enter product title"
                    value="{{ old('title') }}" required>
            </div>

            <div class="form-group mb-3">
                <label for="category_id">Category</label>
                <select class="form-select" name="category_id" id="category_id" required>
                    <option value="" disabled {{ old('category_id') ? '' : 'selected' }}>Select a category</option>
                    @foreach ($category as $cat)
                        <!-- Loop through categories -->
                        <option value="{{ $cat->id }}" {{ old('category_id') == $cat->id ? 'selected' : '' }}>
                            {{ $cat->category_name }}
                        </option>
                    @endforeach
                </select>
            </div>


            <div class="form-group mb-3">
                <label for="long_description">Long Description</label>
                <textarea name="long_description" value="{{ old('long_description') }}" id="long_description" class="form-control"
                    rows="5" placeholder="Enter detailed description"></textarea>
            </div>

            <div class="form-group mb-3">
                <label for="price">Price</label>
                <input type="number" name="price" value="{{ old('price') }}" id="price" class="form-control"
                    placeholder="Enter product price" step="0.01" required>
            </div>

            <div class="form-group mb-3">
                <label for="discount_price">Discount Price</label>
                <input type="number" value="{{ old('discount_price') }}" name="discount_price" id="discount_price"
                    class="form-control" placeholder="Enter discounted price" step="0.01">
            </div>

            <div class="form-group mb-3">
                <label for="stock">Stock</label>
                <input type="number" value="{{ old('stock') }}" name="stock" id="stock" class="form-control"
                    placeholder="Enter stock quantity" required>
            </div>

            <div class="form-group mb-3">
                <label for="image">Product Image</label>
                <input type="file" name="image" id="image" class="form-control" accept="image/*" required>
            </div>

            <div class="form-group mb-3">
                <label for="star">Star Rating</label>
                <input type="number" value="{{ old('star') }}" name="star" id="star" class="form-control"
                    placeholder="Enter star rating (e.g., 4.5)" step="0.1" min="0" max="5">
            </div>

            <button type="submit" class="btn btn-primary">Add Product</button>
        </form>
    </div>
@endsection
