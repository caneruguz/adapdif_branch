@extends('layouts.data')

@section('title_text')
Data Set
@stop

@section('style')
@stop


@section('navigation_menu')

@stop

@section('content')

    <div class='container-fluid' id="wrapper">

<div class="row-fluid homeMessage">
         <div class='page-header'>
                    <h1 class='pull-left'><span>Data Set Title</span></h1>
                </div>
</div>

		<div class="row-fluid" style="margin: 20px 0 0px 0;">
	        <div class='span12'>
	            <div class='row-fluid'>
							    <div class='span12 box bordered-box blue-border' style='margin-bottom:0;'>
							        <div class='box-content box-no-padding'>
							            <div class='responsive-table'>
							                <div class='scrollable-area'>
							                    <table class='data-table-column-filter table table-bordered table-striped dataTable' style='margin-bottom:0;'>
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
