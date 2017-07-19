
 <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="{{ Request::is('/') ? "active" : "" }}"><a href="{{ URL::to('/') }}">Home</a></li>

      <li class="{{ Request::is('about') ? "active" : "" }}"><a href="{{ URL::to('/about') }}" >About</a></li>
      <li class="{{ Request::is('contact') ? "active" : "" }}"><a href="{{ URL::to('/contact') }}">Contact</a></li>
      <li class="{{ Request::is('post') ? "active" : "" }}"><a href="{{ URL::to('/post') }}">View Post</a></li>
    </ul>
    <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>

        <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
      </div><!--/.navbar-collapse -->
  </div>
</nav>
