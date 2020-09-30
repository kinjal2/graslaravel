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
            <h1>General Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
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
                <h3 class="card-title">Quick Example</h3>
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
			  <form method="POST" action="{{ url('profiledetails, app()->getLocale())') }}" enctype="multipart/form-data">
@csrf
	<div class="card-body">
		<div class="row">
			<div class="col-4">
				<div class="form-group">
				<label for="Name">Name</label>
				<input type="text" value="{{isset($users->name)?$users->name:''}}" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Enter name">
				@error('name')
                 <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                 @enderror
				</div>
			</div>
			<div class="col-4">
				<div class="form-group">
				<label for="Birth Date">Birth Date</label>
				<div class="input-group date dateformat" id="date_of_birth" data-target-input="nearest">
                        <input type="text" value="{{isset($users->date_of_birth)?$users->date_of_birth:''}}" name="date_of_birth" class="form-control datetimepicker-input " data-target="#date_of_birth" readonly/>
                        <div class="input-group-append" data-target="#date_of_birth" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>	
				</div>
			</div>
			<div class="col-4">
				<div class="form-group">
				<label for="designation">Designation</label>
				<input type="text" value="{{isset($users->designation)?$users->designation:''}}" class="form-control" id="designation" name="designation" placeholder="Designation">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-4">
				<div class="form-group">
				<label for="Office">Office</label>
				<input type="text" value="{{isset($users->office)?$users->office:''}}"  class="form-control" id="office" name="office" placeholder="Enter office">
				</div>
			</div>
			<div class="col-4">
				<div class="form-group">
				<label for="Mobile No">Mobile No</label>
				<input type="text"  value="{{isset($users->contact_no)?$users->contact_no:''}}"  class="form-control" id="contact_no" name="contact_no" placeholder="Moblie No">
				</div>
			</div>
			<div class="col-4">
				<div class="form-group">
				<label for="Email Id">Email Id</label>
				<input type="email" value="{{isset($users->email_id)?$users->email_id:''}}"  class="form-control"  name="email_id" id="email_id" placeholder="email">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-4">
				<div class="form-group">
				<label for="maratial_status">Maratial Status</label>
				{{ Form::select('maratial_status',getMaratialstatus(),'isset($users->maratial_status)?$users->maratial_status:" "',['id'=>'eamil','class'=>'form-control select2']) }}                                       
			
				 </div>
			</div>
			<div class="col-4">
				<div class="form-group">
				<label for="is_dept_head">Is Head of The Department ?</label>
				{{ Form::select('is_dept_head',getYesNo(),'isset($users->is_dept_head)?$users->is_dept_head:" "',['id'=>'eamil','class'=>'form-control select2']) }}                                       
			</div>
			</div>
			<div class="col-4">
				<div class="form-group"> 
				<label for="is_transferable">Is Transferable Job ?</label> 
		    	{{ Form::select('is_transferable',getYesNo(),'isset($users->is_transferable)?$users->is_transferable:" "',['id'=>'eamil','class'=>'form-control select2']) }}                                       
				</div>	</div>
		</div>
		<div class="row">
			<div class="col-4">
				<div class="form-group">
				<label for="appointment_date">Original Date of Appointment in Govt</label>
				<div class="input-group date dateformat" id="appointment_date" data-target-input="nearest">
                        <input type="text" value="{{isset($users->appointment_date)?$users->appointment_date:''}}" name="appointment_date"  class="form-control datetimepicker-input" data-target="#appointment_date"/>
                        <div class="input-group-append" data-target="#appointment_date" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>	
				</div>
			</div>
			<div class="col-4">
				<div class="form-group">
				<label for="date_of_retirement">Retirement Date</label>
				<div class="input-group date dateformat" id="date_of_retirement" data-target-input="nearest">
                        <input type="text" value="{{isset($users->date_of_retirement)?$users->date_of_retirement:''}}" name="date_of_retirement"  class="form-control datetimepicker-input" data-target="#date_of_retirement"/>
                        <div class="input-group-append" data-target="#date_of_retirement" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>	
				</div>
			</div>
			<div class="col-4">
				<div class="form-group">
				<label for="salary_slab">Salary Slab as per 7th Pay comm.</label>
				<input type="text" class="form-control" value="{{isset($users->salary_slab)?$users->salary_slab:''}}" id="salary_slab" name="salary_slab"placeholder="salary- slab">
				</div>
			</div>
		</div>
			<div class="row">
			<div class="col-4">
				<div class="form-group">
				<label for="grade_pay">Matrix Pay Level in 7th Pay</label>
				<input type="text" class="form-control" id="grade_pay" value="{{isset($users->grade_pay)?$users->grade_pay:''}}"  name="grade_pay" placeholder="Enter grade pay">
				</div>
			</div>
			<div class="col-4">
				<div class="form-group">
				<label for="actual_salary">Actual Salary (basic salary as per 7th pay)</label>
				<input type="text" class="form-control"   value="{{isset($users->actual_salary)?$users->actual_salary:''}}" name="actual_salary" id="actual_salary" placeholder="actual salary">
				</div>
			</div>
			<div class="col-4">
				<div class="form-group">
				<label for="basic_pay">Basic Pay(As per 7th pay commission)</label>
				<input type="text" class="form-control"  value="{{isset($users->basic_pay)?$users->basic_pay:''}}"  id="basic_pay" name="basic_pay" placeholder="Basic pay">
				</div>
			</div>
		</div>
			<div class="row">
			<div class="col-4">
				<div class="form-group">
				<label for="Address">Native Address</label>
				<input type="text" class="form-control" value="{{isset($users->address)?$users->address:''}}"  id="address" name="address" placeholder="Enter address">
				</div>
			</div>
			<div class="col-4">
				<div class="form-group">
				<label for="current_address">Current Address</label>
				<input type="text" class="form-control"  value="{{isset($users->current_address)?$users->current_address:''}}" id="current_address" name="current_address" placeholder="Enter Current address">
				</div>
			</div>
			<div class="col-4">
				<div class="form-group">
				<label for="office_phone">Office Phone</label>
				<input type="text" class="form-control"  value="{{isset($users->office_phone)?$users->office_phone:''}}" id="office_phone" placeholder="Enter Office Phone" name="office_phone">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-4">
				<div class="form-group">
				<label for="office_address">Office Address</label>
				<input type="text" class="form-control" value="{{isset($users->office_address)?$users->office_address:''}}"  id="office_address" name="office_address" placeholder="Enter Office Address">
				</div>
			</div>
			<div class="col-4">
				<div class="form-group">
				<label for="gpfnumber">GPF/NPS No.</label>
				<input type="text" class="form-control"  value="{{isset($users->gpfnumber)?$users->gpfnumber:''}}"  id="gpfnumber" name="gpfnumber" placeholder="Enter GPF Number">
				</div>
			</div>
			<div class="col-4">
				<div class="form-group">
				<label for="gpfnumber">Panno</label>
				<input type="text" class="form-control" value="{{isset($users->pancard)?$users->pancard:''}}" id="pancard" name="pancard"placeholder="enter pan no">
				</div>
			</div>
		</div>  <div class="row">
			<div class="col-4">
			 <div class="form-group">
                    <label for="exampleInputFile">Upload Photo</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
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
