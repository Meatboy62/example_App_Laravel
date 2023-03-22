@extends('layouts.app')

@section('title', 'Blog post')


@section('content')
  {{-- @each('posts.partials.post',$post ,'post') --}}
  @forelse ($posts as $key => $post)
    @include('posts.partials.post',[])
  @empty
    No post found!
  @endforelse
@endsection

