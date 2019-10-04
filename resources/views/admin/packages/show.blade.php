@extends('admin._master')
	@section('content')
		<div class="page">
		    <div class="page-content container-fluid">
		      <div class="row">
		        <!-- Middle Column -->
		        
		        <!-- End Middle Column -->
		        <!-- Left Column -->
				
				<div class="col-lg-6 col-xl-3  col-xs-12">
		          <div class="card user-visitors">
		            <div class="card-header card-header-transparent p-20">
		              <h4 class="card-title m-b-0">التقييمات </h4>
		            </div>
		            <div class="card-block">
		              	<ul class="list-group list-group-full">
			                @foreach($client->reviews as $review)
				                <li class="list-group-item">
				                  <div class="media">
				                    <div class="media-left">
				                    </div>
				                    <div class="media-body">
				                      <h4 class="media-heading hover">الورشة: {{$review->workshop->title}}
				                      </h4>
				                      <small> التقييم : {{$review->rating}}</small>
				                    </div>
				                  </div>
				                </li>
				                <hr>
				            @endforeach
		              	</ul>
		            </div>
		          </div>		          
		      	</div>
	
				<div class="col-xs-12 col-lg-12 col-xl-6 ">
		          <!-- User Background -->
		          <div class="user-background card card-shadow">
		            <div class="card-header card-header-transparent p-20">
		              <h4 class="card-title m-b-0">الطلبات</h4>
		            </div>

		            <div class="card-block">
		              <h3 class="card-title">
		                <i class="icon md-briefcase"></i>
		                <span>السطحات</span>
		              </h3>
		              <ul class="timeline timeline-single">
		                @foreach($client->towings as $towing)
			                <li class="timeline-item">
			                  <div class="timeline-dot"></div>
			                  <div class="timeline-content">
			                    <span class="block m-b-5">نوع السيارة:  {{$towing->car_model}}</span>
			                    <span class="block m-b-5">الحالة : {{$towing->status}}</span>
			                    <span class="block m-b-5">التكلفة :  {{$towing->cost}}</span>
			                    <span class="block m-b-5">العنوان :  {{$towing->address}}</span>
			                    <span class="block m-b-5">الورشة :  {{$towing->workshop->title}}</span>


			                    <span class="block m-b-5">{{$towing->created_at}}</span>
			                  </div>
			                </li>
			            @endforeach
		                
		              </ul>
		            </div>

		            <div class="card-block">
		              <h3 class="card-title">
		                <i class="icon md-briefcase"></i>
		                <span>التقنيين</span>
		              </h3>
		              <ul class="timeline timeline-single">
		                @foreach($client->technicians as $technician)
			                <li class="timeline-item">
			                  <div class="timeline-dot"></div>
			                  <div class="timeline-content">
			                    <span class="block m-b-5">نوع السيارة:  {{$technician->car_model}}</span>
			                    <span class="block m-b-5">الحالة : {{$technician->status}}</span>
			                    <span class="block m-b-5">التكلفة :  {{$technician->cost}}</span>
			                    <span class="block m-b-5">العنوان :  {{$technician->address}}</span>
			                    <span class="block m-b-5">الورشة :  {{$technician->workshop->title}}</span>


			                    <span class="block m-b-5">{{$technician->created_at}}</span>
			                  </div>
			                </li>
			            @endforeach
		                
		              </ul>
		            </div>

		            <div class="card-block">
		              <h3 class="card-title">
		                <i class="icon md-briefcase"></i>
		                <span>المواعيد</span>
		              </h3>
		              <ul class="timeline timeline-single">
		                @foreach($client->appointments as $appointment)
			                <li class="timeline-item">
			                  <div class="timeline-dot"></div>
			                  <div class="timeline-content">
			                    <span class="block m-b-5">الحالة : {{$appointment->status}}</span>
			                    <span class="block m-b-5">التكلفة :  {{$appointment->cost}}</span>
			                    <span class="block m-b-5">الورشة :  {{$appointment->workshop->title}}</span>


			                    <span class="block m-b-5">{{$appointment->appointment_date}}</span>
			                  </div>
			                </li>
			            @endforeach
		                
		              </ul>
		            </div>

		            <div class="card-block">
		              <h3 class="card-title">
		                <i class="icon md-briefcase"></i>
		                <span>التصليحات</span>
		              </h3>
		              <ul class="timeline timeline-single">
		                @foreach($client->repares as $repare)
			                <li class="timeline-item">
			                  <div class="timeline-dot"></div>
			                  <div class="timeline-content">
			                    <span class="block m-b-5">الحالة : {{$repare->status}}</span>
			                    <span class="block m-b-5">التكلفة :  {{$repare->cost}}</span>
			                    <span class="block m-b-5">الورشة :  {{$repare->workshop->title}}</span>


			                    <span class="block m-b-5">{{$repare->appointment_date}}</span>
			                  </div>
			                </li>
			            @endforeach
		                
		              </ul>
		            </div>
					

					<div class="card-block">
		              <h3 class="card-title">
		                <i class="icon md-briefcase"></i>
		                <span>الفحص الاونلاين</span>
		              </h3>
		              <ul class="timeline timeline-single">
		                @foreach($client->onlineCheckups as $onlineCheckup)
			                <li class="timeline-item">
			                  <div class="timeline-dot"></div>
			                  <div class="timeline-content">
			                    <span class="block m-b-5">الحالة : {{$onlineCheckup->status}}</span>
			                    <span class="block m-b-5">التكلفة :  {{$onlineCheckup->cost}}</span>
			                    <span class="block m-b-5">الورشة :  {{$onlineCheckup->workshop->title}}</span>
			                    <span class="block m-b-5">التفاصيل :  {{$onlineCheckup->description}}</span>
							

			                    <span class="block m-b-5">{{$onlineCheckup->created_at}}</span>
			                  </div>
			                </li>
			            @endforeach
		                
		              </ul>
		            </div>

		            <div class="card-block">
		            </div>
		            <div class="card-block">
		              
		            </div>
		          </div>
		          <!-- End User Background -->
		          		          
		        </div>

		        <div class="col-xs-12 col-lg-6 col-xl-3 ">
		          <div class="user-info card card-shadow text-xs-center">
		            <div class="user-base card-block">
		              <a class="avatar img-bordered avatar-100" href="javascript:void(0)">
		              	@if($client->avatar)
			                <img width="93px" height="93px" src="{{$client->avatar}}" alt="...">
		              	@else
			                <img src="../../../global/portraits/5.jpg" alt="...">
		              	@endif
		              </a>
		              <h4 class="user-name">{{$client->name}}</h4>
		              <p class="user-job">{{$client->email}}</p>
		              <p class="user-job">{{$client->phone}}</p>
		              <p class="user-location">{{$client->created_at}}</p>
		            </div>
		            <div class="user-actions">
		            </div>
		            <div class="user-socials list-group list-group-full">
		              	<a class="list-group-item" href="javascript:void(0)">
		                	<i class="icon"></i> التقييمات {{count($client->reviews)}}
		              	</a>
		              	<a class="list-group-item" href="javascript:void(0)">
			                <i class="icon"></i> السطحات {{count($client->towings)}}
		              	</a>
		              	<a class="list-group-item" href="javascript:void(0)">
			                <i class="icon"></i> التقنيين {{count($client->technicians)}}
		              	</a>
		              	<a class="list-group-item" href="javascript:void(0)">
			                <i class="icon"></i> المواعيد {{count($client->appointments)}}
		              	</a>
		              	<a class="list-group-item" href="javascript:void(0)">
			                <i class="icon"></i> الاصلاحات {{count($client->repares)}}
		              	</a>
		              	<a class="list-group-item" href="javascript:void(0)">
			                <i class="icon"></i> الفحص الاونلاين {{count($client->onlineCheckups)}}
		              	</a>

		            </div>
		          </div>
		          <!-- End User Info -->
		          <!-- Friend List -->
		        </div>
		        <!-- End Left Column -->
		        <!-- Right Column -->
		    </div>
		  </div>
		</div>
	@stop
