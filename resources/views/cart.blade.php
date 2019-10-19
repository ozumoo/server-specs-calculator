
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
                <span>CART</span>
                <span> | </span>
                <span> <a href="{{action('Admin\packageController@pricing')}}">Pricing</a> </span>


                <span onClick="CreatePDFfromHTML()" style="float: right;">Export</span>
                <span onClick="CreatePDFfromHTML()" style="float: right;"> | </span>
                <span  style="float: right;"><a href="{{action('cartController@destroy')}}">Delete Cart</a></span>

            </div>
            <div class="card-body">
                <div class="table-responsive-sm">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th class="center">#</th>
                                <th>Order</th>
                                <th>Cant.</th>

                                <th class="right">Precio</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $sum = 0;    
                            @endphp
                            @foreach($orders as $order)
                                @php
                                    $sum += $order->total_price;    
                                @endphp
                                <tr>
                                    <td class="center">1</td>
                                    <td class="left strong" id="invoice-specs-info">{{$order->vCpu}}  with {{$order->ram}}  and {{$order->disk}}  usage with {{$order->transfer_limit}} and {{$order->extra_storage_space}} TB of extra storage</td>
                                    <td class="left">1</td>
                                    <td class="right" id="invoice-specs-price">{{$order->total_price}}</td>
                                </tr>
                            @endforeach
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
                                    <td class="right" id="invoice-subtotal">{{$sum}}</td>
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

            });
        }
    </script>

</body>

</html>