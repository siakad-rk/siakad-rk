<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand">Sistem Informasi Akademik</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="/">Home</a></li>
        @if(Auth::user()->kode=="SIS")
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Nilai <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/nilaiuh">Ulangan Harian</a></li>
            <li><a href="/nilaips">Psikomotorik</a></li>
            <li><a href="/nilaiaf">Afektif</a></li>
            <li><a href="/nilaimidend">UTS & UAS</a></li>
          </ul>
        </li>
        <li><a href="/ekskul">Ekstrakurikuler</a></li>
        <li><a href="#">Bantuan</a></li>
        @endif
        @if(Auth::user()->kode=="GUR")
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Input Nilai <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/nilaiuh">Ulangan Harian</a></li>
            <li><a href="/nilaips">Psikomotorik</a></li>
            <li><a href="/nilaiaf">Afektif</a></li>
            <li><a href="/nilaimidend">UTS & UAS</a></li>
          </ul>
        </li>
        @endif
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span>
          @if(session('user.name'))
            {{session('user.name')}}
          @else
            Data pribadi
          @endif
          </a></li>
        <li><a href="/logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
