@extends('admin._master')
  @section('content')
    <div class="page">
      <div class="page-content container-fluid">
        <div class="row" data-plugin="matchHeight" data-by-row="true">
          <div class="col-xl-3 col-md-6">
            <!-- Widget Linearea Four -->
            <div class="card card-shadow" id="widgetLineareaFour">
              <div class="card-block p-20 p-t-10">
                <div class="clearfix">
                  <div class="grey-800 pull-xs-right p-y-10">
                    <i class="icon md-view-list grey-600 font-size-24 vertical-align-bottom m-r-5"></i>                  Users
                  </div>
                  <span class="pull-xs-left grey-700 font-size-30">{{ 11 }}</span>
                </div>
                <div class="m-b-20 grey-500">
                  {{-- {{number_format($prizes->total_money,2)}} Cash --}}
                </div>
                <div class="ct-chart h-50"></div>
              </div>
            </div>
            <!-- End Widget Linearea Four -->
          </div>

        </div>
      </div>
    </div>

  @endsection