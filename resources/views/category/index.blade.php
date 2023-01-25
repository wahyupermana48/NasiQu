@extends('layouts.backend.main')

@section('content')

                     <!-- Begin Page Content -->
                <div class="container-fluid rounded bg-white p-3">
                     @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                     @endif
                    <!-- Page Heading -->
                    
                    <a class="btn btn-primary mb-3" href="{{ route ('category.create') }}">Tambah Data</a>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Table</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-sm table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="table">
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Nama Product</th>
                                            <th class="text-center">Price</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $category)
                                        <tr>   
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $category->name }}</td>
                                            <td>{{ $category->price }}</td>
                                            <td class="">
                                                <div class="d-flex flex-row justify-content-around m-auto">
                                                    <a class="btn btn-primary m-1" href="{{route('category.edit', $category)}}">Edit</a>
                                                    <form action="{{ route('category.destroy', $category) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn m-1 btn-warning" onclick="return confirm('Yakin?')">Delete</button>
                                                    </form>
                                                </div>
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
    
@endsection