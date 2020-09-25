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
			  <form method="POST" action="{{ url('profiledetails') }}">
@csrf
	<div class="card-body">
		<div class="row">
			<div class="col-4">
				<div class="form-group">
				<label for="Name">Name</label>
				<input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Enter name">
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
				<div class="input-group date" id="date_of_birth" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#date_of_birth"/>
                        <div class="input-group-append" data-target="#date_of_birth" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>	
				</div>
			</div>
			<div class="col-4">
				<div class="form-group">
				<label for="designation">Designation</label>
				<input type="text" class="form-control" id="designation" name="designation" placeholder="Designation">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-4">
				<div class="form-group">
				<label for="Office">Office</label>
				<input type="text" class="form-control" id="office" name="office" placeholder="Enter office">
				</div>
			</div>
			<div class="col-4">
				<div class="form-group">
				<label for="Mobile No">Mobile No</label>
				<input type="text" class="form-control" id="contact_no" name="contact_no" placeholder="Moblie No">
				</div>
			</div>
			<div class="col-4">
				<div class="form-group">
				<label for="Email Id">Email Id</label>
				<input type="email" class="form-control"  name="email_id" id="email_id" placeholder="email">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-4">
				<div class="form-group">
				<label for="exampleInputEmail1">Maratial Status</label>
				<select id="maratial_status" name="maratial_status" class="form-control select2">
					<option value="">--Select--</option>
					<option value="M">Married</option>
					<option value="U">Unmarride</option> 	
				 </select>
				 </div>
			</div>
			<div class="col-4">
				<div class="form-group">
				<label for="exampleInputPassword1">Is Head of The Department ?</label>
				<select id="is_dept_head" name="is_dept_head" class="form-control select2">
					<option value="">--Select--</option>
					<option value="Y">હા</option>
					<option value="N">ના</option>	
				 </select>	</div>
			</div>
			<div class="col-4">
				<div class="form-group"> 
				<label for="exampleInputPassword1">Is Transferable Job ?</label>
				<select id="is_transferable" name="is_transferable" class="form-control select2">
					<option value="">--Select--</option>
					<option value="Y">હા</option>
					<option value="N">ના</option>	
				 </select></div>
			</div>
		</div>
		<div class="row">
			<div class="col-4">
				<div class="form-group">
				<label for="exampleInputEmail1">Original Date of Appointment in Govt</label>
				<div class="input-group date" id="appointment_date" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#appointment_date"/>
                        <div class="input-group-append" data-target="#appointment_date" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>	
				</div>
			</div>
			<div class="col-4">
				<div class="form-group">
				<label for="exampleInputPassword1">Retirement Date</label>
				<div class="input-group date" id="date_of_retirement" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#date_of_retirement"/>
                        <div class="input-group-append" data-target="#date_of_retirement" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>	
				</div>
			</div>
			<div class="col-4">
				<div class="form-group">
				<label for="salary_slab">Salary Slab as per 7th Pay comm.</label>
				<input type="text" class="form-control" id="salary_slab" name="salary_slab "placeholder="salary- slab">
				</div>
			</div>
		</div>
			<div class="row">
			<div class="col-4">
				<div class="form-group">
				<label for="grade_pay">Matrix Pay Level in 7th Pay</label>
				<input type="text" class="form-control" id="grade_pay"  name="grade_pay" placeholder="Enter grade pay">
				</div>
			</div>
			<div class="col-4">
				<div class="form-group">
				<label for="actual_salary">Actual Salary (basic salary as per 7th pay)</label>
				<input type="text" class="form-control" name="actual_salary" id="actual_salary" placeholder="actual salary">
				</div>
			</div>
			<div class="col-4">
				<div class="form-group">
				<label for="basic_pay">Basic Pay(As per 7th pay commission)</label>
				<input type="text" class="form-control" id="basic_pay" name="basic_pay" placeholder="Password">
				</div>
			</div>
		</div>
			<div class="row">
			<div class="col-4">
				<div class="form-group">
				<label for="Address">Native Address</label>
				<input type="text" class="form-control" id="Address" name="Address" placeholder="Enter address">
				</div>
			</div>
			<div class="col-4">
				<div class="form-group">
				<label for="current_address">Current Address</label>
				<input type="text" class="form-control" id="current_address" name="current_address" placeholder="Enter Current address">
				</div>
			</div>
			<div class="col-4">
				<div class="form-group">
				<label for="office_phone">Office Phone</label>
				<input type="text" class="form-control" id="office_phone" placeholder="Enter Office Phone" name="office_phone">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-4">
				<div class="form-group">
				<label for="office_address">Office Address</label>
				<input type="text" class="form-control" id="office_address" name="office_address" placeholder="Enter Office Address">
				</div>
			</div>
			<div class="col-4">
				<div class="form-group">
				<label for="gpfnumber">GPF/NPS No.</label>
				<input type="text" class="form-control" id="gpfnumber" placeholder="Enter GPF Number">
				</div>
			</div>
			<div class="col-4">
				<div class="form-group">
				<label for="gpfnumber">Panno</label>
				<input type="text" class="form-control" id="pancard" placeholder="enter pan no">
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

</body>
</html>
