
<nav class="sidebar">
      <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
          TK<span>ELECTRONICS</span>
        </a>
        <div class="sidebar-toggler not-active">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="sidebar-body">
        <ul class="nav">
          <li class="nav-item nav-category">Main</li>
          <li class="nav-item">
            <a href="{{route('dashboard')}}" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item nav-category">ELECTRONICS</li>
          <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#uiComponents" role="button" aria-expanded="false"
                aria-controls="uiComponents">
                <i class="link-icon" data-feather="feather"></i>
                <span class="link-title"> Products</span>
                <i class="link-arrow" data-feather="chevron-down"></i>
              </a>
              <div class="collapse" id="uiComponents">
                <ul class="nav sub-menu">
  
                  <li class="nav-item">
                    <a href="{{route('products.index')}}" class="nav-link">view products</a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('products.create')}}" class="nav-link">Add Product </a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link">Product table</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../pages/products/salesentry.html" class="nav-link">sales Entry</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../pages/products/saleshistory.html" class="nav-link">Sales History</a>
                  </li>
  
                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#Moreinfo" role="button" aria-expanded="false"
                aria-controls="Moreinfo">
                <i class="link-icon" data-feather="anchor"></i>
                <span class="link-title">More Functions</span>
                <i class="link-arrow" data-feather="chevron-down"></i>
              </a>
              <div class="collapse" id="Moreinfo">
                <ul class="nav sub-menu">
                  <li class="nav-item">
                    <a href="#" class="nav-link">Customers Data</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link"> Analytics</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">Notifications</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">Resources</a>
                  </li>
                </ul>
              </div>
            </li>
  
          </li>
         

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#advancedUI" role="button" aria-expanded="false" aria-controls="advancedUI">
              <i class="link-icon" data-feather="anchor"></i>

              <span class="link-title">Roles & Permission</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="advancedUI">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{route('roles.index')}}" class="nav-link">All Permision</a>
                </li>
                <li class="nav-item">
                  <a href="{{route('roles.create')}}" class="nav-link">Add Permision</a>
                </li>
                
                </li>
              </ul>
            </div>
          </li>



          
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#forms" role="button" aria-expanded="false" aria-controls="forms">
              <i class="link-icon" data-feather="inbox"></i>
              <span class="link-title">Workers</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="forms">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{route('users.index')}}" class="nav-link">All Workers</a>
                </li>
                <li class="nav-item">
                  <a href="{{route('users.create')}}" class="nav-link">Add Workers</a>
                </li>
             
              </ul>
            </div>
          </li>


      
          <li class="nav-item">
            <a href="pages/apps/chat.html" class="nav-link">
              <i class="link-icon" data-feather="message-square"></i>
              <span class="link-title">Chat</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/apps/calendar.html" class="nav-link">
              <i class="link-icon" data-feather="calendar"></i>
              <span class="link-title">Calendar</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link"  data-bs-toggle="collapse" href="#charts" role="button" aria-expanded="false" aria-controls="charts">
              <i class="link-icon" data-feather="pie-chart"></i>
              <span class="link-title">Charts</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{asset('pages/charts/apex.html')}}" class="nav-link">Apex</a>
                </li>
                <li class="nav-item">
                  <a href="{{asset('pages/charts/chartjs.html')}}" class="nav-link">ChartJs</a>
                </li>
                <li class="nav-item">
                  <a href="{{asset('pages/charts/flot.html')}}" class="nav-link">Flot</a>
                </li>
                <li class="nav-item">
                  <a href="{{asset('pages/charts/morrisjs.html')}}" class="nav-link">Morris</a>
                </li>
                <li class="nav-item">
                  <a href="{{asset('pages/charts/peity.html')}}" class="nav-link">Peity</a>
                </li>
                <li class="nav-item">
                  <a href="{{asset('pages/charts/sparkline.html')}}" class="nav-link">Sparkline</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#tables" role="button" aria-expanded="false" aria-controls="tables">
              <i class="link-icon" data-feather="layout"></i>
              <span class="link-title">Table</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{asset('pages/tables/basic-table.html')}}" class="nav-link">Basic Tables</a>
                </li>
                <li class="nav-item">
                  <a href="{{asset('pages/tables/data-table.html')}}" class="nav-link">Data Table</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#icons" role="button" aria-expanded="false" aria-controls="icons">
              <i class="link-icon" data-feather="smile"></i>
              <span class="link-title">Icons</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="icons">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{asset('pages/icons/feather-icons.html')}}" class="nav-link">Feather Icons</a>
                </li>
                <li class="nav-item">
                  <a href="{{asset('pages/icons/flag-icons.html')}}" class="nav-link">Flag Icons</a>
                </li>
                <li class="nav-item">
                  <a href="{{asset('pages/icons/mdi-icons.html')}}" class="nav-link">Mdi Icons</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item nav-category">Pages</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" role="button" aria-expanded="false" aria-controls="general-pages">
              <i class="link-icon" data-feather="book"></i>
              <span class="link-title">Special pages</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="general-pages">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{asset('pages/general/blank-page.html')}}" class="nav-link">Blank page</a>
                </li>
                <li class="nav-item">
                  <a href="{{asset('pages/general/faq.html')}}" class="nav-link">Faq</a>
                </li>
                <li class="nav-item">
                  <a href="{{asset('pages/general/invoice.html')}}" class="nav-link">Invoice</a>
                </li>
                <li class="nav-item">
                  <a href="{{asset('pages/general/profile.html')}}" class="nav-link">Profile</a>
                </li>
                <li class="nav-item">
                  <a href="{{asset('pages/general/pricing.html')}}" class="nav-link">Pricing</a>
                </li>
                <li class="nav-item">
                  <a href="{{asset('pages/general/timeline.html')}}" class="nav-link">Timeline</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#authPages" role="button" aria-expanded="false" aria-controls="authPages">
              <i class="link-icon" data-feather="unlock"></i>
              <span class="link-title">Authentication</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="authPages">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{asset('pages/auth/login.html')}}" class="nav-link">Login</a>
                </li>
                <li class="nav-item">
                  <a href="{{asset('pages/auth/register.html')}}" class="nav-link">Register</a>
                </li>
               
      
              </ul>
            </div>
          </li>

          <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                {{ __('Log Out') }}
            </button>
        </form>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#errorPages" role="button" aria-expanded="false" aria-controls="errorPages">
              <i class="link-icon" data-feather="cloud-off"></i>
              <span class="link-title">Error</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="errorPages">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{asset('pages/error/404.html')}}" class="nav-link">404</a>
                </li>
                <li class="nav-item">
                  <a href="{{asset('pages/error/500.html')}}" class="nav-link">500</a>
                </li>
              </ul>
            </div>
          </li>


     

          <li class="nav-item nav-category">Docs</li>
          <li class="nav-item">
            <a href="https://www.nobleui.com/html/documentation/docs.html" target="_blank" class="nav-link">
              <i class="link-icon" data-feather="hash"></i>
              <span class="link-title">Documentation</span>
            </a>
          </li>
        </ul>
      </div>
    </nav>
    <nav class="settings-sidebar">
      <div class="sidebar-body">
        <a href="#" class="settings-sidebar-toggler">
          <i data-feather="settings"></i>
        </a>
        <div class="theme-wrapper">
          <h6 class="text-muted mb-2">Light Theme:</h6>
          <a class="theme-item" href="{{asset('../demo1/dashboard.html')}}">
            <img src="{{asset('../assets/images/screenshots/light.jpg')}}" alt="light theme">
          </a>
          <h6 class="text-muted mb-2">Dark Theme:</h6>
          <a class="theme-../assets/images/screenshots/dark.jpgitem active" href="{{asset('../demo2/dashboard.html')}}">
            <img src="{{asset('../assets/images/screenshots/dark.jpg')}}" alt="light theme">
          </a>
        </div>
      </div>
    </nav>