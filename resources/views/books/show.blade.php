@extends('products.layout')

@section('content')
<h2 class="subtitle has-text-centered mt-4"> 詳細</h2>

<div class="media-content column is-8 is-offset-2">
    <h3 class="has-text-weight-bold">book名:</h3>
    <div class="box">
        <p>{{ $book->name }}</p>
    </div>
    <h3 class="has-text-weight-bold">詳細:</h3>
    <div class="box">
        {{ $book->body }}
    </div>
    <div class="has-text-right">
        <a class="button is-info my-4 has-right" href="{{ route('books.index') }}"> 戻る</a>
    </div>
</div>
@endsection