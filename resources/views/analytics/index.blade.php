
@extends('body.user_dashboard')

	<!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('../../../assets/vendors/morris.js/morris.css')}}">
    <!-- End plugin css for this page -->
	
@section('admin')

<div class="page-content">
    <div class="row">
        <div class="col-12 col-md-4 col-xl-4">
        <div class="card">
            <div class="dropdown">
                <a type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye"
                    class="icon-sm me-2"></i> <span class="">View</span></a>
                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="edit-2"
                    class="icon-sm me-2"></i> <span class="">Edit</span></a>
                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="trash"
                    class="icon-sm me-2"></i> <span class="">Delete</span></a>
                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="printer"
                    class="icon-sm me-2"></i> <span class="">Print</span></a>
                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="download"
                    class="icon-sm me-2"></i> <span class="">Download</span></a>
                </div>
            </div>
            <div class="card-body">
            <h1 class="card-title">Revenue</h1>
            <p class="card-text h2">1000,000frs</p>
            </div>
        </div>
        </div>
        <div class="col-12 col-md-4 col-xl-4">
        <div class="card">
            <div class="dropdown">
                <a type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye"
                    class="icon-sm me-2"></i> <span class="">View</span></a>
                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="edit-2"
                    class="icon-sm me-2"></i> <span class="">Edit</span></a>
                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="trash"
                    class="icon-sm me-2"></i> <span class="">Delete</span></a>
                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="printer"
                    class="icon-sm me-2"></i> <span class="">Print</span></a>
                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="download"
                    class="icon-sm me-2"></i> <span class="">Download</span></a>
                </div>
            </div>
            <div class="card-body">
            <h2 class="card-title"> total Profits</h2>
            <p class="card-text h2">200,000frs</p>
            </div>
        </div>
        </div>

        <div class="col-12 col-md-4 col-xl-4">
            <div class="card">
            <div class="dropdown">
                <a type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye"
                        class="icon-sm me-2"></i> <span class="">View</span></a>
                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="edit-2"
                        class="icon-sm me-2"></i> <span class="">Edit</span></a>
                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="trash"
                        class="icon-sm me-2"></i> <span class="">Delete</span></a>
                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="printer"
                        class="icon-sm me-2"></i> <span class="">Print</span></a>
                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="download"
                        class="icon-sm me-2"></i> <span class="">Download</span></a>
                </div>
                </div>
            <div class="card-body">
                <h2 class="card-title">Tatal Capital </h2>
                <p class="card-text  h2">15,000,000 frs</p>
            </div>
            </div>
        </div>
    </div>

    <br>
        <div class="row">
            <div class="col-12 col-xl-12 grid-margin stretch-card">
            <div class="card overflow-hidden">
                <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline mb-4 mb-md-3">
                    <h6 class="card-title mb-0">Revenue</h6>
                    <div class="dropdown">
                    <a type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                        <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye"
                            class="icon-sm me-2"></i> <span class="">View</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="edit-2"
                            class="icon-sm me-2"></i> <span class="">Edit</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="trash"
                            class="icon-sm me-2"></i> <span class="">Delete</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="printer"
                            class="icon-sm me-2"></i> <span class="">Print</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="download"
                            class="icon-sm me-2"></i> <span class="">Download</span></a>
                    </div>
                    </div>
                </div>
                <div class="row align-items-start">
                    <div class="col-md-7">
                    <p class="text-muted tx-13 mb-3 mb-md-0">Revenue is the income that a business has from its normal
                        business activities, usually from the sale of goods and services to customers.</p>
                    </div>
                    <div class="col-md-5 d-flex justify-content-md-end">
                    <div class="btn-group mb-3 mb-md-0" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-outline-primary">Today</button>
                        <button type="button" class="btn btn-outline-primary d-none d-md-block">Week</button>
                        <button type="button" class="btn btn-primary">Month</button>
                        <button type="button" class="btn btn-outline-primary">Year</button>
                    </div>
                    </div>
                </div>
                <div id="revenueChart"></div>
                </div>
            </div>
            </div>
        </div> <!-- row -->

        <div class="row">
            <div class="col-12 col-xl-12 stretch-card">
              <div class="row flex-grow-1">
                <div class="col-md-4 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-baseline">
                        <h6 class="card-title mb-0">New Customers</h6>
                        <div class="dropdown mb-2">
                          <a type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                          </a>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye"
                                class="icon-sm me-2"></i> <span class="">View</span></a>
                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                data-feather="edit-2" class="icon-sm me-2"></i> <span class="">Edit</span></a>
                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="trash"
                                class="icon-sm me-2"></i> <span class="">Delete</span></a>
                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                data-feather="printer" class="icon-sm me-2"></i> <span class="">Print</span></a>
                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                data-feather="download" class="icon-sm me-2"></i> <span class="">Download</span></a>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6 col-md-12 col-xl-5">
                          <h3 class="mb-2">3,897</h3>
                          <div class="d-flex align-items-baseline">
                            <p class="text-success">
                              <span>+3.3%</span>
                              <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                            </p>
                          </div>
                        </div>
                        <div class="col-6 col-md-12 col-xl-7">
                          <div id="customersChart" class="mt-md-3 mt-xl-0"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-baseline">
                        <h6 class="card-title mb-0">New Orders</h6>
                        <div class="dropdown mb-2">
                          <a type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                          </a>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye"
                                class="icon-sm me-2"></i> <span class="">View</span></a>
                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                data-feather="edit-2" class="icon-sm me-2"></i> <span class="">Edit</span></a>
                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="trash"
                                class="icon-sm me-2"></i> <span class="">Delete</span></a>
                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                data-feather="printer" class="icon-sm me-2"></i> <span class="">Print</span></a>
                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                data-feather="download" class="icon-sm me-2"></i> <span class="">Download</span></a>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6 col-md-12 col-xl-5">
                          <h3 class="mb-2">35,084</h3>
                          <div class="d-flex align-items-baseline">
                            <p class="text-danger">
                              <span>-2.8%</span>
                              <i data-feather="arrow-down" class="icon-sm mb-1"></i>
                            </p>
                          </div>
                        </div>
                        <div class="col-6 col-md-12 col-xl-7">
                          <div id="ordersChart" class="mt-md-3 mt-xl-0"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-baseline">
                        <h6 class="card-title mb-0">Growth</h6>
                        <div class="dropdown mb-2">
                          <a type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                          </a>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye"
                                class="icon-sm me-2"></i> <span class="">View</span></a>
                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                data-feather="edit-2" class="icon-sm me-2"></i> <span class="">Edit</span></a>
                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="trash"
                                class="icon-sm me-2"></i> <span class="">Delete</span></a>
                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                data-feather="printer" class="icon-sm me-2"></i> <span class="">Print</span></a>
                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                data-feather="download" class="icon-sm me-2"></i> <span class="">Download</span></a>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6 col-md-12 col-xl-5">
                          <h3 class="mb-2">89.87%</h3>
                          <div class="d-flex align-items-baseline">
                            <p class="text-success">
                              <span>+2.8%</span>
                              <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                            </p>
                          </div>
                        </div>
                        <div class="col-6 col-md-12 col-xl-7">
                          <div id="growthChart" class="mt-md-3 mt-xl-0"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div> <!-- row -->
    
        
        <div class="row">
            <div class="col-xl-6 grid-margin stretch-card">
                <div class="card">
                <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline mb-2">
                    <h6 class="card-title mb-0">Monthly sales</h6>
                    <div class="dropdown mb-2">
                    <a type="button" id="dropdownMenuButton4" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                        <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye"
                            class="icon-sm me-2"></i> <span class="">View</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="edit-2"
                            class="icon-sm me-2"></i> <span class="">Edit</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="trash"
                            class="icon-sm me-2"></i> <span class="">Delete</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="printer"
                            class="icon-sm me-2"></i> <span class="">Print</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="download"
                            class="icon-sm me-2"></i> <span class="">Download</span></a>
                    </div>
                    </div>
                </div>
                <p class="text-muted">Sales are activities related to selling or the number of goods or services sold in
                    a given time period.</p>
                <div id="monthlySalesChart"></div>
                </div>
            </div>
            </div>
            <div class="col-xl-6 grid-margin stretch-card">
                <div class="card">
                <div class="card-body">
                    <h6 class="card-title">sales Over the Years</h6>
                    <div id="apexBar"></div>
                </div>
                </div>
            </div>
        </div> <!-- row -->
        
    <div class="row">
        <div class="col-12 col-md-4 col-xl-4">
        <div class="card">
            <div class="dropdown">
                <a type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye"
                    class="icon-sm me-2"></i> <span class="">View</span></a>
                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="edit-2"
                    class="icon-sm me-2"></i> <span class="">Edit</span></a>
                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="trash"
                    class="icon-sm me-2"></i> <span class="">Delete</span></a>
                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="printer"
                    class="icon-sm me-2"></i> <span class="">Print</span></a>
                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="download"
                    class="icon-sm me-2"></i> <span class="">Download</span></a>
                </div>
            </div>
            <div class="card-body">
            <h6 class="card-title">Total Sales Today</h6>
            <p class="card-text h2">10</p>
            </div>
        </div>
        </div>
        <div class="col-12 col-md-4 col-xl-4">
        <div class="card">
            <div class="dropdown">
                <a type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye"
                    class="icon-sm me-2"></i> <span class="">View</span></a>
                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="edit-2"
                    class="icon-sm me-2"></i> <span class="">Edit</span></a>
                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="trash"
                    class="icon-sm me-2"></i> <span class="">Delete</span></a>
                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="printer"
                    class="icon-sm me-2"></i> <span class="">Print</span></a>
                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="download"
                    class="icon-sm me-2"></i> <span class="">Download</span></a>
                </div>
            </div>
            <div class="card-body">
            <h6 class="card-title"> Total Sales This Week</h6>
            <p class="card-text h2">80</p>
            </div>
        </div>
        </div>

        <div class="col-12 col-md-4 col-xl-4">
            <div class="card">
            <div class="dropdown">
                <a type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye"
                        class="icon-sm me-2"></i> <span class="">View</span></a>
                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="edit-2"
                        class="icon-sm me-2"></i> <span class="">Edit</span></a>
                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="trash"
                        class="icon-sm me-2"></i> <span class="">Delete</span></a>
                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="printer"
                        class="icon-sm me-2"></i> <span class="">Print</span></a>
                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="download"
                        class="icon-sm me-2"></i> <span class="">Download</span></a>
                </div>
                </div>
            <div class="card-body">
                <h6 class="card-title">Total Sales This Month </h6>
                <p class="card-text  h2">500</p>
            </div>
            </div>
        </div>
    </div>

    <br>

    <div class="row">
        <div class="col-xl-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Line chart</h6>
                     <div id="morrisLine"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Bar chart</h6>
                    <div id="morrisBar"></div>
                </div>
            </div>
        </div>
    </div>

         
    <div class="row">
        <div class="col-12 col-md-4 col-xl-4">
        <div class="card">
            <div class="dropdown">
                <a type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye"
                    class="icon-sm me-2"></i> <span class="">View</span></a>
                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="edit-2"
                    class="icon-sm me-2"></i> <span class="">Edit</span></a>
                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="trash"
                    class="icon-sm me-2"></i> <span class="">Delete</span></a>
                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="printer"
                    class="icon-sm me-2"></i> <span class="">Print</span></a>
                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="download"
                    class="icon-sm me-2"></i> <span class="">Download</span></a>
                </div>
            </div>
            <div class="card-body">
            <h6 class="card-title">Total Expenditure Today</h6>
            <p class="card-text h2">4,000frs</p>
            </div>
        </div>
        </div>
        <div class="col-12 col-md-4 col-xl-4">
        <div class="card">
            <div class="dropdown">
                <a type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye"
                    class="icon-sm me-2"></i> <span class="">View</span></a>
                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="edit-2"
                    class="icon-sm me-2"></i> <span class="">Edit</span></a>
                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="trash"
                    class="icon-sm me-2"></i> <span class="">Delete</span></a>
                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="printer"
                    class="icon-sm me-2"></i> <span class="">Print</span></a>
                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="download"
                    class="icon-sm me-2"></i> <span class="">Download</span></a>
                </div>
            </div>
            <div class="card-body">
            <h6 class="card-title"> Total Expenditure This Week</h6>
            <p class="card-text h2">20,000 frs</p>
            </div>
        </div>
        </div>

        <div class="col-12 col-md-4 col-xl-4">
            <div class="card">
            <div class="dropdown">
                <a type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye"
                        class="icon-sm me-2"></i> <span class="">View</span></a>
                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="edit-2"
                        class="icon-sm me-2"></i> <span class="">Edit</span></a>
                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="trash"
                        class="icon-sm me-2"></i> <span class="">Delete</span></a>
                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="printer"
                        class="icon-sm me-2"></i> <span class="">Print</span></a>
                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="download"
                        class="icon-sm me-2"></i> <span class="">Download</span></a>
                </div>
                </div>
            <div class="card-body">
                <h6 class="card-title">Total Expenditure This Month </h6>
                <p class="card-text  h2">100,000frs</p>
            </div>
            </div>
        </div>
    </div>
    <br>
    
    <div class="row">
        <div class="col-xl-6 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Area chart</h6>
                    <div id="morrisArea"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Best Selling Items This week</h6>
                    <div id="morrisDonut"></div>
                </div>
            </div>
        </div>
    </div>

  </div>
</div>


    


</div>



@endsection

