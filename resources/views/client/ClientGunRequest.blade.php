@extends('client.ClientDashboard')
@section('title')
Client Request of Gun
@endsection

@section('content')

<!-- Table Start -->
	<div class="row" style="margin-top:-30px;">
		<div class="col s12 l5 push-l3">
			<h3 class="blue-text animated fadeIn" style="font-family:Myriad Pro;margin-top:9.2%">Guns</h3>
		</div>

		<div class="row"></div>
		<div class="row"></div>

		<div class="col s12 l12 push-l1" style="margin-top:-4%">
			<div class="container white lighten-2 z-depth-2 animated fadeIn" style="padding-left:2%; padding-right:2%;">
				<div class="row">
					<div class="col s3 offset-s3">
						<button style="margin-top: 30px;" id="btnAddGun" class=" tooltipped z-depth-1 btn green" data-position="bottom" data-delay="50" data-tooltip="Gun Details">
							<i class="material-icons">add</i>
						</button>
					</div>
					<div class="col s3 pull-s1">
						<button style="margin-top: 30px;" id="btnReplaceGun" class="tooltipped z-depth-1 btn blue" data-position="bottom" data-delay="50" data-tooltip="Replace Guns">
							<i class="material-icons">swap_horiz</i>
						</button>
					</div>
					<div class="col s3 pull-s2">
						<button style="margin-top: 30px;" id="btnRemoveGun" class="tooltipped z-depth-1 btn red" data-position="bottom" data-delay="50" data-tooltip="Remove Guns">
							<i class="material-icons">close</i>
						</button>
					</div>
				</div>

				<div class="row"></div>

				<div class="row">
					<div class="col s12 l12">
					<table class="striped white" style="border-radius:10px;" id="tableGun">
						<thead class="hide-on-med-and-down">
							<tr>                                                                
								<th class="blue darken-3 white-text"></th>
								<th class="blue darken-3 white-text"></th>
								<th class="blue darken-3 white-text">License Number</th>
								<th class="blue darken-3 white-text">Serial Number</th>
								<th class="blue darken-3 white-text">Name</th>
								<th class="blue darken-3 white-text">Rounds</th>
							</tr>
                        </thead>
                        <thead class="hide-on-med-and-up" style="font-size:8px">
                            <tr>                                                                
								<th class="blue darken-3 white-text"></th>
								<th class="blue darken-3 white-text"></th>
								<th class="blue darken-3 white-text">License Number</th>
								<th class="blue darken-3 white-text">Serial Number</th>
								<th class="blue darken-3 white-text">Name</th>
								<th class="blue darken-3 white-text">Rounds</th>
							</tr>
						</thead>
						<tbody>
						</tbody>
					</table>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- Table End -->


<!--modal gun add request-->
	<div id="modalgunAdd" class="modal modal-fixed-footer ci" style="overflow:hidden; width:40% !important; margin-top:50px !important;  max-height:100% !important; height:425px !important; border-radius:10px;">      
		<div class="modal-header">
			<div class="h">
				<h3><center>Request Additional Guns</center></h3>  
			</div>
		</div>
		<div class="modal-content">
			<div class="row">
				<div class="col s10 push-s1" style="margin-top:-30px;">      
					<div class="row"></div>  
					<div class="input-field col s12">
						<i class="material-icons prefix" style="font-size:35px;">security</i>
						<input id="intAddGun" type="number" class="validate" name = "" required="" aria-required="true" min="1" value="1">
						<label for="">Number of Guns</label> 
					</div>
				</div>
				<div class="col s10 push-s1" style="margin-top:-30px;">      
					<div class="row"></div>
					<div class="row"></div>
					 <div class="input-field col s12">
						 <i class="material-icons prefix" style="font-size:35px;">announcement</i>
						 <textarea  class="materialize-textarea" id="strAddRequest" type="text"  ></textarea>
						 <label for="input_text">Note</label> 
						 
					 </div>
				</div>
				
			</div>
		</div>
		<div class="modal-footer" style="background-color: #00293C;">
			<button class="btn large waves-effect waves-light" name="action" style="margin-right: 30px;" id = "btnSendAddGunRequest">Send
				<i class="material-icons right">send</i>
			</button>
		</div>	
	</div>
<!--modal gun add request end-->


<!--modal gun details-->
	<div id="modalgunDetails" class="modal modal-fixed-footer ci" style="overflow:hidden; width:40% !important; margin-top:50px !important;  max-height:100% !important; height:450px !important; border-radius:10px;">      
		<div class="modal-header">
			<div class="h">
				<h3><center>Gun Details</center></h3>  
			</div>
		</div>
		<div class="modal-content">
			<div class="row">
				
				<div class="col s12" style="margin-top:-30px;">      
					<ul class="collection with-header" id="collectionActive" >
						<div >
								
						<li class="collection-item" style="font-weight:bold;">
							
							<div class="row">
								<div class="col s6">
									Type of Gun:<div style="font-weight:normal;" id = 'gunType'>&nbsp;&nbsp;&nbsp;</div>
								</div>
								
								<div class="col s6">
									Serial Number:<div style="font-weight:normal;" id = 'serialNumber'>&nbsp;&nbsp;&nbsp;</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col s6">
									Name:<div style="font-weight:normal;" id = 'gunName'>&nbsp;&nbsp;&nbsp;</div>
								</div>
								
								<div class="col s6">
									Manufacturer:<div style="font-weight:normal;" id = 'manufacturer'>&nbsp;&nbsp;&nbsp;</div>
								</div>
							</div>																		
							
						</li>
						
						<li class="collection-item grey lighten-1" style="font-weight:bold;">
							<div class="row">
								<div class="col s12">	
									License Number:<div style="font-weight:normal;" id = 'licenseNumber'>&nbsp;&nbsp;&nbsp;</div>
								</div>														
															
							</div>	
							
							<div class="row">
								<div class="col s6">	
									Date Issued:<div style="font-weight:normal;" id = 'dateStart'>&nbsp;&nbsp;&nbsp;</div>
								</div>
								
								<div class="col s6">	
									Date Expired:<div style="font-weight:normal;" id = 'dateEnd'>&nbsp;&nbsp;&nbsp;</div>
								</div>
							</div>
						</li>
	                                      
					</div>
					</ul>
				</div>
				
			</div>
		</div>
		<div class="modal-footer" style="background-color: #00293C;">
			<button class="btn large green  modal-close" name="action" style="margin-right: 30px;" id = "">OK		
			</button>
		</div>	
	</div>
<!--modal gun details end-->


<!--modal gun swap request-->
	<div id="modalgunSwap" class="modal modal-fixed-footer ci" style="overflow:hidden; width:40% !important; margin-top:50px !important;  max-height:100% !important; height:360px !important; border-radius:10px;">      
		<div class="modal-header">
			<div class="h">
				<h3><center>Gun Replacement</center></h3>  
			</div>
		</div>
		<div class="modal-content">
			<div class="row">
				
				<div class="col s10 push-s1" style="margin-top:-30px;">      
					
					<div class="row"></div>
					 <div class="input-field col s12">
						 <i class="material-icons prefix" style="font-size:35px;">announcement</i>
						 <textarea  class="materialize-textarea" id="strSwapNote" type="text"  placeholder=" "></textarea>
						 <label for="input_text">Note</label> 
						 
					 </div>
				</div>
				
			</div>
		</div>
		<div class="modal-footer" style="background-color: #00293C;">
			<button class="btn large waves-effect waves-light" name="action" style="margin-right: 30px;" id = "btnReplaceGunProceed">Send
				<i class="material-icons right">send</i>
			</button>
		</div>	
	</div>
<!--modal gun swap request end-->


<!--modal gun removal request-->
	<div id="modalgunDelete" class="modal modal-fixed-footer ci" style="overflow:hidden; width:40% !important; margin-top:50px !important;  max-height:100% !important; height:360px !important; border-radius:10px;">      
		<div class="modal-header">
			<div class="h">
				<h3><center>Gun Removal</center></h3>  
			</div>
		</div>
		<div class="modal-content">
			<div class="row">
				
				<div class="col s10 push-s1" style="margin-top:-30px;">      
					
					<div class="row"></div>
					 <div class="input-field col s12">
						 <i class="material-icons prefix" style="font-size:35px;">announcement</i>
						 <textarea  class="materialize-textarea" id="strRemoveNote" type="text"  placeholder=" "></textarea>
						 <label for="input_text">Reason</label> 
						 
					 </div>
				</div>
				
			</div>
		</div>
		<div class="modal-footer" style="background-color: #00293C;">
			<button class="btn large waves-effect waves-light" name="action" style="margin-right: 30px;" id = "btnRemoveGunProceed">Send
				<i class="material-icons right">send</i>
			</button>
		</div>	
	</div>
<!--modal gun removal request end-->

@stop

@section('script')

<!-- Additional Gun Request  -->
	<script>
		$(document).ready(function(){
			$('#btnAddGun').click(function(){
				$('#modalgunAdd').openModal();
				$('#strAddRequest').val('');
				$('intAddGun').val('1');
			});

			$('#btnSendAddGunRequest').click(function(){
				if (checkInput()){
					$.ajax({
		        type: "POST",
		        url: "{{action('ClientGunRequestController@insertAddGunRequest')}}",
		        beforeSend: function (xhr) {
		            var token = $('meta[name="csrf_token"]').attr('content');

		            if (token) {
		                  return xhr.setRequestHeader('X-CSRF-TOKEN', token);
		            }
		        },
		        data: {
		        	intCountGun: $('#intAddGun').val(),
							strRequest: $('#strAddRequest').val().trim()
		        },
		        success: function(data){
		        	swal({
								title: "Success!",
								text: "Additional Gun Request Sent!",
								type: "success"
							},function(){
								$('#modalgunAdd').closeModal();
							});
		        },
		        error: function(data){
							var toastContent = $('<span>Error Database.</span>');
							Materialize.toast(toastContent, 1500,'red', 'edit');
		        }
		    	});//ajax
				} 
			});

			function checkInput(){
				var request = $('#strAddRequest').val().trim();
				var intAddGun = $('#intAddGun').val();

				if (!Math.floor(intAddGun) || !$.isNumeric(intAddGun) || intAddGun <= 0 || intAddGun > 20 || request == ''){
					var toastContent = $('<span>Check Your Input. </span>');
					Materialize.toast(toastContent, 1500,'red', 'edit');
					return false;
				}else{
					return true;
				}
			}
		});
	</script>
<!-- Additional Gun Request  -->

<!-- Replacement/Remove Gun Request -->
	<script>
	$(document).ready(function(){
		var activeGun;
		var checkedGun = [];

		//Replace Gun Request
			$.ajax({
		    type: "GET",
		    url: "{{action('ClientGunRequestController@getActiveGun')}}",
		    success: function(data){
		    	activeGun = data;
		    },
		    error: function(data){
					var toastContent = $('<span>Error Database.</span>');
					Materialize.toast(toastContent, 1500,'red', 'edit');
		    }
		  });//get active gun

			$('#btnReplaceGun').click(function(){
				setGunChecked();
				if (!hasPendingRequest() && hasCheckedGun()){
					$('#modalgunSwap').openModal();
				}
			});

			$('#btnReplaceGunProceed').click(function(){
				var strNote = $('#strSwapNote').val().trim();
				if (strNote != ''){
					$.ajax({
		        type: "POST",
		        url: "{{action('ClientGunRequestController@insertSwapGunRequest')}}",
		        beforeSend: function (xhr) {
		            var token = $('meta[name="csrf_token"]').attr('content');

		            if (token) {
		                  return xhr.setRequestHeader('X-CSRF-TOKEN', token);
		            }
		        },
		        data: {
		        	arrCheckedGun: checkedGun,
		        	strNote: strNote,
		        },
		        success: function(data){
		        	swal({
								title: "Success!",
								text: "Swap Gun Request Sent!",
								type: "success"
							},
								function(){
								window.location.href = '{{ URL::to("/clientgunrequest") }}';
							});

		        },
		        error: function(data){
		 					var toastContent = $('<span>Error Database.</span>');
							Materialize.toast(toastContent, 1500,'red', 'edit');

		        }
		    	});//ajax
				}else{
					var toastContent = $('<span>Check your input.</span>');
					Materialize.toast(toastContent, 1500,'red', 'edit');
				}
			});

			function setGunChecked(){
				checkedGun = [];
				$.each(activeGun, function(index, value){
					if ($('#checkbox' + value.intGunID).is(':checked')){
						checkedGun.push(value.intGunID);
					}
				});
			}

			function hasCheckedGun(){
				if (checkedGun.length > 0){
					return true;
				}else{
					var toastContent = $('<span>Please Select Gun.</span>');
					Materialize.toast(toastContent, 1500,'red', 'edit');
					return false;
				}
			}

			function hasPendingRequest(){
				var checker;
				$.ajax({
		      type: "GET",
		      url: "{{action('ClientGunRequestController@hasSwapGunRequest')}}",
		      success: function(data){
		      	checker = data;
		      	if (checker){
		      		var toastContent = $('<span>You still have pending request.</span>');
							Materialize.toast(toastContent, 1500,'red', 'edit');
		      	}
		      },
		      error: function(data){
							var toastContent = $('<span>Error Database.</span>');
						Materialize.toast(toastContent, 1500,'red', 'edit');

		      },async:false
		  	});//ajax
		  	return checker;
			}
		//Replace Gun Request

		//Remove Gun Request
			$('#btnRemoveGun').click(function(){
				setGunChecked();
				if(!hasPendingRequest() && hasCheckedGun()){
					$('#modalgunDelete').openModal();	
				}
			});

			$('#btnRemoveGunProceed').click(function(){
				var strNote = $('#strRemoveNote').val().trim();
				if (strNote != ''){
					$.ajax({
		        type: "POST",
		        url: "{{action('ClientGunRequestController@insertRemoveGunRequest')}}",
		        beforeSend: function (xhr) {
		            var token = $('meta[name="csrf_token"]').attr('content');

		            if (token) {
		                  return xhr.setRequestHeader('X-CSRF-TOKEN', token);
		            }
		        },
		        data: {
		        	arrCheckedGun: checkedGun,
		        	strNote: strNote,
		        },
		        success: function(data){
		        	swal({
								title: "Success!",
								text: "Swap Gun Request Sent!",
								type: "success"
							},
								function(){
								window.location.href = '{{ URL::to("/clientgunrequest") }}';
							});

		        },
		        error: function(data){
		 					var toastContent = $('<span>Error Database.</span>');
							Materialize.toast(toastContent, 1500,'red', 'edit');

		        }
		    	});//ajax
				}else{
					var toastContent = $('<span>Check your input.</span>');
					Materialize.toast(toastContent, 1500,'red', 'edit');
				}
			});
		//Remove Gun Request

	});
	</script>
<!-- Replacement/Remove Gun Request -->

<!-- Get Active Gun -->
	<script>
		$(document).ready(function(){
			$.ajax({
		    type: "GET",
		    url: "{{action('ClientGunRequestController@getActiveGun')}}",
		    success: function(data){
		    	if (data){
		    		var table = $('#tableGun').DataTable();
		      	table.clear().draw();
		      	$.each(data, function(index, value){
		      		
		      		var buttonMore = '<button data-position="bottom" data-delay="50" data-tooltip="Gun Details" class="tooltipped buttonMore btn col s12" id="'+value.intGunID+'"><i class="material-icons">security</i></button>';
		      		var checkbox = '<input type="checkbox" id="checkbox'+value.intGunID+'" value = "'+value.intGunID+'"><label for="checkbox'+value.intGunID+'"></label>'
		      		var licenseNumber = '<h>'+value.strLicenseNumber+'</h>';
		      		var serialNumber = '<h>'+value.strSerialNumber+'</h>';
		      		var name = '<h>'+value.strGunName+'</h>';
		      		var rounds = '<h>'+value.intRound+'</h>';
		      		
		      		table.row.add([
		      			checkbox,
		      			buttonMore,
		      			licenseNumber,
		      			serialNumber,
		      			name,
		      			rounds
		      		]).draw();
		      	});//foreach
		    	}
		    },
		    error: function(data){
					var toastContent = $('<span>Error Database.</span>');
					Materialize.toast(toastContent, 1500,'red', 'edit');
		    }
		  });//refresh table

			$('#tableGun').on('click', '.buttonMore',function(){
				var id = this.id;
				$.ajax({
		      type: "GET",
		      url: "/gunView/get/gun?gunID=" + id,
		      success: function(data){
		      	
		      	var dateIssued = new Date(data.dateIssued);
		      	var dateExpiration = new Date(data.dateExpiration);
		      	
		      	$('#gunType').text(data.strTypeOfGun);
		      	$('#serialNumber').text(data.strSerialNumber);
		      	$('#gunName').text(data.strGunName);
		      	$('#manufacturer').text(data.strMaker);
		      	$('#licenseNumber').text(data.strLicenseNumber);
		      	$('#dateStart').text(moment(dateIssued).format('MMMM D YYYY'));
		      	$('#dateEnd').text(moment(dateExpiration).format('MMMM D YYYY'));

		      	$('#modalgunDetails').openModal();
		      },
		      error: function(data){
						var toastContent = $('<span>Error Database.</span>');
						Materialize.toast(toastContent, 1500,'red', 'edit');
		      }
		  	});//ajax
				

			});
		});
	</script>
<!-- Get Active Gun -->

<script>
  $(document).ready(function(){
    $('.slider').slider({full_width: true});
  });
	
	$("#tableGun").DataTable({
         "columns": [		
		{"orderable": false},
		{"orderable": false},
        null,
        null,
				null,
				null
        ] ,  
		"pageLength":5,
		"lengthMenu": [5,10,15,20],
		
	});
</script>
@stop
