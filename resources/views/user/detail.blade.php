Thong tin


{{Form::open(array('url' => 'user/edit', 'method' => 'post'))}}

<input type="hidden" name="id" value="{{$user['id']}}">
Username :<input type="text" name="username" value="{{$user['username']}}">
Password :<input type="password" name="password" value="{{$user['password']}}">
<input type="submit" name="submit">
{!! Form::close() !!}