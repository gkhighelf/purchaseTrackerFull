<!-- NEW WIDGET START -->
<article class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
	<!-- Widget ID (each widget will need unique ID)-->
	<div class="jarviswidget" id="wid-id-0">
		<!-- widget options:
			usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

			data-widget-colorbutton="false"
			data-widget-editbutton="false"
			data-widget-togglebutton="false"
			data-widget-deletebutton="false"
			data-widget-fullscreenbutton="false"
			data-widget-custombutton="false"
			data-widget-collapsed="true"
			data-widget-sortable="false"

		-->
		<header>
			<span class="widget-icon"> <i class="fa fa-comments"></i> </span>
			<h2>
			@section('title')
			test ::
			@show
			</h2>

		</header>

		<!-- widget div-->
		<div>

			<!-- widget edit box -->
			<div class="jarviswidget-editbox">
				<!-- This area used as dropdown edit box -->
				<input class="form-control" type="text">
			</div>
			<!-- end widget edit box -->

			<!-- widget content -->
			<div class="widget-body">

				<!-- this is what the user will see -->
				@yield('content')

			</div>
			<!-- end widget content -->

		</div>
		<!-- end widget div -->

	</div>
	<!-- end widget -->

</article>
<!-- WIDGET END -->
