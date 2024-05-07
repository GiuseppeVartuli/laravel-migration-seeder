<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <img class="logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d5/Trenitalia_logo.svg/2560px-Trenitalia_logo.svg.png" alt="...">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active ms-5" aria-current="page" href="{{route('home')}}">Home</a>
              <a class="nav-link" href="{{route('partenze')}}">Partenza</a>
            </div>
          </div>
        </div>
      </nav>
</header>


<style>
.logo {
  width: 200px;
}
</style>