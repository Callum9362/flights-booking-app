@extends('layouts.default')

@section('content')
    <div class="grid h-screen place-items-center">
        <form action="{{ route('airlines.store') }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="airline-code">
                    Airline Code
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('airline-code') border-1 border-red-600 @enderror" name="airline-code" type="text">
                @error('airline-code')
                   <span class="text-red-600">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="airline-name">
                    Airline Name
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('airline-code') border-1 border-red-600 @enderror" name="airline-name" type="text">
                @error('airline-name')
                    <span class="text-red-600">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="airline-country">
                    Airline Country
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('airline-code') border-1 border-red-600 @enderror" name="airline-country" type="text">
                @error('airline-country')
                    <span class="text-red-600">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Add Airline
                </button>
            </div>

        </form>
    </div>
@endsection
