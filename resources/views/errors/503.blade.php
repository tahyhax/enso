@extends('laravel-enso/core::layouts.error')

@section('pageTitle', '503')

@section('content')

  <div class="content">
    <div class="title">{{ $exception->getMessage() ?? 'Be right back' }}</div>
  </div>

@endsection