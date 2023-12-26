@extends('layouts.admin.app')

 @section('admincontent')
 <div class="container ">
    <div class="row ">
        <div class="col-md-6 mx-auto mt-5">
 <table class="table">
    <thead>
        <tr>
            <td>S.no</td>
            <td>Category Name</td>
            <td>Parent category name</td>
         
            <td>Create Name</td>
            <td>Action</td>

        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $key=>$category)
    <tr>
        <td>{{ $key+1 }}</td>
        <td>{{ $category->name }}</td>
        <td>
            @if($category->category_id)
            {{ $category->parent->name }}
            @else
                no parent category
            @endif
        </td>

        <td>{{ $category->created_at }}</td>
        <td>
            <a href="{{ route('editcategory', $category->id) }}">Edit </a>
            <a  href="{{ route('deletecategory', $category->id) }}" class="category_delete"><i class="fa fa-trash"></i>delete</a>

        </td>

    </tr>
        @endforeach


    </tbody>
 </table>

 @endsection

 {{-- @push('footer-script')
 <script>
    $(document).ready(function () {
        $('.category_delete').on('click', function () {
            if (confirm('Are you sure you want to delete this')) {
                // Perform the delete action or make an AJAX request to delete
                var categoryId = $(this).data('id');
                $.ajax({
                    url:'{{ route('deletecategory') }}',
                    method:'POST',
                    data:{
                        _token:" {{ csrf_token() }}",
                        'id':id,
                    }
                        success:function(data){
                            location.reload();
                        
                    }
                });
            }
        });
    });
</script>
 @endpush --}}