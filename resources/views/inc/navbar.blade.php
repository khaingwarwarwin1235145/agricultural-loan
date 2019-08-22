<nav class="navbar navbar-expand-lg navbar-default fixed-top" data-spy="affix">
    <a class="navbar-brand" href="/" id="Logo" style="padding-left: 105px; font-size: 30px;color: goldenrod; font-weigth: bold; font-weight: 650;">
      <h2 style="color:aliceblue; font-weight: 500; font-size: 35px;">Agricultural Loan</h2>
    </a>
    <div class="dropdown">
        <button style="margin-left: 1080px;" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Action
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="margin-left: 1080px; width: 150px;">
        <a class="dropdown-item" href="{{url('register')}}">Register</a>
        <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
        </div>
      </div>
</nav>