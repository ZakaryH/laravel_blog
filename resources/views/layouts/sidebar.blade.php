<div class="col-sm-3 offset-sm-1 blog-sidebar">
    <div class="sidebar-module sidebar-module-inset">
        <h4>About</h4>
        <p>A blogging application built with Laravel 5.4.</p>
    </div>
    <div class="sidebar-module">
        <h4>Archives</h4>
        <ol class="list-unstyled">
            @foreach($archives as $month)
                <li>
                    <a href="/?month={{ $month['month'] }}&year={{ $month['year'] }}">{{ $month['month'] . ' ' . $month['year']}}</a>
                </li>
            @endforeach
        </ol>
    </div>
    {{--<div class="sidebar-module">--}}
        {{--<h4>Elsewhere</h4>--}}
        {{--<ol class="list-unstyled">--}}
            {{--<li><a href="#">GitHub</a></li>--}}
            {{--<li><a href="#">Twitter</a></li>--}}
            {{--<li><a href="#">Facebook</a></li>--}}
        {{--</ol>--}}
    {{--</div>--}}
</div><!-- /.blog-sidebar -->