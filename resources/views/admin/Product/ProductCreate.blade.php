

@extends('layouts.admin.app')

@section('admincontent')
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto mt-5">
                <h1>Add Product</h1>
                @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                <form action="{{ route('Product.store') }}" method="post" enctype="multipart/form-data">
                    @csrf                   
                    <div>
                        <label class="">Parent Category</label>
                        <select class="form-control" name="category_id">
                            <option value=""> Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label class="">Enter Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Name" required />
                    </div>
                    <div>
                        <label class="">Enter Price</label>
                        <input type="text" class="form-control" name="price" placeholder="Price" required />
                    </div>
                    <div>
                        <label class="">Image</label>
                        <input type="file" class="form-control" name="image"  required />
                    </div>
                    
                    <div>
                        <button type="submit" class="btn btn-default submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
