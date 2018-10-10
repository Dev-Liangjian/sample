<!-- 
	danger, warning, success, info 这四个键名在 Bootstrap 分别具有不同样式展现效果
	因此后面我们将使用这几个键名作为消息提示的专有设定
-->
@foreach (['danger', 'warning', 'success', 'info'] as $msg)
  @if(session()->has($msg))
    <div class="flash-message">
      <p class="alert alert-{{ $msg }}">
        {{ session()->get($msg) }}
      </p>
    </div>
  @endif
@endforeach