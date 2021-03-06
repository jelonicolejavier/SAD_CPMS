@extends('layout.maintenanceLayout')

@section('title')
Admin Reports
@endsection

@section('content')


<style>
.dataTables_filter
	{
    display: none;
	}
</style>
 <div class="row">
    <div class="col s12 push-s1">
        <div class="container blue-grey lighten-4 z-depth-2 animated fadeIn" style="padding-left:2%; padding-right:2%;">
			<div class="row"></div>
			<div class="row">
				<div class="col s8">
					<div class="input-field col s4">
						<label class="active" style="color:#64b5f6;"  for="dateOfbirth">From</label>	
				        <input placeholder=""  id="dateOfbirth" type="date" class="datepicker">
					</div>

					<div class="input-field col s4">
						<label class="active" style="color:#64b5f6;"  for="dateOfbirth">To</label>	
				        <input placeholder=""  id="dateOfbirth" type="date" class="datepicker">
					</div>

					<!--<div class="input-field col s4">
						  <select>
                                <option disabled selected>Choose an Option</option>
                                <option>Clients</option>
                                <option>Guards</option>
                                <option>Guns</option>
                                <option>Requests</option>
					       </select>
						<label>Reports</label>
					</div>-->
				</div>
			
				<div class="col s4">
					<div class="input-field col s12">
						<nav style="height:55px;margin-top:-4%">
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
            </div>
            
            <div class="row">
    <div class="col l12">
    
        <div id="container" style="min-width: 300px; height: 400px; margin: 0 auto;"></div>
    
    
    </div>

</div>
        </div>
     </div>
</div>


@stop


@section('script')

<script type="text/javascript"> 
$(function () {
    $('#container').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Client Contract Summary Report'
        },
        subtitle: {
            text: 'CPMS'
        },
        xAxis: {
            categories: [
                'Jan',
                'Feb',
                'Mar',
                'Apr',
                'May',
                'Jun',
                'Jul',
                'Aug',
                'Sep',
                'Oct',
                'Nov',
                'Dec'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Statistical Value'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Ongoing',
            data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]

        }, {
            name: 'Extended',
            data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 83.5, 106.6, 92.3]

        }, {
            name: 'Pending',
            data: [48.9, 38.8, 39.3, 41.4, 47.0, 48.3, 59.0, 59.6, 52.4, 65.2, 59.3, 51.2]

        }, {
            name: 'Backout',
            data: [42.4, 33.2, 34.5, 39.7, 52.6, 75.5, 57.4, 60.4, 47.6, 39.1, 46.8, 51.1]

        }]
    });
});

</script>
@stop