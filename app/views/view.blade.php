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
							                        <?php $rows = array(); $counter = 0; $counter2 = 0; ?>
							                        <thead>
							                        <tr>
								                        @foreach($data->dataColumns as $column)
									                            <td>{{ $column->columnName }}</td>
								                        @endforeach
							                        </tr>
							                        </thead>
							                        <tbody>
														@foreach($data->dataColumns as $column)

									                            @foreach($column->dataInfo as $data)
									                            	<?php $rows[$counter][$counter2] = $data->dataContent;
									                            		$counter++;
									                            	 ?>

										                        @endforeach
																<?php $counter = 0; $counter2++; ?>
								                        @endforeach
								                        <?php //var_dump($rows) ?>

														@foreach($rows as $row)
															<tr>
																@foreach($row as $column)
																<td>{{ $column }}</td>
																@endforeach
															</tr>
														@endforeach

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
