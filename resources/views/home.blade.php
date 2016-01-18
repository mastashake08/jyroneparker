@extends('spark::layouts.app')
@section('title','Latest Videos')

@section('content')
<!-- Main Content -->
<div class="container spark-screen">
	@if (Spark::usingTeams() && ! Auth::user()->hasTeams())

		<!-- Teams Are Enabled, But The User Doesn't Have One -->
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">You Need A Team!</div>

					<div class="panel-body bg-warning">
						It looks like you haven't created a team!
						You can create one in your <a href="/settings?tab=teams">account settings</a>.
					</div>
				</div>
			</div>
		</div>

	@else

		<!-- Teams Are Disabled Or User Is On Team -->
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-primary">
					<div class="panel-heading"><i class="fa fa-btn fa-video-camera"></i>Lastest Videocasts</div>

					<div class="panel-body">
						<!-- Row -->
						<div class="row splash-features-icon-row">
								<div class="col-md-10 col-md-offset-1 text-center">
										<div class="col-md-4 splash-features-feature">
											<div class="splash-feature-heading">
													{{$posts[0]->title}}
											</div>

											<div class="splash-feature-text">
													<a href="/posts/{{$posts[0]->slug}}"><img class="img-rounded latest-screen-casts" src="https://en.gravatar.com/avatar/e0c48dc4005b3a0b83a3ed4123bce29e?s=80" /></a>
											</div>
										</div>

										<div class="col-md-4 splash-features-feature">
											<div class="splash-feature-heading">
													{{$posts[1]->title}}
											</div>

											<div class="splash-feature-text">
													<a href="/posts/{{$posts[1]->slug}}"><img class="img-rounded latest-screen-casts" src="https://en.gravatar.com/avatar/e0c48dc4005b3a0b83a3ed4123bce29e?s=80"/></a>
											</div>
										</div>

										<div class="col-md-4 splash-features-feature">
											<div class="splash-feature-heading">
													{{$posts[2]->title}}
											</div>

											<div class="splash-feature-text">
													<a href="/posts/{{$posts[2]->slug}}"><img class="img-rounded latest-screen-casts" src="https://en.gravatar.com/avatar/e0c48dc4005b3a0b83a3ed4123bce29e?s=80" /></a>
											</div>
										</div>
								</div>
						</div>
						<!-- Row -->
						<div class="row splash-features-icon-row">
								<div class="col-md-10 col-md-offset-1 text-center">
										<div class="col-md-4 splash-features-feature">
											<div class="splash-feature-heading">
													{{$posts[3]->title}}
											</div>

											<div class="splash-feature-text">
													<a href="/posts/{{$posts[3]->slug}}"><img class="img-rounded latest-screen-casts" src="https://en.gravatar.com/avatar/e0c48dc4005b3a0b83a3ed4123bce29e?s=80" /></a>
											</div>
										</div>

										<div class="col-md-4 splash-features-feature">
											<div class="splash-feature-heading">
													{{$posts[4]->title}}
											</div>

											<div class="splash-feature-text">
													<a href="/posts/{{$posts[4]->slug}}"><img class="img-rounded latest-screen-casts" src="https://en.gravatar.com/avatar/e0c48dc4005b3a0b83a3ed4123bce29e?s=80"/></a>
											</div>
										</div>

										<div class="col-md-4 splash-features-feature">
											<div class="splash-feature-heading">
													{{$posts[5]->title}}
											</div>

											<div class="splash-feature-text">
													<a href="/posts/{{$posts[5]->slug}}"><img class="img-rounded latest-screen-casts" src="https://en.gravatar.com/avatar/e0c48dc4005b3a0b83a3ed4123bce29e?s=80" /></a>
											</div>
										</div>
								</div>
						</div>

					</div>
						</div>

					</div>
				</div>
			</div>
		</div>

	@endif
</div>
@endsection
