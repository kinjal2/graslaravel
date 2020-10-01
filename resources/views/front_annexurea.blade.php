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
            <h1>Request   Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">{{  __('message.quarter_cate') }}</li>
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
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Request Details</h3>
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
			  <form method="POST" action="{{ url('profiledetails)') }}" enctype="multipart/form-data">
@csrf
	<div class="card-body">
		<div class="row">
			<div class="col-6">
				<div class="form-group">
				<label for="quartertype">{{  __('message.quarter_cate') }}</label> 
        {{ Form::select('quartertype',getBasicPay(),'',['id'=>'eamil','class'=>'form-control select2']) }}                                       
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
				<label for="Birth Date">{{  __('message.deputation_date') }}</label>
				<div class="input-group date dateformat" id="deputation_date" data-target-input="nearest">
                        <input type="text"  name="deputation_date" class="form-control datetimepicker-input " data-target="#date_of_birth" />
                        <div class="input-group-append" data-target="#deputation_date" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>	
				</div>
			</div>
		
		</div>
		<div class="row">
        <div class="col-6"> 
		<label for="designation">{{  __('message.cometransfer') }} </label>
		<div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="deputationy" name="deputation_yn" checked>
                        <label for="deputationy">YES
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="deputationn" name="deputation_yn">
                        <label for="deputationn">NO
                        </label>
                      </div>
                    </div>
			</div>
			<div class="col-6">
				<div class="form-group">
				<label for="Office">{{  __('message.beforerecidant') }}</label>
				<div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary1" name="r1" checked>
                        <label for="radioPrimary1">YES
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary2" name="r1">
                        <label for="radioPrimary2">NO
                        </label>
                      </div>
                    </div>	</div>
			</div>
			
		</div>
		
		<div class="row">
        <div class="col-6">
				<div class="form-group">
				<label for="Mobile No">{{  __('message.beforeallot') }}</label>
				<div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary1" name="r1" checked>
                        <label for="radioPrimary1">YES
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary2" name="r1">
                        <label for="radioPrimary2">NO
                        </label>
                      </div>
                    </div>	</div>
			</div>
			<div class="col-6">
				<div class="form-group">
				<label for="grade_pay">{{  __('message.lives') }}</label>
				<div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary1" name="r1" checked>
                        <label for="radioPrimary1">YES
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary2" name="r1">
                        <label for="radioPrimary2">NO
                        </label>
                      </div>
                    </div></div>
			</div>
			
			
		</div>
			<div class="row">
			<div class="col-6">
				<div class="form-group">
				<label for="Email Id">{{  __('message.schedualcast') }}</label>
        <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary1" name="r1" checked>
                        <label for="radioPrimary1">YES
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary2" name="r1">
                        <label for="radioPrimary2">NO
                        </label>
                      </div>
                    </div>	</div>
			</div>
			<div class="col-6">
				<div class="form-group">
				<label for="actual_salary">{{  __('message.relevitive') }}</label>
        <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary1" name="r1" checked>
                        <label for="radioPrimary1">YES
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary2" name="r1">
                        <label for="radioPrimary2">NO
                        </label>
                      </div>
                    </div>	</div>
			</div>
			
		</div>
			<div class="row">
			<div class="col-6">
				<div class="form-group">
				<label for="Address">{{  __('message.rearea') }}</label>
        <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary1" name="r1" checked>
                        <label for="radioPrimary1">YES
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary2" name="r1">
                        <label for="radioPrimary2">NO
                        </label>
                      </div>
                    </div>	</div>
			</div>
			<div class="col-6">
				<div class="form-group">
				<label for="current_address">{{  __('message.transeringandinagar') }}</label>
				<input type="text" class="form-control"  value="{{isset($users->current_address)?$users->current_address:''}}" id="current_address" name="current_address" placeholder="Enter Current address">
				</div>
			</div>
			
		</div>
		<div class="row">
			<div class="col-6">
				<div class="form-group">
				<label for="office_address">{{  __('message.govallotment') }}</label>
				<input type="text" class="form-control" value="{{isset($users->office_address)?$users->office_address:''}}"  id="office_address" name="office_address" placeholder="Enter Office Address">
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
				<label for="gpfnumber">{{  __('message.iftranser') }}</label>
				<input type="text" class="form-control"  value="{{isset($users->gpfnumber)?$users->gpfnumber:''}}"  id="gpfnumber" name="gpfnumber" placeholder="Enter GPF Number">
				</div>
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
    </script>
</body>
</html>
