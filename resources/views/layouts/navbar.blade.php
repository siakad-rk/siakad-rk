<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Sistem Informasi Akademik</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Nilai <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/nilaiuh">Ulangan Harian</a></li>
            <li><a href="/nilaips">Psikomotorik</a></li>
            <li><a href="/nilaiaf">Afektif</a></li>
            <li><a href="/nilaimidend">UTS & UAS</a></li>
          </ul>
        </li>
        <li><a href="#">Ekstrakurikuler</a></li>
        <li><a href="#">Bantuan</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span>
          @if(session('user.name'))
            {{session('user.name')}}
          @else
            Data pribadi
          @endif
          </a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
