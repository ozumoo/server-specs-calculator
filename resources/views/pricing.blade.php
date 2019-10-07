
<!DOCTYPE html>
<html>
<head>
	<title>VPS Pricing</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="css/materialize.min.css" media="screen,projection" rel="stylesheet" type="text/css">
	<link href="css/custom.css" media="screen,projection" rel="stylesheet" type="text/css">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col s12 m6">
				<div class="wrap-selector calculator">
					<h5 class="heading"><b>Choose your VPS</b></h5>
					<div class="group">
						<h6><b>Configuration</b></h6>
						<input type="range" min="0" max="{{$count -1}}" value="0" data-rangeslider id="main_selector">
					</div>
					<div class="group" id="server-info-display">
						<div class="info-holder" >
							<span class="left">CPUs</span>
							<span id="vcpu" class="right">{{$packages[0]->vCpu}}</span>
						</div>
						<div class="info-holder" >
							<span class="left">Memory</span>
							<span id="ram" class="right">{{$packages[0]->ram}}</span>
						</div>
						<div class="info-holder" >
							<span class="left">Disk</span>
							<span id="disk" class="right">{{$packages[0]->disk}}</span>
						</div>
						<div class="info-holder" >
							<span class="left">Tranfer</span>
							<span id="transfer" class="right">{{$packages[0]->transfer_limit}}</span>
						</div>
					</div>
					<div class="group">
						<h6><b>Total Storage</b></h6><input id="total_storage" max="14" min="1" step="1" type="range">
					</div>
					<div class="group">
						<h6><b>Total Transfer</b></h6><input id="total_transfer" max="14" min="1" step="1" type="range">
					</div>
				</div>
			</div>
			<div class="col s12 m6">
				<div class="wrap-selector">
					<h5 class="heading"><b>Pricing</b></h5>
					<div class="row pricing">
					 	<div class="col s12 m6 ">
					        <label>
					          <input type="radio" name="os" class="card-input-element" />
					            <div class="panel panel-default card-input">
					              <div class="row">
					              		<img class="panel-heading" src="/imgs/WindowsLogo.png" alt="">
					      				<div class="col s12 m12" >
											<span class="left">Per Month</span>
											<span id="windows_price_per_month" class="right">{{$packages[0]->windows_price_per_month}}</span>
										</div>          
					      				<div class="col s12 m12" >
											<span class="left">Per Year</span>
											<span id="windows_price_per_year" class="right">{{$packages[0]->windows_price_per_year}}</span>
										</div>          
					              </div>
					            </div>
					        </label>
				      	</div>

				      	<div class="col s12 m6 ">
					        <label>
					          	<input type="radio" name="os" class="card-input-element" />
					            <div class="panel panel-default card-input">
					              	<div class="row">
					              		<img class="panel-heading" src="/imgs/linuxLogo.png" alt="">
					      				<div class="col s12 m12" >
											<span class="left">Per Month</span>
											<span id="linux_price_per_month" class="right">{{$packages[0]->linux_price_per_month}}</span>
										</div>          
					      				<div class="col s12 m12" >
											<span class="left">Per Year</span>
											<span id="linux_price_per_year" class="right">{{$packages[0]->linux_price_per_year}}</span>
										</div>          
					              </div>
					            </div>
					        </label>
				      	</div>
			      	</div>
			      	<div class="group">
						
						<a class="col s12 waves-effect indigo accent-3 btn">Pay Now</a>
					</div>
				</div>
				
			</div>
		</div>
	</div>



	<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="{{asset('js/rangeslider.min.js')}}"></script>

	<script>
    $(function() {
    	var packages = @json($packages);
        var $document = $(document);
        var selector = '#main_selector';
        var $element = $(selector);
        
        $document.on('input', selector, function(e) {
        	var number = e.target.value;
            var package = packages[number]
            console.log(number ,packages[number])
            // update Values
            $('#vcpu').text(package.vCpu)
            $('#ram').text(package.ram)
            $('#disk').text(package.disk)
            $('#transfer').text(package.transfer_limit)
            $('#linux_price_per_month').text(package.linux_price_per_month)
            $('#windows_price_per_month').text(package.windows_price_per_month)
            $('#linux_price_per_year').text(package.linux_price_per_year)
            $('#windows_price_per_year').text(package.windows_price_per_year)
        });
        
        
    });
    </script>

	<script>
	

    </script>

</body>
</html>
