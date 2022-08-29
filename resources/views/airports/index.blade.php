@extends('layouts.default')

@section('content')
    <div class="grid place-items-center">
        <form action="{{ route('airports.store') }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="airport-name">
                    Name
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('airport-name') border-1 border-red-600 @enderror" name="airport-name" type="text">
                @error('airport-name')
                <span class="text-red-600">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="airport-name">
                    Country
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('airport-country') border-1 border-red-600 @enderror" name="airport-country" type="text">
                @error('airport-country')
                <span class="text-red-600">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="airport-state">
                    State
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('airport-state') border-1 border-red-600 @enderror" name="airport-state" type="text">
                @error('airport-state')
                <span class="text-red-600">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="airport-city">
                    City
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('airport-city') border-1 border-red-600 @enderror" name="airport-city" type="text">
                @error('airport-city')
                <span class="text-red-600">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="airport-city">
                    Code
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('airport-code') border-1 border-red-600 @enderror" name="airport-code" type="text">
                @error('airport-code')
                <span class="text-red-600">{{ $message }}</span>
                @enderror
            </div>



            <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Add Airport
                </button>
            </div>

        </form>
    </div>

    <div class="relative rounded-xl overflow-auto">
        <div class="shadow-sm overflow-hidden my-8">
            <table class="border-collapse table-fixed w-full text-sm">
                <thead>
                <tr class="text-center uppercase">
                    <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200">Name</th>
                    <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200">Country</th>
                    <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200">State</th>
                    <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200">City</th>
                    <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200">Code</th>
                    <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200"></th>
                    <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200"></th>
                </tr>
                </thead>
                <tbody class="bg-white dark:bg-slate-800">
                @foreach($airports as $airport)
                    <tr class="text-center">
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">
                            {{ $airport->airport_name }}
                        </td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">
                            {{ $airport->country }}
                        </td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">
                            {{ $airport->state }}
                        </td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">
                            {{ $airport->city }}
                        </td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">
                            {{ $airport->code }}
                        </td>
                        <td class="border-b border-slate-100 dark:border-slate-700 text-slate-500 dark:text-slate-400">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </td>
                        <td class="border-b border-slate-100 dark:border-slate-700 text-slate-500 dark:text-slate-400">
                            <form action="{{ route('airports.delete', ['id' => $airport->id]) }}" method="POST">
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


@endsection
