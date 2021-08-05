@extends('layouts.app')

@section('content')
  @foreach($errors->all() as $message)
    <div>{{ $message }}</div>
  @endforeach

  @if(Session::has('message'))
    <div>{{ Session::get('message') }} </div>
  @else
    <div>変更ボタンを押してください</div>
  @endif

  <form method='POST' action="{{ route('users.update') }}">
    @csrf
    <label>名前：</label><input type='text' name='name' value='{{ $user->name }}' />
    <label>メールアドレス：</label><input type='email' name='email' value='{{ $user->email }}' />
    <button type='submit'>変更</button>
  </form>
@endsection