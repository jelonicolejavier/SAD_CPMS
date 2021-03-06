<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>@yield('title')</title>
<meta charset="utf-8">
    <meta name="csrf_token" content="{{ csrf_token() }}" />
  <!-- ================================CSS===========================================  -->

  <link href="{!! URL::asset('../css/materialize.css') !!}" type="text/css" rel="stylesheet"/>
  <link rel="stylesheet" type="text/css" media="screen,projection" href="{!! URL::asset('../css/materialize.min.css') !!}"/>
<!--	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">-->
<!--		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->
 
  <link href="{!! URL::asset('../css/animate.css') !!}" type="text/css" rel="stylesheet"/>
  <link href="{!! URL::asset('../sweetalert.css') !!}" type="text/css" rel="stylesheet"/>
  <link rel="stylesheet" type="text/css" href="{!! URL::asset('../datatable.css') !!}">
<!--  <link rel="stylesheet" type="text/css" href="{!! URL::asset('../css/dataTables.material.min.css') !!}">-->
  <link rel="stylesheet" type="text/css" href="{!! URL::asset('../css/jquery.dataTables.min.css') !!}">
	<link rel="stylesheet" type="text/css" href="{!! URL::asset('../css/materialize.clockpicker.css') !!}">
<!--  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.css">-->
    <!-- ===============================JSjquery======================================= -->
   <script src="{!! URL::asset('../javascript/jquery-2.1.4.js') !!}"></script>
<!--  <script src="{!! URL::asset('../javascript/jquery-2.2.1.js') !!}"></script>-->
<!--	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>-->

  <script src="{!! URL::asset('../js/materialize.js') !!}"></script>
<!--  <script src="{!! URL::asset('../jquery/jquery-1.12.0.min.js')!!}"></script> -->
  <script src="{!! URL::asset('../js/init.js') !!}"></script>
  <script src="{!! URL::asset('../js/materialize.min.js') !!}"></script>
  <script src="{!! URL::asset('../sweetalert.min.js') !!}"></script>
  <script src="{!! URL::asset('../js/moment.min.js') !!}"></script>
  <script src="{!! URL::asset('../datatable.js') !!}"></script>
<!--  <script src="{!! URL::asset('../dataTables.material.min.js') !!}"></script>-->
  <script src="{!! URL::asset('../jquery.dataTables.min.js') !!}"></script>
<script src="{!! URL::asset('../js/materialize.clockpicker.js') !!}"></script>	
<!--  <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.js"></script>-->
  <!-- <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.css"> -->
	 <link href="{!! URL::asset('../css/style.css') !!}" type="text/css" rel="stylesheet"/>
  
<!-- <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.js"></script> -->

</head>

    
    
<body id="scrollhider" class="bodyscrollhider grey lighten-3 ci">
   
    <nav class="blue darken-4">
        
         <div class="nav-wrapper">
               
                
                <a href="#" data-activates="mobile-nav" class="button-collapse" id="scrollcontrol"><i class="material-icons">menu</i></a>
                    
<!--					<ul class="side-nav fixed white sidenavhover" id="mobile-nav" >-->
					<ul class="side-nav fixed" id="mobile-nav" >
                    <div class="iconposition">
						<div class="card-panel blue darken-4" style="height:140px;">

							<div class="row">
                                <div class="col l12">
									  <div class="col l6 push-l3" style="margin-top:-6%">

										<img src="{!! URL::asset('../Materialize/images/logo.png') !!}" width="90%">

										</div>
                                    
                                  
                                </div>
				            </div>
                            
                            <div class="row">
                           		
                            <span class="card-title ci" style="font-size:20px;color:white;margin-top:-23%;margin-left:22%; position:absolute">John Cena</span>
								  <span  style=" font-size: 14px; margin-top:-14%;margin-left:22%;position:absolute;color:red margin-left:-40px;">Administrator</span>
                            
                            </div>
<!--
								<div class=" white-text">
								  <span class="card-title" style="font-size:20px; position:absolute">John Cena</span>
								  <span  style=" font-size: 14px; position:absolute; margin-left:-40px;">Administrator</span>
								</div>
-->
							
						</div>
					</div>	
                        
                                <div class="row">
        
                                                  <a  data-position="right" data-delay="50" data-tooltip="SECURITY GUARDS"href="/cgrguardattendance" class=" tooltipped"><i class="material-icons" style="font-size:5rem;color:black;margin-left:30%">face</i></a>
    
                                </div>
                                <div class="row">
        
                                                  <a  data-position="right" data-delay="50" data-tooltip="RECEIVING DELIVERY & ITEM RETURN"href="/cgrreceivingdelivery" class=" tooltipped"><i class="material-icons" style="font-size:5rem;color:black;margin-left:30%">local_shipping</i></a>
    
                                </div>
                                <div class="row">
        
                                                  <a  data-position="right" data-delay="50" data-tooltip="REPORTS"href="/cgrreports" class=" tooltipped"><i class="material-icons" style="font-size:5rem;color:black;margin-left:30%">content_paste</i></a>
    
                                </div> 
                                  
                               
                        
								
				
             </ul>
             

           
				<div>
                                     <a href="#" class="brand-logo">

                    <div class="row">
                        <div class="col l12">
                            <div class="col l2 offset-l4" >
                            
                            <i class="material-icons"style="font-size:4rem">nature_people</i>
                            
                            </div>
                            <div class="col l2 pull-l1">
                            
                            <i class="material-icons"style="font-size:2rem">loyalty</i>
                            
                            </div>
                            <div class="col l2 pull-l3">
                            
                            <i class="material-icons"style="font-size:4.3rem;margin-left:30%">group</i>
                            
                            </div>
                            <div class="col l2 pull-l3">
                            
                            <p style="margin-top:9px;font-family:Myriad Pro;font-size:2.5rem">Client-Guard Relationship (CGR)</p>
					
                            
                            
                            </div>
							
                        
                        
                        </div>
                    
                    
                    </div>
                    	</a>
					
					
                    
                  <!--  <div class="homeposition">
                    
                    <a href="#" class="brand-logo">
						<div class="flow-text">
							<p style="margin-top: 20px; margin-left: 200px;font-family:Myriad Pro;font-size:6rem">Client and Personnel Management System</p>
						</div>
				
                </div>-->
                
            </div>
				
             
							<ul class="right hide-on-med-and-down">
                                 <li><a  data-position="bottom" data-delay="50" data-tooltip="HOME"href="/dashboardadmin" class=" tooltipped"><i class="material-icons">store</i></a></li>
                                <li><a  data-position="bottom" data-delay="50" data-tooltip="LOG OUT" id = 'btnLogout' class=" tooltipped"><i class="material-icons">exit_to_app</i></a></li>
							</ul>
        
		
        </div>
		
    </nav>
			
<!--
	 Tab 


	<div class="row">
		<div class="col s10 push-s2">
			<ul class="tabs">
				<li class="tab col s2"><a class="active" href="#">Leave</a></li>
				<li class="tab col s2"><a  href="#armedservice">Armed Service</a></li>
				<li class="tab col s2"><a  href="#">Government Exam</a></li>
				<li class="tab col s2"><a  href="#">Vital Statistic</a></li>
				<li class="tab col s2"><a  href="#">Requirements</a></li>
			</ul>
		</div>	
	</div>
-->
													
<!-- Dropdown Trigger -->
	
  <a class='dropdown-button btn' href='#' data-activates='dropdownclient' style="display:none;">Drop Me!</a>
  <a class='dropdown-button btn' href='#' data-activates='dropdownsg' style="display:none;">Drop Me!</a>
  <a class='dropdown-button btn' href='#' data-activates='dropdowneq' style="display:none;">Drop Me!</a>
  <a class='dropdown-button btn' href='#' data-activates='dropdownothers' style="display:none;">Drop Me!</a>
 
   
    
       @yield('content')
	   @yield('script')
    
    
    
    
	<script>

       
            $('.modal-trigger').leanModal({
                dismissible: true, // Modal can be dismissed by clicking outside of the modal
                opacity: .5, // Opacity of modal background
                in_duration: 300, // Transition in duration
                out_duration: 200, // Transition out duration
            });
       
    
	</script>
	
	<script>
	function deleteConfirmation(url) {
        
        var alertConfirm = confirm("Are you sure you want to delete?");
        if (alertConfirm == true) {
            document.getElementById('okayCancel').value = "okay";
        } else {
            document.getElementById('okayCancel').value = "cancel";
        }
    }
	</script>
	
<script>
$(document).ready(function() {
    $('select').material_select();
    $('#btnLogout').click(function(){
        $.ajax({
            type: "GET",
            url: "{{action('CPMSUserLoginController@logoutAccount')}}",
            beforeSend: function (xhr) {
                var token = $('meta[name="csrf_token"]').attr('content');
                if (token) {
                    return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                }
            },
            success: function(data){
                if (!data){
                    window.location.href = '{{ URL::to("/userlogin") }}';
                }
            },
            error: function(data){
                var toastContent = $('<span>Error Occured. </span>');
                Materialize.toast(toastContent, 1500,'red', 'edit');   
            }
        });//ajax 
    });
});
</script>
	
	
<script>
$('.timepicker').pickatime({
    default: 'now',
    twelvehour: true, 
    donetext: 'OK',
  autoclose: false,
 
});

$('.datepicker').pickadate({
    selectMonths: true, 
    selectYears: 60,
	yearRange: "1960:Today",
	max: new Date(2025,1,1),
	format: 'yyyy/mm/dd'
	
  });
	
</script>

	
<script>
$.ajax({
  type: "GET",
  url: "{{action('UtilitiesController@getUtilities')}}",
  success: function(data){
    $('#strCompanyName').text(data.strCompanyName);
  },
  error: function(data){
    var toastContent = $('<span>Error Database.</span>');
    Materialize.toast(toastContent, 1500,'red', 'edit');
  }
});//ajax
</script>
    
     
    </body>
	
    
</html>


