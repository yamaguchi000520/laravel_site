@extends('products.layout')

@section('content')
<h2 class="subtitle has-text-centered mt-4">本棚</h2>

@if ($message = Session::get('success'))
<article class="message is-success">
    <div class="message-header">
        <p>Success</p>
    </div>
    <div class="message-body">
        <p>{{ $message }}</p>
    </div>
</article>
@endif
<div class="column is-8 is-offset-2">
    <a class="button is-primary my-4 is-fullwidth" href="{{ route('books.create') }}"> 新規作成</a>
    <table class="table is-bordered is-striped has-text-centered is-fullwidth">
        <tr>
            <th>ID</th>
            <th>製品名</th>
            {{-- <th>Details</th> --}}
            <th>操作</th>
        </tr>
        @foreach ($books as $book)
        <tr>
            {{-- <td>{{ ++$i }}</td> --}}
            <td>{{ $book->id }}</td>
            <td>{{ $book->name }}</td>
            {{-- <td>{{ $product->detail }}</td> --}}
            <td>
                <form action="{{ route('books.destroy',$book->id) }}" method="POST">
                    <a class="button is-info" href="{{ route('books.show',$product->id) }}">詳細を表示</a>
                    <a class="button is-success" href="{{ route('books.edit',$book->id) }}">編集</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="button is-danger">削除</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>

@endsection