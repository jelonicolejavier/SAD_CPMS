@extends('layout.maintenanceLayout')

@section('title')
Type of Contract
@endsection

@section('content')	
<div class="row">
    <div class="col s12 push-s1">
        <div class="container grey lighten-2 z-depth-2" style="border-radius: 10px; margin-top:40px;">
<!--            <div class="row">-->
                <div class="col s6 push-s1" style="margin-top:-15px;">
                    <h2 class="blue-text">Type of Contract</h2>
                </div>

                <div class="col s3 offset-s3">
                    <button style="margin-top: 30px;" id="btnAdd" class=" z-depth-2 btn-large green modal-trigger" href="#modalcontracttypeAdd">
                        <i class="material-icons left">add</i> ADD
                    </button>
                </div>
<!--            </div>-->
        
            <div class="row">
                <div class="col s12" style="margin-top:-20px;">
                    <table class="highlight white" style="border-radius:10px;" id="dataTable">

                        <thead>
                            <tr>
                                <th style="width:50px;"></th>
                                <th style="width:50px;"></th>
								<th style="width:50px;"></th>
                                <th>ID</th>
                                <th>Type of Contract</th>
								<th>Description</th>
								<th>Duration</th>
                                
                            </tr>
                        </thead>

                        <tbody>
                           @foreach ($typeOfContracts as $typeOfContract)
                                <tr>
                                    
									<td> 
                                        <div class="switch" style="margin-right: -80px;">
                                        <label>
                                            
                                            @if ($typeOfContract->boolFlag==1)
                                            <input type="checkbox" checked class = "checkboxFlag" id = "{{ $typeOfContract->intTypeOfContractID }}">
                                            @else
                                            <input type="checkbox" class = "checkboxFlag" id = "{{ $typeOfContract->intTypeOfContractID }}" >
                                            @endif
                                            <span class="lever"></span>
                                            
                                        </label>
                                        </div>
                                    </td>
									
									
									
									<td>
                                        <button class="buttonUpdate btn"  name="" id="{{ $typeOfContract->intTypeOfContractID }}">
                                            <i class="material-icons">edit</i>
                                        </button>
                                    <label for="{{ $typeOfContract->intTypeOfContractID }}"></label>
                                    </td>

                                    <td>
                                        <button class="buttonDelete btn red" id="{{ $typeOfContract->intTypeOfContractID }}">
                                            <i class="material-icons">delete</i>
                                        </button>
                                    </td>
                                    <td id = "id{{ $typeOfContract->intTypeOfContractID }}">{{ $typeOfContract->intTypeOfContractID }}</td>
            						
									<td id = "name{{ $typeOfContract->intTypeOfContractID }}">{{ $typeOfContract->strTypeOfContractName }}</td>
                                    
                                    <td id = "description{{ $typeOfContract->intTypeOfContractID }}">{{ $typeOfContract->strDescription }}</td>
									
									<td id = "monthDuration{{ $typeOfContract->intTypeOfContractID }}">{{ $typeOfContract->intMonthDuration }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

<!-- Modal contracttype ADD -->

<div id="modalcontracttypeAdd" class="modal modal-fixed-footer" style="overflow:hidden;">
        <div class="modal-header"><h2>Type of Contract</h2></div>
        	<div class="modal-content">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="row">
					<div class="col s6">
				
							<div class="row">
								<div class="col s10">
									<div class="input-field">
										<input  id="intContractTypeID" type="text" class="validate" name = "contractTypeID" disabled>
											<label for="intContractTypeID">Type of Contract ID</label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col s12">
									<div class="input-field">
										<input id="strContractTypeAdd" type="text" class="validate" name = "contractTypeName" required="" aria-required="true">
											<label for="strContractTypeAdd">Type of Contract</label> 
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col s12">
									<div class="input-field">
										<input id="strContractTypeDescAdd" type="text" class="validate"  name = "contractTypeDescription" required="" aria-required="true">
										<label for="strContractTypeDescAdd">Description</label> 
									</div>
								</div>
							</div>
					</div>
					<div class="col s6">
							<div class="row">
								<div class="col s8">
									<div class="input-field">
										<input id="intDurationAdd" type="text" class="validate" pattern="[0-9]{0,}" name = "" required="" aria-required="true">
										<label for="">Duration</label> 
									</div>
								</div>
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
<!-- MODAL contracttype EDIT -->
<div id="modalcontracttypeEdit" class="modal modal-fixed-footer" style="overflow:hidden;">
	<div class="modal-header"><h2>Type of Contract</h2></div>
        	<div class="modal-content">
<!--				<input type="hidden" name="_token" value="{{ csrf_token() }}">-->
					
				<div class="row">
					<div class="col s6">
				
							<div class="row">
								<div class="col s8">
									<div class="input-field">
										<input  id="editID" type="text" class="validate" name = "contractTypeID" readonly required="" aria-required="true" value = " ">
											<label for="editID">Type of Contract ID</label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col s12">
									<div class="input-field">
										<input id="editname" type="text" class="validate" name = "contractTypeName" required="" aria-required="true" value = " ">
											<label for="editname">Type of Contract</label> 
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col s12">
									<div class="input-field">
										<input id="editdescription" type="text" class="validate"  name = "contractTypeDescription" required="" aria-required="true" value = " ">
										<label for="editDescription">Description</label> 
									</div>
								</div>
							</div>
					</div>
					<div class="col s6">
							<div class="row">
								<div class="col s8">
									<div class="input-field">
										<input id="editDuration" type="text" class="validate" pattern="[0-9]{0,}" name = "" required="" aria-required="true" value = "test">
										<label for="">Duration</label> 
									</div>
								</div>
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
<!----------------------------modal delete contracttype ------------------------------>

<div id="modalcontracttypeDelete" class="modal bottom-sheet" style="height: 250px !important; overflow:hidden;">
            <div class="modal-header blue"><h2 class="white-text">Delete</h2></div>
<!--            <input type="hidden" name="_token" value="{{ csrf_token() }}">-->
            <div class="modal-content">

                <div class="row">
                    <div class="col s12">
                        <h3 class="center">Confirm Delete</h3>
                    </div>
                </div>
                <input type="hidden" name="idDelete" id = "deleteID">
                <div class="row">
                    <div class="col s3 push-s5">
                        <button class=" btn waves-effect waves-light red large" name="action" style="margin-left: 20px;" id = "btnDelete">
                            <i class="material-icons left">delete</i>Delete
                        </button>

                    </div>	
                </div>

            </div>
</div>
@stop

@section('script')
    <script type="text/javascript">
		$(document).ready(function(){
            
            $("#btnAddSave").click(function(){
                if ($('#strContractTypeAdd').val().trim() && $('#strContractTypeDescAdd').val().trim() && $('#intDurationAdd').val().trim() > 0){
                $.ajax({

                    type: "POST",
                    url: "{{action('TypeOfContractController@addTypeOfContract')}}",
                    beforeSend: function (xhr) {
                        var token = $('meta[name="csrf_token"]').attr('content');

                        if (token) {
                              return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                        }
                    },
                    data: {
                        strTypeOfContractName: $('#strContractTypeAdd').val(),
                        strDescription: $('#strContractTypeDescAdd').val(),
                        intMonthDuration: $('#intDurationAdd').val()
                    },
                    success: function(data){
                        var toastContent = $('<span>Record Added.</span>');
                        Materialize.toast(toastContent, 1500,'green', 'edit');
                        window.location.href = "{{action('TypeOfContractController@index')}}";
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
            });
            
            $("#btnUpdate").click(function(){
                if ($('#editname').val().trim() && $('#editdescription').val().trim() && $('#editDuration').val().trim()>0){
                
                    $.ajax({

                        type: "POST",
                        url: "{{action('TypeOfContractController@updateTypeOfContract')}}",
                        beforeSend: function (xhr) {
                            var token = $('meta[name="csrf_token"]').attr('content');

                            if (token) {
                                  return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                            }
                        },
                        data: {
                            editTypeOfContractID: $('#editID').val(),
                            editTypeOfContractName: $('#editname').val(),
                            editDescription: $('#editdescription').val(),
                            editMonthDuration: $('#editDuration').val()
                        },
                        success: function(data){
                            var toastContent = $('<span>Record Updated.</span>');
                            Materialize.toast(toastContent, 1500,'green', 'edit');
                            window.location.href = "{{action('TypeOfContractController@index')}}";
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
            });
            
            $("#btnDelete").click(function(){
                $.ajax({
                    type: "POST",
                    url: "{{action('TypeOfContractController@deleteTypeOfContract')}}",
                    beforeSend: function (xhr) {
                        var token = $('meta[name="csrf_token"]').attr('content');

                        if (token) {
                              return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                        }
                    },
                    data: {
                        intTypeOfContractID: deleteID.value
                    },
                    success: function(data){
                        var toastContent = $('<span>Record Deleted.</span>');
                        Materialize.toast(toastContent, 1500, 'edit');
                        window.location.href = "{{action('TypeOfContractController@index')}}";
                    },
                    error: function(data){
                        var toastContent = $('<span>Error Occur. </span>');
                        Materialize.toast(toastContent, 1500, 'edit');
                    }

                });//ajax
            });
            
            $('#dataTable').on('click', '.buttonUpdate', function(){
                $('#modalcontracttypeEdit').openModal();
                var itemID = "id" + this.id;
                var itemName = "name" + this.id;
                var itemDescription = "description" + this.id;
                var itemDescription = "monthDuration" + this.id;

                document.getElementById('editID').value = $("#"+itemID).html();
                document.getElementById('editname').value = $("#"+itemName).html();
                document.getElementById('editdescription').value = $("#"+itemDescription).html();
                document.getElementById('editDuration').value = $("#"+itemDescription).html();

            });
            
            $('#dataTable').on('click', '.buttonDelete', function(){
                $('#modalcontracttypeDelete').openModal();
                document.getElementById('deleteID').value =this.id;
            });
            
            $('#dataTable').on('click', '.checkboxFlag', function(){
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
                    url: "{{action('TypeOfContractController@flagTypeOfContract')}}",
                    beforeSend: function (xhr) {
                        var token = $('meta[name="csrf_token"]').attr('content');

                        if (token) {
                            return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                        }
                    },
                    data: {
                        intTypeOfContractID: this.id,
                        boolFlag: flag
                    },
                    success: function(data){
                        var toastContent = $('<span>Status Changed.</span>');
                        Materialize.toast(toastContent, 1500,'green', 'edit');
                    },
                    error: function(data){
                        var toastContent = $('<span>Error Occur. </span>');
                        Materialize.toast(toastContent, 1500, 'edit');
                    }
                });//ajax
            });
            
            $("#dataTable").DataTable({
                 "columns": [
                { "orderable": false },
                { "orderable": false },
                { "orderable": false },
                null,
                null,
                null,
				null
                ] ,  
                "pageLength":5,
				"lengthMenu": [5,10,15,20]
            });//data table
		});//document.ready
	</script>
@stop
		