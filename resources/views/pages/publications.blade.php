@extends('layouts.master-layout')

@section ('header')
	
	Publications - Legal Services Facility Tanzania
@stop

@section ('content')
<div class="pub-jumbotron">
	<div class="container">
		<div class="col-md-2"></div>
		<div class="col-xs-12 col-sm-12 col-md-9 text-center">
			<img src="images/pub.png" alt="">
		</div>
		<div class="col-md-1"></div>
	</div>
</div>

<section id="services-page">
	<div class="container">

		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10 col-sm-12">
				@foreach($publications as $publication)
						<ul>
							<li><a href="{{ url('download_publication/'.$publication->filename) }}" >{{ $publication->filename }}</a></li>
						</ul>
				@endforeach
				<!-- <ol>
					<li>
						<a href="../pub/annual report 2015.pdf" target="_blank">Annual report 2015</a>
					</li>
					<li>
						<a href="../pub/Annual Report 2016.pdf" target="_blank">Annual report 2016</a>
					</li>
					<li>	
						<a href="../pub/LSF Strategic Approach 2016-2020.pdf" target="_blank">LSF Strategic approach 2016 - 2020</a>
					</li>
					<li>
						<a href="../pub/LSF Success Story English Booklet 2015.pdf" target="_blank">LSF Success stories English booklet 2015</a>
					</li>
				</ol> -->
			</div>

		</div>

	</div>
</section>


@stop