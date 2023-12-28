@extends('layouts.admin.app')

 @section('admincontent')
 <div class="container ">
    <div class="row ">
        <div class="col-md-6 mx-auto mt-5">
 <table class="table">
    <thead>
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>create</td>
         


        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
    <tr>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->created_at }}</td>

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