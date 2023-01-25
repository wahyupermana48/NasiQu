@extends('layouts.backend.main')

@section('content')

            <!-- Begin Page Content -->
                <div class="p-3 bg-white rounded container-fluid">
                    <!-- Page Heading -->
                    <!-- DataTales Example -->
                    <div class="mb-4 shadow card">
                        <div class="py-3 card-header">
                            <h6 class="m-0 font-weight-bold text-primary">Data Table</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-sm table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="table table-warning">
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Nama</th>
                                            <th class="text-center">Jumlah</th>
                                            <th class="text-center">Harga</th>
                                            <th class="text-center">Phone</th>
                                            <th class="text-center">Rek</th>
                                            <th class="text-center">Bukti Transfer</th>
                                            <th class="text-center">Pesan</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Tanggal</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($donations as $donation)
                                        <tr>   
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $donation->nama }}</td>
                                            <td>{{ $donation->jumlah }}</td>
                                            <td>{{ $donation->harga }}</td>
                                            <td>{{ $donation->phone }}</td>
                                            <td>{{ $donation->rek }}</td>
                                            <td class="text-center">
                                                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <img src="{{ asset('storage/' .  $donation->image) }}" style="max-width: 60px" alt="" class="img-fluid">
                                              </button>
                                            </td>
                                            <td>{{ $donation->pesan }}</td>
                                            <td>{{ $donation->status }}</td>
                                            <td>{{ date('d-m-Y', strtotime($donation->created_at)) }}</td>
                                            <td class="flex-row m-auto d-flex justify-content-around">
                                                    {{-- <a class="btn m-1 {{ $donation->status == 'publish' ? 'btn-success' : 'btn-danger' }}" href="{{route('donation.edit', $donation)}}">Publish</a> --}}
                                                    <a class="m-1 btn btn-primary" href="{{route('donation.edit', $donation)}}">Edit</a>
                                                    {{-- <a class="m-1 btn btn-dark" href="{{route('donation.show', $donation)}}">Show</a> --}}
                                                    <form action="{{ route('donation.destroy', $donation) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="m-1 btn btn-warning" onclick="return confirm('Yakin?')">Delete</button>
                                                    </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-center">
                                <img src="{{ asset('storage/' .  $donation->image) }}" style="max-width:800px" alt="" class="img-fluid">
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            <!-- /.container-fluid -->
    
@endsection