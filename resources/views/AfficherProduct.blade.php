@extends('layout.layout')
@section('title',"Product List")

@section('content')
    

<div class="relative overflow-x-auto">
  <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
      <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
          <tr>
              <th scope="col" class="px-6 py-3">
                  Product name
              </th>
              <th scope="col" class="px-6 py-3">
                  Label
              </th>
              <th scope="col" class="px-6 py-3">
                  Price
              </th>
              <th scope="col" class="px-6 py-3">
                  Action
              </th>
          </tr>
      </thead>
      <tbody>
        @foreach ($products as $product)
          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{$product->name}}
              </th>
              <td class="px-6 py-4">
                {{$product->label}}
              </td>
              <td class="px-6 py-4">
                {{$product->price}}
              </td>
              <td class="px-6 py-a4">
                <div class="flex justify-center items-center gap-5">
                  <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                  <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Remove</a>
                </div>
              </td>
          </tr>
        @endforeach
      </tbody>
  </table>
</div>

@endsection