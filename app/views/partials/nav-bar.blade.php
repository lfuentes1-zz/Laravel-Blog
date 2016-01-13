<nav> 
    <ul class="nav nav-justified nav-pills">
        <li><a class="btn btn-default" href="{{{ action('HomeController@showWelcome') }}}">Home</a></li>
        <li><a class="btn btn-default" href="{{{ action('HomeController@showResume') }}}">Resume</a></li>
        <li><a class="btn btn-default" href="{{{ action('HomeController@showPortfolio') }}}">Portfolio</a></li>
        <li><a class="btn btn-default" href="{{{ action('PostsController@index') }}}">Blog</a></li>
        <li><a class="btn btn-default" href="">Contact Me</a></li>
    </ul>
</nav>