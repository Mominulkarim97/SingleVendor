

<?php $__env->startSection('content'); ?>
<section class="content-header">
<h1>
    Point Of Sale
    <small>Control panel</small>
</h1>
</section>
<!-- Main content -->
<section class="content">
<!-- Small boxes (Stat box) -->
<?php if(Session::has('stock_add_message')): ?>
    <div class="row">
        <div class="col-md-6">
            <p class="alert <?php echo e(Session::get('alert-class', 'alert-success')); ?>">
                <?php echo e(Session::get('stock_add_message')); ?></p>
            <?php echo e(Session::forget('stock_add_message')); ?>

        </div>
    </div>
<?php endif; ?>
<div class="row">
<div class="col-md-12">
<div class="box">
<div class="box-header">
    
</div>
<!-- /.box-header -->
<div class="box-body">
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12">
                    <div class="" style="margin-left: 10px;">
                        <button class="btn-info btn" onclick="selectProductShow()"
                            id="productBtn">Products</button>
                        <button class="btn-secondary btn" onclick="selectBundleShow()"
                            id="boundleBtn">Bundles</button>
                        <h3 id="categoryTitle">Products</h3>
                    </div>
                    <div class="" style="margin-left: 10px;">
                        <div class="">
                            <input type="text" placeholder="Search.."
                                style="height: 40px; max-width: 500px; min-width: 200px;"
                                id="productSearch" name="productSearch"
                                onkeyup="productSearchFunction()">
                        </div>
                    </div>
                </div>
            </div>
            <br>


            <div class="row products" id="products">
                <div class="col-md-12">
                    <div class="timeline-body">
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-3" id="<?php echo e($product->id); ?>"
                                style="margin-left: 10px; margin-right: 10px;">
                                <div class="row text-center">
                                    <span class="" style="margin-left: 10px;">
                                        <?php echo e(mb_strimwidth($product->title, 0, 25, '...')); ?>

                                    </span>
                                </div>
                                <div class="row text-center">
                                    <img src="<?php echo e(asset($product->image_path)); ?>" height="100" width="150"
                                        class="margin" style=""
                                        onclick="onImageClick(<?php echo e($product->id); ?>, <?php echo e($product->unit_price); ?>, '<?php echo e(strval($product->title)); ?>', '<?php echo e(strval($product->art_no)); ?>', <?php echo e($product->stock); ?>)"
                                        id="img-<?php echo e($product->id); ?>">
                                </div>
                                <div class="row text-center">
                                    Stock: <?php echo e($product->stock); ?>

                                    <br>
                                    Origin : <?php echo e($product->origin); ?>

                                    
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>


            <div class="row bundles" id="bundles">
                <div class="col-md-12">
                    <div class="timeline-body">
                        <?php $__currentLoopData = $bundles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bundle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-3" id="<?php echo e($bundle->id); ?>"
                                style="margin-left: 10px; margin-right: 10px;">
                                <div class="row text-center">
                                    <span class="" style="margin-left: 10px;">
                                        <?php echo e(mb_strimwidth($bundle->name, 0, 25, '...')); ?>

                                    </span>
                                </div>
                                <div class="row text-center">
                                    <img src="<?php echo e(asset('images/bundle.png')); ?>" height="120" width="150"
                                        class="margin" style=""
                                        onclick="selectBundle(<?php echo e($bundle->id); ?>)"
                                        id="img-bn-<?php echo e($bundle->id); ?>">
                                </div>
                                <div class="row text-center">
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
        <?php if(Auth::user()->is_admin==5): ?>
            <?php else: ?>
            <h3>Customer and selected items</h3>
            <?php endif; ?>

            <div class="row">
                <div class="col-md-12">
                    <form class="form-horizontal" id="insert_form" enctype="multipart/form-data" >
                        <?php echo csrf_field(); ?>
                        
                        <div class="box-body">
                            <div class="form-group">
                                
                                <div class="col-sm-10">
                                    <select class="form-control select2" id="customerId"
                                        name="customerId" style="width: 100%;">
                                        <option value="" selected>Select Register Customer</option>
                                        <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($customer->id .','. $customer->name); ?>"
                                                <?php if(Auth::user()->name == $customer->name): ?>
                                                    selected
                                                <?php endif; ?>
                                                <?php if(Auth::user()->is_admin != 1 &&  Auth::user()->name != $customer->name): ?>
                                                    disabled
                                                
                                                <?php endif; ?>
                                                >
                                                <?php echo e($customer->name); ?>

                                                - <?php echo e($customer->mobile); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="col-md-11">
                            <table class="table table-hover" id="dynamic_field" onchange="">
                                <thead>
                                    <tr>
                                        <th>SKU.</th>
                                        <th>Name</th>
                                        <th>Quantity</th>
                                        <th>Unit Price</th>
                                        <th>Subtotal</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            Total Qty.
                                        </span>
                                        <input type="text" class="form-control" id="totalQty"
                                            name="totalQty" disabled>
                                    </div>
                                    <!-- /input-group -->
                                </div>
                                <!-- /.col-lg-6 -->
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            Total Amount
                                        </span>
                                        <input type="text" class="form-control" id="totalAmount"
                                            name="totalAmount">
                                    </div>
                                    <!-- /input-group -->
                                </div>
                                <div class="col-lg-12">
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="input-group date">
                                                <div class="input-group-addon">
                                                    Order Date
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                                <input type="text" id="startDate" name="startDate"
                                                    class="form-control datetimepicker1" required
                                                    autocomplete="off">
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <br>
                                    <button type="button" class="btn btn-primary" name="calculate"
                                        id="calculate" onclick="calculatex()">Calculate</button>
                                    <span style="padding-left: 15px" id="rentTime"></span>
                                </div>
                                <div class="col-lg-6">
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            Discount
                                        </span>
                                        <input type="text" class="form-control" id="discount"
                                            name="discount">
                                    </div>
                                    <!-- /input-group -->
                                </div>
                                <!-- /.col-lg-6 -->
                                <div class="col-lg-6">
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            Paid
                                        </span>
                                        <input type="text" class="form-control" id="paid" name="paid" readonly>
                                    </div>
                                    <!-- /input-group -->
                                </div>

                                <div class="col-lg-6">
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            Net Pay
                                        </span>
                                        <input type="number" readonly class="form-control" id="netpay" name="netpay">
                                    </div>
                                    <!-- /input-group -->
                                </div>

                                <div class="col-lg-6">
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            Ref.
                                        </span>
                                        <input type="text" class="form-control" id="ref" name="ref">
                                    </div>
                                    <!-- /input-group -->
                                </div>

                                

                                


                                
                                <!-- /.col-lg-6 -->
                                <div class=" col-lg-12 text-center">
                                    <br>
                                    <button class="btn btn-primary btn-lg btn-block"
                                        id="sslczPayBtn"
                                        type="submit"
                                        token="if you have any token validation"
                                        postdata="your javascript arrays or objects which requires in backend"
                                        order="If you already have the transaction generated for current order"
                                        endpoint="<?php echo e(url('/pay-via-ajax')); ?>"
                                        > Pay Now
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.box-body -->
</div>
</div>
</div>

</section>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.21.0/moment.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

    <script>

        $(document).ready(function(){
            var obj = {};

            $("#sslczPayBtn").click(function(){
                obj.cus = $('#customerId').val();
                obj.amount = $('#netpay').val();
                $('#sslczPayBtn').prop('postdata', obj);

                $.ajax({
                    type: "POST",
                    url: "http://127.0.0.1:8000/api/store_pos",
                    data : $('#insert_form').serialize(),
                    dataType : "json",
                    success: function(data)
                    {
                        console.log(data);
                    }
                });

            });

            // $("#insert_form").submit(function(e){
            // e.preventDefault();
            //     $.ajax({
            //         type: "POST",
            //         url: "http://127.0.0.1:8000/api/store_pos",
            //         data : $('#insert_form').serialize(),
            //         dataType : "json",
            //         success: function(data)
            //         {
            //             console.log(data);
            //         }
            //     });
            // });

        });

        (function (window, document) {
        var loader = function () {
            var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];
            // script.src = "https://seamless-epay.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7); // USE THIS FOR LIVE
            script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7); // USE THIS FOR SANDBOX
            tag.parentNode.insertBefore(script, tag);
        };

        window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
    })(window, document);
    </script>

    <script>
        $(document).ready(function(){
            // if ($("#discount").change == true) {
            //     alert("Hi");
            // }

            $("#discount").change(function(){
                var netPay = $("#totalAmount").val() - $("#discount").val();
                document.getElementById("netpay").value = netPay;
                document.getElementById("paid").value = netPay;
                // alert(netPay);
            });
        });
    </script>

    <script>
        $(document).ready(function(){
            $("#transaction_code").hide();
            $('#payment_bkash').on('click', function () {
            if ($(this).prop('checked') == true) {
                $("#transaction_code").show();
            }else{
                $("#transaction_code").hide();
            }
        });

        $('#payment_bank').on('click', function () {
            if ($(this).prop('checked') == true) {
                $("#transaction_code").show();
            }else{
                $("#transaction_code").hide();
            }
        });

        $('#payment_cash').on('click', function () {
            if ($(this).prop('checked') == true) {
                $("#transaction_code").hide();
            }else{
                $("#transaction_code").show();
            }
        });

    });

    </script>
    




    <script type="text/javascript">
        $(function() {
            $('.select2').select2()
        });

        // function alertOnEmptyCart() {
        //     if (document.getElementById('dynamic_field').rows.length < 2) {

        //     }
        // }
        // Search

        // Bundle and product showing toggle button
        var productBtn = document.getElementById("productBtn");
        var boundleBtn = document.getElementById("boundleBtn");

        var products = document.getElementById("products");
        var bundles = document.getElementById("bundles");
        var categoryTitle = document.getElementById("categoryTitle");

        bundles.style.display = "none"

        function selectProductShow() {

            productBtn.classList.remove("btn-secondary");
            boundleBtn.classList.remove("btn-info");
            productBtn.classList.add("btn-info");

            products.style.display = "block"
            bundles.style.display = "none"
            categoryTitle.innerText = "Products"
        }

        function selectBundleShow() {

            boundleBtn.classList.remove("btn-secondary");
            productBtn.classList.remove("btn-info");
            boundleBtn.classList.add("btn-info");

            bundles.style.display = "block"
            products.style.display = "none"
            categoryTitle.innerText = "Boundles"
        }

        function selectBundle(id) {

            var isRemove = false;
            var styleValue = document.getElementById("img-bn-" + id).style.border;
            console.log(styleValue);
            if (styleValue == '5px solid green') {
                document.getElementById("img-bn-" + id).style.border = '';
                isRemove = true;
                // remove row from cart
                // this.removeProductOnCross(id);
            } else {
                isRemove = false;
                document.getElementById("img-bn-" + id).style.border = '5px solid green';
            }

            fetch('http://127.0.0.1:8000/api/bundle-products/' + id)
                .then(response => response.json())
                .then(data => {
                    data.forEach(a => onImageClick(a.id, a.unit_price, a.title, a.art_no, a.stock, a.quantity, isRemove, true))
                });
        }


        const pId = [
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                [<?php echo e($p->id); ?>, "<?php echo e($p->title); ?>" , "<?php echo e($p->art_no); ?>"],
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        ];

        var i = 0;

        function productSearchFunction() {
            var x = document.getElementById("productSearch").value;

            if (x == '') {
                console.log('All products:');
                pId.forEach(function(value) {
                    console.log(value[0], value[1],value[2]);
                    document.getElementById(value[0]).style.display = 'block';
                });
            } else {
                var filter = x.toUpperCase();
                pId.forEach(function(value) {
                    console
                    var textValue = value[1].toUpperCase();
                    var skuValue = value[2].toUpperCase();
                    console.log(textValue, filter,skuValue);
                    if (textValue.indexOf(filter) !== -1) {
                        document.getElementById(value[0]).style.display = 'block';
                    }
                    else if (skuValue.indexOf(filter) !== -1) {
                        document.getElementById(value[0]).style.display = 'block';
                    }
                    else {
                        document.getElementById(value[0]).style.display = 'none';
                    }
                });
            }
        }
        // Search End
        // Image select
        function onImageClick(prodId, unitPrice, title, artNo, stock, prevQuantity = 1, isRemove = false, bundle = false) {
            console.log(stock);
            // var price = unitPrice;
            // console.log(price);
            var styleValue = document.getElementById("img-" + prodId).style.border;
            if (styleValue == '5px solid green') {
                if(isRemove == false && bundle == true){
                    return false;
                }
                document.getElementById("img-" + prodId).style.border = '';
                // remove row from cart
                this.removeProductOnCross(prodId);
            } else {
                if(isRemove == true && bundle == true){
                    return false;
                }
                document.getElementById("img-" + prodId).style.border = '5px solid green';
                // add row in cart

                var table = document.getElementById('dynamic_field');
                var rowCount = document.getElementById('dynamic_field').rows.length;
                var row = table.insertRow(rowCount);
                row.id = 'row' + prodId;
                row.className = "targetfields";
                var cell0 = row.insertCell(0);
                var cell1 = row.insertCell(1);
                var cell2 = row.insertCell(2);
                var cell3 = row.insertCell(3);
                var cell4 = row.insertCell(4);
                var cell5 = row.insertCell(5);
                var cell6 = row.insertCell(6);

                cell0.innerHTML = artNo;
                cell1.innerHTML = title;


                cell2.innerHTML =
                    '<input type="number" name="quantity[]" id="quantity[]" class="form-control qty" value="' +
                    prevQuantity + '" min="1" max="' +
                    stock + '" onchange="matchUnitAndSubTotal()"/>';
                cell3.innerHTML =
                    '<input type="text" name="unitPrice[]" class="form-control" value="'+unitPrice+'" onchange="matchUnitAndSubTotal()"/>';
                cell4.innerHTML =
                    '<input type="text" name="subTotal[]" id="subTotal[]" class="form-control subtotal" value=""/>';

                cell5.innerHTML = '<button type="button" name="remove" id="' + rowCount +
                    '" class="btn btn-danger btn_remove" onclick="removeProductOnCross(' + prodId + ')">X</button>';

                cell6.innerHTML = '<input type="hidden" name="productId[]" id="productId[]" class="form-control" value="' +
                    prodId + '"/>';
            }
        }

        function removeProductOnCross(button_id) {
            var rowId = 'row' + button_id;
            var row = document.getElementById(rowId);
            row.parentNode.removeChild(row);
            document.getElementById("img-" + button_id).style.border = '';
        }
        // Image select End
        // Update Form Fileds

        function calculatex() {
            var table = document.getElementById("dynamic_field");
            var totQty = 0;
            const val = document.querySelectorAll('.form-control.qty');
            let sum = 0;
            for (let v of val) {
                sum += parseInt(v.value);
                // console.log(sum);
            }
            var totalQty = document.getElementById('totalQty');
            totalQty.value = sum;

            const val2 = document.querySelectorAll('.form-control.subtotal');
            let sum2 = 0.0;
            for (let v of val2) {
                sum2 = sum2 + parseFloat(v.value);
                console.log(sum2);
            }
            // var returnDateElement = document.getElementById('returnDate');
            // var returnDate = returnDateElement.value;

            // Start date new added
            var startDateElement = document.getElementById('startDate');
            var startDate = startDateElement.value;

            // const date1 = new Date(returnDate);
            // const date2 = new Date(startDate);
            // const diffTime = Math.abs(date2 - date1) + 1;
            // const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));

            // Showing time difference from start date to end date
            // document.getElementById("rentTime").innerHTML = diffDays + " days for rent";

            var totalAmount = document.getElementById('totalAmount');
            totalAmount.value = sum2;

            // diffDays
            //     ?
            //     totalAmount.value = sum2 * diffDays :
            //     totalAmount.value = sum2;

            var netPay =  document.getElementById('netpay');
            var paid =  document.getElementById('paid');
            netPay.value = sum2;
            paid.value = sum2;


        }

        function matchUnitAndSubTotal() {
            var table = document.getElementById('dynamic_field');
            for (var i = 1, row; row = table.rows[i]; i++) {
                row.cells[4].querySelector("input").value = row.cells[2].querySelector("input").value * row.cells[3]
                    .querySelector("input").value;
            }
        }

        function checkButton() {
            var button = document.getElementById('sslczPayBtn');
            if (document.getElementById('dynamic_field').getElementsByTagName('tr').length > 1) {
                button.style.display = '';
            } else {
                button.style.display = 'none';
            }
        }



        $(function() {
            $('.datetimepicker1').daterangepicker({
                autoUpdateInput: false,
                singleDatePicker: true,
                timePicker: false,
                showDropdowns: true,
                timePicker24Hour: false,
                minDate: new Date(),
            });
            $('.datetimepicker1').on('apply.daterangepicker', function(ev, picker) {
                $(this).val(picker.startDate.format('MM/DD/YYYY'));
            });
            $('.datetimepicker1').on('cancel.daterangepicker', function(ev, picker) {
                $(this).val('');
            });

            $(document).ready(function() {
                setInterval("checkButton()", 500);
            });
        });

    </script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\All_works\online class\final project\project\laravel\Shop_management\resources\views/pos/index.blade.php ENDPATH**/ ?>