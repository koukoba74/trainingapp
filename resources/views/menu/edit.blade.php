@extends('layouts.trainingapp')

@section('title', 'メニュー編集')

@section('menubar')

@section('content')
    @if ($errors->any())
    <div class="alert alert-warning alert-dismissible">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="card">
        <form action="{{ route('menu.update', $menu->id) }}" method="post">
            @csrf @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <label for="menu">メニュー名</label>
                    <input type="text" class="form-control" id="menu" name="menu" value="{{ old('menu', $menu->menu) }}"
                        placeholder="メニュー名" />
                </div>
                <div class="form-group">
                    <label for="target">目標回数</label>
                    <input type="text" class="form-control" id="target" name="target" value="{{ old('target', $menu->target) }}"
                        placeholder="目標回数" />
                </div>
                <div class="form-group">
                    <label for="achieve">達成回数</label>
                    <input type="text" class="form-control" id="achieve" name="achieve" value="{{ old('achieve', $menu->achieve) }}"
                        placeholder="達成回数" />
                </div>
                <div class="form-group">
                    <label for="date">日付</label>
                    <input type="text" class="form-control" id="date" name="date" value="{{ old('date', $menu->date) }}"
                        placeholder="日付" />
                </div>
                <div class="form-group">
                    <label for="message">一言</label>
                    <textarea type="text" class="form-control" id="message" name="message"
                        placeholder="一言">{{ old('message', $menu->message) }}</textarea>
                </div>
            </div>
            <div class="card-footer">
                <div class="row">
                    <a class="btn btn-default" href="{{ route('menu.index') }}" role="button" style="width: 60px">戻る</a>
                    <div class="ms-auto" style="width: 60px">
                        <button type="submit" class="btn btn-primary" style="width: 60px">編集</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection