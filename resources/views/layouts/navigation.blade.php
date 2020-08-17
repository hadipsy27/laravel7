<nav class="navbar navbar-expand-lg navbar-light bg-light">
                            <a class="navbar-brand" href="/">Laravel 7</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<div class="container">
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav nav-pills">
        <li class="nav-item{{request()->is('/') ? ' active' : ''}}">
            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item{{request()->is('contact') ? ' active' : ''}}">
            <a class="nav-link" href="/contact">Contact</a>
        </li>
        <li class="nav-item{{request()->is('about') ? ' active' : ''}}">
            <a class="nav-link" href="/about">About</a>
        </li>
        <li class="nav-item {{request()->is('login') ? ' active' : ''}}">
            <a class="nav-link" href="/login">Login</a>
        </li>
        </ul>
    </div>
</div>
</nav>
