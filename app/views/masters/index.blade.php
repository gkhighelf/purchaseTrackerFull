@include('masters.wrappers.header')
@include('masters.wrappers.nav')

<!-- MAIN PANEL -->
<div id="main" role="main">
	@include('masters.wrappers.ribbon')

	<!-- MAIN CONTENT -->
	<div id="content">
		<!-- widget grid -->
		<section id="widget-grid" class="">

			<!-- row -->
			<div class="row">
			this is page content
				@yield('content')
			</div>
		</section>
	</div>
	<!-- END MAIN CONTENT -->

</div>
<!-- END MAIN PANEL -->

@include('masters.scripts.scripts')
{{ HTML::script('js/ajax.functions.js') }}
@include('masters.wrappers.footer')
