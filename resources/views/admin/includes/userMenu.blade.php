<!-- User Account: style can be found in dropdown.less -->
<li class="dropdown user user-menu">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
    <img src="{{ Avatar::create($fullname)->toBase64() }}" class="user-image" alt="User Image">
    <span class="hidden-xs">{{$userInfo['fname']}} {{$userInfo['lname']}}</span>
  </a>
  <ul class="dropdown-menu">
    <!-- User image -->
    <li class="user-header">
      <p>
        {{$userInfo['fname']}} {{$userInfo['lname']}}
        <small>Member since {{date("M Y", strtotime($userInfo['dm']))}}</small>
      </p>
    </li>
    <!-- Menu Footer-->
    <li class="user-footer">
      <div class="pull-right">
        <a href="{{ URL::Route('getLogout') }}" class="btn btn-default btn-flat">Sign out</a>
      </div>
    </li>
  </ul>
</li>