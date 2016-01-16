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
					<div class="panel-heading"><i class="fa fa-btn fa-video-camera"></i>Latest Tutorials</div>

					<div class="panel-body">

							<table class="table table-condensed">
    <thead>
      <tr>
        <th>Title</th>
				<th>Publish Date</th>
      </tr>
    </thead>
    <tbody>
			@foreach ($posts as $post)
			<tr>
				<td><a href="/posts/{{$post->slug}}">{{ $post->title }}</a></td>
				<td><em>{{ $post->published_at->format('M jS Y g:ia') }}</em></td>
			</tr>
			@endforeach

    </tbody>
  </table>
					

					{!! $posts->links() !!}
					</div>
				</div>
			</div>
		</div>

	@endif
</div>
@endsection
