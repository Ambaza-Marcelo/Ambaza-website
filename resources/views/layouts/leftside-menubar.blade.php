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
    <a class="nav-link" href="{{ url('home') }}"><span class="nav-link-text">@lang('messages.dashboard')</span></a>
  </li>
  
  @if(Auth::user()->role == 'admin' || Auth::user()->role == 'technician')
    <li class="nav-item">
        <a class="nav-link" href="{{ URL::route('site.dashboard') }}"><span class="nav-link-text">@lang('messages.analytic')</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ URL::route('site.subscribe') }}"><span class="nav-link-text">@lang('messages.subscriber')</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ URL::route('site.gallery') }}"><span class="nav-link-text">@lang('messages.gallery')</span></a>
      </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('admin-news-list')}}"><span class="nav-link-text">@lang('messages.news')</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('admin-service-list')}}"><span class="nav-link-text">@lang('messages.services')</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('admin-about-list')}}"><span class="nav-link-text">@lang('messages.about')</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('admin-encourage-list')}}"><span class="nav-link-text">@lang('messages.encourage')</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('admin-post-list')}}"><span class="nav-link-text">@lang('messages.post')</span></a>
    </li>
  @endif
</ul>
