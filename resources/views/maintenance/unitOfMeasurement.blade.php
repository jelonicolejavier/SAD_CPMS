@extends('layout.maintenanceLayout')

@section('title')
Unit of Measurement
@endsection

@section('content')	
<style>
.dataTables_filter {
    display: none;
}
</style>

<div class="row" style="margin-top:-30px;">


<div class="row"> 
        
    <div class="row">
 
     <div class="col s5 push-s3" style="margin-left:-2%">
    
                   <h3 class="blue-text animated fadeIn" style="font-family:Myriad Pro;margin-top:9.2%">Unit of Measurement</h3>
                </div>
    
    </div>
   
    </div>
    <div class="col s12 push-s1" style="margin-top:-4%">
        <div class="container blue-grey lighten-4 z-depth-2 animated fadeIn" style="padding-left:2%; padding-right:2%;">
            <div class="row">
              
                <div class="col s3">
                    <button style="margin-top: 20px;" id="btnAdd" class=" z-depth-1 btn-large green modal-trigger" href="#modaluomAdd">
                        <i class="material-icons left">add</i> ADD
                    </button>
                </div>
			
				<div class="input-field col s4 offset-s5">
					<nav style="height:55px;">
						<div class="nav-wrapper blue-grey lighten-3">
							<form>
								<div class="input-field" style="z-index:1000;">
									<input id="mySearch" type="search" placeholder="Search" required>
									<label for="search"><i class="material-icons">search</i></label>									
								</div>
							</form>
						</div>
					</nav>
				</div>
            </div>
            
            <div class="row">
                <div class="col s12" style="margin-top:">
                    <table class="striped white" style="border-radius:10px;" id="dataTable">
                        <thead>
                            <tr >
                                <th style="width:50px;" class="blue darken-3 white-text"></th>
                                <th style="width:50px;" class="blue darken-3 white-text">Actions</th>
                                <th style="width:50px;" class="blue darken-3 white-text"></th>
                                <th class="blue darken-3 white-text">ID</th>
								<th class="blue darken-3 white-text">Unit of Measurement</th>
                                
                            </tr>
                        </thead>
                        
                        <tbody>
                           @foreach ($measurements as $measurement)
                                <tr>
                                    <td> 
                                        <div class="switch" style="margin-right: -80px;">
                                        <label>
                                            @if ($measurement->boolFlag==1)
                                                <input type="checkbox" checked class = "checkboxFlag" id = "{{ $measurement->intMeasurementID }}">
                                            @else
                                                <input type="checkbox" class = "checkboxFlag" id = "{{ $measurement->intMeasurementID }}" >
                                            @endif
                                            <span class="lever"></span>
                                        </label>
                                        </div>
                                    </td>
                                    
                                    <td>
                                        <button class="buttonUpdate btn col s12" id="{{ $measurement->intMeasurementID }}" >
                                            <i class="material-icons">edit</i>
                                        </button>
                                        <label for="{{ $measurement->intMeasurementID }}"></label>
                                    </td>
                                    
                                    <td>
                                        <button class="buttonDelete btn red col s12" id="{{ $measurement->intMeasurementID }}">
                                            <i class="material-icons">delete</i>
                                        </button>
                                    </td>
                                    
                                    <td id = "id{{ $measurement->intMeasurementID }}">{{ $measurement->intMeasurementID }}</td>
                                    <td id = "name{{ $measurement->intMeasurementID }}">{{ $measurement->strMeasurement }}</td>
                                    
                                </tr>
                           @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-----------------------------------------------------------modal start-------------------------->
<div id="modaluomAdd" class="modal modal-fixed-footer ci" style="overflow:hidden; width:40% !important; margin-top:100px !important;  max-height:100% !important; height:250px !important; border-radius:10px;">
        
        <div class="modal-header">
                <div class="h">
                    <h3><center>Unit of Measurement</center></h3>  
				</div>

        </div>
         
    
    <div class="modal-content">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">


                    <div class="row">
                                               
                                  <div class="col s10 push-s1" style="margin-top:-30px;">      
                                            
                                        <div class="row"></div>  
                                        <div class="input-field col s12">
											<i class="mdi-content-sort prefix" style="font-size:35px;"></i>
                            				<input id="addMeasurement" type="text" class="validate" required="" aria-required="true">
                                        	<label for="">Unit of Measurement</label> 

                                        </div>
                                  </div>
                            
                        </div>
	
    		 
                					
	<!-- Modal Button Save -->
 
        </div>
    
    <div class="modal-footer" style="background-color: #00293C;">
            
                     <button class="btn large waves-effect waves-light" name="action" style="margin-right: 30px;font-size:1.5rem" id = "btnAddSave">Save
                       <i class="material-icons right">send</i>
                     </button>
    </div>
</div>
<!-----------------------------------------------------------modal start-------------------------->
<div id="modaluomEdit" class="modal modal-fixed-footer ci" style="overflow:hidden; width:40% !important; margin-top:100px !important;  max-height:100% !important; height:300px !important; border-radius:10px;">
        
        <div class="modal-header">
                <div class="h">
                    <h3><center>Armed Service</center></h3>  
				</div>

        </div>
         
    
    <div class="modal-content">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">


                    <div class="row">
                                               
                                <div class="col s10 push-s1" style="margin-top:-30px;">      
                                            
                                        <div class="row"></div>  
                                        <div class="input-field col s5">
											<input  id="editID" type="text" class="validate blue-text center" name = "cityID" readonly required="" aria-required="true" value = "1">
                                        	<label for="editID">ID</label> 

                                        </div>
                                  </div>  
						
								<div class="col s10 push-s1" style="margin-top:-30px;">      
                                            
                                        <div class="row"></div>  
                                        <div class="input-field col s12">
											<i class="mdi-action-tab prefix" style="font-size:35px;"></i>
                            				<input id="editname" type="text" class="validate" name = "city" required="" aria-required="true" value = "Height">
											<label for="editname">Unit Of Measurement</label> 

                                        </div>
                                  </div>
                            
                        </div>
	
    		 
                					
	<!-- Modal Button Save -->
 
        </div>
    
    <div class="modal-footer" style="background-color:#00293C !important;">
        <button class="btn waves-effect waves-light" name="action1" style="margin-right: 30px;" id = "btnUpdate">Update
            <i class="material-icons right">send</i>
        </button>
    </div>
</div>
<!-----------------------------------------------------------modal end-------------------------->

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
			"bLengthChange": false
		});
		
		search = $('#dataTable').DataTable();
				$("#mySearch").keyup(function(){
				search.search($(this).val()).draw();
			});
        
        $('#btnAddSave').click(function(){
            if ($('#addMeasurement').val().trim()){
                $.ajax({

                    type: "POST",
                    url: "{{action('UnitOfMeasurementController@create')}}",
                    beforeSend: function (xhr) {
                        var token = $('meta[name="csrf_token"]').attr('content');

                        if (token) {
                              return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                        }
                    },
                    data: {
                        measurement: $('#addMeasurement').val(),
                    },
                    success: function(data){
                        refreshTable();
                        $('#addMeasurement').val('');
                        $('#modaluomAdd').closeModal();
                        swal("Success!", "Record has been Added!", "success");
                    },
                    error: function(data){
                        var toastContent = $('<span>Error Occured. </span>');
                        Materialize.toast(toastContent, 1500,'red', 'edit');
                    }
                });//ajax
            }else{
                
            }
        });
        
        $('#btnUpdate').click(function(){
            if ($('#editID').val().trim() && $('#editname').val().trim()){
                $.ajax({

                    type: "POST",
                    url: "{{action('UnitOfMeasurementController@update')}}",
                    beforeSend: function (xhr) {
                        var token = $('meta[name="csrf_token"]').attr('content');

                        if (token) {
                              return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                        }
                    },
                    data: {
                        measurementID: $('#editID').val(),
                        measurement: $('#editname').val(),
                    },
                    success: function(data){
                        $('#modaluomEdit').closeModal();
                        swal("Success!", "Record has been Updated!", "success");
                        refreshTable();
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
        
        $('#dataTable').on('click', '.buttonUpdate', function(){
            $('#modaluomEdit').openModal();
            var itemID = "id" + this.id;
            var itemName = "name" + this.id;
            
            document.getElementById('editID').value = $("#"+itemID).html();
            document.getElementById('editname').value = $("#"+itemName).html();

        });
        
        $('#dataTable').on('click', '.buttonDelete', function(){

			var id =this.id;  
            swal({   title: "Are you sure?",   
				  	 text: "Record will be deleted!",   
				     type: "warning",   
				     showCancelButton: true,   
				     confirmButtonColor: "#DD6B55",   
				     confirmButtonText: "Yes, delete it!",   
				     closeOnConfirm: false 
				 }, 
				 function(){
					$.ajax({

                        type: "POST",
                        url: "{{action('UnitOfMeasurementController@delete')}}",
                        beforeSend: function (xhr) {
                            var token = $('meta[name="csrf_token"]').attr('content');

                            if (token) {
                                  return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                            }
                        },
                        data: {
                            measurementID: id
                        },
                        success: function(data) {
                            swal("Deleted!", "Record has been successfully deleted!", "success");

                            refreshTable();

                        },
                        error: function(data) {
                            swal("Oops", "We couldn't connect to the server!", "error");
                        }

                    });//ajax
			});
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
                url: "{{action('UnitOfMeasurementController@flag')}}",
                beforeSend: function (xhr) {
                    var token = $('meta[name="csrf_token"]').attr('content');

                    if (token) {
                        return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                    }
                },
                data: {
                    id: this.id,
                    flag: flag
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
        
        function refreshTable(){
            var dataTable = $('#dataTable').DataTable();
            dataTable.clear().draw(); //clear all the row
            $.ajax({ 
                type: 'GET', 
                url: '{{ URL::to("/maintenance/unitOfMeasurement/get") }}', 
                data: { get_param: 'value' },
                dataType: 'json',
                success: function (data) { 

                    $.each(data, function(index, element) {
                        var flag = data[index].boolFlag;

                        if (flag){
                            var checkbox = '<div class="switch" style="margin-right: -80px;"><label><input type="checkbox" checked class = "checkboxFlag" id = "'+data[index].intMeasurementID+'"><span class="lever"></span></label></div>';
                        }else{
                            var checkbox = '<div class="switch" style="margin-right: -80px;"><label><input type="checkbox" class = "checkboxFlag" id = "'+data[index].intMeasurementID+'"><span class="lever"></span></label></div>';
                        }

                        dataTable.row.add([
                            checkbox,
                            '<button class="buttonUpdate btn" name="" id="' +data[index].intMeasurementID+'" ><i class="material-icons">edit</i></button>',
                            '<button class="buttonDelete btn red" id="'+ data[index].intMeasurementID +'"><i class="material-icons">delete</i></button>',
                            '<h id = "id' +data[index].intMeasurementID + '">' + data[index].intMeasurementID +'</h>',
                            '<h id = "name' +data[index].intMeasurementID + '">' + data[index].strMeasurement +'</h>']).draw();
                    });//foreach

                    refreshTextfield();

                },
                error: function(data){
                    var toastContent = $('<span>Error Occur. </span>');
                    Materialize.toast(toastContent, 1500,'red', 'edit');
                     console.log(data);
                }
            });//ajax

        }//refresh table
	});
</script>
@stop