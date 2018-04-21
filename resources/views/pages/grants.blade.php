@extends('layouts.master-layout')

@section ('header')
	
	Grants - Legal Services Facility Tanzania
@stop

@section ('content')
<div class="grants-jumbotron">
	<div class="container">
		<div class="col-md-2"></div>
		<div class="col-xs-12 col-sm-12 col-md-9 text-center">
			<img src="images/grants.png" alt="">
		</div>
		<div class="col-md-1"></div>
	</div>
</div>


<section id="services-page">
	<div class="container">

		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10 col-sm-12">
				<div class="panel">
					<h4><strong>Which organizations can apply for funding?</strong></h4>
					<p>The LSF supports organizations, which have a strong commitment to increase access to justice, in particular for women and girls. This could be done by improving the quality of legal aid and increasing its accessibility. Organizations involved in human rights awareness building, legal education, legal empowerment and the promotion and protection of women’s rights can apply to regularly published calls for proposals or concept notes. Additionally the LSF is interested to expand its collaboration with those organizations which would be interested to expand an economic or political empowerment approach with a legal empowerment component. </p><br>

					<p>In order to be eligible for LSF funding, an organization needs to be a duly established, not for profit, Tanzanian legal entity.</p><br>

					<h4><strong>How to apply for funding?</strong></h4>
					<p>The LSF regularly issues ‘Calls for Proposals' or Calls for Concept Notes” to invite organizations to submit their applications. A “Call” is always announced in several Kiswahili and English language newspapers, on this website, our Facebook page and on Twitter. With each of these funding facilities, the themes to be addressed and the guidelines for presenting applications, as well as application forms, are made available on this website and can also be collected at our office (see ‘Contacts’ for the address).  </p><br><br>

					<h4><strong>What will be funded?</strong></h4>
					<p>The LSF funds committed implementing partners at regional level who then supervise and implement the capacity development or setting up of paralegal units in each district in the respective region. </p><br>

					<P>Additionally the LSF may fund human rights awareness building, legal education, legal empowerment and related social, economic and political empowerment.</P>
				</div>
			</div>

		</div>

		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10 col-sm-12">
				<!-- <ol>
					
					<li>
						<a href="../pub/CfP01.pdf">Grants Doc 1</a>
					</li>
					<li>
						<a href="../pub/CfP02.pdf">Grants Doc 2</a>
					</li>
					<li>
						<a href="../pub/Grants.pdf">Information on Grants</a>
					</li>
					<li>	
						<a href="../pub/Taarifa za Ruzuku Kiswahili.pdf">Taarifa za ruzuku</a>
					</li>
				</ol> -->
				<!-- <ol>
					
					<li>
						<a href="../pub/LSF Grantees.xlsx">Current Grantees Information - May 2017</a>
					</li>
				</ol> -->
				@foreach($grants as $grant)
						<ul>
							<li><a href="{{ url('download_grant/'.$grant->filename) }}" >{{ $grant->filename }}</a></li>
						</ul>
				@endforeach
				<!-- <ol>
					
					<li>
						<a href="../pub/LSFGrantees.pdf" target="_blank">Current Grantees Information - May 2017</a>
					</li>
				</ol> -->
			</div>

		</div>

	</div>
</section>



@stop