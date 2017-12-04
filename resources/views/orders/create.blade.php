@extends('layouts.app') @section('content')
<div class="container">
	<div class="col-sm-offset-2 col-sm-8">
		<div class="panel panel-default">
			<div class="panel-heading">
				New Task
			</div>

			<div class="panel-body">
				<!-- Display Validation Errors -->


				<!-- New Task Form -->
				<form action="/business" method="POST" class="form-horizontal">
					{{ csrf_field() }}

					<!-- Item Number -->
					<div class="form-group">
						<label for="item_number" class="col-sm-3 control-label">Item Number</label>

						<div class="col-sm-6">
							<input type="text" name="item_number" id="item-number" class="form-control">
						</div>
					</div>

					<!-- Item Description -->
					<div class="form-group">
						<label for="item_description" class="col-sm-3 control-label">Description</label>

						<div class="col-sm-6">
							<input type="text" name="item_description" id="item-description" class="form-control">
						</div>
					</div>

					<!-- Quantity -->
					<div class="form-group">
						<label for="quantity" class="col-sm-3 control-label">Quantity</label>

						<div class="col-sm-6">
							<input type="text" name="quantity" id="quantity" class="form-control">
						</div>
					</div>

					<!-- Add Task Button -->
					<div class="form-group">
						<div class="col-sm-offset-3 col-sm-6">
							<button type="submit" class="btn btn-default">
								<i class="fa fa-btn fa-plus"></i>Add Employer
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>

		<!-- Current Tasks -->

	</div>
</div>
@endsection