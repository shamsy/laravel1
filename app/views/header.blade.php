@section("header")
  <div class="header">
    <div class="container">
      <h1>My first Laravel project</h1> &nbsp;&nbsp;
        <a href="{{ URL::to("/") }}">
          Home
        </a>
        <a href="{{ URL::route("calculator/calculate") }}">
          Calculator
        </a>
      @if (Auth::check())
        <a href="{{ URL::route("user/logout") }}">
          logout
        </a> |
        <a href="{{ URL::route("user/profile") }}">
          profile
        </a>
      @else
        <a href="{{ URL::route("user/login") }}">
          login
        </a>
      @endif
      
    </div>
  </div>
@show
