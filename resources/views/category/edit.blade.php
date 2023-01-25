@extends('layouts.backend.main')

@section('content')
          <div class="container-fluid rounded bg-white p-3">
                <div class="mb-2">
                     <a class="btn btn-dark" href="{{ route('category.index') }}"><i class="bi bi-arrow-left"></i></a>
               </div>
               <form class="w-75" method="POST" action="{{ route('category.update', $category) }}">
                    @method('PUT')
                    @csrf
                    <div class="mb-3 w-50">
                         <label for="name" class="form-label">Nama Product</label>
                         <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}" required>
                    </div>

                    <div class="mb-3 w-50">
                         <label for="price" class="form-label">Uraian</label>
                         <input type="text" class="form-control" id="price" name="price" value="{{ $category->price }}" required>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
               </form>

          </div>
@endsection