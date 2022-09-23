@extends('layouts.trainingapp')

@section('title', 'メニュー一覧')

@section('menubar')

@section('content')
<div class="container-fluid">
    <a class="btn btn-primary mb-2" href="http://localhost:8000/menu/create" role="button">新規登録</a>
    <div class="card">
        <div class="card-body shadow-sm">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>メニュー名</th>
                        <th>目標回数</th>
                        <th>達成回数</th>
                        <th>日付</th>
                        <th>一言</th>
                        <th style="width: 70px"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($menus as $menu)
                    <tr>
                        <td>{{ $menu->menu }}</td>
                        <td>{{ $menu->target }}</td>
                        <td>{{ $menu->achieve }}</td>
                        <td>{{ $menu->date }}</td>
                        <td>{{ $menu->message }}</td>
                        <td>
                            <a class="btn btn-primary btn-sm mb-2" href="{{ route('menu.edit', $menu->id) }}"
                                role="button">編集</a>
                            <form action="{{ route('menu.destroy', $menu->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('削除してもよろしいですか?');">
                                    削除
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection