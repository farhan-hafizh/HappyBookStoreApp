<center class="title top p-5">
    <h1>HAPPY BOOK STORE</h1>
  </center>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item {{ ($title === "Home") ? 'active': '' }}">
            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown {{ ($title === "Category") ? 'active': '' }}">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Category    
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                @foreach ($categories as $item)
                    <a class="dropdown-item" href="/category/{{ $item->id }}">{{ $item->category }}</a>   
                @endforeach
            </div>
            </li>
            <li class="nav-item {{ ($title === "Contact") ? 'active': '' }}">
                <a class="nav-link" href="/contact">Contact</a>
            </li>
        </ul>
        </div>
  </nav>
  </nav>