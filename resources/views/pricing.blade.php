
<!DOCTYPE html>
<html>
<head>
	<title>VPS Pricing</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="css/materialize.min.css" media="screen,projection" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.css">
	<link href="css/custom.css" media="screen,projection" rel="stylesheet" type="text/css">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

</head>
<body>
    @include('layouts._header')
	<div class="page container">
        @include('flash::message')
		<div class="row">
            <form action="{{action('cartController@add')}}" method="POST">
                {{-- MAIN VALUES --}}
                <input type="hidden"  id="package_id" name="package_id" value="{{$packages[0]->id}}">
                <input type="hidden"  id="extra_storage_space" name="extra_storage_space" value="0">
                <input type="hidden"  id="extra_storage_price_input" name="extra_storage_price_input" value="0">
                @csrf



    			<div class="col s12 m6">
    				<div class="wrap-selector calculator">
    					<h5 class="heading"><b>Choose your VPS</b></h5>
    					<div class="group">
    						<h6><b>Configuration</b></h6>
    						<input  type="range" min="0" max="{{$count -1}}" value="0" data-rangeslider id="main_selector">
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
    						<h6><b>Extra Storage <span class="right" id="extra_storage_price">0 $</span>
    						</b></h6><input id="total_storage" min="1" max="100"  step="1" type="range">
    					</div>
    				</div>
    			</div>
    			<div class="col s12 m6">
    				<div class="wrap-selector">
    					<h5 class="heading"><b>Pricing Per Month</b></h5>
    					<div class="row pricing">
    					 	<div class="col s12 m6 ">
    					        <label>
    					          <input type="radio" name="windows_per_month" class="card-input-element" />
    					            <div class="panel panel-default card-input">
    					              <div class="row">
    					              		<img class="panel-heading" src="{{asset('/imgs/WindowsLogo.png')}}" alt="">
    					      				<div class="col s12 m12" >
    											<span class="left">Per Month</span>
    											<span id="windows_price_per_month" class="right">{{$packages[0]->windows_price_per_month}}</span>
    										</div>          
    					              </div>
    					            </div>
    					        </label>
    				      	</div>

    				      	<div class="col s12 m6 ">
    					        <label>
    					          	<input type="radio" name="linux_per_month" class="card-input-element" />
    					            <div class="panel panel-default card-input">
    					              	<div class="row">
    					              		<img class="panel-heading" src="{{asset('/imgs/linuxLogo.png')}}" alt="">
    					      				<div class="col s12 m12" >
    											<span class="left">Per Month</span>
    											<span id="linux_price_per_month" class="right">{{$packages[0]->linux_price_per_month}}</span>
    										</div>          
    					              </div>
    					            </div>
    					        </label>
    				      	</div>
    			      	</div>

                        <h5 class="heading"><b>Pricing Per Year</b></h5>
                        <div class="row pricing">
                            <div class="col s12 m6 ">
                                <label>
                                  <input type="radio" name="windows_per_year" class="card-input-element" />
                                    <div class="panel panel-default card-input">
                                      <div class="row">
                                            <img class="panel-heading" src="{{asset('/imgs/WindowsLogo.png')}}" alt="">
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
                                    <input type="radio" name="linux_per_year" class="card-input-element" />
                                    <div class="panel panel-default card-input">
                                        <div class="row">
                                            <img class="panel-heading" src="{{asset('/imgs/linuxLogo.png')}}" alt="">
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
    			      		<button onClick="CreatePDFfromHTML()" type="button" class="col s12 waves-effect green accent-3 btn">Export PDF</button> <br>
    			      		<br>
    			      		<br>
    			      		<button type="submit" class="col s12 waves-effect indigo accent-3 btn">Add to Cart</button>

    					</div>
    				</div>	
			    </div>
            </form>
		</div>
	</div>
	

	<div class="container html-content hidden-section" id="invoice">
        <div class="card" >
            <div class="card-header">
                Invoice
            </div>
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-sm-6">
                        <h6 class="mb-3">From:</h6>
                        <div>
                            <strong>Webz Poland</strong>
                        </div>
                        <div>Madalinskiego 8</div>
                        <div>71-101 Szczecin, Poland</div>
                        <div>Email: info@webz.com.pl</div>
                        <div>Phone: +48 444 666 3333</div>
                    </div>

                    <div class="col-sm-6">
                        <h6 class="mb-3">To:</h6>
                        <div>
                            <strong>Bob Mart</strong>
                        </div>
                        <div>Attn: Daniel Marek</div>
                        <div>43-190 Mikolow, Poland</div>
                        <div>Email: marek@daniel.com</div>
                        <div>Phone: +48 123 456 789</div>
                    </div>

                </div>

                <div class="table-responsive-sm">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th class="center">#</th>
                                <th>Articulos & Description</th>
                                <th>Cant.</th>

                                <th class="right">Precio</th>
                                <th class="center">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="center">1</td>
                                <td class="left strong" id="invoice-specs-info">1 VCPU with 18 GB of ram and 30GB disk usage with unlmited transferr</td>
                                <td class="left">1</td>
                                <td class="right" id="invoice-specs-price">$999,00</td>
                                <td class="right" id="invoice-specs-price-total">$999,00</td>
                            </tr>
                            <tr class="hidden-section" id="storage-row">
                                <td class="center">2</td>
                                <td class="left strong" id="invoice-storage-info">extra 3 TB of storage</td>
                                <td class="left">1</td>
                                <td class="right" id="invoice-storage-price">$319,00</td>
                                <td class="right" id="invoice-storage-price-total">$319,00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-5">

                    </div>

                    <div class="col-lg-4 col-sm-5 ml-auto">
                        <table class="table table-clear">
                            <tbody>
                                <tr>
                                    <td class="left">
                                        <strong>Subtotal</strong>
                                    </td>
                                    <td class="right" id="invoice-subtotal">$8.497,00</td>
                                </tr>
                                <tr>
                                    <td class="left">
                                        <strong>ITMBS (7%)</strong>
                                    </td>
                                    <td class="right" id="invoice-itmbs">$679,76</td>
                                </tr>
                                <tr>
                                    <td class="left">
                                        <strong>Total</strong>
                                    </td>
                                    <td class="right">
                                        <strong id="invoice-total">$7.477,36</strong>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>

                </div>

            </div>
        </div>
    </div>



	<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="{{asset('js/rangeslider.min.js')}}"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js"></script>
	<script type="text/javascript" src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>
    
    <script>
        $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
    </script>
	<script>
    $(function() {
    	var packages = @json($packages);
        var $document = $(document);
        var selector = '#main_selector';
        var $element = $(selector);
        
        $document.on('input', selector, function(e) {
        	var number = e.target.value;
            var package = packages[number]

            var subtotal = package.linux_price_per_month
            var itmbs = parseInt(package.linux_price_per_month) * 0.07
            var total = subtotal + itmbs

            // update Values
            $('#invoice-specs-info').text(package.vCpu + ' VCPU with '+ package.ram +' of ram and '+ package.disk +'disk usage with unlmited transfer')
            $('#invoice-specs-price').text(package.linux_price_per_month)
            $('#invoice-specs-price-total').text(package.linux_price_per_month)

            $('#invoice-subtotal').text(subtotal)
            $('#invoice-itmbs').text(itmbs)

            $('#invoice-total').text(total)



            $('#vcpu').text(package.vCpu)
            $('#ram').text(package.ram)
            $('#disk').text(package.disk)
            $('#transfer').text(package.transfer_limit)
            $('#linux_price_per_month').text(package.linux_price_per_month)
            $('#windows_price_per_month').text(package.windows_price_per_month)
            $('#linux_price_per_year').text(package.linux_price_per_year)
            $('#windows_price_per_year').text(package.windows_price_per_year)

            $('#package_id').val(package.id)
        }); 


        var packages = @json($packages);
        var $document = $(document);
        var selector = '#total_storage';
        var $element = $(selector);
        $document.on('input', selector, function(e) {
        	var number = e.target.value;
            var price = 10 * number
            if(number > 0){
            	$('#storage-row').removeClass('hidden-section');
	        	$('#invoice-storage-info').text('extra '+ number +' TB of storage')
	            $('#invoice-storage-price').text(price)
	            $('#invoice-storage-price-total').text(price)

                $('#extra_storage_space').val(number)
                $('#extra_storage_price_input').val(price)


            }else{
            	$('#storage-row').addClass('hidden-section');
            }
		    
        	
            $('#extra_storage_price').text( number + ' TB / +' + price + ' $')
        }); 


    });
    </script>

    <script>
		function CreatePDFfromHTML() {
			
		    var HTML_Width = $("#invoice").width();
		    var HTML_Height = $("#invoice").height();
		    var top_left_margin = 15;
		    var PDF_Width = HTML_Width + (top_left_margin * 2);
		    var PDF_Height = (PDF_Width * 1.5) + (top_left_margin * 2);
		    var canvas_image_width = HTML_Width;
		    var canvas_image_height = HTML_Height;

		    var totalPDFPages = Math.ceil(HTML_Height / PDF_Height) - 1;

		    // showing the invoice, so that the broser can take an image out of it 
		    $('#invoice').removeClass('hidden-section');

		    html2canvas($("#invoice")[0]).then(function (canvas) {
		        var imgData = canvas.toDataURL("image/jpeg", 1.0);
		        var pdf = new jsPDF('p', 'pt', [PDF_Width, PDF_Height]);
		        pdf.addImage(imgData, 'JPG', top_left_margin, top_left_margin, canvas_image_width, canvas_image_height);
		        for (var i = 1; i <= totalPDFPages; i++) { 
		            pdf.addPage(PDF_Width, PDF_Height);
		            pdf.addImage(imgData, 'JPG', top_left_margin, -(PDF_Height*i)+(top_left_margin*4),canvas_image_width,canvas_image_height);
		        }
		        pdf.save("Your_PDF_Name.pdf");
		        $("#invoice").hide();

		        // hidding the invoice
		        $('#invoice').addClass('hidden-section');
		    });

			

		}
    </script>

</body>
</html>
