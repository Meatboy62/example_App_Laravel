@extends('layouts.app')

@section('title', 'Blog post')

@section('content')
  @foreach ($posts as $post)
      <div>{{ $post['title'] }}</div>
  @endforeach
@endsection

