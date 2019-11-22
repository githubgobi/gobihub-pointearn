<!-- Placed js at the end of the page so the pages load faster -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/jquery-ui-1.12.1/jquery-ui.min.js"></script>
    <script src="assets/vendor/popper.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendor/jquery-ui-touch/jquery.ui.touch-punch-improved.js"></script>
    <script src="assets/vendor/lobicard/js/lobicard.js"></script>
    <script class="include" type="text/javascript" src="assets/vendor/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/vendor/jquery.scrollTo.min.js"></script>

    <!--datatables-->
    <script src="assets/vendor/data-tables/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/data-tables/dataTables.bootstrap4.min.js"></script>


    <!--[if lt IE 9]>
    <script src="assets/vendor/modernizr.js"></script>
    <![endif]-->
    <!--select2-->
    <script src="assets/vendor/select2/js/select2.min.js"></script>
    <script src="assets/vendor/select2-init.js"></script>
 <!--form basic wizard init-->
    <script src="assets/vendor/form-wizard-init.js"></script>

    <!--jquery validate-->
    <script src="assets/vendor/form-validator/jquery.form-validator.js"></script>

    <!--jquery steps-->
    <script src="assets/vendor/jquery-steps/jquery.steps.min.js"></script>

    <!--Dropzone-->
    <script src="assets/vendor/dropzone/dropzone.js"></script>
    <script src="assets/vendor/dropzone-init.js"></script>

     <!--date picker-->
    <script src="assets/vendor/date-picker/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/vendor/date-picker-init.js"></script>
    <script src="assets/vendor/month-picker/monthpicker.min.js"></script>

    <script src="assets/vendor/datetime-picker/js/bootstrap-datetimepicker.js"></script>
    <script src="assets/vendor/timepicker/js/bootstrap-timepicker.js"></script>
    <script src="assets/vendor/datetime-picker-init.js"></script>

    
    <!--jquery stepy-->
    <script src="assets/vendor/jquery-steps/jquery.stepy.js"></script>
    <!-- Sweet Alert-->
    <script src="assets/vendor/sweetalert/sweetalert.min.js"></script>
    <!-- Modal -->
    <script src="assets/vendor/jquery-modal/jquery.modal.min.js"></script>
    <!-- Auto Number -->
    <script src="assets/vendor/autonumeric/autoNumeric-1.9.41.js"></script>
    <!--echarts-->
    <script type="text/javascript" src="assets/vendor/echarts/echarts-all-3.js"></script>
    <!--init scripts-->

     <!--input mask-->
    <script src="assets/vendor/input-mask/jquery.inputmask.bundle.js"></script>
    <script src="assets/vendor/input-mask-init.js"></script>

    <script src="assets/vendor/dropzone/dropzone.js"></script>
    <script src="assets/vendor/dropzone-init.js"></script>

    <!--toastr-->
    <script src="assets/vendor/toastr-master/toastr.js"></script>
    <script src="assets/vendor/toastr-master/toastr-init.js"></script>

    <script src="assets/js/scripts.min.js"></script>



    <script>
        $('.MonthYear').MonthPicker({ Button: false, MonthFormat: 'MM yy' });
        $(".form-control").attr('autocomplete', 'off');

        $(document).ready(function () {          
        $.extend($.fn.autoNumeric.defaults, {              
            aSep: ',',              
            aDec: '.'          
        });      
    });  

        $(document).on("keypress", 'form', function (e) {
    var code = e.keyCode || e.which;
    if (code == 13) {
        e.preventDefault();
        return false;
    }
});

    jQuery(function($) {
        $('.inr').autoNumeric('init',{mDec:0,dGroup:2});    
    });
    
        $(document).ready(function() {
            $('#bs4-table').DataTable();
        } );

        function show_district(parent_id){
        
        $.ajax({
        url: 'lib/ajax.php',
        type: 'post',
        data: {'id':parent_id, type: 'district' },
        success: function(data) { 
           eval(data);
        }
    });
    }

     function show_district_select(parent_id){
        
        $.ajax({
        url: 'lib/ajax.php',
        type: 'post',
        data: {'id':parent_id, type: 'district_select' },
        success: function(data) { 
           eval(data);
        }
    });
    }

    function show_city(parent_id){
        
        $.ajax({
        url: 'lib/ajax.php',
        type: 'post',
        data: {'id':parent_id, type: 'city' },
        success: function(data) { 
           eval(data);
        }
    });
    }

    function show_model(parent_id){
        
        $.ajax({
        url: 'lib/ajax.php',
        type: 'post',
        data: {'id':parent_id, type: 'model' },
        success: function(data) { 
           eval(data);
        }
    });
    }

     function show_model_select_1(destination,parent_id){
        
        $.ajax({
        url: 'lib/ajax.php',
        type: 'post',
        data: {'id':parent_id, type: 'model_select_1', destination:destination },
        success: function(data) { 
           eval(data);
        }
    });
    }

    function show_model_select(parent_id){
        
        $.ajax({
        url: 'lib/ajax.php',
        type: 'post',
        data: {'id':parent_id, type: 'model_select' },
        success: function(data) { 
           eval(data);
        }
    });
    }

    function show_varient_1(destination,parent_id){
        
        $.ajax({
        url: 'lib/ajax.php',
        type: 'post',
        data: {'id':parent_id, type: 'varient_1', destination:destination },
        success: function(data) { 
           eval(data);
        }
    });
    }

    function show_varient(parent_id){
        
        $.ajax({
        url: 'lib/ajax.php',
        type: 'post',
        data: {'id':parent_id, type: 'varient' },
        success: function(data) { 
           eval(data);
        }
    });
    }

    function show_varient_select(parent_id){
        
        $.ajax({
        url: 'lib/ajax.php',
        type: 'post',
        data: {'id':parent_id, type: 'varient_select' },
        success: function(data) { 
           eval(data);
        }
    });
    }

    function show_customer(customer_type){

        $.ajax({
        url: 'lib/ajax.php',
        type: 'post',
        data: {'customer_type':customer_type, type: 'customer' },
        success: function(data) { 
           eval(data);
        }
    });

    }

    function show_customer_new(customer_type){

        $.ajax({
        url: 'lib/ajax.php',
        type: 'post',
        data: {'customer_type':customer_type, type: 'customer_new' },
        success: function(data) { 
           eval(data);
        }
    });

    }

     function showBrokerageCar(type){
        
        $.ajax({
        url: 'lib/ajax.php',
        type: 'post',
        data: {'car_type':type, type: 'show_brokerage_car' },
        success: function(data) { 
           eval(data);
        }
    });
    }

    function showCars(type){
        
        $.ajax({
        url: 'lib/ajax.php',
        type: 'post',
        data: {'car_type':type, type: 'show_cars' },
        success: function(data) { 
           eval(data);
        }
    });
    }



    function show_customer_datatable(customer_type){
        customer_type=$('input[name=sold_to]:checked').val(); 
        type_search=$("#type_search").val();
        search_value=$("#search_value").val();
        $.ajax({
        url: 'lib/ajax.php',
        type: 'post',
        data: {'customer_type':customer_type, 'type_search':type_search, 'search_value':search_value, type: 'customer_datatable' },
        success: function(data) { 
            $('#bs4-table').DataTable().destroy();
           $("#load_lead_master").html(data);
           $('#bs4-table').DataTable().draw();
        }
    });

    }

    function show_customer_sale(){
        customer_type=$('input[name=sold_to]:checked').val(); 
        type_search=$("#type_search").val();
        search_value=$("#search_value").val();
        $.ajax({
        url: 'lib/ajax.php',
        type: 'post',
        data: {'customer_type':customer_type, 'type_search':type_search, 'search_value':search_value, type: 'customer_sale' },
        success: function(data) { 
           eval(data);
        }
    });

    }

    function show_customer_select(customer_type){

        $.ajax({
        url: 'lib/ajax.php',
        type: 'post',
        data: {'customer_type':customer_type, type: 'customer_select' },
        success: function(data) { 
           eval(data);
        }
    });

    }
    
    function submit_search(){
        document.getElementById("search_form").submit();
    }

    function data_validate(type){
        if(type=='regno'){
            var regno_code1=$("#regno_code1").val();
            var regno_code2=$("#regno_code2").val();
            if(regno_code1!="" && regno_code2!=""){
                $.ajax({
                    url: 'lib/ajax.php',
                    type: 'post',
                    data: {'regno_code1':regno_code1, 'regno_code2':regno_code2, type: 'validate_regno' },
                    success: function(data) { 
                        eval(data);
                        }
                    });
            }
        } else if(type=='mobile1'){
            var mobileno=$("#mobileno").val();
            if(regno_code1!="" && regno_code2!=""){
                $.ajax({
                    url: 'lib/ajax.php',
                    type: 'post',
                    data: {'mobileno':mobileno, type: 'validate_mobileno' },
                    success: function(data) { 
                        eval(data);
                        }
                    });
            }
        } else if(type=='aadhar_no'){
            var aadhar_no=$("#aadhar_no").val();
            if(regno_code1!="" && regno_code2!=""){
                $.ajax({
                    url: 'lib/ajax.php',
                    type: 'post',
                    data: {'aadhar_no':aadhar_no, type: 'validate_aadhaar' },
                    success: function(data) { 
                        eval(data);
                        }
                    });
            }
        }
    }

    

    function Add_tool(){
        var type_name=$("#add_type_name").val();
         $.ajax({
        url: 'lib/ajax.php',
        type: 'post',
        data: {'type_name':type_name, type: 'add_tools' },
        success: function(obj) { 
            data = jQuery.parseJSON(obj);
            $("#load_lead_master").html(data['body']);
            eval(data['msg']); 
        }
        });
        $("#add_type_name").val('');
        return false;
    }
    
    function update_tool(id,source){ 
        $('.modal').load('tools_update.php?id='+id+'&source='+source,function(){
            $('#ex1').modal({show:true});
        });
    }

    function add_customer(source){ 
        $('.modal').load('add_customer.php?source='+source,function(){
            $('#modal').modal({show:true});
        });
    }

    function DeleteTools(id,source){
        $.ajax({
        url: 'lib/ajax.php',
        type: 'post',
        data: {'id' : id, 'source': source, type: 'delete_tools' },
        success: function(obj) { 
            data = jQuery.parseJSON(obj);
            $('#bs4-table').DataTable().destroy();
            $("#load_lead_master").html(data['body']);
            $('#bs4-table').DataTable().draw();
            eval(data['msg']); 
        }
        });
    }

    function add_images(id,source){ 
        $('.modal').load('images_update.php?id='+id+'&source='+source,function(){
            $('#modal').modal({show:true});
        });
    }

 function escapeRegExp(string){
    return string.replace(/[.*+?^${}()|[\]\\]/g, "\\$&");
}
function showhp(id){
            if(id=='yes') {
                $("#hp_yes").show();
                $("#id_value").attr("required","");
                $("#bank").attr("required","");
                $("#hp_description").attr("required","");
            }
            else {
                $("#hp_yes").hide();
                $("#id_value").removeAttr("required");
                $("#bank").removeAttr("required");
                $("#hp_description").removeAttr("required");
            }
        }

        function show_car_expense_info(carid){
         $.ajax({
        url: 'lib/ajax.php',
        type: 'post',
        data: {'carid':carid, type: 'show_car_info' },
        success: function(obj) { 
            data = jQuery.parseJSON(obj);
            $("#car_detail").html(data['car_bmv']);
            $("#load_expenses").html(data['body']);
            $("#expense_by").hide();
            if(data['share']==1){  
                $("#expense_by").show();
               eval(data['expense_company']);
            } 
        }
        });
    }

    function show_brokerage_car_info(carid){
        var car_type=$('input[name=car_type]:checked').val(); 
        var carid=$("#car_id").val();
         $.ajax({
        url: 'lib/ajax.php',
        type: 'post',
        data: {'carid':carid, 'car_type':car_type, type: 'show_brokerage_car_info' },
        success: function(obj) { 
            data = jQuery.parseJSON(obj);
            $("#car_price").val(data['car_price']);
            $("#expense_amount").val(data['expense_amount']);
            $("#car_net_price").val(data['car_net_price']);
            $("#customer_selling_price").val(data['car_net_price']);
            
            $("#car_price").trigger("blur");
            $("#expense_amount").trigger("blur");
            $("#car_net_price").trigger("blur");
            $("#customer_selling_price").trigger("blur");
            calculate_profit();
        }
        });
    }

    function show_receipt_car_info(carid){
        var car_type=$('input[name=car_type]:checked').val(); 
        var carid=$("#car_id").val();
         $.ajax({
        url: 'lib/ajax.php',
        type: 'post',
        data: {'carid':carid, 'car_type':car_type, type: 'show_receipt_car_info' },
        success: function(obj) { 
            data = jQuery.parseJSON(obj);
            $("#receipt_load").html(data['data']);
            $("#buyer_name").val(data['buyer_name']);
            $("#buyer_address1").val(data['buyer_address1']);
            $("#buyer_address2").val(data['buyer_address2']);
            $("#buyer_address3").val(data['buyer_address3']);
            $("#buyer_mobile").val(data['buyer_mobile']);
            $("#seller_name").val(data['seller_name']);
            $("#seller_address1").val(data['seller_address1']);
            $("#seller_address2").val(data['seller_address2']);
            $("#seller_address3").val(data['seller_address3']);
            $("#seller_mobile").val(data['seller_mobile']);
            $("#findet").html(data['finance']);
        }
        });
    }

    function show_sale_agreement_info(carid){
        var car_type=$('input[name=car_type]:checked').val(); 
        var carid=$("#car_id").val();
         $.ajax({
        url: 'lib/ajax.php',
        type: 'post',
        data: {'carid':carid, 'car_type':car_type, type: 'show_sale_agreement_info' },
        success: function(obj) { 
            data = jQuery.parseJSON(obj);
            $("#receipt_load").html(data['data']);
            $("#buyer_name").val(data['buyer_name']);
            $("#buyer_address1").val(data['buyer_address1']);
            $("#buyer_address2").val(data['buyer_address2']);
            $("#buyer_address3").val(data['buyer_address3']);
            $("#buyer_mobile").val(data['buyer_mobile']);
            $("#seller_name").val(data['seller_name']);
            $("#seller_address1").val(data['seller_address1']);
            $("#seller_address2").val(data['seller_address2']);
            $("#seller_address3").val(data['seller_address3']);
            $("#seller_mobile").val(data['seller_mobile']);
        }
        });
    }

    function show_advance_receipt_info(carid){
        var car_type=$('input[name=car_type]:checked').val(); 
        var carid=$("#car_id").val();
         $.ajax({
        url: 'lib/ajax.php',
        type: 'post',
        data: {'carid':carid, 'car_type':car_type, type: 'show_advance_receipt_info' },
        success: function(obj) { 
            data = jQuery.parseJSON(obj);
            $("#receipt_load").html(data['data']);
            $("#buyer_name").val(data['buyer_name']);
            $("#buyer_address1").val(data['buyer_address1']);
            $("#buyer_address2").val(data['buyer_address2']);
            $("#buyer_address3").val(data['buyer_address3']);
            $("#buyer_mobile").val(data['buyer_mobile']);
            $("#seller_name").val(data['seller_name']);
            $("#seller_address1").val(data['seller_address1']);
            $("#seller_address2").val(data['seller_address2']);
            $("#seller_address3").val(data['seller_address3']);
            $("#seller_mobile").val(data['seller_mobile']);
        }
        });
    }

    function show_pending_payments(carid,source){
        $.ajax({
        url: 'lib/ajax.php',
        type: 'post',
        data: {'carid':carid, type: 'show_pending_payments', 'source' : source },
        success: function(obj) { 
            data = jQuery.parseJSON(obj);
            $('#bs4-table').DataTable().destroy();
            $("#upcoming_payments").html(data['body']);
            $("#car_name").html(data['car_name']);
            $('#bs4-table').DataTable().draw();
            $("#paid_payments").html(data['paid']);
        }
        });
    }

      
    
    

    function add_payment(id,source,record){ 
        $('.modal').load('payment_add.php?id='+id+'&source='+source+'&lastrecord='+record,function(){
            $('#modal').modal({show:true});
        });
    }

    function add_credit_payment(id,due_amount,due_date){ 
        $('.modal').load('credit_payments_add.php?id='+id+'&due_date='+due_date+'&due_amount='+due_amount,function(){
            $('#modal').modal({show:true});
        });
    }

    function add_payment_credit(id,source,record){ 
        $('.modal').load('credit_payments_add.php?id='+id+'&source='+source+'&lastrecord='+record,function(){
            $('#modal').modal({show:true});
        });
    }

    function followup_update(leadid,lead_type,cus_type,interest_id,follow_by,side){ 
        $('.modal').load('followup_update.php?leadid='+leadid+'&lead_type='+lead_type+'&cus_type='+cus_type+'&interest_id='+interest_id+'&follow_by='+follow_by+'&side='+side,function(){
            $('#modal').modal({show:true});
        });
    }

    function general_followup_update(id,type,follow_by){ 
        $('.modal').load('followup_form.php?id='+id+'&type='+type+'&follow_by='+follow_by,function(){
            $('#modal').modal({show:true});

        });
    }

    function today_leads(){ 
        $('.modal').load('todayleads_form.php',function(){
            $('#modal').modal({show:true});

        });
    }

    function general_history(id,type,follow_by){
        $('.modal').load('followup_history.php?id='+id+'&type='+type+'&follow_by='+follow_by,function(){
            $('#modal').modal({show:true});

        });
    }

    function show_car(type,id){
        $('.modal').load('inc/car_ajax.php?id='+id+'&type='+type,function(){
            $('#modal').modal({show:true});

        });
    }

    function submit_form(form_id){
        $("#"+form_id).submit();
    }

/* Expenses */

      function Add_expense(){ 
        var car_id=$("#car_id_1").val();
        var expense_type=$("#expense_type_1").val();
        var expense_date=$("#expense_date_1").val();
        var amount=$("#amount_1").val();
        var expense_company=$("#expense_company1").val();
        var description=$("#description_1").val();
         $.ajax({
        url: 'lib/ajax.php',
        type: 'post',
        data: {'car_id':car_id,'expense_type':expense_type,'expense_date':expense_date,'amount':amount,'description':description, 'expense_company': expense_company, type: 'add_expense' },
        success: function(obj) { 
            data = jQuery.parseJSON(obj);
            $("#load_last_expense").html(data['body']);
            $("#load_expenses").html(data['body1']);
            eval(data['msg']); 
        }
        });
         $("#amount_1").val('');
         $("#description_1").val('');
        return false;
    }


    function DeleteExpense(id,source){
swal({
  title: "Are you sure?",
  text: "Do you want to delete the expense?",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    $.ajax({
        url: 'lib/ajax.php',
        type: 'post',
        data: {'id' : id, 'source': source, type: 'delete_expense' },
        success: function(obj) { 
            data = jQuery.parseJSON(obj);
            $("#load_last_expense").html(data['body']);
            $("#load_expenses").html(data['body1']);
            eval(data['msg']); 
        }
        });
  }
});

        
    }

function update_expense(id,source){ 
        $('.modal').load('expenses_update.php?id='+id+'&source='+source,function(){
            $('#modal').modal({show:true});
        });
    }

     function Add_expense_office(){ 
        var expense_type=$("#expense_type_1").val();
        var expense_date=$("#expense_date_1").val();
        var amount=$("#amount_1").val();
        var description=$("#description_1").val();
         $.ajax({
        url: 'lib/ajax.php',
        type: 'post',
        data: {'expense_type':expense_type,'expense_date':expense_date,'amount':amount,'description':description, type: 'add_expense_office' },
        success: function(obj) { 
            data = jQuery.parseJSON(obj);
            $("#load_last_expense").html(data['body']);
            eval(data['msg']); 
        }
        });
         $("#amount_1").val('');
         $("#description_1").val('');
        return false;
    }

    function DeleteExpenseOffice(id,source){
swal({
  title: "Are you sure?",
  text: "Do you want to delete the expense?",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    $.ajax({
        url: 'lib/ajax.php',
        type: 'post',
        data: {'id' : id, 'source': source, type: 'delete_expense_office' },
        success: function(obj) { 
            data = jQuery.parseJSON(obj);
            $("#load_last_expense").html(data['body']);
            eval(data['msg']); 
        }
        });
  }
});

        
    }

    function update_expense_office(id,source){ 
        $('.modal').load('office_expenses_update.php?id='+id+'&source='+source,function(){
            $('#modal').modal({show:true});
        });
    }
    

$(function() {
        $("body").delegate(".date-picker-input", "focusin", function(){
            $(this).datepicker({
        format: 'dd-mm-yyyy',
        autoclose: true,
        orientation: "auto",
        templates: {
            leftArrow: '<i class="fa fa-angle-left"></i>',
            rightArrow: '<i class="fa fa-angle-right"></i>'
        }
    });

             $("body").delegate(".timepicker-default", "focusin", function(){
              $(this).timepicker();
            });    
            
        });

        $("body").delegate(".inr", "focusin", function(){
            $(this).autoNumeric('init',{aForm: true, aSep: ',',aDec: '.',mDec:0,dGroup:2});
        });


           
    });
function lead_like(lead_id,interest_id,interest_type,lead_type){
swal({
  title: "Are you sure?",
  text: "Customer Likes this Car",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
            $.ajax({
                url: 'lib/ajax.php',
                type: 'post',
                data: { type: 'lead_like', 'lead_id':lead_id, 'interest_id':interest_id, 'interest_type':interest_type, 'lead_type':lead_type },
                success: function(data) { 
                    eval(data);
                }
            });
        } });
}

function cadic_like(lead_id,carid, customer){
swal({
  title: "Its Cadic Delar car. Are you sure?",
  text: "Customer Likes this Car",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
            $.ajax({
                url: 'lib/ajax.php',
                type: 'post',
                 data: { type: 'cadic_like', 'lead_id':lead_id, 'carid':carid, 'customer' :customer },
                success: function(data) { 
                    eval(data);
                }
            });
        } });

}

function cadic_update(){
        swal({
  title: "Are you sure want to update Cadic?",
  text: "It takes little time, Please wait",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
   

  if (willDelete) {
    //$('.modal').load('cadic_update_progress.php',function(){
    //        $('#modal').modal({show:true});
    //});
            $.ajax({
                url: 'lib/ajax.php',
                type: 'post',
                 data: { type: 'cadic_update' },
                success: function(obj) { 
                    // $('#modal').modal({show:false});
                    data = jQuery.parseJSON(obj);
            eval(data['alert']);

                }
            });
        } });

}
    

/* Validate Exist */
function validate_exist(type,error){
         $.ajax({
        url: 'lib/ajax.php',
        type: 'post',
        data: $('form').serialize(),
        success: function(obj) { 
            data = jQuery.parseJSON(obj);
            eval(data['alert']); 
            eval(data['error']); 
                if(data['return']=='true') $('form').submit();
            }
        });
    }

    function show_sponcer(){
        var customer_type=$('input[name=customer_type]:checked').val(); 
        var type_search=$("#type_search").val();
        var search_value=$("#search_value").val();
        
        $.ajax({
        url: 'lib/ajax.php',
        type: 'post',
        data: {'customer_type':customer_type, 'type_search': type_search, 'search_value' : search_value, type : 'show_sponcer' },
        success: function(data) { 
            eval(data);
        }
        });
        $("#customer").focus();
    }
    function show_pending_credit(id){
        $.ajax({
        url: 'lib/ajax.php',
        type: 'post',
        data: {'id':id, type: 'show_pending_credits', 'source' : 'receive' },
        success: function(obj) { 
            data = jQuery.parseJSON(obj);
            $('#bs4-table').DataTable().destroy();
            $("#upcoming_payments").html(data['body']);
            $('#bs4-table').DataTable().draw();
            $("#paid_payments").html(data['paid']);
        }
        });
    }
    function Add_sharing(id){ 
        var car_id=$("#car_id_1").val();
        var expense_date=$("#sharing_date_1").val();
        var amount=$("#amount_1").val();
        var description=$("#description_1").val();
         $.ajax({
        url: 'lib/ajax.php',
        type: 'post',
        data: {'car_id':car_id,'credit_id':id,'sharing_date':expense_date,'amount':amount,'description':description,  type: 'add_credit_sharing' },
        success: function(obj) { 
            data = jQuery.parseJSON(obj);
            $("#load_last_expense").html(data['body']);
            eval(data['msg']); 
        }
        });
         $("#amount_1").val('');
         $("#description_1").val('');
        return false;
    }


    function DeleteSharing(id,source){
swal({
  title: "Are you sure?",
  text: "Do you want to delete the expense?",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    $.ajax({
        url: 'lib/ajax.php',
        type: 'post',
        data: {'id' : id, 'source': source, type: 'delete_credit_sharing' },
        success: function(obj) { 
            data = jQuery.parseJSON(obj);
            $("#load_last_expense").html(data['body']);
            eval(data['msg']); 
        }
        });
  }
});

        
    }

function update_sharing(id,source){ 
        $('.modal').load('expenses_update.php?id='+id+'&source='+source,function(){
            $('#modal').modal({show:true});
        });
    }

    function closefinance(id){
        swal({
  title: "Are you sure?",
  text: "Do you want to close the finance?",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    $.ajax({
        url: 'lib/ajax.php',
        type: 'post',
        data: {'id' : id, type: 'close_finance' },
        success: function(obj) { 
            data = jQuery.parseJSON(obj);
           // $("#load_last_expense").html(data['body']);
            eval(data['alert']); 
            $('#btn'+id).hide();
        }
        });
  }
});
    }
    </script>

    