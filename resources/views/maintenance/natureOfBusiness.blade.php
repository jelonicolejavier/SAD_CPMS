@extends('layout.maintenanceLayout')

@section('title')
Nature of Business
@endsection

@section('content')

<div class="row">
    <div class="col s12 push-s1">
        <div class="container grey lighten-2 z-depth-2" style="border-radius: 10px; margin-top:40px;">
            <div class="row">
                <div class="col s4 push-s1">
                    <h2 class="blue-text">Nature of Business</h2>
                </div>

                <div class="col s3 offset-s4">
                    <button style="margin-top: 30px;" id="btnAdd" class=" z-depth-2 btn-large green modal-trigger" href="#modalnobAdd">
                        <i class="material-icons left">add</i> ADD
                    </button>
                </div>
            </div>
        
            <div class="row">
                <div class="col s12">
                    <table class="highlight white" style="border-radius:10px;" id="dataTable">

                        <thead>
                            <tr>
                                <th style="width:160px;"></th>
                                <th style="width:50px;"></th>
								<th style="width:50px;"></th>
                                <th>ID</th>
                                <th>Name</th>
                                
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($natureOfBusinesses as $natureOfBusiness)
                                <tr>
                                    
									<td> 
									  <div class="switch" style="margin-right: -80px;">
										<label>
										  Deactivate
										  @if ($natureOfBusiness->boolFlag==1)
											<input type="checkbox" checked class = "checkboxFlag" id = "{{ $natureOfBusiness->intNatureOfBusinessID }}">
										  @else
											<input type="checkbox" class = "checkboxFlag" id = "{{ $natureOfBusiness->intNatureOfBusinessID }}">
										  @endif
										  <span class="lever"></span>
										  Activate
										</label>
									  </div>
									</td>
									
									
									
									<td>
                                        <button class="buttonUpdate btn modal-trigger"  name="" id="{{$natureOfBusiness->intNatureOfBusinessID}}" href="#modalnobEdit" >
                                            <i class="material-icons">edit</i>
                                        </button>
                                    <label for="{{ $natureOfBusiness->intNatureOfBusinessID }}"></label>
                                    </td>

                                    <td>
                                        <button class="buttonDelete btn red modal-trigger" id="{{ $natureOfBusiness->intNatureOfBusinessID }}" href="#modalnobDelete">
                                            <i class="material-icons">delete</i>
                                        </button>
                                    </td>
                                    <td id = "id{{$natureOfBusiness->intNatureOfBusinessID}}">{{ $natureOfBusiness->intNatureOfBusinessID }}</td>
            						<td id = "name{{$natureOfBusiness->intNatureOfBusinessID}}">{{ $natureOfBusiness->strNatureOfBusiness }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </br></br></br></br></br>
        </div>
    </div>

<!-- Modal Leave ADD -->

<div id="modalnobAdd" class="modal modal-fixed-footer" style="overflow:hidden;">
        <div class="modal-header"><h2>Nature of Business</h2></div>
        	<div class="modal-content">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

					<div class="row">
						<div class="col s8">
							<div class="input-field">
								<input  id="" type="text" class="validate" name = "natureOfBusinessID" disabled>
									<label for="">Nature of Business ID</label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col s5">
							<div class="input-field">
								<input id="strNatureOfBusiness" type="text" class="validate" name = "natureOfBusiness" required="" aria-required="true">
									<label for="">Nature of Business</label> 
							</div>
						</div>
					</div>
						
	<!-- Modal Button Save -->
				
		<div class="modal-footer">
			<button class="btn waves-effect waves-light" name="action" style="margin-right: 30px;" id = "btnAddSave">Save
    			<i class="material-icons right">send</i>
  			</button>
    	</div>
    		</div>
		</div>
<!-- MODAL LEAVE EDIT -->
<div id="modalnobEdit" class="modal modal-fixed-footer" style="overflow:hidden;">
	<div class="modal-header"><h2>Nature of Business</h2></div>
        	<div class="modal-content">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
					
					<div class="row">
						<div class="col s8">
							<div class="input-field">
								<input  id="editID" type="text" class="validate" name = "natureOfBusinessID" readonly required="" aria-required="true" value = "test">
									<label for="editID">Nature of Business ID</label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col s5">
							<div class="input-field">
								<input id="editname" type="text" class="validate" name = "natureOfBusiness" required="" aria-required="true" value = "test">
									<label for="editname">Nature of Business</label> 
							</div>
						</div>
					</div>
						
	<!-- Modal Button Save -->
				
		<div class="modal-footer">
			
			<button class="btn waves-effect waves-light" name="action1" style="margin-right: 30px;" id = "btnUpdate">Update
    			<i class="material-icons right">send</i>
  			</button>
			
			
			
			
    	</div>
    		</div>
</div>
</div>
@stop
@section('script')
<script type="text/javascript">
	$(document).ready(function(){
		
		$("#dataTable").DataTable({
             "columns": [
            {"searchable": false},
			{"searchable": false},
			{"searchable": false},
            null,
            null
            ] ,  
//		    "pagingType": "full_numbers",
			"pageLength":5,
			"lengthMenu": [5,10,15,20]


		});
 

		$("#btnAddSave").click(function(){
           if ($('#strNatureOfBusiness').val().trim()){
			$.ajax({
				
				type: "POST",
				url: "{{action('NatureOfBusinessController@addNatureOfBusiness')}}",
                beforeSend: function (xhr) {
                    var token = $('meta[name="csrf_token"]').attr('content');

                    if (token) {
                          return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                    }
                },
				data: {
					natureOfBusiness: $('#strNatureOfBusiness').val(),
				},
				success: function(data){
					window.location.href = "{{action('NatureOfBusinessController@index')}}";
					var toastContent = $('<span>Record Added.</span>');
                    Materialize.toast(toastContent, 1500,'green', 'edit');
					
				},
				error: function(data){
					var toastContent = $('<span>Error Occured. </span>');
                    Materialize.toast(toastContent, 1500,'red', 'edit');
                    
				}


			});//ajax
                }else{
                var toastContent = $('<span>Please Check Your Input. </span>');
                Materialize.toast(toastContent, 1500,'red', 'edit');
            }
		});//button add clicked
        
        $("#btnUpdate").click(function(){
           if ($('#editname').val().trim()){
			$.ajax({
				
				type: "POST",
				url: "{{action('NatureOfBusinessController@updateNatureOfBusiness')}}",
                beforeSend: function (xhr) {
                    var token = $('meta[name="csrf_token"]').attr('content');

                    if (token) {
                          return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                    }
                },
				data: {
					natureOfBusinessID: $('#editID').val(),
                    natureOfBusiness: $('#editname').val(),
				},
				success: function(data){
					var toastContent = $('<span>Record Updated.</span>');
                    Materialize.toast(toastContent, 1500,'green', 'edit');
                    window.location.href = "{{action('NatureOfBusinessController@index')}}";
				},
				error: function(data){
					var toastContent = $('<span>Error Occured. </span>');
                    Materialize.toast(toastContent, 1500,'red', 'edit');
                    
				}


			});//ajax
               }else{
                var toastContent = $('<span>Please Check Your Input. </span>');
                Materialize.toast(toastContent, 1500,'red', 'edit');
            }

		});//button add clicked
        
        $(".buttonDelete").click(function(){
            if(confirm('Are you sure you want to delete the record?')){

                $.ajax({

                    type: "POST",
                    url: "{{action('NatureOfBusinessController@deleteNatureOfBusiness')}}",
                    beforeSend: function (xhr) {
                        var token = $('meta[name="csrf_token"]').attr('content');

                        if (token) {
                              return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                        }
                    },
                    data: {
                        natureOfBusinessID: this.id

                    },
                    success: function(data){
                        var toastContent = $('<span>Record Deleted.</span>');
                        
                        window.location.href = "{{action('NatureOfBusinessController@index')}}";
						Materialize.toast(toastContent, 1500,'green', 'edit');
                    },
                    error: function(data){
                        var toastContent = $('<span>Error Occur. </span>');
                        Materialize.toast(toastContent, 1500, 'edit');

                    }

                });//ajax
            }
        });
        
		$(".buttonUpdate").click(function(){

			var itemID = "id" + this.id;
			var itemName = "name" + this.id;

			document.getElementById('editID').value = $("#"+itemID).html();
			document.getElementById('editname').value = $("#"+itemName).html();

		});

		$(".checkboxFlag").click(function(){
            
            var $this = $(this);
            var flag;
            // $this will contain a reference to the checkbox   
            if ($this.is(':checked')) {
                flag = 1;
            } else {
                flag = 0;
            }
           $.ajax({
				
				type: "POST",
				url: "{{action('NatureOfBusinessController@flagNatureOfBusiness')}}",
                beforeSend: function (xhr) {
                    var token = $('meta[name="csrf_token"]').attr('content');

                    if (token) {
                          return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                    }
                },
				data: {
					natureOfBusinessID: this.id,
                    flag: flag
				},
				success: function(data){
					
				},
				error: function(data){
					var toastContent = $('<span>Error Occur. </span>');
                    Materialize.toast(toastContent, 1500, 'edit');
                    
				}

			});//ajax
             
        });//checkbox clicked

	});//document ready
</script>

@stop