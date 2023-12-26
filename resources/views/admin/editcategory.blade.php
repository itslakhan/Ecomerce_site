@extends('layouts.admin.app')

@section('admincontent')
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto mt-5">
                <h1>Add category</h1>
                <form action="{{ route('updatecategory' , ['id' => $category->id]) }}" method="post">
                    @csrf
                    <div>
                        <label class="">Category</label>
                        <input type="text" class="form-control" value="{{  $category->name }}" name="name" placeholder="Category" required />
                    </div>
                    <div>
                        <label class="">Parent Category</label>

                        <select class="form-control" name="category_id">
                            <option value="" @if($category->category_id==null) Selected @endif>No Parent Category</option>
                            @foreach ($categories as $categori)
                                <option value="{{ $categori->id }}" @if($category->category_id!=null && $category->category_id==$categori->id  ) selected @endif>{{ $categori->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-default submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
