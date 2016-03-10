@extends('layout.maintenanceLayout')

@section('title')
Type of Gun
@endsection

@section('content')

	<!-- ADD EDIT DELETE BUTTON-->
		<div class="row">
			<div class="col s12">	
				<div class="col s4 offset-s3">
					<h1 class="colortitle blue-text text-darken-3">Type of Gun</h1>
				</div>
				<div class="col s2 offset-s2">
					<button style="margin-top: 30px;" id="btnAdd" class="z-depth-2 btn-large waves-effect waves-light green hide-on-med-and-down modal-trigger" href="#modalguntypeAdd"><i class="material-icons left">add</i> ADD</button></br></br>
				</div>

</div></div>

<!-- TABLE -->

	 <div class="row">
        
        	<div class="col s10 push-s2">
            	<div class="scroll z-depth-2" style=" border-radius: 10px; margin: 5%; margin-top:-20px;">
					
				<table class="highlight white" style="border-radius: 10px; margin-top: -8%;" id="dataTable">
                	<div class="right-align">
                 		<div class="fixed-action-btn horizontal click-to-toggle">
    						<button class="btn-floating btn-large green hide-on-large-only waves-effect waves-light modal-trigger" href="#modalguntypeAdd">
      							<i class="material-icons">add</i>
    						</button>

  						</div>
					</div>
           	<thead>
                    <tr>
						<th></th>
						<th></th>
						<th></th>
					
              			<th data-field="id">ID</th>
              			<th data-field="name">Gun</th>
              			<th data-field="number">Description</th>
						
                    </tr>
			</thead>
            
           <tbody>
			   @foreach ($typeOfGuns as $typeOfGun)
          			<tr>
						
						
						<td> 
						  <div class="switch" style="margin-right: -100px;">
							<label>
							  Deactivate
							  <input type="checkbox">
							  <span class="lever"></span>
							  Activate
							</label>
						  </div>
						</td>
						
            			<td><button class="buttonUpdate btn modal-trigger"  name="typeofGun" id="{{ $typeOfGun->intTypeOfGunID }}" 
            				onclick="radioClicked('{{$typeOfGun->intTypeOfGunID}}','{{$typeOfGun->strTypeOfGun}}', '{{$typeOfGun->strDescription}}')" href="#modalguntypeEdit" style="margin-left:20px;"><i class="material-icons">edit</i></button>
            			<label for="{{ $typeOfGun->intTypeOfGunID }}"></label> </td>
						
						<td><button class="btn red" style="margin-left:-90px;"><i class="material-icons">delete</i></button></td>
						

						<td><div style="margin-right:40px;">{{ $typeOfGun->intTypeOfGunID }}</div></td>
						<td><div style="margin-right:40px;">{{ $typeOfGun->strTypeOfGun }}</div></td>
            			<td>{{ $typeOfGun->strDescription }}</td>	
          			</tr>
          		@endforeach
          
        </tbody>
				</table>
				
				</div>
				<!-- Pagination -->
				</div>
				
			
			
			</br></br></br></br></br>

</div>
				


<!-- Modal Type of Gun ADD -->

<div id="modalguntypeAdd" class="modal modal-fixed-footer" style="overflow:hidden;">
        <div class="modal-header"><h2>Type of Gun</h2></div>
        	<div class="modal-content">
				<form action = "{{ route('typeOfGunAdd') }}" method = "post">
							
								<input  id="intTypeOfGunID" type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

					<div class="row">
						<div class="col s8">
							<div class="input-field">
								<input  id="" type="text" class="validate" name = "typeOfGunID" disabled>
									<label for="">Type of Gun ID</label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col s5">
							<div class="input-field">
								<input id="" type="text" class="validate" name = "typeOfGun" required="" aria-required="true">
									<label for="">Type of Gun</label> 
							</div>
						</div>
					</div>
					
						<div class="row">
							<div class="col s5">
								<div class="input-field">
									<input id="strTypeOfGunDescription" type="text" class="validate"  name = "typeOfGunDescription" required="" aria-required="true">
										<label for="strTypeOfGunDescription">Description</label> 
								</div>
							</div>
						</div></div>	
	<!-- Modal Button Save -->
				
		<div class="modal-footer">
			<button class="btn waves-effect waves-light" type="submit" name="action" style="margin-right: 30px;">Save
    			<i class="material-icons right">send</i>
  			</button>
    	</div>
    		</div>
				</form>
		</div>

<!-- MODAL Type of Gun EDIT -->
<div id="modalguntypeEdit" class="modal modal-fixed-footer" style="overflow:hidden;">
	<div class="modal-header"><h2>Type of Gun</h2></div>
        	<div class="modal-content">
				<form action = "{{ route('typeOfGunUpdate') }}" method = "post">
					<input  id="" type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
					
					<div class="row">
						<div class="col s8">
							<div class="input-field">
								<input  id="editID" type="text" class="validate" name = "typeOfGunID" readonly required="" aria-required="true" value = "test">
									<label for="editID">Type of Gun ID</label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col s5">
							<div class="input-field">
								<input id="editname" type="text" class="validate" name = "typeOfGun" required="" aria-required="true" value = "test">
									<label for="editname">Type of Gun</label> 
							</div>
						</div>
					</div>
					
						<div class="row">
							<div class="col s5">
								<div class="input-field">
									<input id="editdescription" type="text" class="validate"  name = "typeOfGunDescription" required="" aria-required="true" value = "test">
										<label for="strTypeOfGunDescription">Description</label> 
								</div>
							</div>
						</div>	</div>
						
      
	<!-- Modal Button Save -->
				<input id = "okayCancel"type="hidden" name="okayCancelChecker" value="">
		<div class="modal-footer">
			
			
			<button class="btn waves-effect waves-light" type="submit" name="action1" style="margin-right: 30px;">Update
    			<i class="material-icons right">send</i>
  			</button>
			
    	</div>
    		</div>
				</form>
</div>
</div>
	

	
	
	

@stop

@section('script')


<script type="text/javascript">
function radioClicked(strID, strName, strDescription){
	
	document.getElementById('editID').value = strID;
	document.getElementById('editname').value = strName;
	document.getElementById('editdescription').value = strDescription;
}

$(document).ready(function(){
    $('#dataTable').DataTable({
     "columns": [
            { "orderable": false },
            { "orderable": false },
            { "orderable": false },
            null,
            null,
            null
            ] ,  
//		    "pagingType": "full_numbers",
			"pageLength":5,
});
    });
</script>
@stop