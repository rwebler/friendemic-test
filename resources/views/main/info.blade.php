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
      An e-mail with pick up information has been sent to your {{ $data['email'] }} address. Please be in our predetermined location in {{ $data['state'] }} to get your car, and have the Photo ID reproduced below with you at the time. Safe travels!
    </p>
    @if (isset($data['newsletter-signup']))
        <p class="text-grey-darker text-base">By the way, thanks for joining our newsletter! We promise we won't send you spam.</p>
    @endif
  </div>
  <div class="px-6 py-4">
    <img src="/storage/{{ $data['photoId'] }}">
  </div>
</div>
@endsection