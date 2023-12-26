

@extends('layouts.admin.app')

@section('admincontent')
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto mt-5">
                <h1>Product  edit</h1>
                @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                <form action="{{ route('product.update' , ['id' => $products->id]) }}" method="post" enctype="multipart/form-data">
                    @csrf    
                    <div>
                        <label class="">Parent Category</label>
                        <select class="form-control" name="category_id">
                            <option value=""> Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"@if($category->id == $products->category_id) selected @endif>{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                   
                    <div>
                        <label class="">Enter Name</label>
                        <input type="text" class="form-control" name="name" value="{{ $products->name }}" required />
                    </div>
                    <div>
                        <label class="">Enter Price</label>
                        <input type="text" class="form-control" name="price" value="{{ $products->price }}" required />
                    </div>
                    <div>
                        <label class="">Image</label>
                        <input type="file" class="form-control"  name="image"  />
                          @if($products->image)
                         <img src="{{ asset('storage/' . $products->image) }}" alt="{{ $products->name }}" style="max-width: 100px; max-height: 200px;">
                         @else 
                             <p>no image</p>
                         @endif    
                    </div>
                    {{-- <div>
                    <img src="{{ asset('storage/' . $products->image) }}" alt="{{ $products->name }}" style="max-width: 100px; max-height: 200px;">
                    </div> --}}
                    <div>
                        <button type="submit" class="btn btn-default submit">Submit</button>
                    </div>
                    
               </form>
            </div>
        </div>
    </div>
@endsection
