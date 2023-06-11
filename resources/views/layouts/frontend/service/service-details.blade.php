@extends('layouts.frontend.master')

@section('title')
    Service Details | FM Cargo Service
@endsection

@section('content')
    <!-- Banner -->
    <section class="banner-section">
        <div class="container">
            <div class="banner-content-wrapper">
                <h1 class="banner-title">Service Details</h1>
                <ul class="banner-item">
                    <li>
                        <a href="index.html">
                            <i class="fas fa-home"></i>
                            Home
                        </a>
                    </li>
                    <li class="active">
                        <a href="javascript:void(0)">
                            Details
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- /Banner -->
    <!-- Service details -->
    <section class="service-details-section">
    	<div class="container">
    		<div class="service-details-top-outer">
		        <h3 class="service-details-title">
		        	Door to Door Service
		        </h3>
		        <p class="service-details-text">
		        	FM Cargo provides a reliable and hassle-free door to door shipping service from China, Dubai, Malaysia, USA, UK, EU, France, Hong Kong, Singapore, Australia, Thailand, Pakistan, and India. We have strategically located warehouses in these countries to ensure a seamless and efficient shipping process for our clients. Our experienced team takes care of everything from packing, custom clearance, and transportation to ensure that your shipment arrives at your doorstep on time and in perfect condition. Trust FM Cargo to handle all your door to door shipping needs. Let’s see what our Door to Door service includes.
		        </p>
		    </div>
    	</div>
    </section>
    <section class="service-details-section">
        <div class="container">            
            <div class="row align-items-center">
            	<div class="col-md-6">
            		<div class="service-details-left">
            			<h3 class="service-details-title">
            				PRODUCT SOURCING
            			</h3>
            			<p class="service-details-text">
            				If you need to import goods from overseas but need the necessary licenses or contacts, FM Cargo can help. We offer Product Sourcing services that enable you to find and purchase products from reliable suppliers worldwide. Our sourcing services can help businesses reduce costs, improve quality, and increase efficiency in their supply chain management.
            			</p>
            			<p class="service-details-text">
            				At FM Cargo, we understand the importance of effective sourcing and have a vast network of suppliers and manufacturers in several countries. We can assist our clients in finding the products they need, evaluating potential suppliers, and negotiating favorable prices and terms. 
            			</p>
            		</div>
            	</div>
            	<div class="col-md-6">
            		<div class="service-details-right">
            			<img src="{{ url('/frontend') }}/assets/images/service-details1.jpg">
            		</div>
            	</div>           	
            </div>
        </div>
    </section>
    <section class="service-details-section">
        <div class="container">            
            <div class="row align-items-center">
            	<div class="col-md-6">
            		<div class="service-details-right">
            			<img src="{{ url('/frontend') }}/assets/images/service-details2.png">
            		</div>
            	</div>
            	<div class="col-md-6">
            		<div class="service-details-left">
            			<h3 class="service-details-title">
            				FREE WAREHOUSING
            			</h3>
            			<p class="service-details-text">
            				Once your products are sourced, FM Cargo provides Free Warehousing services in our state-of-the-art facilities. Our free warehousing services are an excellent solution for businesses that need temporary storage space for their goods. 
            			</p>
            			<p class="service-details-text">
            				Your business can reduce storage costs and improve supply chain management efficiency by choosing FM Cargo’s free warehousing services. We offer flexible storage solutions, allowing our clients to store their products for as long as they need without incurring any costs. Our warehouses have the latest security and monitoring systems, ensuring your products are stored safely and securely.
            			</p>
            		</div>
            	</div>            	
            </div>
        </div>
    </section>
    <section class="service-details-section">
        <div class="container">            
            <div class="row align-items-center">            	
            	<div class="col-md-6">
            		<div class="service-details-left">
            			<h3 class="service-details-title">
            				INSPECTION
            			</h3>
            			<p class="service-details-text">
            				At FM Cargo, we offer inspection services to ensure our clients receive high-quality products and materials. We provide pre-shipment inspections, factory audits, and product testing to ensure the products meet the required standards and specifications.
            			</p>
            			<p class="service-details-text">
            				Our inspection services can help you to identify any issues or defects before the products are shipped, allowing you to make decisions and avoid any potential quality or compliance issues. Our team of experienced and qualified inspectors uses the latest technology and equipment to ensure our client reduces risks, saves time and money, and improves their supply chain management efficiency.
            			</p>
            		</div>
            	</div>
            	<div class="col-md-6">
            		<div class="service-details-right">
            			<img src="{{ url('/frontend') }}/assets/images/service-details3.png">
            		</div>
            	</div>            	
            </div>
        </div>
    </section>
    <section class="service-details-section">
        <div class="container">            
            <div class="row align-items-center">
            	<div class="col-md-6">
            		<div class="service-details-right">
            			<img src="{{ url('/frontend') }}/assets/images/service-details4.png">
            		</div>
            	</div>             	
            	<div class="col-md-6">
            		<div class="service-details-left">
            			<h3 class="service-details-title">
            				RE-PACKAGING
            			</h3>
            			<p class="service-details-text">
            				If your products need to be re-packaged for shipping or other purposes, FM Cargo can help. Our team of experts can repack your products into new packaging, which ensures that your products are safe and secure during transportation and delivery.
            			</p>
            			<p class="service-details-text">
            				Our re-packaging services help businesses to save time and money by reducing the need to handle products multiple times during shipping and delivery. We also ensure that the products meet the required packaging standards. By choosing FM Cargo’s re-packaging services, businesses can improve their supply chain management efficiency and ensure that their products are delivered to customers in the best possible condition.
            			</p>
            		</div>
            	</div>           	
            </div>
        </div>
    </section>
    <section class="service-details-section">
        <div class="container">            
            <div class="row align-items-center">            	
            	<div class="col-md-6">
            		<div class="service-details-left">
            			<h3 class="service-details-title">
            				CUSTOM CLEARANCE
            			</h3>
            			<p class="service-details-text">
            				FM Cargo offers hassle-free Custom Clearance that handle all the documentation and procedures to ensure the products are cleared quickly and efficiently through customs. Our team of experts is well-versed in various countries’ customs clearance procedures, which will help you to avoid costly delays and penalties associated with non-compliance with customs regulations.
            			</p>
            			<p class="service-details-text">
            				By choosing FM Cargo’s custom clearance services, you can ensure that your products comply with all the necessary regulations. This will also save you time and money by streamlining the customs clearance process and ensuring their products are delivered on time.
            			</p>
            		</div>
            	</div>
            	<div class="col-md-6">
            		<div class="service-details-right">
            			<img src="{{ url('/frontend') }}/assets/images/service-details5.png">
            		</div>
            	</div>            	
            </div>
        </div>
    </section>
    <section class="service-details-section">
        <div class="container">            
            <div class="row align-items-center"> 
            	<div class="col-md-6">
            		<div class="service-details-right">
            			<img src="{{ url('/frontend') }}/assets/images/service-details6.png">
            		</div>
            	</div>            	
            	<div class="col-md-6">
            		<div class="service-details-left">
            			<h3 class="service-details-title">
            				DOOR STEP DELIVERY
            			</h3>
            			<p class="service-details-text">
            				Finally, FM Cargo provides convenient and hassle-free Door Step Delivery services to deliver your products directly to your doorstep. We work with reputable shipping companies and logistics providers to ensure your products are delivered safely and in the best possible condition. It will help you to save time and money by outsourcing your logistics and delivery needs to a trusted logistics provider.
            			</p>
            			<p class="service-details-text">
            				Our team of experts can manage the entire delivery process, from packing and labeling to transportation and final delivery, ensuring that the products are delivered safely to your doorsteps and improving customer satisfaction and loyalty.
            			</p>
            		</div>
            	</div>           	
            </div>
        </div>
    </section>
    <section class="service-details-section">
    	<div class="container">
    		<div class="service-details-top-outer">
		        <p class="service-details-text">
		        	At FM Cargo, we are committed to providing our clients with reliable and efficient door to door services. We offer personalized solutions that meet your specific requirements and ensure that your goods are delivered on time and in perfect condition. Contact us today to learn more about our door to door services and how we can assist you with your shipping and logistics needs.
		        </p>
		        <a href="{{ url('/contact') }}" class="contact-us-link">
                    Contact Us
                </a>
		    </div>
    	</div>
    </section>
    <!-- /Service details -->
@endsection