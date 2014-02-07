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
                                @if (Session::has('errors'))
                                    @foreach($errors->get('studentID') as $message)
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @endforeach
                                @endif
					            {{ Form::open(array('url' => 'save', 'class' => 'form')) }}
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
										                        @foreach($firstRow as $cell)
										                                <tr>
												                            <td class="{{ $cell->getCoordinate() }}">{{ $cell->getValue() }}</td>
												                            <td><input name="{{ $cell->getCoordinate() }}" class='input-block-level' id='inputText2' value='{{ $cell->getValue() }}' type='text'></td>
												                            <td>
												                                 <div class='switch' data-off-label='<i class="icon-remove"></i>' data-on-label='<i class="icon-ok"></i>' data-on='success'>
														                            <input name="included[]" class="included" checked='checked' type='checkbox' value="{{ $cell->getColumn() }}">
														                        </div>
												                            </td>
												                            <td>
														                        <label class='radio'>
														                            <input name="studentID" type='radio' value='{{ $cell->getCoordinate() }}' />
														                            Yes
														                        </label>
												                            </td>
												                        </tr>
										                        @endforeach
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
										                    <table class='table preview' style='margin-bottom:0;'>
										                        <thead>
										                        <tr>
										                            @foreach($firstRow as $key => $cell)
										                                <th data-id="{{$key}}" class="{{ $cell->getCoordinate() }}">{{ $cell->getValue() }}</th>
										                            @endforeach
										                        </tr>
										                        </thead>
										                        <tbody>
                                                                    @foreach($sampleRows as $row)
                                                                        <tr>
                                                                            @foreach($row as $key => $r)
                                                                                <td data-id="{{ $key }}">{{ $r }}</td>
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
					                <div class='form-actions' style='margin-bottom: 0;'>
					                    <div class='text-right'>
					                        <div class='btn btn-large'>
					                            <i class='icon-chevron-left'></i> Previous
					                        </div>
                                            <a href="{{URL::to('/')}}" class="submit">
                                                <div class='btn btn-primary btn-large'>
                                                    Next <i class='icon-chevron-right'></i>
                                                </div>
                                            </a>

					                    </div>
					                </div>
					            {{ Form::close()}}
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
    $('input.included').change(function (e) {
        //hide th and column beneath it if selected
        var el = $(this).val();
        $('table.preview th.'+el).toggle();
        var id = $('table.preview th.'+el).attr("data-id");
        $('table.preview td[data-id="'+id+'"]').toggle();
    });

    //submit form
    $('a.submit').click(function (el) {
        el.preventDefault();
        $( "form" ).submit();
    });
});
</script>
@stop