    <!-- Header -->
    @include('header')
 <!-- Sidebar -->
    @include('sidebar')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>User Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <div class="col-md-12">
            <!-- general form elements -->
            <div class="card  primary-card">
              <div class="card-header">
                <h3 class="card-title">User Details</h3>
				@if ($errors->any())
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div><br />
    			@endif
              </div>
              <!-- /.card-header -->
              <!-- form start -->
			  <form method="POST" action="{{ url('profiledetails') }}" enctype="multipart/form-data">
@csrf
	<div class="card-body">
		<div class="row">
        <div class="col-6">
				<div class="form-group">
				<label for="quartertype">{{  __('message.quarter_cate') }}</label> 
        {{ Form::select('quartertype',getBasicPay(),'',['id'=>'quartertype','class'=>'form-control select2']) }}                                       
				</div>
			</div>
		
		
		</div>
        <div class="card-header">
      <h3 class="card-title"> ગાંધીનગરમાં અત્યારે જે કક્ષાના વસવાટમાં રહેતા હો તેની માહિતી</h3>
   </div><br>
		<div class="row">
		<div class="col-3">
				<div class="form-group">
				<label for="designation">{{  __('message.prv_quarter_type') }}</label>
				<input type="text" value="{{isset($users->designation)?$users->designation:''}}" class="form-control" id="prv_quarter_type" name="prv_quarter_type" placeholder="Designation">
				</div>
			</div>
			<div class="col-3">
				<div class="form-group">
				<label for="prv_area">{{  __('message.prv_area') }} </label>
				<input type="text" value="{{isset($users->prv_area)?$users->prv_area:''}}"  class="form-control" id="prv_area" name="prv_area" placeholder="Enter office">
				</div>
			</div>
			<div class="col-3">
				<div class="form-group">
				<label for="prv_blockno">{{  __('message.prv_blockno') }} </label>
				<input type="text" value="{{isset($users->prv_blockno)?$users->prv_blockno:''}}"  class="form-control" id="prv_blockno" name="prv_blockno" placeholder="Enter office">
				</div>
			</div>
			<div class="col-3">
				<div class="form-group">
				<label for="prv_unitno">{{  __('message.prv_unitno') }} </label>
				<input type="text" value="{{isset($users->prv_unitno)?$users->prv_unitno:''}}"  class="form-control" id="prv_unitno" name="prv_unitno" placeholder="Enter office">
				</div>
			</div>
			</div>
     
		<div class="row">
		
			<div class="col-6"> 
				<div class="form-group">
				<label for="prv_allotment_details">{{  __('message.prv_allotment_details') }}</label>
				<input type="text" value="{{isset($users->prv_allotment_details)?$users->prv_allotment_details:''}}"  class="form-control"  name="prv_allotment_details" id="prv_allotment_details" placeholder="Alloatment Details">
				</div>
			</div> 
				<div class="col-6"> 
				<div class="form-group">
				<label for="prv_possession_date">{{  __('message.prv_possession_date') }}</label>
					<div class="input-group date dateformat" id="prv_possession_date" data-target-input="nearest">
                        <input type="text" value="{{ isset($users->prv_possession_date)?date('d-m-Y',strtotime($users->prv_possession_date)):''}}" name="prv_possession_date"  class="form-control datetimepicker-input" data-target="#prv_possession_date"/>
                        <div class="input-group-append" data-target="#prv_possession_date" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>	</div>
			</div> 
			
		</div>
	       <div class="card-header">
      <h3 class="card-title"> *અગાઉ ઉચ્ચલ કક્ષાનું વસવાટ ફાળવવામાં આવેલ હતું કે કેમ ?</h3>
	  	<div class="form-group">
				
				<div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="have_hc_quarter_y" name="have_hc_quarter_yn" 	value="Y">
                        <label for="have_hc_quarter_y">YES
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="have_hc_quarter_n" name="have_hc_quarter_yn" value="N">
                        <label for="have_hc_quarter_n">NO
                        </label>
                      </div>
                    </div>
   </div> </div><br>
		
	
				<div class="row have_hc_quarter" >
		<div class="col-3">
				<div class="form-group">
				<label for="designation">{{  __('message.prv_quarter_type') }}</label>
				<input type="text" value="{{isset($users->designation)?$users->designation:''}}" class="form-control" id="prv_quarter_type" name="prv_quarter_type" placeholder="Designation">
				</div>
			</div>
			<div class="col-3">
				<div class="form-group">
				<label for="prv_area">{{  __('message.prv_area') }} </label>
				<input type="text" value="{{isset($users->prv_area)?$users->prv_area:''}}"  class="form-control" id="prv_area" name="prv_area" placeholder="Enter office">
				</div>
			</div>
			<div class="col-3">
				<div class="form-group">
				<label for="prv_blockno">{{  __('message.prv_blockno') }} </label>
				<input type="text" value="{{isset($users->prv_blockno)?$users->prv_blockno:''}}"  class="form-control" id="prv_blockno" name="prv_blockno" placeholder="Enter office">
				</div>
			</div>
			<div class="col-3">
				<div class="form-group">
				<label for="prv_unitno">{{  __('message.prv_unitno') }} </label>
				<input type="text" value="{{isset($users->prv_unitno)?$users->prv_unitno:''}}"  class="form-control" id="prv_unitno" name="prv_unitno" placeholder="Enter office">
				</div>
			</div>
			</div>
			<div class="row have_hc_quarter">
			<div class="col-12">
				<div class="form-group">
				<label for="Address">કયા નંબર, તારીખના ફાળવણી આદેશથી ઉપરોકત વસવાટ ફાળવવામાં આવેલ હતું.</label>
				<textarea class="form-control" id="address" name="address" placeholder="Enter address">{{ isset($users->address)?$users->address:''}}</textarea>
				
				</div>
			</div>
			
			
		</div>
		<div class="row">
			<div class="col-8">
				<div class="form-group">
				<label for="office_address">આ સાથે સામેલ રાખેલ ઉચ્ચગ કક્ષાનું વસવાટ મેળવવાને લગતી સૂચનાઓ મેં વાંચી છે અને તે તથા સરકારશ્રી વખતો વખત આ અંગે સૂચનાઓ બહાર પાડે તેનું પાલન કરવા હું સંમત છું.</label>
				<div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="checkboxPrimary1" >
                        <label for="checkboxPrimary1">
                        </label>
                      </div>
                   
                    </div></div>
			</div>
			
		
		</div>  
		<!-- /.card-body -->
		<div class="card-footer">
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>
	</div>
</form>
            </div>
            <!-- /.card -->

          </div>
          
    <!-- /.content -->
  </div>
  </section></div>
<!-- ./wrapper -->
<!-- Footer -->
@include('footer')

 <script type="text/javascript">
        $(function() {              
           // Bootstrap DateTimePicker v4
           $('.dateformat').datetimepicker({
                 format: 'DD-MM-YYYY'
           });
        });  
$(document).ready(function() {		
$('input[name=have_hc_quarter_yn][type=radio]').change(function() { 
    if (this.value == 'Y') {
        $('.have_hc_quarter').show();
    }
    else if (this.value == 'N') {
         $('.have_hc_quarter').hide();
    }
}); 
})		
    </script>
</body>
</html>
