@extends('layouts.master')

@section('content')

    <div class="form-container">
        <div class='form-wrapper'>

           <form action="{{ route('product.update', $product->id) }}" method="POST">

                @csrf
                @method('PUT')

                <div class="form-input">


                    <div class="form-input-product-name">
                        <input type="text" title="Title" name="title" placeholder="Product Name" required value="{{ $product->title }}">

                        @error('title')
                            <span class="error">{{ $message }}</span>
                        @enderror

                    </div>

                    <div class="form-input-product-name">
                        <input type="number" title="Price" name="price" placeholder="Product price" required value="{{ $product->price }}">
                        @error('price')
                        <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-input-product-name">
                        <textarea name="Description" rows="5" required>{{ $product->Description }}</textarea>
                        @error('Description')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-input-product-btn">
                        <button type="submit"> Update</button>
                    </div>


                </div>

           </form>

        </div>
    </div>

@endsection