<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="div container">
  <a class="navbar-brand" href="#">Blogpost</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('posts.index')}}">Posts </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{route('posts.create')}}">Create Post </a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>    
  
  </div>
</nav>