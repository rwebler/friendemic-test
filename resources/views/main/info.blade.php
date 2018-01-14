@extends('layout')

@section('title')
Car Rental Receipt
@endsection

@section('content')
<div class="max-w-sm rounded overflow-hidden shadow-lg">
  <img class="w-full" src="https://tailwindcss.com/img/card-top.jpg" alt="Sunset in the mountains">
  <div class="px-6 py-4">
    <div class="font-bold text-xl mb-2">Receipt for {{ $data['full-name'] }}</div>
    <p class="text-grey-darker text-base">
        An e-mail with pick up information has been sent to your {{ $data['email'] }} address.
    </p>
    <p class="text-grey-darker text-base">
        Please be in our predetermined location in {{ $data['state'] }} to get your car, and have the photo id reproduced below with you at the time.</p>
    </p>
    <p class="text-grey-darker text-base">
        Safe travels!
    </p>
    @if (isset($data['newsletter-signup']))
        <p class="text-grey-darker text-base">By the way, thanks for joining our newsletter! We promise we won't send you spam.</p>
    @endif
  </div>
  <div class="px-6 py-4">
    <img src="/storage/{{ $data['photoId'] }}">
  </div>
  <div class="px-6 py-4">
        <a href="{{ route('main.index') }}" class="no-underline bg-blue hover:bg-blue-dark text-white font-bold py-2 px-4 rounded">
            Return to Car Rental Form
        </a>
  </div>
</div>
@endsection