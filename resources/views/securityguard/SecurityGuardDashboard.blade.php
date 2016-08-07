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
          <link rel="stylesheet" type="text/css" media="screen,projection" href="{{!! URL::asset('../css/materialize.min.css') !!}"/>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">-->
    <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->
          
          <link href="{!! URL::asset('../css/animate.css') !!}" type="text/css" rel="stylesheet"/>
          <link href="{!! URL::asset('../sweetalert.css') !!}" type="text/css" rel="stylesheet"/>
        <!--  <link rel="stylesheet" type="text/css" href="{!! URL::asset('../datatable.css') !!}">-->
        <!--  <link rel="stylesheet" type="text/css" href="{!! URL::asset('../css/dataTables.material.min.css') !!}">-->
        <!--  <link rel="stylesheet" type="text/css" href="{!! URL::asset('../css/jquery.dataTables.min.css') !!}">-->
        <!--  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.css">-->
            
<!-- ===============================JSjquery======================================= -->

          <script src="{!! URL::asset('../javascript/jquery-2.2.1.js') !!}"></script>
     <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>-->

          <script src="{{!! URL::asset('../js/materialize.js') !!}}"></script>
     <!--  <script src="{!! URL::asset('../jquery/jquery-1.12.0.min.js')!!}"></script> -->
          <script src="{!! URL::asset('../js/init.js') !!}"></script>
          <script src="{!! URL::asset('../js/materialize.min.js') !!}"></script>
          <script src="{!! URL::asset('../sweetalert.min.js') !!}"></script>
     <!--  <script src="{!! URL::asset('../datatable.js') !!}"></script>-->
     <!--  <script src="{!! URL::asset('../dataTables.material.min.js') !!}"></script>-->
     <!--  <script src="{!! URL::asset('../jquery.dataTables.min.js') !!}"></script>-->
     <!--  <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.js"></script>-->
        
        <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.css">
		
        <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.js"></script>
		<link href="{!! URL::asset('../css/style.css') !!}" type="text/css" rel="stylesheet"/>
        
        <!-- CALENDAR CSS-->
        <link href="{!! URL::asset('../css/kendo-materialize.css') !!}" type="text/css" rel="stylesheet"/>
        <link href="{!! URL::asset('../css/kendo1-materialize.css') !!}" type="text/css" rel="stylesheet"/>
        <link href="{!! URL::asset('../css/kendo2-materialize.css') !!}" type="text/css" rel="stylesheet"/>
        <link href="{!! URL::asset('../css/kendo3-materialize.css') !!}" type="text/css" rel="stylesheet"/>
        
        <!-- CALENDAR JS-->
         <script src="{!! URL::asset('../js/kendojs.js') !!}"></script>
         <script src="{!! URL::asset('../js/kendojs1.js') !!}"></script>
 
    </head>

<!----------BODY------------>

<body id="scrollhider" class="bodyscrollhider grey lighten-3 ci">
  <nav class="blue darken-4">
        <a href="#" class="brand-logo">

                    <div class="row">
                        <div class="col l12">
                            <div class="col l6 push-l6">
                            <p style="margin-top:9px; margin-left: 20px;font-family:Myriad Pro;font-size:2.2rem">CLIENT AND PERSONNEL MANAGEMENT SYSTEM</p>     
                            </div>
		
                        </div>
             
                    </div>
                </a>
         <div class="nav-wrapper">
             
                <a href="#" data-activates="mobile-nav" class="button-collapse" id="scrollcontrol"><i class="material-icons">menu</i></a>
                   
			 <ul class="side-nav fixed" id="mobile-nav" style="width:345px;height:500;background-color:#90AFC5;overflow:hidden">
                     <div class="iconposition">
                        <div class="card-panel blue darken-4" style="height:115px;">

                                <div class="row">
                                    <div class="col l12">
                                          <div class="col l6 push-l4" style="margin-top:-6%">

                                            <img src="{!! URL::asset('../Materialize/images/logo.png') !!}" width="70%">

                                            </div>  
                                    </div>
                                </div>

                                <div class="row">
                                        <div class="col l12">
                                         <p class="ci" style="margin-top:-20%;position:absolute;color:white;margin-left:25%">GUARD ACCOUNT</p>

                                    </div>
                            </div>
                        </div>
                 </div>
                  
                    <div class="row">
                        <div class="col l12" style="margin-top:1%">
                            <div class="col l6">
                            
                                   <img src="/img/avatar2.png" alt="" width="100" class="circle responsive-img" style="margin-left:33%"> <!-- notice the "circle" class -->
                                     
                            
                            </div>
                            <div class="col l6">
                                <br>
                            
                                       <center>
                                            <h id = 'strProfileName'></h><br>
                                            <h id = 'strProfileLicenseNumber'></h>
                                
                                        </center>
                            
                            </div>
                          
                        </div>

                    </div>
                   
             
                 <div class="row">
                        <div class="col l12 z-depth-1">
                            <div class="col l4">
                                 <div class="card blue darken-4"  style="width:80px">
                                    <div class="card-content white-text" style="height:90px;">
                                      <span class="card-title" style="font-size:40px; font-weight:bold;" id = 'clientNumber'></span>
                                       <a data-position="top" data-delay="50" data-tooltip="LEAVE REQUEST" href="/securityleaverequest" class="white-text tooltipped" style="font-size:18px;font-family:Myriad Pro"><i class="material-icons" style="font-size:5rem; margin-top:-10px;margin-left:-30px">directions_walk</i></a>

                                    </div>      
                                 </div>  
                            </div>
                            <div class="col l4">
                                 <div class="card blue darken-4"  style="width:80px">
                                    <div class="card-content white-text" style="height:90px;">
                                      <span class="card-title" style="font-size:40px; font-weight:bold;" id = 'clientNumber'></span>
                                       <a data-position="top" data-delay="50" data-tooltip="CHANGE LOCATION" href="/securitychangelocation" class="white-text tooltipped" style="font-size:18px;font-family:Myriad Pro"><i class="material-icons" style="font-size:5rem; margin-top:-10px;margin-left:-30px">location_city</i></a>

                                    </div>      
                                 </div>  
                            </div>
                            <div class="col l4">
                                 <div class="card blue darken-4"  style="width:80px">
                                    <div class="card-content white-text" style="height:90px;">
                                      <span class="card-title" style="font-size:40px; font-weight:bold;" id = 'clientNumber'></span>
                                       <a data-position="top" data-delay="50" data-tooltip="ACCOUNT SETTINGS" href="/securitysettings" class="white-text tooltipped" style="font-size:18px;font-family:Myriad Pro"><i class="material-icons" style="font-size:5rem; margin-top:-10px;margin-left:-30px">build</i></a>

                                    </div>      
                                 </div>  
                            </div>
                     </div>
                 </div>
                     <div class="row">
                           
                           
                                <div class="col l12">
                                    <div class="col l3">
                                           <div id="example" >
                                            <div class="demo-section k-header" style="width:50px; height:-100px; margin-left:5px;text-align: center;">
                                                <div id="calendar">
                                              
                                                </div>
                                            </div>
                                        <script>
                                            $(document).ready(function() {
                                                // create Calendar from div HTML element
                                                $("#calendar").kendoCalendar();
                                            });
                                        </script>
                                 </div>
                                    
                                    
                                    </div>
                                
                                
                                </div>
                             

                           
                        </div>
     
             </ul>
				<ul class="right hide-on-med-and-down">
								 
                    <li  id="notification_li">
                        <a id="notificationLink" data-position="bottom" data-delay="50" data-tooltip="MESSAGES" href="/securityhomepage" class="tooltipped">
                            <i class="mdi-content-inbox" style="font-size:2.1rem;color:white"></i>
                            <span id="notification_count">3</span>
                        </a>
                    </li>                                                                                                  
                    <li><a  data-position="bottom" data-delay="50" data-tooltip="HOME"href="/securityhomepage" class=" tooltipped"><i class="material-icons" style="color:white">store</i></a></li>
                    <li><a  data-position="bottom" data-delay="50" data-tooltip="LOG OUT" id = 'btnLogout' class=" tooltipped"><i class="material-icons">input</i></a></li>
               
                </ul>

        </div>
    
</nav>
    

    <div class="row">
 <div class="col l12">
     <div class="col l6">
     
     safasf
     
     
     </div>
     <div  class="col l6">
         <div class="col l4 push-l9">
                    <iframe src="http://free.timeanddate.com/clock/i5bfv3ml/n145/szw110/szh110/hoc000/hbw0/hfc09f/cf100/hnc07c/hwc000/facfff/fnu2/fdi76/mqcfff/mqs4/mql18/mqw4/mqd60/mhcfff/mhs4/mhl5/mhw4/mhd62/mmv0/hhcfff/hhs1/hhb10/hmcfff/hms1/hmb10/hscfff/hsw3" frameborder="0" width="110" height="120"></iframe>   

                    <div class="row">
                        <div class="col l12" style="margin-left:-4%">
                           <iframe src="http://free.timeanddate.com/clock/i5bfv67w/n145/fn14/ftb/bo2/tt0/tw0/tm1/tb4" frameborder="0" width="100px" height="38"></iframe>      
                        
                        </div>


                   </div> 
         
         
         </div>
            
     </div>
                                 
</div>
        </div>  
    <div class="row">
    <div class="col l12">
		
          
        
        
        <div class="col l9 push-l3">
                
        
             @yield('content')
        
        
        </div>
        </div>
   </div>
  
    
     
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
    $(document).ready(function() {
        $('select').material_select();
        
        $.ajax({
            
            type: "GET",
            url: "{{action('SecurityHomepageController@getGuardInformation')}}",
            beforeSend: function (xhr) {
                var token = $('meta[name="csrf_token"]').attr('content');

                if (token) {
                      return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                }
            },
            success: function(data){
                if (data){
                    $('#strProfileName').text(data.strFirstName + ' ' + data.strLastName);
                    $('#strProfileLicenseNumber').text(data.strLicenseNumber);    
                }
            },
            error: function(data){
                var toastContent = $('<span>Error Occured. </span>');
                Materialize.toast(toastContent, 1500,'red', 'edit');

            }
        });//ajax
        
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
	
    </body>

</html>

