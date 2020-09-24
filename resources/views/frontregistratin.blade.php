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
<form role="form">
	<div class="card-body">
		<div class="row">
			<div class="col-4">
				<div class="form-group">
				<label for="Name">Name</label>
				<input type="email" class="form-control" id="name" name=name" placeholder="Enter name">
				</div>
			</div>
			<div class="col-4">
				<div class="form-group">
				<label for="Birth Date">Birth Date</label>
				<input type="text" class="form-control" id="birth_date" name="birth_date" placeholder="Birth Date">
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
				<input type="text" class="form-control" id="Office" name="Office" placeholder="Enter office">
				</div>
			</div>
			<div class="col-4">
				<div class="form-group">
				<label for="Mobile No">Mobile No</label>
				<input type="text" class="form-control" id="mobile_no" name="mobile_no" placeholder="Moblie No">
				</div>
			</div>
			<div class="col-4">
				<div class="form-group">
				<label for="Email Id">Email Id</label>
				<input type="email" class="form-control"  name="emails" id="email" placeholder="email">
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
				<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
				</div>
			</div>
			<div class="col-4">
				<div class="form-group">
				<label for="exampleInputPassword1">Retirement Date</label>
				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
				</div>
			</div>
			<div class="col-4">
				<div class="form-group">
				<label for="exampleInputPassword1">Salary Slab as per 7th Pay comm.</label>
				<input type="email" class="form-control" id="exampleInputPassword1" placeholder="Password">
				</div>
			</div>
		</div>
			<div class="row">
			<div class="col-4">
				<div class="form-group">
				<label for="exampleInputEmail1">Matrix Pay Level in 7th Pay</label>
				<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
				</div>
			</div>
			<div class="col-4">
				<div class="form-group">
				<label for="exampleInputPassword1">Actual Salary (basic salary as per 7th pay)</label>
				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
				</div>
			</div>
			<div class="col-4">
				<div class="form-group">
				<label for="exampleInputPassword1">Basic Pay(As per 7th pay commission)</label>
				<input type="email" class="form-control" id="exampleInputPassword1" placeholder="Password">
				</div>
			</div>
		</div>
			<div class="row">
			<div class="col-4">
				<div class="form-group">
				<label for="exampleInputEmail1">Native Address</label>
				<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
				</div>
			</div>
			<div class="col-4">
				<div class="form-group">
				<label for="exampleInputPassword1">Current Address</label>
				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
				</div>
			</div>
			<div class="col-4">
				<div class="form-group">
				<label for="exampleInputPassword1">Office Address</label>
				<input type="email" class="form-control" id="exampleInputPassword1" placeholder="Password">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-4">
				<div class="form-group">
				<label for="exampleInputEmail1">Office Phone</label>
				<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
				</div>
			</div>
			<div class="col-4">
				<div class="form-group">
				<label for="exampleInputPassword1">GPF/NPS No.</label>
				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
				</div>
			</div>
			<div class="col-4">
				<div class="form-group">
				<label for="exampleInputPassword1">Panno</label>
				<input type="email" class="form-control" id="exampleInputPassword1" placeholder="Password">
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
<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('/bower_components/admin-lte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('/bower_components/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/bower_components/admin-lte/dist/js/adminlte.min.js')}}"></script>
</body>
</html>
