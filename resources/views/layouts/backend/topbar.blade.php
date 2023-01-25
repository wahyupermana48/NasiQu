<nav class="navbar navbar-expand topbar static-top shadow">
    <ul class="navbar-nav ml-auto">
    <form action="/logout" method="POST">
          @csrf
        <button type="submit" class="btn btn-dark"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-white"></i>log out</button>
    </form>

    </ul>

</nav>