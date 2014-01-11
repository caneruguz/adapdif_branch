@extends('layouts.pd')

@section('title_text')
Professional Development Example
@stop

@section('style')
<style> 
.pd-sign {
border: 1px solid #666;
height: 20px;
width: 20px;
padding: 3px 5px;
border-radius: 20px;
text-align: center;
color: #666;
}

.pd-sign:hover {
	color: red;
	border-color: red;
}
.pd-window {
background: rgba(255,255,255,0.87);
width: 250px;
height: 100%;
right: -290px;
position: absolute;
top: 40px;
padding: 20px;
box-shadow: 0 0 5px #ccc;
}
.pd-pullTab{
background: rgba(255, 0, 0, 0.93);
width: 25px;
height: 20px;
padding: 8px 10px 10px 10px;
text-align: center;
margin-left: -66px;
font-size: 27px;
color: white;
box-shadow: -1px 0 2px #999; 
}
.pd-active {
}
.video-placeholder {
	width: 100%; 
	height: 120px; 
	background-color: black;
	margin: 10px auto; 
}
.pd-title {
	line-height: 23px;
font-size: 18px;
}
.pd-content {
	margin-top: -40px; 
}
.pd-links li {
	border-bottom: 1px solid #ddd;
	padding: 5px;
}
</style>
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
					                
					                PD View example
					            </div>

					        </div>
					        <div class='box-content box-double-padding'>
								<p>
									Here's some information that might require pd.  <span class="pd-sign has-tooltip" data-placement='top' title='Click this button to see PD information.'><i class='icon-puzzle-piece'></i></span>
								</p>
								<p>
									
								</p>
					        </div>
					    </div>

	            </div>
	        </div>
		</div>  
    </div>


<div class="pd-window">
	<div class="pd-pullTab"><i class='icon-puzzle-piece'></i></div>
	<div class="pd-content">
		<h3 class="pd-title"> PD Title that goes longer </h3>
		<p> Some PD Text. Lorem ipsum dolor sit amet, apes doler epicum de sentium partiatis. Lorem ipsum dolor sit amet, apes doler epicum de sentium partiatis. </p>
		<div class="video-placeholder"></div>
		<p class="text-info">Click on video to view larger</p>
		<p> Some PD Text. Lorem ipsum dolor sit amet, apes doler epicum de sentium partiatis. Lorem ipsum dolor sit amet, apes doler epicum de sentium partiatis. </p>
		<button class="btn btn-primary"> Learn more </button>
		<h4>Related topics</h4>
		<ul class="pd-links unstyled">
			<li><i class='icon-chevron-right text-green'></i><a href="#"> Do something else </a></li>
			<li><i class='icon-chevron-right text-purple'></i><a href="#"> Another interesting topic </a></li>
		</ul>
	</div>
	 
	
</div>



@stop
@section('scripts')
<script type="text/javascript">
$(document).ready(function() { 

	$('.pd-pullTab').on('click', function(){
		var pd = $(this); 
		togglePD(pd); 
	});
	$('.pd-sign').on('click', function(){
		var pd = $('.pd-pullTab'); 
		togglePD(pd); 
	});

	function togglePD(pd){
		if(pd.parent().hasClass('pd-active')){
			pd.parent().removeClass('pd-active').animate({
				right: "-290"
				// add other animations				
				}, 100, function() {
			    // Animation complete.
			  });
		} else {
			pd.parent().addClass('pd-active').animate({
				right: "0"
				// add other animations				
				}, 100, function() {
			    // Animation complete.
			  });
		}
	
	}
}); 
</script>
@stop
