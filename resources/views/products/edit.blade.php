@extends('layouts/base_view')

@section('title', 'Edit Products')

@section('content')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Products') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                              <div class="row">
                                  <div class="col-sm-12">
                                        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" id="name" name="name" required value="{{ $product->name }}">
                                            <label for="client">Client</label>
                                            <select name="client_id" id="client" class="form-select" required>
                                                @foreach ($client as $item)
                                                    @if ($item->id == $product->id)
                                                        <option selected value="{{ $item->id }}">{{ $item->names }}</option>
                                                    @else
                                                        <option value="{{ $item->id }}">{{ $item->names }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                            <label for="category">Category</label>
                                            <select name="category_id" id="category" class="form-select" required>
                                                @foreach ($category as $item)
                                                    @if ($item->id == $product->id)
                                                        <option selected value="{{ $item->id }}">{{ $item->name }}</option>
                                                    @else
                                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                            <label for="price">Price</label>
                                            <input type="text" class="form-control" id="price" name="price" required value="{{ $product->price }}">
                                            <label for="stock">Stock</label>
                                            <input type="text" class="form-control" id="stock" name="stock" required value="{{ $product->stock }}">
                                            <input class="form-control dropify" id="validationCustom05" type="file" data-default-file="{{asset($product->image)}}"
                                                   name="image">

                                            <br>
                                            <a href="{{ route('products.index')}}" class="btn btn-dark">Go Back</a>
                                            <button type="submit" class="btn btn-warning">
                                                <span class="fas fa-edit"></span> update
                                            </button>
                                        </form>
                                  </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

@endsection
