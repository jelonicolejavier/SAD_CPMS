@extends('layout.maintenanceLayout')

@section('title')
Gun
@endsection

@section('content')

<div class="row">	
    
    <div class="col s12 push-s1" id="Active" >
        <div class="row" id="activeGuns">
            <div class="col s8">
                <div class="container grey lighten-2 z-depth-2" style="border-radius: 10px; margin-top:25px;">
                    <div class="col s6 push-s1">
                        <h4 class="blue-text">Guns</h4>
                    </div>
                    
                    <div class="row">
                        <div class="col s11" style="margin: -15px 25px 25px 25px;">
                            <table class="highlight white" style="border-radius:10px;" id="dataTable">
                                <thead>
                                    <tr>
                                        <th style="width:50px;"></th>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Type of Gun</th>
                                        <th>Status</th>
                                        <th style="width:50px;"></th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col s4 pull-s1" style="margin-top:25px;">	
                <ul class="collection with-header" id="collectionActive">
                    <li class="collection-header" style="opacity:0;"><h5 style="font-weight:bold;">Details</h5></li>
                    
                    <div style="visibility:hidden;" id="detailcontainer">
                        <li class="collection-item" style="font-weight:bold; opacity:0;">Manufacturer:<div style="font-weight:normal;" id = "manufacturer">&nbsp;&nbsp;&nbsp;</div>
                        </li>
                        <li class="collection-item" style="font-weight:bold; opacity:0;">Serial Number:<div style="font-weight:normal;" id = "serialNumber">&nbsp;&nbsp;&nbsp;</div>
                        </li>
                        <li class="collection-header" style="font-weight:bold; opacity:0;"><h5 style="font-weight:bold;">License</h5>
                        </li>
                        <li class="collection-item" style="font-weight:bold; opacity:0;">License Number:<div style="font-weight:normal;" id = 'licenseNumber'>&nbsp;&nbsp;&nbsp;</div>
                        </li>
                        <li class="collection-item" style="font-weight:bold; opacity:0;">Date Issued:<div style="font-weight:normal;" id = "issued">&nbsp;&nbsp;&nbsp;</div>
                        </li>
                        <li class="collection-item" style="font-weight:bold; opacity:0;">Date Expired:<div style="font-weight:normal;" id ="expiration">&nbsp;&nbsp;&nbsp;</div>
                        </li>
                    </div>
                </ul>
            </div>
        </div>
    </div>

    
    
    
</div>

@stop
	
@section('script')


<script type="text/javascript">
	$(document).ready(function(){
        $('ul.tabs').tabs();
        
        $("#dataTable").DataTable({
             "columns": [
            { "orderable": false },
            { "orderable": false },
            null,
            null,
			null,
			{ "orderable": false }
            ] ,  
            "pageLength":5,
			"lengthMenu": [5,10,15,20]
        });
        
        $.ajax({

            type: "GET",
            url: "{{action('GunViewController@getGuns')}}",
            beforeSend: function (xhr) {
                var token = $('meta[name="csrf_token"]').attr('content');

                if (token) {
                      return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                }
            },
            success: function(data){
                var table = $('#dataTable').DataTable();
                table.clear().draw();
                $.each(data, function(index, value) {
                    var onclick = "Materialize.showStaggeredList('#collectionActive')";
                    var btnMore = '<button class="btn blue col s12 buttonMore" id = "' + value.intGunID + '" onclick="' + onclick + '" >MORE</button>';
                    console.log(data);
                    var status;
                    if (value.boolFlag == 0){
                        status = 'Defective';
                    }else if (value.boolFlag == 1){
                        status = 'Inventory';
                    }else if (value.boolFlag == 2){
                        status = 'Deployed';
                    }
                    
                    table.row.add([
                        '<button class="btnEdit btn col s12" id="' + value.intGunID+'" ><i class="material-icons">edit</i></button><label for="' +value.intGunID+'"></label>',
                        '<h id = "id' +value.intGunID + '">' + value.intGunID +'</h>',
                        '<h id = "name' +value.intGunID + '">' + value.strGunName +'</h>',
                        '<h id = "type' +value.intGunID + '">' + value.strTypeOfGun +'</h>',
                        '<h id = "status' +value.intGunID + '">' + status +'</h>',
                        btnMore
                    ]).draw();
                });//foreach
            }
        });//get guard waiting
        
        $('#dataTable').on('click', '.buttonMore', function(){
            
            $('#detailcontainer').css({
                'visibility': 'visible',
                'height': '400px'
            });
            $.ajax({

                type: "GET",
                url: "/gunView/get/gun?gunID=" + this.id,
                beforeSend: function (xhr) {
                    var token = $('meta[name="csrf_token"]').attr('content');

                    if (token) {
                          return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                    }
                },
                success: function(data){
                    $('#manufacturer').text(data.strMaker);
                    $('#serialNumber').text(data.strSerialNumber);
                    $('#licenseNumber').text(data.strLicenseNumber);
                    $('#issued').text(data.dateIssued);
                    $('#expiration').text(data.dateExpiration);
                    
                }
            });//get guard waiting
        });
    });
    
</script>
@stop