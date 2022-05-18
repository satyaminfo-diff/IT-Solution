
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


<li class="nav-item">
    <a href="{{ route('questions.index') }}"
       class="nav-link {{ Request::is('questions*') ? 'active' : '' }}">
        <p>Questions</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('answers.index') }}"
       class="nav-link {{ Request::is('answers*') ? 'active' : '' }}">
        <p>Answers</p>
    </a>
</li>


