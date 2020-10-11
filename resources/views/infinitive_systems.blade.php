@extends('layouts.dashboardnav')

@section('content')
<div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">dashboard</i>
                  </div>
                  <p class="card-category">value</p>
                  <h3 class="card-title">
                    <small>value</small>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons text-danger">warning</i>
                    <a href="javascript:;"></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">home</i>
                  </div>
                  <p class="card-category">value</p>
                  <h3 class="card-title">value</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">date_range</i> Last 24 Hours
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">home</i>
                  </div>
                  <p class="card-category">value</p>
                  <h3 class="card-title">value</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">local_offer</i> Tracked from Github
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-twitter"></i>
                  </div>
                  <p class="card-category">value</p>
                  <h3 class="card-title">value</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">update</i> Just Updated
                  </div>
                </div>
              </div>
            </div>
          </div>  
          <div class="row">
            <div class="col-md-4">
              <div class="card card-chart">
                <div class="card-header card-header-success">
                  <div class="ct-chart" id="dailySalesChart"></div>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Daily Sales</h4>
                  <p class="card-category">
                    <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in today sales.</p>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> updated 4 minutes ago
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-chart">
                <div class="card-header card-header-warning">
                  <div class="ct-chart" id="websiteViewsChart"></div>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Email Subscriptions</h4>
                  <p class="card-category">Last Campaign Performance</p>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> campaign sent 2 days ago
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-chart">
                <div class="card-header card-header-danger">
                  <div class="ct-chart" id="completedTasksChart"></div>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Completed Tasks</h4>
                  <p class="card-category">Last Campaign Performance</p>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> campaign sent 2 days ago
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
              <div class="col-md-4">
                <div class="card card-product" data-count="6">
                  <div class="card-header card-header-image" data-header-animation="true">
                    <a href="#pablo">
                      <img class="img" src="assets/img/faces/camp.jpg">
                    </a>
                  </div>
                  <div class="card-body">
                    <div class="card-actions text-center">
                      <button type="button" class="btn btn-danger btn-link fix-broken-card">
                        <i class="material-icons">build</i> Fix Header!
                      </button>
                      <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="" data-original-title="View">
                        <i class="material-icons">art_track</i>
                      </button>
                      <button type="button" class="btn btn-success btn-link" rel="tooltip" data-placement="bottom" title="" data-original-title="Edit">
                        <i class="material-icons">edit</i>
                      </button>
                      <button type="button" class="btn btn-danger btn-link" rel="tooltip" data-placement="bottom" title="" data-original-title="Remove">
                        <i class="material-icons">close</i>
                      </button>
                    </div>
                    <h4 class="card-title">
                      <a href="#pablo">Cozy 5 Stars Apartment</a>
                    </h4>
                    <div class="card-description">
                      The place is close to Barceloneta Beach and bus stop just 2 min by walk and near to "Naviglio" where you can enjoy the main night life in Barcelona.
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="price">
                      <h4>$899/night</h4>
                    </div>
                    <div class="stats">
                      <p class="card-category"><i class="material-icons">place</i> Barcelona, Spain</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card card-product" data-count="9">
                  <div class="card-header card-header-image" data-header-animation="true">
                    <a href="#pablo">
                      <img class="img" src="assets/img/faces/card-profile1-square.jpg">
                    </a>
                  </div>
                  <div class="card-body">
                    <div class="card-actions text-center">
                      <button type="button" class="btn btn-danger btn-link fix-broken-card">
                        <i class="material-icons">build</i> Fix Header!
                      </button>
                      <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="" data-original-title="View">
                        <i class="material-icons">art_track</i>
                      </button>
                      <button type="button" class="btn btn-success btn-link" rel="tooltip" data-placement="bottom" title="" data-original-title="Edit">
                        <i class="material-icons">edit</i>
                      </button>
                      <button type="button" class="btn btn-danger btn-link" rel="tooltip" data-placement="bottom" title="" data-original-title="Remove">
                        <i class="material-icons">close</i>
                      <div class="ripple-container"></div></button>
                    </div>
                    <h4 class="card-title">
                      <a href="#pablo">Office Studio</a>
                    </h4>
                    <div class="card-description">
                      The place is close to Metro Station and bus stop just 2 min by walk and near to "Naviglio" where you can enjoy the night life in London, UK.
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="price">
                      <h4>$1.119/night</h4>
                    </div>
                    <div class="stats">
                      <p class="card-category"><i class="material-icons">place</i> London, UK</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card card-product" data-count="2">
                  <div class="card-header card-header-image" data-header-animation="true">
                    <a href="#pablo">
                      <img class="img" src="assets/img/faces/card-profile2-square.jpg">
                    </a>
                  </div>
                  <div class="card-body">
                    <div class="card-actions text-center">
                      <button type="button" class="btn btn-danger btn-link fix-broken-card">
                        <i class="material-icons">build</i> Fix Header!
                      </button>
                      <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="" data-original-title="View">
                        <i class="material-icons">art_track</i>
                      </button>
                      <button type="button" class="btn btn-success btn-link" rel="tooltip" data-placement="bottom" title="" data-original-title="Edit">
                        <i class="material-icons">edit</i>
                      </button>
                      <button type="button" class="btn btn-danger btn-link" rel="tooltip" data-placement="bottom" title="" data-original-title="Remove">
                        <i class="material-icons">close</i>
                      </button>
                    </div>
                    <h4 class="card-title">
                      <a href="#pablo">Beautiful Castle</a>
                    </h4>
                    <div class="card-description">
                      The place is close to Metro Station and bus stop just 2 min by walk and near to "Naviglio" where you can enjoy the main night life in Milan.
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="price">
                      <h4>$459/night</h4>
                    </div>
                    <div class="stats">
                      <p class="card-category"><i class="material-icons">place</i> Milan, Italy</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
@endsection
