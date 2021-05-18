<a href="{{ route('logout') }}" class="text-sm text-gray-700 underline" onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">Logout</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
</form>
