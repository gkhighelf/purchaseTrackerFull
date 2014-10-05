@include('masters.header')
@include('masters.nav')

<!-- MAIN PANEL -->
<div id="main" role="main">
	@include('masters.ribbon')

	<!-- MAIN CONTENT -->
	<div id="content">
		@yield('content')
	</div>
	<!-- END MAIN CONTENT -->
	
</div>
<!-- END MAIN PANEL -->

@include('masters.scripts.scripts')
@include('masters.footer')
