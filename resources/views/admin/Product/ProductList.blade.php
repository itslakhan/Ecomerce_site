@extends('layouts.admin.app')

@section('admincontent')
<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto mt-5">
            <table class="table">
                <thead>
                    <tr>
                        <td>s.no</td>
                        <td>Product Name</td>
                        <td>Product Price</td>
                        <td>Image</td>
                        <td>Category</td>
                        <td>Action</td>
                        <td>Extra Details</td>

                    </tr>
                </thead>
                <tbody>
                    @if($products->count() > 0)
                    @foreach($products as $key => $product)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->price }}</td>
                            <td>
                                @if($product->image)
                                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" style="max-width: 50px; max-height: 50px;">
                                @else
                                    No Image
                                @endif
                            </td>
                            <td>
                                @if($product->category_id)
                                    {{ $product->category->name }}
                                @endif
                            </td>
                            <td>
                                {{-- Add your actions here --}}
                                {{-- Example: --}}
                                <a href="{{ route('product.edit', $product->id) }}">Edit</a>
                                <a href="{{ route('deleteproduct', $product->id) }}" class="product_delete"><i class="fa fa-trash"></i>Delete</a>
                            </td>
                            <td>
                            <a href="{{ route('product.extradetails', $product->id) }}">Extra</a>
                            </td>
                        </tr>
                    @endforeach
                    @else
                            <tr>
                                <td colspan="6">No products found.</td>
                            </tr>
                     @endif

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
