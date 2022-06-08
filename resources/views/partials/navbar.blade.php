<nav class="navbar navbar-expand-lg navbar-dark">
    <h1 class="logo"><i class="fas fa-mug-hot"></i> Kopi Langgeng</h1>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

        </ul>
        <ul class="form-inline my-2 my-lg-0">
            <li class="nav-item active">
                <a class="nav-link color-me" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link color-me" href="{{route('menu')}}">Menu</a>
            </li>
            <li class="nav-item">
                <a class="nav-link color-me" href="{{route('member')}}">Member</a>
            </li>
            <li class="nav-item">
                <a class="nav-link color-me" href="{{route('about')}}">Tentang Kami</a>
            </li>
            <li class="nav-item">
                <a class="nav-link color-me" href="{{route('signup')}}">Sign Up</a>
            </li>
        </ul>
    </div>
</nav>
