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
					                2. Select and Sort Columns
					            </div>

					        </div>
					        <div class='box-content box-double-padding'>
					            <form class='form' style='margin-bottom: 0;'>
									<fieldset>
					                    <div class='span3 box'>
					                        <div class='lead'>
					                            <i class='icon-upload contrast'></i>
					                           Data Columns
					                        </div>
					                        <small class='muted'>To import your data successfully please make sure that columns are properly named. Remember to select the column that has student ID numbers so that the match can be done properly. </small>
					                    </div>
					                    <div class='span8 offset1'>
											<div class='row-fluid'>
										    <div class='span12 box bordered-box blue-border' style='margin-bottom:0;'>
										        <div class='box-content box-no-padding'>
										            <div class='responsive-table'>
										                <div class='scrollable-area'>
										                    <table class='table' style='margin-bottom:0;'>
										                        <thead>
										                        <tr>
										                            <th width="30%">
										                                Column Name
										                            </th>
										                            <th width="30%">
										                                Rename Column
										                            </th>
										                            <th width="20%">
										                                Include in Import?
										                            </th>
										                            <th width="20%">
										                                Student ID Column
										                            </th>										                            
										                        </tr>
										                        </thead>
										                        <tbody>
										                        <tr>
										                            <td>Student Name</td>
										                            <td><input class='input-block-level' id='inputText2' placeholder='Student Name' type='text'></td>
										                            <td>
										                                 <div class='switch' data-off-label='<i class="icon-remove"></i>' data-on-label='<i class="icon-ok"></i>' data-on='success'>
												                            <input checked='checked' type='checkbox'>
												                        </div>
										                            </td>
										                            <td>
												                        <label class='radio'>
												                            <input type='radio' value=''>
												                            Yes
												                        </label>
										                            </td>
										                        </tr>
										                        <tr>
										                            <td>Student ID</td>
										                            <td><input class='input-block-level' id='inputText2' placeholder='Student ID' type='text'></td>
										                            <td>
										                                 <div class='switch' data-off-label='<i class="icon-remove"></i>' data-on-label='<i class="icon-ok"></i>' data-on='success'>
												                            <input checked='checked' type='checkbox'>
												                        </div>
										                            </td>
										                            <td>
												                        <label class='radio'>
												                            <input type='radio' value='Yes' selected>
												                            Yes
												                        </label>
										                            </td>
										                        </tr>
										                        <tr>
										                            <td>Math Score</td>
										                            <td><input class='input-block-level' id='inputText2' placeholder='Math Score' type='text'></td>
										                            <td>
										                               <div class='switch' data-off-label='<i class="icon-remove"></i>' data-on-label='<i class="icon-ok"></i>' data-on='success'>
												                            <input checked='checked' type='checkbox'>
												                        </div>
										                            </td>
										                            <td>
												                        <label class='radio'>
												                            <input type='radio' value=''>
												                            Yes
												                        </label>
										                            </td>
										                        </tr>
										                        <tr>
										                            <td>English Score</td>
										                            <td><input class='input-block-level' id='inputText2' placeholder='English Score' type='text'></td>
										                            <td>
										                            	<div class='switch' data-off-label='<i class="icon-remove"></i>' data-on-label='<i class="icon-ok"></i>' data-on='success'>
												                            <input checked='checked' type='checkbox'>
												                        </div>
										                            </td>
										                            <td>
												                        <label class='radio'>
												                            <input type='radio' value=''>
												                            Yes
												                        </label>
										                            </td>
										                        </tr>
										                        <tr>
										                            <td>History Score</td>
										                            <td><input class='input-block-level' id='inputText2' placeholder='History Score' type='text'></td>
										                            <td>
										                            	<div class='switch' data-off-label='<i class="icon-remove"></i>' data-on-label='<i class="icon-ok"></i>' data-on='success'>
												                            <input checked='checked' type='checkbox'>
												                        </div>
										                            </td>
										                            <td>
												                        <label class='radio'>
												                            <input type='radio' value=''>
												                            Yes
												                        </label>
										                            </td>
										                        </tr>
										                        </tbody>
										                    </table>
										                </div>
										            </div>
										        </div>
										    </div>
										</div>				            
										<!-- End Table  -->
										
										</div>
									</fieldset>
									<hr class='hr-normal'>
					                <fieldset>
					                	<h3> Preview </h3>
										<div class='row-fluid'>
										    <div class='span12 box bordered-box blue-border' style='margin-bottom:0;'>
										        <div class='box-content box-no-padding'>
										            <div class='responsive-table'>
										                <div class='scrollable-area'>
										                    <table class='table' style='margin-bottom:0;'>
										                        <thead>
										                        <tr>
										                            <th width="20%">
										                                Student Name
										                            </th>
										                            <th width="20%">
										                                Student ID
										                            </th>
										                            <th width="20%">
										                                Math Score
										                            </th>
										                            <th width="20%">
										                                English Score
										                            </th>	
										                            <th width="20%">
										                                History Score
										                            </th>											                            									                            
										                        </tr>
										                        </thead>
										                        <tbody>
										                        <tr>
										                            <td>John Doe</td>
										                            <td>123123</td>
										                            <td>59</td>
										                            <td>89</td>
										                            <td>75</td>
										                        </tr>
																<tr>
										                            <td>Jimmy Brown</td>
										                            <td>564564</td>
										                            <td>78</td>
										                            <td>90</td>
										                            <td>67</td>
										                        </tr>
																<tr>
										                            <td>Carlos Santos</td>
										                            <td>0234349</td>
										                            <td>78</td>
										                            <td>89</td>
										                            <td>90</td>
										                        </tr>										                        
																<tr>
										                            <td>Kendra Donalds</td>
										                            <td>56430</td>
										                            <td>69</td>
										                            <td>98</td>
										                            <td>90</td>
										                        </tr>
										                        </tbody>
										                    </table>
										                </div>
										            </div>
										        </div>
										    </div>
										</div
										<!-- End of Preview Table -->
					                </fieldset>
					                <div class='form-actions' style='margin-bottom: 0;'>
					                    <div class='text-right'>
					                        <div class='btn btn-large'>
					                            <i class='icon-chevron-left'></i> Previous 
					                        </div>
					                        <div class='btn btn-primary btn-large'>
					                            Next <i class='icon-chevron-right'></i>
					                        </div>
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