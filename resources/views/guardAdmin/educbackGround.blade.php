@extends('layout.maintenanceLayout')

@section('title')
Guard Form
@endsection

@section('content')

<div class="row">
	<div class="col s12 push-s2">
		<nav>
			<div class="nav-wrapper blue darken-1">
				<div class="row">	
					<div class="col s12 offset-s1">
						<a href="{{URL::route('personaldata')}}" class="breadcrumb ci">Personal Data</a>
						<a href="{{URL::route('educationalbackground')}}" class="breadcrumb ci">Educational Background</a>
					</div>
				</div>
			</div>
		</nav>
	</div>
</div><!--breadcrumbs-->

<div class="row">
    <div class="col s8 push-s3" style="margin-left:10px;">
        <div class="container-fluid grey lighten-4 z-depth-1 ci animated slideInLeft" style="border: 1px solid black; border-radius:5px;">
			<div class="row">
					<div class="col l12 offset-l3">
						
						 <legend><h4>Educational Background</h4></legend>
				
					</div>
			</div>
            <table class="centered" height="100%" width="100%" style="border:1 px solid black; ">
                <thead>
                    <tr>
                        <th>Level</th>
                        <th>Name of School</th>
                        <th>Inclusive Dates of Attendance</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>
                            <p>Primary</p>
                        </td>
                        <td> 
							<div class="col l12 push-l1">
                            <input  id="schoolNamePrimary" type="text" class="validate" pattern="[A-za-z ][^0-9]{2,}" required="" aria-required="true" >
                            <label data-error="Incorrect" for="schoolevel"></label>
								</div>
                        </td>

                        <td>
                           
							<div class="row">
							
								<div class="col l12 push-l2">
										<div class="col l4 ">
											 <label>From</label>
												 <select id="fromPrimary">
													<option value="" disabled selected>----</option>
												</select>   

										</div>
										<div class="col l4">
											 <label>To</label>
												<select id="toPrimary">
													<option value="" disabled selected>----</option>  

												</select>
											
									
										</div>
									
								</div>
							
							</div>
                           
                           
                        </td>
                        
                    </tr>
                    
                    <tr>
                        <td>
                            <p>Secondary</p>
                        </td>   
                        <td> 
							<div class="col l12 push-l1">
                           		 <input  id="schoolNameSecondary" type="text" class="validate" pattern="[A-za-z ][^0-9]{2,}" required="" aria-required="true" >
                           		 <label data-error="Incorrect" for="schoolevel"></label>
							</div>
                        </td>

                        <td>
                           
							<div class="row">
							
								<div class="col l12 push-l2">
										<div class="col l4 ">
											 <label>From</label>
												 <select id="fromSecondary">
													<option value="" disabled selected>----</option>
												</select>   

										</div>
										<div class="col l4">
											 <label>To</label>
												<select id="toSecondary">
													<option value="" disabled selected>----</option>  

												</select>
											
									
										</div>
									
								</div>
							
							</div>
                           
                           
                        </td>
                    </tr>
                    
                    <tr>

                    <td>
                        <p>Tertiary</p>
                    </td>

                    <td> 
						<div class="col l12 push-l1">
                        <input  id="schoolNameTertiary" type="text" class="validate" pattern="[A-za-z ][^0-9]{2,}" required="" aria-required="true" >
                        <label data-error="Incorrect" for="schoolevel"></label>
							</div>
							</td>

                     <td>
                           
							<div class="row">
							
								<div class="col l12 push-l2">
										<div class="col l4 ">
											 <label>From</label>
												 <select id="fromTertiary">
													<option value="" disabled selected>----</option>
												</select>   

										</div>
										<div class="col l4">
											 <label>To</label>
												<select id="toTertiary">
													<option value="" disabled selected>----</option>  

												</select>
											
									
										</div>
									
								</div>
							
							</div>
                           
                           
                        </td>
                </tr>
            </tbody>
            </table>
        </div>
        
		<button style="margin-top:20px;" class=" z-depth-2 btn-large blue left animated slideInLeft" id = "backEducation">Back</button>
        
		<button style="margin-top:20px;" class=" z-depth-2 btn-large blue right animated slideInLeft" id = "nextEducation">Next</button>
        
	</div>
</div>
@stop

@section('script')
<script>
    $(document).ready(function() {
        $('select').material_select();
        var $fromPrimary = $("#fromPrimary");
        var $toPrimary = $("#toPrimary");
        var $fromSecondary = $("#fromSecondary");
        var $toSecondary = $("#toSecondary");
        var $fromTertiary = $("#fromTertiary");
        var $toTertiary = $("#toTertiary");
        
        for(intLoop = (new Date).getFullYear(); intLoop >= 1980; intLoop --){
            
            $fromPrimary.append(
                $("<option></option>")
                .attr("id",intLoop)
                .text(intLoop)
            );
            
            $toPrimary.append(
                $("<option></option>")
                .attr("id",intLoop)
                .text(intLoop)
            );
            $fromSecondary.append(
                $("<option></option>")
                .attr("id",intLoop)
                .text(intLoop)
            );
            $toSecondary.append(
                $("<option></option>")
                .attr("id",intLoop)
                .text(intLoop)
            );
            $fromTertiary.append(
                $("<option></option>")
                .attr("id",intLoop)
                .text(intLoop)
            );
            $toTertiary.append(
                $("<option></option>")
                .attr("id",intLoop)
                .text(intLoop)
            );
            
        } //year
        
        $.ajax({

            type: "GET",
            url: "{{action('EducationalBackgroundController@get')}}",
            beforeSend: function (xhr) {
                var token = $('meta[name="csrf_token"]').attr('content');

                if (token) {
                      return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                }
            },
            success: function(data){
                if (data){
                    for (intLoop = 0; intLoop < data.length; intLoop ++){
                        if (data[intLoop].type == "Primary"){
                            $('#schoolNamePrimary').val(data[intLoop].schoolName);
                            $("#fromPrimary option[id='"+ data[intLoop].fromYear +"']").attr("selected", "selected");
                            $("#toPrimary option[id='"+ data[intLoop].toYear +"']").attr("selected", "selected");
                        }else if (data[intLoop].type == "Secondary"){
                            $('#schoolNameSecondary').val(data[intLoop].schoolName);
                            $("#fromSecondary option[id='"+ data[intLoop].fromYear +"']").attr("selected", "selected");
                            $("#toSecondary option[id='"+ data[intLoop].toYear +"']").attr("selected", "selected");
                        }else if (data[intLoop].type == "Tertiary"){
                            $('#schoolNameTertiary').val(data[intLoop].schoolName);
                            $("#fromTertiary option[id='"+ data[intLoop].fromYear +"']").attr("selected", "selected");
                            $("#toTertiary option[id='"+ data[intLoop].toYear +"']").attr("selected", "selected");
                        }
                    }
                    
                    $('select').material_select();
                }else{
                    
                }
            }
        }); //get data

        $('#backEducation').click(function(){
            window.location.href = '{{ URL::to("/guard/registration/personaldata") }}';
        });
        
        $('#nextEducation').click(function(){
            sendData();
            window.location.href = '{{ URL::to("/guard/registration/sgbackground") }}';
            
        });
        
        function sendData(){
            var school = [];
            var arrType = [];
            var arrSchool = [];
            var arrFrom = [];
            var arrTo = [];
            var intCounter = 0;
            
            if ($('#schoolNamePrimary').val().trim() != "" && 
                $('#fromPrimary').val().trim() != "" && 
                $('#toPrimary').val().trim() != ""){
                
                var objPrimary = {
                    type: "Primary",
                    schoolName: $('#schoolNamePrimary').val(),
                    fromYear: $("#fromPrimary").val(),
                    toYear: $("#toPrimary").val()
                };
                
                arrType[intCounter] = "Primary";
                arrSchool[intCounter] = $('#schoolNamePrimary').val();
                arrFrom[intCounter] = $("#fromPrimary").val();
                arrTo[intCounter] = $("#toPrimary").val();
                
                intCounter ++;
                school.push(objPrimary);
            }
            
            if ($('#schoolNameSecondary').val().trim() != "" && 
                $('#fromSecondary').val().trim() != "" && 
                $('#toSecondary').val().trim() != ""){
                
                var objSecondary = {
                    type: "Secondary",
                    schoolName: $('#schoolNameSecondary').val(),
                    fromYear: $("#fromSecondary").val(),
                    toYear: $("#toSecondary").val()
                };
                
                arrType[intCounter] = "Secondary";
                arrSchool[intCounter] = $('#schoolNameSecondary').val();
                arrFrom[intCounter] = $("#fromSecondary").val();
                arrTo[intCounter] = $("#toSecondary").val();
                
                intCounter ++;
                school.push(objSecondary);
            }

            if ($('#schoolNameTertiary').val().trim() != "" && 
                $('#fromTertiary').val().trim() != "" && 
                $('#toTertiary').val().trim() != ""){
                
                var objTertiary = {
                    type: "Tertiary",
                    schoolName: $('#schoolNameTertiary').val(),
                    fromYear: $("#fromTertiary").val(),
                    toYear: $("#toTertiary").val()
                };
                
                arrType[intCounter] = "Tertiary";
                arrSchool[intCounter] = $('#schoolNameTertiary').val();
                arrFrom[intCounter] = $("#fromTertiary").val();
                arrTo[intCounter] = $("#toTertiary").val();
                
                intCounter ++;
                
                school.push(objTertiary);
            }
            
            $.ajax({

                type: "POST",
                url: "{{action('EducationalBackgroundController@post')}}",
                beforeSend: function (xhr) {
                    var token = $('meta[name="csrf_token"]').attr('content');

                    if (token) {
                          return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                    }
                },
                data: {
                    objSchool: school,
                    type: arrType,
                    school: arrSchool,
                    yearFrom: arrFrom,
                    yearTo: arrTo
                },
                success: function(data){

                },
                error: function(data){
                    console.log(data);
                }
            });//ajax
        }
        
    });    
</script>
@stop