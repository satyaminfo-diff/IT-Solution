
<li class="nav-item">
    <a href="{{ route('languages.index') }}"
       class="nav-link {{ Request::is('languages*') ? 'active' : '' }}">
        <p>Languages</p>
    </a>
</li>



<li class="nav-item">
    <a href="{{ route('questionTypes.index') }}"
       class="nav-link {{ Request::is('questionTypes*') ? 'active' : '' }}">
        <p>Question Types</p>
    </a>
</li>


