<div class="blog-masthead">
    <div class="container">
        <nav class="nav blog-nav">
            <a class="nav-link active" href="http://localhost:8000/">Home</a>
            <a class="nav-link" href="http://localhost:8000/posts/create">Create</a>
            @if(Auth::check())
                <a class="nav-link ml-auto" href="#">{{ Auth::user()->name }}</a>
                <a class="nav-link" href="http://localhost:8000/logout">Log Out</a>
            @else
                <a class="nav-link ml-auto" href="http://localhost:8000/login">Log In</a>
            @endif

        </nav>
    </div>
</div>