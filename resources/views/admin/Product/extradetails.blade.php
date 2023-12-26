@extends('layouts.admin.app')

@section('admincontent')
           <div class="container">
            <div class="row">
                
                <div class="col-md-6 mx-auto">
                    <form style="width: 26rem;" action="{{ route('product.extradetailstore', $id) }}" method="post">
                        @csrf
                        {{-- <div data-mdb-input-init class="form-outline mb-4">
                            <input type="text" id="form4Example1" name="product_id" class="form-control" />
                            <label class="form-label" for="form4Example1">Product id</label>
                            </div> --}}
                        <!-- Name input -->

                        <div data-mdb-input-init class="form-outline mb-4">
                        <input type="text" id="form4Example1" value="{{ @$product->productdetail->title }}" name="title" class="form-control" />
                        <label class="form-label" for="form4Example1">Title</label>
                        </div>
                    
                        <!-- Email input -->
                        <div data-mdb-input-init class="form-outline mb-4">
                        <input type="text" id="form4Example2" value="{{ @$product->productdetail->total_items }}" name="total_items" class="form-control" />
                        <label class="form-label" for="form4Example2">Total Item</label>
                        </div>
                    
                        <!-- Message input -->
                        <div data-mdb-input-init class="form-outline mb-4">
                        <textarea class="form-control"  name="description" id="form4Example3" rows="4">{{ @$product->productdetail->description  }}</textarea>
                        <label class="form-label" for="form4Example3">Discription</label>
                        </div>
                    
                        <!-- Checkbox -->
                      

                    
                        <!-- Submit button -->
                        <button  type="submit" data-mdb-ripple-init type="button" class="btn btn-primary btn-block mb-4">Send</button>
                    </form>
                </div>
            </div>
           </div>
                     

  @endsection