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
					                1. Upload Data File
					            </div>

					        </div>
					        <div class='box-content box-double-padding'>
					            <form class='form' style='margin-bottom: 0;'>
					                <fieldset>
					                    <div class='span4 box'>
					                        <div class='lead'>
					                            <i class='icon-upload contrast'></i>
					                            Upload File
					                        </div>
					                        <small class='muted'>Select the data file from your computer to upload to our servers.</small>
					                    </div>
					                    <div class='span7 offset1'>

										        <div class='box-content'>
										            <div>
										                <input title='Search for a file to add' type='file'>
										            </div>
										        </div>

					                    </div>
					                </fieldset>					            
					            
					             <hr class='hr-normal'>
					                <fieldset>
					                    <div class='span4'>
					                        <div class='lead'>
					                            <i class='icon-list text-contrast'></i>
					                            Provide information about the data
					                        </div>
					                        <small class='muted'>Providing a title and date will help you track the source of student information later on. If these details are not available you may leave them blank. </small>
					                    </div>
					                    <div class='span7 offset1'>
					                        <div class='control-group'>
					                            <label class='control-label'>Data Name</label>
					                            <div class='controls'>
					                                <input class='span12' id='data-name' type='text'>
					                                <p class='help-block'></p>
					                            </div>
					                        </div>
						                <div class='control-group'>
						                    <label class='control-label' for='inputSelectMulti'>Data Type</label>
						                    <div class='controls'>
						                        <select id='inputSelectMulti' multiple='multiple'>
						                            <option>MAP Data</option>
						                            <option>SOL</option>
						                            <option>Student Observations</option>
						                            <option>Demographics</option>
						                            <option>Grades</option>
						                        </select>
						                    </div>
						                     <small class='muted'>You can select multiple types</small>
						                </div>
						                <div class='control-group'>
						                    <label class='control-label' for='inputSelectMulti'>Date</label>
						                    <div class='controls'>
								                 <div>
								                    <div class='datepicker input-append' id='datepicker'>
								                        <input class='input-medium' data-format='yyyy-MM-dd' placeholder='Select datepicker' type='text'>
											            <span class='add-on'>
											              <i data-date-icon='icon-calendar' data-time-icon='icon-time'></i>
											            </span>
								                    </div>
								                </div>
						                      <small class='muted'>The date collected or reported.</small>
						                    </div>
						                </div>
						                 <div class='control-group'>
						                    <div class='controls'>
						                        <label class='checkbox'>
						                            <input type='checkbox' value=''>
						                            The first row in the table is column headers. 
						                        </label>
						                    </div>
						                </div>						                
					                    </div>
					                </fieldset>
					                <div class='form-actions' style='margin-bottom: 0;'>
					                    <div class='text-right'>
					                        <a href="{{URL::to('data2')}}">
					                        	<div class='btn btn-primary btn-large'>
					                             Next <i class='icon-chevron-right'></i> 
												 </div>
					                        </a>
					                    </div>
					                </div>
					            </form>
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