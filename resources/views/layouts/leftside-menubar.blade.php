<script>
  $(document).ready(function () {
    $('.nav-item.active').removeClass('active');
    $('a[href="' + window.location.href + '"]').closest('li').closest('ul').closest('li').addClass('active');
    $('a[href="' + window.location.href + '"]').closest('li').addClass('active');
  });
</script>
<style>
  .nav-item.active {
    background-color: #fce8e6;
    font-weight: bold;
  }

  .nav-item.active a {
    color: #d93025;
  }

  .nav-link-text {
    padding-left: 10%;
  }

  #side-navbar ul>li>a {
    padding: 8px 15px;
  }
</style>
<ul class="nav flex-column">
  <li class="nav-item active">
    <a class="nav-link" href="{{ url('home') }}"><span class="nav-link-text">@lang('Tableau de bord')</span></a>
  </li>
  
  @if(Auth::user()->role == 'admin' || Auth::user()->role == 'technician')
  <li class="nav-item dropdown">
    <a role="button" href="#" class="nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="nav-link-text">@lang('Site')</span></a>
    <ul class="dropdown-menu" style="width: 100%;">
      <li class="nav-item">
        <a class="dropdown-item" href="{{ URL::route('site.dashboard') }}"><span class="nav-link-text">@lang('Analytique')</span></a>
      </li>
      <li class="nav-item">
        <a class="dropdown-item" href="{{ URL::route('site.subscribe') }}"><span class="nav-link-text">@lang('Abonnés')</span></a>
      </li>
      <li class="nav-item">
        <a class="dropdown-item" href="{{ URL::route('site.gallery') }}"><span class="nav-link-text">@lang('Gallerie')</span></a>
      </li>
    </ul>
    <li class="nav-item">
        <a class="nav-link" href="{{route('admin-news-list')}}"><span class="nav-link-text">@lang('News')</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('admin-service-list')}}"><span class="nav-link-text">@lang('Services')</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('admin-about-list')}}"><span class="nav-link-text">@lang('About')</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('admin-encourage-list')}}"><span class="nav-link-text">@lang('Encourage')</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('admin-post-list')}}"><span class="nav-link-text">@lang('Post')</span></a>
    </li>
  </li>
  @endif
</ul>
