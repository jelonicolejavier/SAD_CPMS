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
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">-->
    <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->
          
          <link href="{!! URL::asset('../css/animate.css') !!}" type="text/css" rel="stylesheet"/>
          <link href="{!! URL::asset('../sweetalert.css') !!}" type="text/css" rel="stylesheet"/>
          <link rel="stylesheet" type="text/css" href="{!! URL::asset('../datatable.css') !!}">
          <!-- <link rel="stylesheet" type="text/css" href="{!! URL::asset('../css/dataTables.material.min.css') !!}"> -->
          <link rel="stylesheet" type="text/css" href="{!! URL::asset('../css/jquery.dataTables.min.css') !!}">
          <!-- <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.css"> -->
            
<!-- ===============================JSjquery======================================= -->

          <script src="{!! URL::asset('../javascript/jquery-2.2.1.js') !!}"></script>
     <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>-->

          <script src="{!! URL::asset('../js/materialize.js') !!}"></script>
     <!--  <script src="{!! URL::asset('../jquery/jquery-1.12.0.min.js')!!}"></script> -->
          <script src="{!! URL::asset('../js/init.js') !!}"></script>
          <script src="{!! URL::asset('../js/materialize.min.js') !!}"></script>
          <script src="{!! URL::asset('../sweetalert.min.js') !!}"></script>
          <script src="{!! URL::asset('../js/moment.min.js') !!}"></script>
       <script src="{!! URL::asset('../datatable.js') !!}"></script>
        <script src="https://js.pusher.com/3.2/pusher.min.js"></script>
       <!-- <script src="{!! URL::asset('../dataTables.material.min.js') !!}"></script> -->
       <script src="{!! URL::asset('../jquery.dataTables.min.js') !!}"></script>
       <!-- <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.js"></script> -->
        
        <!-- <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.css"> -->
		
        <!-- <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.js"></script> -->
		<link href="{!! URL::asset('../css/style.css') !!}" type="text/css" rel="stylesheet"/>
           <!-- <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.js"></script> -->
		<link href="{!! URL::asset('../css/style.css') !!}" type="text/css" rel="stylesheet"/>
        
    </head>


<body id="scrollhider" class="bodyscrollhider grey lighten-3 ci cards">
	
	
      <nav class="blue darken-4">
        
         <div class="nav-wrapper">
                <a href="#" data-activates="mobile-nav" class="button-collapse" id="scrollcontrol"><i class="material-icons">menu</i></a>
                    
<!--					<ul class="side-nav fixed white sidenavhover" id="mobile-nav" >-->
				<div>
                     <a href="#" class="brand-logo">
                       <div class="row">
                        <div class="col s12 l12">
                            <div class="col s12 l6 pull-s12 push-l3 hide-on-med-and-down">
                            <p style="margin-top:9px;font-family:Myriad Pro;font-size:2.2rem" id = 'strCompanyName'></p>     
                            </div>
                              <div style="margin-left:60%;width:400px;">
                                  <p style="margin-top:9px;font-family:Myriad Pro;font-size:2.2rem;font-weight:bold;color:#F4F4EF" id="strCompanyName"></p>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                
                <ul class="right">  
					
					<li id="notification_li">
                            <a  data-position="bottom" data-delay="50" data-tooltip="BILLS" href="/clientbill" class=" tooltipped">
								<i class="material-icons">payment</i>
                            </a>
                       </li>  
					
                    <li id="notification_li">
                            <a  data-position="bottom" data-delay="50" data-tooltip="INCIDENT REPORTS" href="/incidentreportsclient" class=" tooltipped">
								<i class="material-icons">report</i>
                            </a>
                       </li>  
					
					<li  id="notification_li">
                            <a id="notificationLink" data-position="bottom" data-delay="50" data-tooltip="MESSAGES"     href="/clientinbox" class="tooltipped">
                                <i class="mdi-content-inbox" style="font-size:2.1rem;color:white"></i>
                                <span id="notification_count">1</span>
                            </a>
                      </li>                                                                                                
                      <li id="notification_li">
                            <a  data-position="bottom" data-delay="50" data-tooltip="HOME"href="/clienthomepage" class=" tooltipped">
                          <i class="material-icons">store</i>
                            </a>
                       </li>
                      <li id="notification_li">
                          <a  data-position="bottom" data-delay="50" data-tooltip="LOG OUT" id = 'btnLogout' class=" tooltipped">
                              <i class="material-icons">input</i>
                          </a>
                      </li>
              </ul>
        </div>
    </nav>
    
	<div class="row" >
		<div class="col s5 l3 push-l9 push-s7" style="margin-left:-10px; display: none;" id = 'divWarning'>
			<a class="card-panel red animated bounceInRight" style = "" id="epalwarningclient" href="/clientbill">
				<div class="white-text" style="font-size:20px;"><i class="material-icons left">warning</i>Notice</div>
			  <span class="white-text">This is a reminder that you have balance. Please check your Bill Page.
			  </span>
			</a>
		</div>
	</div>
	
    <div class="row"></div> 
     <ul class="side-nav fixed" id="mobile-nav" style="background-color:#90AFC5;overflow:hidden">
                     <div class="iconposition">
                        <div class="card-panel blue darken-4" style="height:115px;">

                                  <div class="row">
                                    <div class="col l12">
                                          <div class="col s6 l6 push-s3 push-l3" style="margin-top:-6%">

                                            <img src="{!! URL::asset('../Materialize/images/logo.png') !!}" width="110%">

                                            </div>  
                                    </div>
                                </div>
                                <div class="row">
                                        <div class="col s12 l12 push-s2 push-l2">
                                         <p class="ci" style="margin-top:-10%;position:absolute;color:white;">CLIENT ACCOUNT</p>
                                        </div>
                                </div>
                        </div>
                 </div>
         <div class="row">
             <div class="col s12">
                 <div class="col s12 z-depth-1 ">
                        <img src="/img/avatar2.png" alt="" width="80" class="circle responsive-img" style="margin-left:31%"> <!-- notice the "circle" class -->
                    
                     <center>
                         <h id = 'strProfileName'></h><br>				 
						 <div class="row"></div>
                    </center>
                </div>
             </div>
         </div>
          <div class="row">
                  <div class="col s12 z-depth-1" style="margin-top:-10px;">
								
					  			<div class="col s6 l6">
									 <div class="card blue darken-4">
											<a data-position="top" data-delay="50" data-tooltip="REQUEST GUARDS" href="/clientguardrequest" class="white-text tooltipped" style="font-size:18px;font-family:Myriad Pro">GUARD        
											</a> 
										 <i class="material-icons" style="font-size:1.8rem;margin-top:-50%;margin-left:73%;position:absolute;color:white">accessibility</i>    
									</div>

								</div>
								<div class="col s6 l6">
									 <div class="card blue darken-4">
											<a data-position="top" data-delay="50" data-tooltip="REQUEST GUNS" href="/clientgunrequest" class="white-text tooltipped" style="font-size:18px;font-family:Myriad Pro">GUN
										 </a>
										  <i class="material-icons" style="font-size:1.8rem;margin-top:-53%;margin-left:65%;position:absolute;color:white">tonality</i>   
									</div>
								</div>
					  
                 		
                         <div class="col s8 push-s2">
                                 <div class="card blue darken-4" style="height:55px; width:115px;">
                                        <a data-position="top" data-delay="50" data-tooltip="ACCOUNT SETTINGS" href="/clientsettings" class="white-text tooltipped" style="font-size:18px;font-family:Myriad Pro">SETTINGS
                                        </a>
                                      <i class="material-icons" style="font-size:1.8rem;margin-top:-43%;margin-left:77%;position:absolute;color:white">settings</i>   
                                    
                                </div>
                    
                  			</div>
					  
<!--
					  <div class="col s6">
                                 <div class="card blue darken-4" style="height:55px;  width:95px;">
                                        <a data-position="top" data-delay="50" data-tooltip="CGR" href="/clientcgrmodule" class="white-text tooltipped" style="font-size:18px;font-family:Myriad Pro">CGR
                                        </a>
                                      <i class="material-icons" style="font-size:1.8rem;margin-top:-50%;margin-left:60%;position:absolute;color:white">people</i>   
                                    
                                </div>
                    
                  		</div>
-->
					  
                 </div>
          </div>
        
<!--------------------------------------END OF CLOCK & CALENDAR------------------------------->            
    <div class="row">
        <div class="col s12 l12 push-s2 push-l2">
<!--
    <iframe src="http://free.timeanddate.com/clock/i5bt1d45/n145/szw110/szh110/hoc09f/hbw2/hfc09f/cf100/hnc09f/hwc000/hcw2/fan2/facfff/fdi76/mqc9ff/mqs4/mql18/mqw1/mqd50/mhc009/mhs4/mhl5/mhw2/mhd60/mmv0/hhcfff/hhs1/hhb10/hmcfff/hmb10/hscfff/hsw3" frameborder="0" width="110" height="110" style="margin-left:-2%"> </iframe>
        <div class="row">
                <div class="col s12 l12 pull-s4 pull-l4">
    <iframe src="http://free.timeanddate.com/clock/i5bybb84/n145/tlph/fn16/tct/pct/ftb/bat4/tt0/th2/ta1/tb4" frameborder="0" width="212" height="36" allowTransparency="true"> </iframe>
                </div>
        </div>
-->
<!--------------------------------------END OF CLOCK & CALENDAR-----------------------------           
    <div class="row">
        <div class="col s12 push-s2"> --> 
            
        <!----------SCRIPT---------->
    <script>
        function init(){
            document.getElementById('loading').style.visibility="hidden";
            document.getElementById('main-container').style.visibility="visible";
            clock();
        };

        function clock(){
            var day=['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
            var month=['January','February','March','April','May','June','July','August','September','October','November','December'];
            //calculate angle
            var d, h, m, s;
            d = new Date;

            h = 30 * ((d.getHours() % 12) + d.getMinutes() / 60);
            m = 6 * d.getMinutes();
            s = 6 * d.getSeconds();

            //move hands
            setAttr('h-hand', h);
            setAttr('m-hand', m);
            setAttr('s-hand', s);
            setAttr('s-tail', s+180);

            //display time
            h = d.getHours();
            m = d.getMinutes();
            s = d.getSeconds();

            if(h >= 12){
                setText('suffix', 'PM');
            }else{
                setText('suffix', 'AM');
            }

            if(h != 12){
                h %= 12;
            }

            setText('sec', s);
            setText('min', m);
            setText('hr', h);

            setText('day',day[d.getDay()]);
            setText('date',d.getDate());
            setText('month-year',month[d.getMonth()]+' '+(1900+d.getYear()));

            //call every second
            setTimeout(clock, 1000);

        };

        function setAttr(id,val){
            var v = 'rotate(' + val + ', 70, 70)';
            document.getElementById(id).setAttribute('transform', v);
        };

        function setText(id,val){
            if(val < 10){
                val = '0' + val;
            }
            document.getElementById(id).innerHTML = val;
        };

        window.onload=init;
    </script>
            <!----------STYLE---------->
    <style>
            #loading{
                margin:0;
                padding:0;
            }

            #main-container{
                margin:0;
                padding:0;
                font-family:sans-serif;
                font-size:14px;
            }

            .analog-clock{
                width:130px;
                display:inline-block;
                clear:both;
            }

            .cal{
                padding:2px;
                color:white;
                background-color:dodgerblue;
                text-align:center;
                width:120px;
                display:inline-block;
                clear:both;
            
                width: 130px;
                height: 76px;
                border-radius: 5%;
                box-shadow: 0 4px 4px 0 rgba(50, 50, 50, 0.4);
            }

            #day{
                margin:0;
                font-size:16px;
            }

            #date{
                margin:0;
                font-size:20px;
            }

            #month-year{
                margin:0;
                font-size:16px;
            }

            #clock-face{
                stroke:black;
                stroke-width:2px;
                fill:white;
            }

            #h-hand, #m-hand, #s-hand, #s-tail{
                stroke:black;
                stroke-linecap:round;
            }

            #h-hand{
                stroke-width:3px;
            }

            #m-hand{
                stroke-width:2px;
            }

            #s-hand{
                stroke-width:1px;
            }

            .time-text{
                text-align:center;
                padding:3px;
                color:white;
                background-color:dodgerblue;
                text-align:center;
                width:120px;
                display:inline-block;
                clear:both;
                
                width: 130px;
                height: 30px;
                border-radius: 5%;
                box-shadow: 0 4px 4px 0 rgba(50, 50, 50, 0.4);
            }
            
    </style>
            
            <!----------MAIN CONTAINER---------->
            
            <div class="app-container">
                <p id="loading">Loading...</p>
                <div id="main-container" style="visibility:hidden;">
                    <div class="analog-clock">
                        <svg width="140" height="140">
                            <circle id="clock-face" cx="70" cy="70" r="65" />
                            <line id="h-hand" x1="70" y1="70" x2="70" y2="38" />
                            <line id="m-hand" x1="70" y1="70" x2="70" y2="20" />
                            <line id="s-hand" x1="70" y1="70" x2="70" y2="12" />
                            <line id="s-tail" x1="70" y1="70" x2="70" y2="56" />
                            <text x="62" y="18">12</text>
                            <text x="96" y="26">1</text>
                            <text x="118" y="46">2</text>
                            <text x="126" y="76">3</text>
                            <text x="117" y="104">4</text>
                            <text x="96" y="125">5</text>
                            <text x="66" y="132">6</text>
                            <text x="38" y="125">7</text>
                            <text x="16" y="104">8</text>
                            <text x="7" y="76">9</text>
                            <text x="14" y="47">10</text>
                            <text x="34" y="27">11</text>
                        </svg>
                        <div class="time-text">
                            <span id="hr">00</span>
                            <span>:</span>
                            <span id="min">00</span>
                            <span>:</span>
                            <span id="sec">00</span>
                            <span id="suffix">--</span>
                        </div>
                    </div>
                    <div class="cal">
                        <p id="day">---------</p>
                        <p id="date">00</p>
                        <p id="month-year">--------- 0000</p>
                    </div>
                </div>
            </div>   
        </div> 
    </div>
<!--------------------------------------END OF CLOCK & CALENDAR------------------------------->

    </ul>
        <div class="col l9">
        
        
             @yield('content')
        
        
        </div>
        </div>
   </div>



<!--modal current client details-->

<div id="modalCurrentClientDetails" class="modal modal-fixed-footer ci" style="overflow:hidden; width:700px;max-height:100%; height:600px; margin-top:-50px;">
    <div class="modal-header">
      	<div class="h">
			<h3><center>Current Client</center></h3>  
		</div>
    </div>
	
	<div class="modal-content">
		<div class="row">
			<div class="col s12">
				<ul class="collection with-header" id="collectionActive">				
					
					<li class="collection-header" ><h4 style="font-weight:bold;">Details</h4></li>
                <div>
                    <li class="collection-item" style="font-weight:bold;">
						<div class="row">
							<div class="col s6">	
								Nature of Business:<div style="font-weight:normal;" id = 'natureOfBusiness'>&nbsp;&nbsp;&nbsp;Bank</div>
							</div>
							<div class="col s6">
								Client Name:<div style="font-weight:normal;" id = 'clientName'>&nbsp;&nbsp;&nbsp;LandBank</div>
							</div>
						</div>
                    </li>
					
					
					<li class="collection-item" style="font-weight:bold;">
						<div class="row">
							<div class="col s6">	
								Address:<div style="font-weight:normal;" id = 'address'>&nbsp;&nbsp;&nbsp;123 Hello Street Pasig, Metro Manila</div>
							</div>
							<div class="col s6">
								Contact Number (Client):<div style="font-weight:normal;" id = 'contactNumberClient'>&nbsp;&nbsp;&nbsp;09123456789</div>
							</div>
						</div>
                    </li>

                    <li class="collection-item" style="font-weight:bold;">
						<div class="row">
							<div class="col s6">	
								Person in Charge:<div style="font-weight:normal;" id = 'personInCharge'>&nbsp;&nbsp;&nbsp;Mang Tomas</div>
							</div>
							<div class="col s6">
								Contact Number (Person in Charge):<div style="font-weight:normal;" id = 'contactNumberPIC'>&nbsp;&nbsp;&nbsp;09123456789</div>
							</div>
						</div>
                    </li>

                    
                    <li class="collection-item" style="font-weight:bold;">
						<div class="row">
							<div class="col s4">	
								Area Size (approx. in square meters):<div style="font-weight:normal;" id = 'areaSize'>&nbsp;&nbsp;&nbsp;1000</div>
							</div>
							<div class="col s4">
								Population (approx.):<div style="font-weight:normal;" id = 'population'>&nbsp;&nbsp;&nbsp;10</div>
							</div>
						
				</ul>
				<div class="row"></div>
			</div>
		</div>
	</div>
		
	<div class="modal-footer ci modal-close" style="background-color: #00293C;">
		<div id = "buttons">	
            <button class="btn green waves-effect waves-light" name="" style="margin-right: 30px;" id = "">OK
            </button>           
        </div>           
	</div>
</div>

<!--modal current client details end-->
  
    
     
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
  var statusIdentifier;

  $.ajax({
      type: "GET",
      url: "{{action('InboxController@getNumberOfUnreadMessages')}}",
      beforeSend: function (xhr) {
          var token = $('meta[name="csrf_token"]').attr('content');

          if (token) {
                return xhr.setRequestHeader('X-CSRF-TOKEN', token);
          }
      },
      success: function(data){
          if (data > 0){
            $('#notification_count').text(data);
            $('#notification_count').show();
          }
      }
  });//ajax get client information


  $.ajax({
    type: "GET",
    url: "{{action('ClientDashboardController@getClientInformation')}}",
    success: function(data){
      if (data){
        $('#strProfileName').text(data.strClientName);
      }
    }
  });//ajax

  $('#btnClient').click(function(){
    if (statusIdentifier == 2){
      $('#modalCurrentClientDetails').openModal();
      getClientInformation();
    }
  });
  
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

<script>
  $.ajax({
    type: "GET",
    url: "{{action('ClientDashboardController@hasUnpaidBills')}}",
    success: function(data){
      if (data > 0){
        $('#divWarning').show();
      }
    },
    error: function(data){
      var toastContent = $('<span>Error Database.</span>');
      Materialize.toast(toastContent, 1500,'red', 'edit');
    }
  });//ajax
</script>
	
    </body>
</html>

