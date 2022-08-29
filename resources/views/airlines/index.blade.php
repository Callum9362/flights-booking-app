@extends('layouts.default')

@section('content')
    <div class="grid grid-cols-3 gap-4">
        <div class="col-span-1">
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
        <div class="col-span-2 relative rounded-xl overflow-auto">
            <div class="shadow-sm overflow-hidden my-8">
                <table class="border-collapse table-fixed w-full text-sm">
                    <thead>
                    <tr class="text-center uppercase">
                        <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200">Airline Code</th>
                        <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200">Airline Name</th>
                        <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200">Airline Country</th>
                        <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200"></th>
                        <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200"></th>
                    </tr>
                    </thead>
                    <tbody class="bg-white dark:bg-slate-800">
                    @foreach($airlines as $airline)
                        <tr class="text-center">
                            <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">
                                {{ $airline->airline_code }}
                            </td>
                            <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">
                                {{ $airline->airline_name }}
                            </td>
                            <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">
                                {{ $airline->airline_country }}
                            </td>
                            <td class="border-b border-slate-100 dark:border-slate-700 text-slate-500 dark:text-slate-400">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </td>
                            <td class="border-b border-slate-100 dark:border-slate-700 text-slate-500 dark:text-slate-400">
                                <form action="{{ route('airlines.delete', ['id' => $airline->id]) }}" method="POST">
                                    @csrf
                                    <button type="submit"><i class="fa-solid fa-rectangle-xmark"></i></button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>



@endsection
