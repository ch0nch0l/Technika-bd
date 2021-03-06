@extends('admin/app')

@section('content')

<div class="panel-body">
	<form class="form-horizontal" action="" method="post">
		<fieldset>
			<!-- Name input-->
			<div class="form-group">
				<label class="col-md-3 control-label" for="name">Name</label>
				<div class="col-md-9">
					<input id="name" name="name" type="text" placeholder="Your name" class="form-control">
				</div>
			</div>
		
			<!-- Email input-->
			<div class="form-group">
				<label class="col-md-3 control-label" for="email">Your E-mail</label>
				<div class="col-md-9">
					<input id="email" name="email" type="text" placeholder="Your email" class="form-control">
				</div>
			</div>
			
			<!-- Message body -->
			<div class="form-group">
				<label class="col-md-3 control-label" for="message">Your message</label>
				<div class="col-md-9">
					<textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
				</div>
			</div>
			
			<!-- Form actions -->
			<div class="form-group">
				<div class="col-md-12 widget-right">
					<button type="submit" class="btn btn-default btn-md pull-right">Submit</button>
				</div>
			</div>
		</fieldset>
	</form>
</div>

@endsection