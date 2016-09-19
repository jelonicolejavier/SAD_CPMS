@extends('layout.maintenanceLayout')

@section('title')
Rank - Query
@endsection

@section('content')
<style>
.dataTables_filter
	{
    display: none;
	}
</style>

<div class="row" style="margin-top:-30px;">


<div class="row"> 
        
    <div class="row">
 
     <div class="col s5 push-s3" style="margin-left:-2%">
    
                   <h3 class="blue-text animated fadeIn" style="font-family:Myriad Pro;margin-top:9.2%">Query - Rank</h3>
                </div>
    
    </div>
   
    </div>
    <div class="col s12 push-s1" style="margin-top:-4%;">
        <div class="container blue-grey lighten-4 z-depth-2 animated fadeIn" style="padding-left:2%; padding-right:2%;">
			<div class="row"></div>
			<div class="row">
				
				<div class="input-field col s3">
					<select>
						<option disabled selected>Choose Status</option>
						<option>Active</option>
						<option>Inactive</option>
					</select>
					<label>Status</label>
				</div>
				
				<div class="input-field col s3">
					<select>
						<option disabled selected>Choose Armed Service</option>
						<option>PNP</option>
						<option>SWAT</option>
					</select>
					<label>Armed Service</label>
				</div>
			
				<div class="input-field col s4 offset-s2 ">
					<nav style="height:55px;">
						<div class="nav-wrapper blue-grey lighten-3">
							<form>
								<div class="input-field" style="">
									<input id="mySearch" type="search" placeholder="Search" required>
									<label for="search"><i class="material-icons">search</i></label>									
								</div>
							</form>
						</div>
					</nav>
				</div>	
				
			</div>
        
            <div class="row">
                <div class="col s12" style="">
                    <table class="striped" style="border-radius:10px;" id="dataTable">						
                        <thead>
                            <tr>                                                                                                
                                <th class="blue darken-1 white-text">Rank</th>
								<th class="blue darken-1 white-text">Armed Service</th>                                
								<th class="blue darken-1 white-text">Status</th>
                                
                            </tr>
                        </thead>

                        <tbody>
							<tr>
								<td>Captain</td>
								<td>PNP</td>								
								<td>Active</td>
								
							</tr>
							
							<tr>
								<td>Major</td>
								<td>SWAT</td>								
								<td>Inactive</td>
							</tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@stop
		
@section('script')

	
<script>
$(document).ready(function(){
	$.ajax({
      type: "GET",
      url: "{{action('QueryRankController@getRank')}}",
      success: function(data){
   		console.log(data);
		var table= $('#dataTable').DataTable();
		table.clear().draw();
		var status;
		
		$.each(data,function(index,value){
			if (value.boolFlag == 1){
				status='Active';
			}
			else{
				status='Inactive';
			}
			
			table.row.add([
				'<h>' + value.strRank +  '<h>',
				'<h>' + value.strArmedServiceName + '<h>',
				'<h>' + status + '<h>'
			]).draw();
		});
	  },error: function(){
		  var toastContent = $('<span>Error Database.</span>');
          Materialize.toast(toastContent, 1500,'red', 'edit');
	  }
	});
})
</script>	
<script>
$(document).ready(function(){
		
		$("#dataTable").DataTable({
             "columns": [           
            null,
			null,
			null
            ] ,  
//		    "pagingType": "full_numbers",
			"pageLength":5,
//			"lengthMenu": [5,10,15,20],
//			"bFilter": false
			"bLengthChange": false


		});
	
	search = $('#dataTable').DataTable();
		$("#mySearch").keyup(function(){
			search.search($(this).val()).draw();
		});
});
	
</script>		
@stop
