@extends('dashboard.layout.dmain')

@section('dcontent')

<div class="border-bottom mb-4">
  <h2>Detail User</h2>
</div>

<div class="mt-2 col-lg-10 mb-5">
		<form class="col-8">
      @csrf
			<h2>User</h2>
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="name" class="form-control" id="name" value="{{ $user->name }}" disabled>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" value="{{ $user->email }}" disabled>
      </div>
      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="username" class="form-control" id="username" value="{{ $user->username }}" disabled>
      </div>
    </form>

		<hr>
		<h2>Level User</h2>
		<form action="/dashboard/customer/{{ $user->id }}" method="post" class="col-8">
			@method('patch')
			@csrf
			<div class="mb-3">
				<label for="role" class="form-label">Role User</label>
				<select name="role" class="form-control" id="role">
					<option value="{{ $user->role }}">{{ $user->role }}</option>
					<option value="superadmin">Superadmin</option>
					<option value="admin">Admin</option>	
					<option value="customer">Customer</option>
				</select>
			</div>
			<button type="submit" class="btn btn-primary">Update Status</button>
		</form>
	</div>
</div>

@endsection