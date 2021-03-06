@extends('layout.tempclientLayout')

@section('title')
Temporary Client
@endsection

@section('content')	

<div class="row">
	<div class="col s12">
	<div class="col s4">
			<div class="row"></div>
			<div class="row"></div>
		
		<!-- table message -->
		<div id="message">
            <div class="container-fluid grey lighten-2 z-depth-2">    
			
						<h4 style="color:darkblue;font-family:Myriad Pro"><center>MESSAGE</center></h4>
				
                <table class="striped" id="dataTableMsg">
                    <thead>
                        <tr>
                            <th class="grey lighten-1" style="width: 20px;"></th>
                            <th class="grey lighten-1" style="width: 30px;"></th>
                            <th class="grey lighten-1">Date</th>
                            <th class="grey lighten-1">From</th>
                            <th class="grey lighten-1">Subject</th>
                        </tr>
                    </thead>

                    <tbody>
                    </tbody>
				</table>
	</div>
</div>
	
	
	</div>
    <div class="col s6">
		<div class="row"></div>
		<div class="row"></div>
        <div class="ci container grey lighten-2 z-depth-2" style="margin-left:-1%">
            	<h4 style="color:darkblue;font-family:Myriad Pro"><center>SECURITY GUARDS</center></h4>
			<div class="row">
                <div class="col s12" style="margin-top:-40px;">
                    <table class="highlight white" style="border-radius:10px;" id="dataTable">
                        <thead>
                            <tr>
								<th style="width:50px;"></th>
                                <th>License Number</th>
                                <th>Name</th>
                            </tr>
                        </thead>

                        <tbody>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class ="col s1 pull-s2" style=" margin-top:30px;">
        <div class="col s12">
            <div class="ci container-fluid grey lighten-5 z-depth-1" style="border-radius:15px;margin-left:28%;width:405px">
                <div class="blue darken-1 white-text" style="position:relative; z-index:100; width:405px; height: 38px; font-size:30px;"><center>SG Details</center></div>
                <div class="row">
                    <div class="col s12" style="overflow:scroll; overflow-x:hidden;width:400px; height:500px;">
                        <div class="card grey darken-1">
                            <div class="card-content">
                                <div>
                                    <span class = "card-title black-text" style="font-weight:bold;">Personal Data:</span>
                                </div>
                                <div>
                                    <p style="color: #eeeeee; font-size: 20px;">First Name:</p>
                                </div>
                                <div>
                                    <p style="color:#212121; font-size: 18px;" id = "firstName"></p>
                                </div>
                                <div>
                                    <p style="color: #eeeeee; font-size: 20px;">Middle Name:</p>
                                </div>
                                <div>
                                    <p style="color:#212121; font-size: 18px;" id = "middleName"></p>
                                </div>
                                <div>
                                    <p style="color: #eeeeee; font-size: 20px;">Last Name:</p>
                                </div>
                                <div>
                                    <p style="color:#212121; font-size: 18px;" id = "lastName"></p>
                                </div>
                                <div>
                                    <p style="color: #eeeeee; font-size: 20px;">License Number:</p>
                                </div>
                                <div>
                                    <p style="color:#212121; font-size: 18px;" id = "licenseNumber"></p>
                                </div>
                                <div>
                                    <p style="color: #eeeeee; font-size: 20px;">Address:</p>
                                </div>
                                <div>
                                    <p style="color:#212121; font-size: 18px;" id= "addressGuard"></p>
                                </div>
                                <div>
                                    <p style="color: #eeeeee; font-size: 20px;">Age:</p>
                                </div>
                                <div>
                                    <p style="color:#212121; font-size: 18px;" id = "age"></p>
                                </div>
                                <div>
                                    <p style="color: #eeeeee; font-size: 20px;">Gender:</p>
                                </div>
                                <div>
                                    <p style="color:#212121; font-size: 18px;" id = "gender"></p>
                                </div>
                                <div>
                                    <p style="color: #eeeeee; font-size: 20px;">Place of Birth:</p>
                                </div>
                                <div>
                                    <p style="color:#212121; font-size: 18px;" id = "placeOfBirth"></p>
                                </div>
                                <div>
                                    <p style="color: #eeeeee; font-size: 20px;">Contact Number (Mobile):</p>
                                </div>
                                <div>
                                    <p style="color:#212121; font-size: 18px;" id = "mobileNumber"></p>
                                </div>
                                <div>
                                    <p style="color: #eeeeee; font-size: 20px;">Contact Number (Landline):</p>
                                </div>
                                <div>
                                    <p style="color:#212121; font-size: 18px;" id = "landlineNumber"></p>
                                </div>
                                <div>
                                    <p style="color: #eeeeee; font-size: 20px;">Civil Status:</p>
                                </div>
                                <div>
                                    <p style="color:#212121; font-size: 18px;" id = "civilStatus"></p>
                                </div>
                                <div>
                                    <span class = "card-title black-text" style="font-weight:bold;">Body Attributes:</span>
                                </div>
                                @foreach($bodyAttributes as $bodyAttribute)
                                    <div>
                                        <p style="color: #eeeeee; font-size: 20px;" id = "bodyAttribute{{$bodyAttribute->intBodyAttributeID}}"> {{$bodyAttribute->strBodyAttributeName}} </p>
                                        <p style="color:#212121; font-size: 18px;" id = "value{{$bodyAttribute->intBodyAttributeID}}">N/A</p>
                                    </div>
                                @endforeach
                                <div>
                                    <span class = "card-title black-text" style="font-weight:bold;">Armed Services:</span>
                                </div>
                                <div>
                                    <p style="color:#eeeeee; font-size: 18px;" id = "armedService">N/A</p>
                                </div>
                                <div>
                                    <span class = "card-title black-text" style="font-weight:bold;">Government Exams:</span>
                                </div>
                                <div>
                                    @foreach($governmentExams as $value)
                                        <p style="color:#eeeeee; font-size: 18px;" id = "governmentExam{{$value->intGovernmentExamID}}">• {{ $value->strGovernmentExam }} - N/A</p>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>	
    </div>
</div>
</div>


<div id="modalMessage" class="modal modal-fixed-footer ci" style="overflow:hidden; width:700px;max-height:100%; height:470px; margin-top:25px;">
    <div class="modal-header">
        <div class="h">
            <h3><center>Message</center></h3>  
        </div>
    </div>
    
    <div class="modal-content">
        <div class="row">
            <div class="col s12">
                <ul class="collection with-header" id="collectionActive">
                    <li class="collection-header" style="font-weight:bold;">Subject:<div style="font-size:18px;" id = "messageSubject">&nbsp;</div></li>
                    <li class="collection-item"><p id = 'messageMessage'></p>
                    </li>
            </div>
        </div>
    </div>

    <!-- button -->
    <div class="modal-footer ci modal-close" style="background-color: #00293C;">
        <button class="btn green waves-effect waves-light" name="" id = "" style="margin-right: 30px;">OK
        </button>
    </div>
</div>

@stop

@section('script')

<script type="text/javascript">
$(document).ready(function(){
    var inboxID;

    $("#dataTable").DataTable({
         "columns": [
        { "orderable": false },
        null,
        null
        ] ,  
        "pageLength":5,
        "bLengthChange": false
    });

    $('#dataTableMsg').DataTable({
         "columns": [
        { "orderable": false },
        { "orderable": false },
        null,
        null,
        { "orderable": false }
        ] ,  
        "pageLength":5,
        "lengthMenu": [5,10,15,20],
        "bFilter": false,
     });
    
    $.ajax({
            
        type: "GET",
        url: "{{action('TempClientAccountController@getGuards')}}",
        success: function(data){
            var table = $('#dataTable').DataTable();
            table.clear().draw();
            
            $.each(data, function( index, value ) {
                table.row.add([
                    '<button class="buttonMore btn blue col s12" id="' + value.intGuardID + '">MORE</button>',
                    '<h>' + value.strLicenseNumber + '</h>',
                    '<h>' + value.strFirstName + ' ' + value.strLastName + '</h>'
                ]).draw(false);
            });
            
                
        }
    });//guards information

    $.ajax({
        type: "GET",
        url: "{{action('InboxController@getInbox')}}",
        success: function(data){
            if (data){
                var table = $('#dataTableMsg').DataTable();
                var radio;
                var button;
                $.each(data, function(index,value){
                    if (value.tinyintStatus == 1){
                        radio = '<input name="" type="radio" id="radio'+value.intInboxID+'" checked/> <label for="'+value.intInboxID+'"></label>';  
                    }else{
                        radio = '<input name="" type="radio" id="radio'+value.intInboxID+'" /> <label for="'+value.intInboxID+'"></label>';
                    }
                    button = '<center><button class="btn blue darken-4 buttonRead" id="'+value.intInboxID+'"><i class="material-icons">keyboard_arrow_right</i></button></center>';
                    
                    table.row.add([
                        radio,
                        button,
                        '<h>' + value.datetimeSend + '</h>',
                        '<h>' + value.nameSender + '</h>',
                        '<h>' + value.strSubject + '</h>' + 
                        '<input type = "hidden" id = "type'+value.intInboxID+'" value="'+value.tinyintType+'">'
                    ]).draw(false);
                });//foreach
            }//if else
        }//success ajax
    }); //get inbox
    
    
     $('#dataTableMsg').on('click', '.buttonRead', function(){
        var type = $('#type' + this.id).val();
        inboxID = this.id;
        readMessage(); 
    });
    
    $('#dataTable').on('click','.buttonMore', function(){
        $.ajax({
            type: "GET",
            url: "/getInformation?guardID=" + this.id,
            success: function(data){

                var dob = new Date(data.dateBirthday);
                var today = new Date();
                var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
                var bodyAttributesGuard = data.bodyAttributesGuard;
                var bodyAttributes = data.bodyAttributes;
                var armedService = data.armedService;
                var governmentExamGuard = data.governmentExamGuard;
                var governmentExam = data.governmentExam;

                $('#firstName').text(data.strFirstName);
                $('#middleName').text(data.strMiddleName);
                $('#lastName').text(data.strLastName);
                $('#licenseNumber').text(data.licenseNumber.strLicenseNumber);
                $('#addressGuard').text(data.address.strAddress + ' ' + data.address.strCityName + ', ' + data.address.strProvinceName);
                $('#age').text(age);
                $('#gender').text(data.strGender);
                $('#placeOfBirth').text(data.strPlaceBirth);
                $('#mobileNumber').text(data.strContactNumberMobile);
                $('#landlineNumber').text(data.strContactNumberLandline);
                $('#civilStatus').text(data.strCivilStatus);

                if (bodyAttributesGuard){
                    for (intLoop = 0; intLoop < bodyAttributes.length; intLoop ++){
                        $('#bodyAttribute' + bodyAttributes[intLoop].intBodyAttributeID)
                            .text(bodyAttributes[intLoop].strBodyAttributeName);
                        $('#value' + bodyAttributes[intLoop].intBodyAttributeID)
                            .text('N/A');
                        for (intLoop2 = 0; intLoop2 < bodyAttributesGuard.length; intLoop2 ++){
                            if (bodyAttributes[intLoop].intBodyAttributeID == bodyAttributesGuard[intLoop2].intBodyAttributeID){
                                $('#value' + bodyAttributesGuard[intLoop2].intBodyAttributeID)
                                    .text(bodyAttributesGuard[intLoop2].strValue);
                                break;
                            }    
                        }
                    } //bodyAttribute
                }else{
                    bodyAttributes.forEach(function(item){
                        $('#bodyAttribute' + item.intBodyAttributeID)
                            .text(item.strBodyAttributeName);
                        $('#value' + item.intBodyAttributeID)
                            .text('N/A');
                    });
                }//bodyAttribute       

                if (armedService){
                    $('#armedService').text(armedService.strArmedServiceName + " - " + armedService.strRank);    
                }else{
                    $('#armedService').text('N/A');    
                } //armedservice

                if (governmentExamGuard){
                    for(intLoop = 0; intLoop < governmentExam.length; intLoop ++){
                        var temp = '•' + governmentExam[intLoop].strGovernmentExam + ' - ';
                        var checker = true;
                        for (intLoop2 = 0; intLoop2 < governmentExamGuard.length; intLoop2 ++){
                            if (governmentExam[intLoop].intGovernmentExamID == governmentExamGuard[intLoop2].intGovernmentExamID){
                                temp += governmentExamGuard[intLoop2].strRating;
                                checker = false;
                                break;
                            }
                        }

                        if (checker){
                            temp += 'N/A';
                        }

                        $('#governmentExam' + governmentExam[intLoop].intGovernmentExamID).text(temp);
                    }
                }else{
                    governmentExam.forEach(function(item){
                       $('#governmentExam' + item.intGovernmentExamID).text(item.strGovernmentExam + ' - N/A');
                    });
                }
            },
            error: function(data){
                var toastContent = $('<span>Error Occured. </span>');
                Materialize.toast(toastContent, 1500,'red', 'edit');

            }
        });//ajax
    });

    
    function readMessage(){
        if($('#radio' + inboxID).is(':checked')){
            $('#radio' + inboxID).attr('checked', false); // all read mark as unread        
            $.ajax({
                type: "POST",
                url: "{{action('InboxController@readInbox')}}",
                beforeSend: function (xhr) {
                    var token = $('meta[name="csrf_token"]').attr('content');

                    if (token) {
                          return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                    }
                },
                data: {
                    inboxID: inboxID
                }
            });//ajax
        }//if else

        message();
    }//function readMessage

    function message(){
        $('#modalMessage').openModal();
        getMessage();
    }

    function getMessage(){
        $.ajax({
            type: "GET",
            url: "/adminInbox/get/message?inboxID=" + inboxID,
            success: function(data){
                console.log(data);
                $('#messageSubject').text(data.strSubject);
                $('#messageMessage').text(data.strMessage);
            },async:false
        });//get guard waiting
    }
});
</script>

@stop