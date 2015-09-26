 <nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="./">OP-CHAMPIONS</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            @if (isset($section) && $section == 'login')
              <li class="active"><a href="./login">login</a></li>
            @else
              <li><a href="./login">login</a></li>
            @endif
            
            <li><a href="#about">About</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>