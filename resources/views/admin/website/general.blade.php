@extends('admin.layout.master')

@section('content')

<div class="row">
	<div class="col-md-12">
		<div class="portlet bordered panel panel-default">
			<div class="portlet-title panel-heading">
				<div class="caption font-red-sunglo" style="padding-left:15px"> 
					 <i class="icon-settings font-red-sunglo"></i>
					<span class="caption-subject bold uppercase">General Settings</span>
				</div>
			</div>
			<div class="portlet-body form">
				<form role="form" method="POST" action="{{route('general.update')}}" enctype="multipart/form-data">
					{{ csrf_field() }}
					<div class="col-md-4">
						<div class="panel panel-default">
						  <div class="panel-heading">Main Settings</div>
						  <div class="panel-body">
							<div class="row form-group">
							  <label class="col-md-12 control-label text-left">Business Name</label>
							  <div class="col-md-12">
							  	<input name="business_name" type="text" placeholder="Business Name" class="form-control" value="{{$general->business_name}}">
							  </div>
							</div>
							<div class="row form-group">
							  <label class="col-md-12 control-label text-left">Copyrights</label>
							  <div class="col-md-12">
							  	<input name="copyright" type="text" placeholder="copyrights" class="form-control" value="{{$general->copyright}}">
							  </div>
							</div>
							<div class="row form-group">
							  <label class="col-md-12 control-label text-left">Multi Language</label>
							  <div class="col-md-12">
								<select data-placeholder="Select" class="form-control" name="multi_lang">
								  <option value="1" @if($general->multi_lang == 1) selected @endif>Enabled</option>
								  <option value="0" @if($general->multi_lang == 0) selected @endif>Disabled</option>
								</select>
							  </div>
							</div>
							<div class="row form-group">
							  <label class="col-md-12 control-label text-left">Default Language</label>
							  <div class="col-md-12">
									<select data-placeholder="Select" class="form-control" name="default_lang">
										@foreach ($languages as $key => $value)
											<option value="{{$key}}" @if($key == $general->default_lang) selected @endif>{{$value}}</option>
										@endforeach
									</select>
							  </div>
							</div>
							<div class="row form-group">
							  <label class="col-md-12 control-label text-left">Multi Currency</label>
							  <div class="col-md-12">
								<select data-placeholder="Select" class="form-control" name="multi_currency">
								  <option value="1" @if($general->multi_currency == 1) selected @endif>Enable</option>
								  <option value="0" @if($general->multi_currency == 0) selected @endif>Disable</option>
								</select>
							  </div>
							</div>
							<div class="row form-group">
							  <label class="col-md-12 control-label text-left">Restrict Website </label>
							  <div class="col-md-12">
								<select name="restricated" class="form-control">
								  <option value="0" @if($general->restricated == 0) selected @endif> No </option>
								  <option value="1" @if($general->restricated == 1) selected @endif> Yes ( Only registered users login)</option>
								</select>
							  </div>
							</div>
							<div class="row form-group">
							  <label class="col-md-12 control-label text-left">Users Registration</label>
							  <div class="col-md-12">
								<select data-placeholder="Select" class="form-control" name="user_regi">
								  <option value="1" @if($general->user_regi == 1) selected @endif>Yes</option>
								  <option value="0" @if($general->user_regi == 0) selected @endif>No</option>
								</select>
							  </div>
							</div>
							<div class="row form-group">
							  <label class="col-md-12 control-label text-left">Users Reg. Approval</label>
							  <div class="col-md-12">
								<select data-placeholder="Select" class="form-control" name="user_approval">
								  <option value="1" @if($general->user_approval == 1) selected @endif>Auto Approve</option>
								  <option value="0" @if($general->user_approval == 0) selected @endif>Admin Approve</option>
								</select>
							  </div>
							</div>
							<div class="row form-group">
							  <label class="col-md-12 control-label text-left">Suppliers Registration</label>
							  <div class="col-md-12">
								<select data-placeholder="Select" class="form-control" name="supplier_regi">
								  <option value="1" @if($general->supplier_regi == 1) selected @endif>Yes</option>
								  <option value="0" @if($general->supplier_regi == 0) selected @endif>No</option>
								</select>
							  </div>
							</div>
							<div class="row form-group">
							  <label class="col-md-12 control-label text-left">Reviews</label>
							  <div class="col-md-12">
								<select data-placeholder="Select" class="form-control" name="review_approval">
								  <option value="1" @if($general->review_approval == 1) selected @endif>Auto Approve</option>
								  <option value="0" @if($general->review_approval == 0) selected @endif>Admin Approve</option>
								</select>
							  </div>
							</div>
						  </div>
						</div>
					  </div>
					  {{-- End side bar --}}

					  <div class="col-md-8">
						<div class="panel panel-default">
						  <div class="panel-heading" style="border-bottom: 1px solid #fff">
							<!--<div class="panel-title"><i class="fa fa-cogs"></i>Application Settings</div>-->
							<ul class="nav nav-tabs">
							  <li class="active"><a href="#GENERAL" data-toggle="tab" aria-expanded="true"><span class="ink animate" style="height: 86px; width: 86px; top: -34px; left: -1px;"></span>General</a></li>
							  <li class=""><a href="#CONTACT" data-toggle="tab" aria-expanded="false"><span class="ink animate" style="height: 85px; width: 85px; top: -27.5px; left: 8.85938px;"></span>Contact</a></li>
							</ul>
						  </div>
						  <div class="panel-body">
							<div class="tab-content">
							  <div class="tab-pane wow fadeIn animated active" id="GENERAL">
								<div class="well well-sm">
								  <div class="panel-body">
									<label class="col-md-12 control-label text-left">Business Logo</label>
									<div class="col-md-6">
									  <div class="input-group input-xs">
										<input type="file" class="btn btn-default form-control"  id="logo"  name="business_logo">
										<span class="help-block">Only PNG file supported</span>
									  </div>
									</div>
									<div class="col-md-6 pull-right">
									  @if($general->business_logo)
										<img src="{{Storage::url('public/logo/'.$general->business_logo)}}" class="hlogo_preview_img img-responsive">
									  @endif
									</div>
								  </div>
								</div>
								<div class="well well-sm">
								  <div class="panel-body">
									<label class="col-md-12 control-label text-left">Favicon</label>
									<div class="col-md-6">
									  <div class="input-group input-xs">
										<input type="file" class="btn btn-default form-control" id="favimage" name="favicon">
										<span class="help-block">Only PNG file supported</span>
									  </div>
									</div>
									<div class="col-md-6 pull-right">
									  @if($general->favicon)
										<img style="border-radius:6px" src="{{Storage::url('public/logo/'.$general->favicon)}}" width="60" height="60" alt="" class="img-responsive favimage_preview_img pull-right">
									  @endif
									</div>
								  </div>
								</div>
								<div class="row form-group">
								  <label class="col-md-12 control-label text-left">Offline</label>
								  <div class="col-md-12">
									<select data-placeholder="Select" class="form-control offstatus" name="offline">
									  <option value="1" @if($general->offline == 1) selected @endif>Yes</option>
									  <option value="0" @if($general->offline == 0) selected @endif>No</option>
									</select>
								  </div>
								</div>
								<div class="row form-group">
								  <label class="col-md-12 control-label text-left">Offline Message</label>
								  <div class="col-md-12">
									<textarea name="offline_message" id="offmsg" placeholder="Our website is currently offline for maintenance. Please visit us later." class="form-control" cols="" rows="2" readonly="">
										{{$general->offline_message}}
									</textarea>
								  </div>
								</div>
								<div class="row form-group">
								  <label class="col-md-12 control-label text-left">Home Title</label>
								  <div class="col-md-12">
								  	<input name="title" type="text" placeholder="Title " class="form-control" value="{{$general->title}}">
								  </div>
								</div>
								<div class="row form-group">
								  <label class="col-md-12 control-label text-left">Default Keywords</label>
								  <div class="col-md-12">
								  	<input class="form-control" type="text" placeholder="Keyword of homepage" name="keywords" value="{{$general->keywords}}">
								  </div>
								</div>
								<div class="row form-group">
								  <label class="col-md-12 control-label text-left">Default Description</label>
								  <div class="col-md-12">
									<textarea class="form-control" rows="2" placeholder="Description of homepage" name="description">
										{{$general->description}}
									</textarea>
								  </div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="row form-group">
											<label class="col-md-12 control-label text-left">Booking Expiry </label>
											<div class="col-md-12">
											<input class="form-control" type="number" placeholder="Days" name="booking_expiry" min="1" value="{{$general->booking_expiry}}">
											</div>
										  </div>
									</div>
								</div>
							  </div>
							  <div class="tab-pane  fadeIn" id="CONTACT">
								<div class="panel-body">
								  <div class="row form-group">
									<label class="col-md-12 control-label text-left">Phone Number</label>
									<div class="col-md-12">
										<input class="form-control input-sm" type="text" placeholder="Phone Number" name="phone" value="{{$contact->phone}}">
									</div>
								  </div>
								  <div class="row form-group">
									<label class="col-md-12 control-label text-left">Email</label>
									<div class="col-md-12">
									  <input class="form-control input-sm" type="text" placeholder="Email address" name="email" value="{{$contact->email}}">
									</div>
								  </div>
								  <div class="row form-group">
									<label class="col-md-12 control-label text-left">Address</label>
									<div class="col-md-12">
										<input class="form-control form-control-lg" rows="4" placeholder="Adress" name="address" value="{{$contact->address}}">
									</div>
								  </div>
								</div>
							  </div>
							</div>
						  </div>
						</div>
					  </div>
					  <div class="row">
						  <div class="col-md-12">
							  <div class="form-group">
									<button class="btn btn-primary btn-block btn-lg">Submit</button>
							  </div>
						  </div>
					  </div>
			     </form>
			</div>
			<div class="panel-footer">
				
			</div>
	    </div>
    </div>
</div>
@endsection
