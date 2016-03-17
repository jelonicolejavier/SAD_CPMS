@extends('layout.maintenanceLayout')

@section('title')
Guard Form
@endsection

@section('content')


<div class="row" style="margin:5%;">
                <div class="col s12 push-s1">
                    <div class="container white z-depth-2" style="border-radius: 15px; padding:3%;">
                       
			
				             <legend><h4>Personal Data</h4></legend>
				                <div class="container-fluid grey lighten-4" style="border: 1px solid black;">
                                     
                                    <div class="row" style="margin:5%;">
					
                    
                                        <div class="input-field col s4">
                                            <i class="material-icons prefix">account_circle</i>
                                            <input  id="firstName" type="text" class="validate" pattern="[A-za-z ][^0-9]{2,}" required="" aria-required="true" >
                                                            <label data-error="Incorrect" for="firstName">First Name</label>

                                        </div>
					
                                        <div class="input-field col s4">
                                            <i class="material-icons prefix">account_circle</i>
                                            <input  id="middleName" type="text" class="validate" pattern="[A-za-z ][^0-9]{2,}" required="" aria-required="true">
                                                            <label data-error="Incorrect" for="middleName">Middle Name</label>

                                        </div>
					
                                        <div class="input-field col s4">
                                            <i class="material-icons prefix">account_circle</i>
                                            <input  id="lastName" type="text" class="validate" pattern="[A-za-z ][^0-9]{2,}" required="" aria-required="true">
                                                            <label data-error="Incorrect" for="lastName">Last Name</label>

                                        </div>
					
<!--
				                    </div>
				
				
				
				
				
				                    <div class="row" style="margin:5%;">
-->
					                    <div class="input-field col s6">
                                            <i class="material-icons prefix">home</i>
                                            <input  id="address" type="text" class="validate" pattern="[A-za-z0-9 ]{2,}" required="" aria-required="true">

                                            <label data-error="Incorrect" for="address">Address</label>

					                   </div>
					
                                        <div class="input-field col s6">
                                            <i class="material-icons prefix">home</i>
                                            <input  id="provaddress" type="text" class="validate" pattern="[A-za-z0-9 ]{2,}" required="" aria-required="true">
										    <label data-error="Incorrect" for="provaddress">Provincial Address</label>

					                    </div>
<!--
				                    </div>
				
				                    <div class="row" style="margin:5%;">
-->
					
                                        <div class="input-field col s6">
                                            <input  id="dateOfbirth" type="date" class="datepicker"  required="" aria-required="true">
                                            <label class="active" data-error="Incorrect" for="dateOfbirth">Date of Birth</label>

					                    </div>
                    
                    
                                        <div class="input-field col s6">
						                      <input  id="placeofbirth" type="text" class="validate" pattern="[A-za-z0-9 ]{2,}" required="" aria-required="true">
										      <label data-error="Incorrect" for="placeofbirth">Place of Birth</label>

					                    </div>
					
					
<!--
				                    </div>
				
				
				                    <div class="row" style="margin:5%;">
-->
					                   <div class="input-field col s6">
                                            <i class="material-icons prefix">smartphone</i>
                                            <input  id="contactCp" maxlength="13" type="text" class="validate" pattern="[0-9+]{11,}" required="" aria-required="true">
                                            <label data-error="Incorrect" for="contactCp">Contact Number (Mobile)</label>

					                   </div>
					                   <div class="input-field col s6">
                                            <i class="material-icons prefix">phone</i>
                                            <input  id="contactLandline" maxlength="10" type="text" class="validate" pattern="[0-9+]{7,}" required="" aria-required="true">
                                            <label data-error="Incorrect" for="contactLandline">Contact Number (Landline)</label>

					                   </div>
<!--
				                    </div>
                    
                                    <div class="row" style="margin:5%;">
-->
					
                    
					                   <div class="input-field col s4">
                                              <input  id="citizenship" type="text" class="validate" pattern="[A-za-z ][^0-9]{2,}" required="" aria-required="true" >
                                              <label data-error="Incorrect" for="citizenship">Citizenship</label>

					                   </div>
					
					                   <div class="input-field col s4">
                                              <input  id="civilStatus" type="text" class="validate" pattern="[A-za-z ][^0-9]{2,}" required="" aria-required="true">
                                              <label data-error="Incorrect" for="civilStatus">Civil Status</label>

					                   </div>
					
					                   <div class="input-field col s4">
                        
                                             <select>
                                                  <option value="" disabled selected>Choose</option>
                                                  <option value="1">Male</option>
                                                  <option value="2">Female</option>
                                             </select>
                                            <label>Sex</label>
					                   </div>
					
				                    </div>
                                </div>  
                <!-- Personal Data End == educ bg start -->  
                            
                            
                        
                        <legend><h4>Educational Background</h4></legend>
                            <div class="container-fluid grey lighten-4" style="border: 1px solid black;">

                                <table class="highlight white" height="100%" width="100%" style="border:1 px solid black; ">
                                    <thead>
                                            <tr>


                                                <th>Level</th>
                                                <th>Name of School</th>
                                                <th>Degree Course</th>
                                                <th>Year Graduated(if graduated)</th>
                                                <th>Inclusive Dates of Attendance</th>
                                                <th>Scholarship/Academic Honors Received</th>

                                            </tr>
                                    </thead>
                                    
                                     <tbody>
			   
                                                <tr>

                                                    <td>
                                                        <p>Elementary</p>
                                                    </td>


                                                    <td> 
                                                        
                                                       <input  id="schoolName" type="text" class="validate" pattern="[A-za-z ][^0-9]{2,}" required="" aria-required="true" >
                                                        <label data-error="Incorrect" for="schoolevel"></label>
                                                </div>
                                                    </td>
                                                    
                                                    
                                                    <td>
                                                        <input  id="schoolName" type="text" class="validate" pattern="[A-za-z ][^0-9]{2,}" required="" aria-required="true" >
                                                        <label data-error="Incorrect" for="schoolevel"></label>
                                                    </td>
                                                    
                                                    <td>
                                                        <input  id="schoolName" type="text" class="validate" pattern="[A-za-z ][^0-9]{2,}" required="" aria-required="true" >
                                                        <label data-error="Incorrect" for="schoolevel"></label>
                                                    </td>
                                                    
                                                    <td><label>From</label>
                                                        <select>
                                              <option value="" disabled selected>----</option>  
                                              <option value="1">2005</option>
                                             <option value="2">2004</option>
                                             <option value="3">2003</option>
                                             <option value="4">2002</option>
                                             <option value="5">2001</option>
                                             <option value="6">2000</option>
                                             <option value="7">1999</option>
                                             <option value="8">1998</option>
                                             <option value="9">1997</option>
                                                 <option value="10">1996</option>
                                                 <option value="11">1995</option>
                                                 <option value="12">1994</option>
                                                 <option value="13">1993</option>
                                                 <option value="14">1992</option>
                                                 <option value="15">1991</option>
                                                 <option value="16">1990</option>
                                                 <option value="17">1989</option>
                                                 <option value="18">1988</option>
                                                 <option value="19">1987</option>
                                                 <option value="20">1986</option>
                                                 <option value="21">1985</option>
                                                 <option value="22">1984</option>
                                              <option value="23">1983</option>
                                              <option value="24">1982</option>
                                              <option value="25">1981</option>
                                              <option value="26">1980</option>
                                             <option value="27">1979</option>
                                              <option value="28">1978</option>
                                               <option value="29">1977</option>
                                              <option value="30">1976</option>
                                              <option value="31">1975</option>
                                              <option value="32">1974</option>
                                              <option value="33">1973</option>
                                              <option value="34">1972</option>
                                              <option value="35">1971</option>
                                                         
                                             
                                         </select>
                                            
                                         <label>To</label>
                                                        <select>
                                              <option value="" disabled selected>----</option>  
                                              <option value="1">2005</option>
                                             <option value="2">2004</option>
                                             <option value="3">2003</option>
                                             <option value="4">2002</option>
                                             <option value="5">2001</option>
                                             <option value="6">2000</option>
                                             <option value="7">1999</option>
                                             <option value="8">1998</option>
                                             <option value="9">1997</option>
                                                 <option value="10">1996</option>
                                                 <option value="11">1995</option>
                                                 <option value="12">1994</option>
                                                 <option value="13">1993</option>
                                                 <option value="14">1992</option>
                                                 <option value="15">1991</option>
                                                 <option value="16">1990</option>
                                                 <option value="17">1989</option>
                                                 <option value="18">1988</option>
                                                 <option value="19">1987</option>
                                                 <option value="20">1986</option>
                                                 <option value="21">1985</option>
                                                 <option value="22">1984</option>
                                              <option value="23">1983</option>
                                              <option value="24">1982</option>
                                              <option value="25">1981</option>
                                              <option value="26">1980</option>
                                             <option value="27">1979</option>
                                              <option value="28">1978</option>
                                               <option value="29">1977</option>
                                              <option value="30">1976</option>
                                              <option value="31">1975</option>
                                              <option value="32">1974</option>
                                              <option value="33">1973</option>
                                              <option value="34">1972</option>
                                              <option value="35">1971</option>
                                                         
                                             
                                         </select>
                                                    </td>
                                                    
                                                    <td>
                                                        <input  id="schoolName" type="text" class="validate" pattern="[A-za-z ][^0-9]{2,}" required="" aria-required="true" >
                                                        <label data-error="Incorrect" for="schoolevel"></label>
                                                    </td>

                                                </tr>


                                    </tbody>
                                </table>
                        
                            </div>
                            
                           
                
                            
                               
                               
                 <!-- Educational Background End -->
                        
                            <legend><h4>Military Training (If Any)</h4></legend>
				                <div class="container-fluid grey lighten-4" style="border: 1px solid black;">
                                    <div class="row" style="margin:5%;">
					
					                   <div class="row">
                                            <div class="input-field col s5">
                                                <select id = "selectArmedServices" name = "strTypeOfGun">
                                                    <option disabled selected>Choose armed services if any</option>
                                                    @foreach($armedservices as $armedservice)
                                                        <option>{{$armedservice->strArmedServiceName}}</option>
                                                    @endforeach
                                                </select>
                                                <label>Armed Service</label>
                                            </div>
                                        </div>
					
<!--
				                    </div>
				
				                    <div class="row" style="margin:5%;">
-->
					                   <div class="input-field col s6">
                                            
                                            <input  id="rank" type="text" class="validate" pattern="[A-za-z ][^0-9]{2,}" required="" aria-required="true" >
                                            <label data-error="Incorrect" for="rank">Rank</label>

					                   </div>
					
					                   <div class="input-field col s6">
                        
                                            <input  id="armedServiceYear" class="datepicker"  required="" aria-required="true">
                                            <label data-error="Incorrect" for="armedServiceYear">Armed Service Year</label>

					                   </div>
<!--
				                    </div>
                
                                    <div class="row" style="margin:5%;">
-->
					                   <div class="input-field col s6">
						                  <input  id="dischargeHonor" type="text" class="validate" pattern="[A-za-z ][^0-9]{2,}" required="" aria-required="true" >
										  <label data-error="Incorrect" for="dischargeHonor">Discharged Honorably</label>

					                   </div>
                    
                                        <div class="input-field col s6">
						                  <input  id="dischargeDishonor" type="text" class="validate" pattern="[A-za-z ][^0-9]{2,}" required="" aria-required="true" >
										  <label data-error="Incorrect" for="dischargeDishonor">Discharged Dishonorably</label>

					                    </div>
					
					
<!--
				                    </div>

                                    <div class="row" style="margin:5%;">
-->
				
					                   <div class="input-field col s12">
                                            <p>Government Exam:</br>
                                              <input type="checkbox" id="exam1" />
                                              <label for="exam1">Exam 1</label></br>
                       
                                              <input type="checkbox" id="exam2" />
                                              <label for="exam2">Exam 2</label></br>
                       
                                              <input type="checkbox" id="exam3" />
                                              <label for="exam3">Exam 3</label></br>
                       
                                              <input type="checkbox" id="exam4" />
                                              <label for="exam4">Exam 4</label></br>
                       
                                              <input type="checkbox" id="exam5" />
                                              <label for="exam5">Exam 5</label></br>
                                            </p>

<!--
					                   </div>
					
                                       <div class="row" style="margin:5%;">
-->
					                       <div class="input-field col s6">
                                              <input  id="rating" type="text" class="validate" pattern="[A-za-z ][^0-9]{2,}" required="" aria-required="true" >
                                              <label data-error="Incorrect" for="rating">Rating</label>

					                   </div>
                    
                                            <div class="input-field col s6">
                        
                                            <input  id="dateTaken" class="datepicker"  required="" aria-required="true">
                                            <label data-error="Incorrect" for="dateTaken">Date Taken</label>

					                       </div>
					
					
				                        </div>
					
				                    </div>
				
				 <button class="btn waves-effect waves-light right" type="submit" name="action1" style="margin-right: 30px;">Save
    			     <i class="material-icons right">send</i>
  			     </button>
                                </div>
				
				
				
            </div>
        </div>
    </div>
@stop
@section('script')
<script>
    
    $(document).ready(function() {
    $('select').material_select();
  });
        
  
    
    
   
</script>

@stop