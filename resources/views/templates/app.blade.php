@include('templates.head')
<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      @include('templates.navbar')

      @include('templates.sidebar')
      
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>@yield('heading')</h1>
          </div>

          <div class="section-body">
            @yield('content')
          </div>
        </section>
      </div>
      
      @include('templates.footer')
    </div>
  </div>
  @include('templates.foot')
