<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.css">
</head>

<body>
    
    <div class="container html-content" id="invoice">
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
                            <tr class="hidden-section">
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
                                    <td class="right" id="invoice-itmbs" >$679,76</td>
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
	
		function CreatePDFfromHTML() {
		    var HTML_Width = $(".html-content").width();
		    var HTML_Height = $(".html-content").height();
		    var top_left_margin = 15;
		    var PDF_Width = HTML_Width + (top_left_margin * 2);
		    var PDF_Height = (PDF_Width * 1.5) + (top_left_margin * 2);
		    var canvas_image_width = HTML_Width;
		    var canvas_image_height = HTML_Height;

		    var totalPDFPages = Math.ceil(HTML_Height / PDF_Height) - 1;

		    html2canvas($(".html-content")[0]).then(function (canvas) {
		        var imgData = canvas.toDataURL("image/jpeg", 1.0);
		        var pdf = new jsPDF('p', 'pt', [PDF_Width, PDF_Height]);
		        pdf.addImage(imgData, 'JPG', top_left_margin, top_left_margin, canvas_image_width, canvas_image_height);
		        for (var i = 1; i <= totalPDFPages; i++) { 
		            pdf.addPage(PDF_Width, PDF_Height);
		            pdf.addImage(imgData, 'JPG', top_left_margin, -(PDF_Height*i)+(top_left_margin*4),canvas_image_width,canvas_image_height);
		        }
		        pdf.save("Your_PDF_Name.pdf");
		        $(".html-content").hide();
		    });
		}
    </script>

</body>

</html>