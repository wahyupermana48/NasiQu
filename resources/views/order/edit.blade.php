@extends('layouts.backend.main')

@section('content')
          <div class="container-fluid rounded bg-white p-3">
                <div class="mb-2">
                     <a class="btn btn-dark" href="{{ route('order.index') }}"><i class="bi bi-arrow-left"></i></a>
               </div>
               <form class="w-75" method="POST" action="{{ route('order.update', $order) }}">
                    @method('PUT')
                    @csrf
                    <div class="mb-3 w-50">
                         <label for="category_id" class="form-label">Product</label>
                         <select class="form-select" id="inputGroupSelect01" name="category_id">
                              <option value="{{ $order->id }}">{{ $order->category->name }}</option>
                              @foreach ($categories as $category)
                                   <option value="{{ $category->id }}">{{ $category->name }}</option>
                              @endforeach
                         </select>
                    </div>

                    <div class="mb-3 w-50">
                         <label for="qty" class="form-label">Jumlah</label>
                         <input type="text" class="form-control" id="qty" name="qty" value="{{ $order->qty }}" required>
                    </div>

                    <div class="mb-3 w-50">
                         <label for="phone" class="form-label">No Handphone</label>
                         <input type="text" class="form-control" id="phone" name="phone" value="{{ $order->phone }}" required>
                    </div>

                    <div class="mb-3 w-50">
                         <label for="address" class="form-label">Alamat</label>
                         <input type="text" class="form-control" id="address" name="address" value="{{ $order->address }}" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
               </form>

          </div>
@endsection