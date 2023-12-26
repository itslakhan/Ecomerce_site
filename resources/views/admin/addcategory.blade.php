@extends('layouts.admin.app')

@section('admincontent')
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto mt-5">
                <h1>Add category</h1>
                <form action="{{ route('storecategory') }}" method="post">
                    @csrf
                    <div>
                        <label class="">Category</label>
                        <input type="text" class="form-control" name="name" placeholder="Category" required />
                    </div>
                    <div>
                        <label class="">Parent Category</label>

                        <select class="form-control" name="category_id">
                            <option value="">No Parent Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
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
