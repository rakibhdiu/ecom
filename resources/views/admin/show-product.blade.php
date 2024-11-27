@extends('admin.Layout.main')
@section('contact')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Product/Tables</h1>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Product-Tables </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>title</th>
                                <th>description</th>
                                <th>price</th>
                                <th>discount_price</th>
                                <th>image</th>
                                <th>stock</th>
                                <th>star</th>
                                <th>category_id</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($product as $pro)
                                <tr>
                                    <td>{{ $pro->title }}</td>
                                    <td>{{ $pro->description }}</td>
                                    <td>{{ $pro->price }}</td>
                                    <td>{{ $pro->discount_price }}</td>
                                    <td> <img src="{{ asset($pro->image) }}" alt="{{ $pro->title }} image"
                                            class="img-fluid"></td>
                                    <td>{{ $pro->stock }}</td>
                                    <td>{{ $pro->star }}</td>
                                    <td>{{ $pro->category_id }}</td>
                                    <td>
                                        <a href="#" class="btn btn-success">Edit</a>
                                        <a href="#" class="btn btn-danger"> Delete </a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

    </div>
@endsection
