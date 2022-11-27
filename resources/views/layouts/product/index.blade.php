@extends('layouts.master')


@section('content')

    <div class="container-table">

        <table class="product-detial-table">

            <thead class="product-detial-header">
                <tr>
                    <th>Serial No.</th>
                    <th>Product Name.</th>
                    <th>Price.</th>
                    <th>Description.</th>
                    <th>Action.</th>
                </tr>
            </thead>

            <tbody class="product-detial-body">
                @foreach ($products as $product)

                <tr>

                    <td>{{ $product->id }}</td>

                    <td>{{ $product->title }}</td>

                    <td>{{ $product->price }}</td>

                    <td>{{ $product->Description }}</td>

                    <td class="product-detial-action">
                        <a href="{{ route('product.edit', $product->id) }}">Edit</a>

                        <form action="{{route('product.destroy', $product->id)}}" method="POST" class="delete-from-btn">
                            @csrf
                            @method('DELETE')    
                            <button class="delete">Delete</button>
                        </form>

                        
                    </td>

                </tr>
                    
                @endforeach
            </tbody>

        </table>

    </div>

@endsection


