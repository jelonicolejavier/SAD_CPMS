@extends('securityguard.SecurityGuardDashboard1')

@section('title')
Security Home
@endsection


@section('content')

<!--MESSAGE-->
<div class="row">
	<div class="col s12 l8 push-l3">
		
		  <div class="row"> 
              <div class="col s11 l12 push-l3 hide-on-small-only">
                     <h3 style="font-family:Myriad Pro;color:#34675C;font-weight:bold">ANNOUNCEMENTS</h3>
              </div>  
           </div>
        
         <div class="row"> 
              <div class="col s11 push-s1 l12 push-l3 hide-on-large-only">
                     <h4 style="font-family:Myriad Pro;color:#34675C;font-weight:bold">ANNOUNCEMENTS</h4>
              </div>  
           </div>
        
        
        <div class="row">
              <div class="col s12 l12">
                <hr>
              </div>
          </div>
          <div class="col s12 l12">
		    <div class="container-fluid grey lighten-2" style="border: 1px solid grey; margin-top:-10px;">	
				<table class="striped" id="announcementTable">
					<thead>
						<tr>
							<th class="grey lighten-1" style="width: 30px;"></th>
							<th class="grey lighten-1">Date</th>						
							<th class="grey lighten-1">Subject</th>
						</tr>
					</thead>

					<tbody>
						
					</tbody>
				</table>
			</div>
        </div>
	</div>
</div>
<!--Modal announcement content-->
<!--width:700px;max-height:100%; height:470px; margin-top:-10px;-->
<div id="modalContent" class="modal modal-fixed-footer ci" style="overflow:hidden; ">
    <div class="modal-header">
      	<div class="h">
			<h3><center>Announcement</center></h3>  
		</div>
    </div>
	
	<div class="modal-content">
		<div class="row">
			<div class="col s12">
				<ul class="collection with-header" id="collectionActive">
					<li class="collection-header"><div style="font-size:18px;" id = "strSubject">&nbsp;</div></li>
					<li class="collection-item"><p id = 'strMessage'></p>
                    </li>
				</ul>
			</div>
		</div>
	</div>
		
	<div class="modal-footer ci modal-close" style="background-color: #00293C;">
		<button class="btn green waves-effect waves-light" name="" id = "" style="margin-right: 30px;">OK
            </button>
	</div>
</div>

@stop
	
@section('script')
<script>
	
	$.ajax({
        type: "get",
        url: "{{action('AdminAnnouncementViewController@get')}}",
        success: function(data){
        	var table = $('#announcementTable').DataTable();
        	table.clear().draw(); //clear all the row

            $.each(data, function(index, value){
            	var buttonRead = '<button class="btn blue darken-4 buttonOpen" id ="'+value.intAnnouncementID+'"><i class="material-icons">keyboard_arrow_right</i></button>';

            	table.row.add([
	                buttonRead,
	                '<h id = "date'+value.intAnnouncementID+'">' + value.dateFormatedCreated +'</h>',
	                '<h id = "subject'+value.intAnnouncementID+'">' + value.strSubject +'</h>' + 
	                '<input type = "hidden" id = "message'+value.intAnnouncementID+'" value = "'+value.strMessage+'">'
	            ]).draw();
            });
        }
    });//ajax

    $('#announcementTable').on('click', '.buttonOpen', function(){
        var strMessageOpen = 'message' + this.id;
        var strSubjectOpen = 'subject' + this.id;

        $('#strMessage').text($('#' + strMessageOpen).val());
        $('#strSubject').text($('#' + strSubjectOpen).text());
        $('#modalContent').openModal();       
    });
	
	$("#announcementTable").DataTable({
             "columns": [
			{"searchable": false},
            null,
			null
            ] ,  
			"pageLength":5,
			"lengthMenu": [5,10,15,20],
			"bFilter": false,
			
		});
		
	
</script>	


@stop