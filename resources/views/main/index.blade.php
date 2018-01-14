@extends('layout')

@section('content')
    <form class="w-full max-w-xs">
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
            <label class="block text-grey font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                Full Name
            </label>
            </div>
            <div class="md:w-2/3">
            <input class="bg-grey-lighter appearance-none border-2 border-grey-lighter hover:border-orange rounded w-full py-2 px-4 text-grey-darker" id="inline-full-name" type="text" value="Jane Doe">
            </div>
        </div>
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3"></div>
            <label class="md:w-2/3 block text-grey font-bold">
            <input class="mr-2" type="checkbox">
            <span class="text-sm">
                Send me your newsletter!
            </span>
            </label>
        </div>
        <div class="md:flex md:items-center">
            <div class="md:w-1/3"></div>
            <div class="md:w-2/3">
            <button class="shadow bg-orange hover:bg-orange-light text-white font-bold py-2 px-4 rounded" type="button">
                Sign Up
            </button>
            </div>
        </div>
    </form>
@endsection