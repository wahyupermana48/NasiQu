@extends('layouts.backend.main')

@section('content')
          <div class="container-fluid rounded bg-white p-3">
                <div class="mb-2">
                     <a class="btn btn-dark" href="{{ route('donation.index') }}">back</a>
               </div>
               <form class="w-75" method="POST" action="{{ route('donation.update', $donation) }}">
                    @method('PUT')
                    @csrf
                   <div class="mb-3 w-50">
                         <label for="status" class="form-label">Status</label>
                            <select class="form-select" aria-label="Default select example" name="status">
                                {{!!
                                    $donation->status == 'pending' ? '
                                    <option value="pending">Pending</option>
                                    <option value="success">Success</option>
                                    ' : '
                                    <option value="success">Success</option>
                                    <option value="pending">Pending</option>
                                    '  
                                    !!}}
                                <option value="reject">reject</option>
                              </select>
                    </div>

                    {{-- <div class="mb-3">
                         <input type="text" class="form-control w-25 d-none" id="admin" name="admin" readonly value="{{ auth()->user()->name }}">
                    </div> --}}

                    <button type="submit" class="btn btn-primary">Submit</button>
               </form>

          </div>
@endsection