@extends('layouts.frontend.master')

@section('title')
    About | FM Cargo Service
@endsection

@section('content')
    <!-- Banner -->
	<section class="banner-section">
		<div class="container">
			<div class="banner-content-wrapper">
				<h1 class="banner-title">About Us</h1>
				<ul class="banner-item">
					<li>
						<a href="{{ url('/') }}">
							<i class="fas fa-home"></i>
							Home
						</a>
					</li>
					<li class="active">
						<a href="javascript:void(0)">
							About
						</a>
					</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- /Banner -->

    {{-- About --}}
    <section class="about-section">
        <div class="container">
            <div class="about-info-wrapper">
                <h2 class="about-info-title">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                </h2>
                <p class="about-info-text">
                    M/S. MEGHLA ENTERPRISEs a proprietor company established as a registered Clearing and Forwarding Agent under the government of Bangladesh. My previous company sky Enterprise as a partnership since 2004 registered clearing and forwarding Agent under the government of Bangladesh.
                </p>
                <p class="about-info-text">
                    After more than two decades of hard work and success have bore the company fruits of labor by enriching the client portfolio and helped establish branch offices all over Bangladesh. Branced with the support of loyal workforce the proprietor has leaded the company to build long trust and maintained Goodwill all over the clearing forwarding industry
and have set the company as a benchmark among the competitors. The company hopes to deliver prospective clients and existing clients with safe and reliable service at competitive price M/S. MEGHLA ENTERPRISE has a wide and rich client base and is highly specialized in the Mobile phone, puter, electronics, consumer products, medicine, chemicals, energy sector etc.
                </p>
            </div>
        </div>
    </section>
    {{-- About --}}
@endsection