@extends('layouts.master')

@section('content')

    <div class="form-container">
        <div class='form-wrapper'>

           <form action="{{ route('product.store') }}" method="POST">

                @csrf

                <div class="form-input">


                    <div class="form-input-product-name">
                        <input type="text" title="Title" name="title" placeholder="Product Name" required>

                        @error('title')
                            <span class="error">{{ $message }}</span>
                        @enderror

                    </div>

                    <div class="form-input-product-name">
                        <input type="number" title="Price" name="price" placeholder="Product price" required>
                        @error('price')
                        <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-input-product-name">
                        <textarea name="Description" rows="5" required></textarea>
                        @error('Description')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-input-product-btn">
                        <button type="submit"> Add</button>
                    </div>


                </div>

           </form>

        </div>
    </div>

@endsection