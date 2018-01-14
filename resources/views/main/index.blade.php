@extends('layout')

@section('title')
Car Rental Form
@endsection

@section('content')
    <form class="w-full max-w-xs" action="{{ route('main.form') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label class="block text-grey font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                    Full Name
                </label>
            </div>
            <div class="md:w-2/3">
                <input name="full-name" value="{{ old('full-name') }}" class="bg-grey-lighter appearance-none border-2 border-grey-lighter hover:border-orange rounded w-full py-2 px-4 text-grey-darker" id="inline-full-name" type="text" placeholder="Jane Doe">
            </div>
        </div>
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label class="block text-grey font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-email">
                    Email
                </label>
            </div>
            <div class="md:w-2/3">
                <input name="email" value="{{ old('email') }}" class="bg-grey-lighter appearance-none border-2 border-grey-lighter hover:border-orange rounded w-full py-2 px-4 text-grey-darker" id="inline-email" type="text" placeholder="janedoe@example.com">
            </div>
        </div>
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label class="block text-grey font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-id">
                    ID
                </label>
            </div>
            <div class="md:w-2/3">
                <input name="id" class="bg-grey-lighter appearance-none border-2 border-grey-lighter hover:border-orange rounded w-full py-2 px-4 text-grey-darker" id="inline-id" type="file">
            </div>
        </div>
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label class="block text-grey font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-state">
                    State
                </label>
            </div>
            <div class="md:w-2/3">
                <div class="relative">
                    <select name="state" class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded" id="inline-state">
                        @foreach ($states as $code => $name)
                            <option value="{{ $code }}" @if (old('state') == $code) selected @endif>{{ $name }}</option>
                        @endforeach
                    </select>
                    <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3"></div>
            <label class="md:w-2/3 block text-grey font-bold">
                <input class="mr-2" type="checkbox" name="newsletter-signup" value="1">
                <span class="text-sm">
                    Send me your newsletter!
                </span>
            </label>
        </div>
        <div class="md:flex md:items-center">
            <div class="md:w-1/3"></div>
            <div class="md:w-2/3">
                <button class="shadow bg-orange hover:bg-orange-light text-white font-bold py-2 px-4 rounded" type="submit">
                    Sent Rental Info
                </button>
            </div>
        </div>
    </form>
@endsection