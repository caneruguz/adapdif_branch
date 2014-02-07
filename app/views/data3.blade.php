@extends('layouts.data')

@section('title_text')
Data Import
@stop

@section('style')
@stop


@section('navigation_menu')

@stop

@section('content')

    <div class='container-fluid' id="wrapper">

<div class="row-fluid homeMessage">
         <div class='page-header'>
                    <h1 class='pull-left'><span>Import Data</span></h1>
                </div>
</div>

		<div class="row-fluid" style="margin: 20px 0 0px 0;">
	        <div class='span12'>
	            <div class='row-fluid'>
					    <div class='span12 box bordered-box blue-border'>
					        <div class='box-header blue-background'>
					            <div class='title'>
					                <i class='icon-download-alt'></i>
					                3. Finished!
					            </div>

					        </div>
					        <div class='box-content box-double-padding'>
								<p>
									You completed the data import process.
								</p>
								<p>
									<div class="btn btn-large btn-primary"> <i class='icon-file'></i> <a href="{{ URL::to('dataview', $data->dataID)}}">View this Data Set</a></div>
									<div class="btn btn-large btn-info"> <i class='icon-list'></i> View All Your Imports</div>
									<div class="btn btn-large btn-success"> <i class='icon-plus'></i> Add Another Set</div>
								</p>
					        </div>
					    </div>

	            </div>
	        </div>
		</div>
    </div>





@stop
@section('scripts')
<script type="text/javascript">
$(document).ready(function() {

});
</script>
@stop
