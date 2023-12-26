 <!--  Body Wrapper -->
 <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
 data-sidebar-position="fixed" data-header-position="fixed">
 <!-- Sidebar Start -->
 <aside class="left-sidebar">
   <!-- Sidebar scroll-->
   <div>
     <div class="brand-logo d-flex align-items-center justify-content-between">
       <a href="./index.html" class="text-nowrap logo-img">
         <img src="{{ asset('admin-css/assets/images/logos/dark-logo.svg') }}" width="180" alt="" />
       </a>
       <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
         <i class="ti ti-x fs-8"></i>
       </div>
     </div>
     <!-- Sidebar navigation-->
     <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
       <ul id="sidebarnav">
         <li class="nav-small-cap">
           <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
           <span class="hide-menu">Home</span>
         </li>
         <li class="sidebar-item">
           <a class="sidebar-link" href="{{ route('dashboard') }}" aria-expanded="false">
             <span>
               <i class="ti ti-layout-dashboard"></i>
             </span>
             <span class="hide-menu">Dashboard</span>
           </a>
         </li>
       </ul>
       <ul id="sidebarnav"> 
        <li class="nav-small-cap">
          <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
          <span class="hide-menu">Category Manage</span>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{ route('addcategory') }}" aria-expanded="false">
            <span>
              <i class="ti ti-layout-dashboard"></i>
            </span>
            <span class="hide-menu">AddCategory</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{ route('category_list') }}" aria-expanded="false">
            <span>
              <i class="ti ti-layout-dashboard"></i>
            </span>
            <span class="hide-menu">Category List</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{ route('addcategory') }}" aria-expanded="false">
            <span>
              <i class="ti ti-layout-dashboard"></i>
            </span>
            <span class="hide-menu"> Edit Category</span>
          </a>
        </li>
       </ul>
       <ul id="sidebarnav"> 
        <li class="nav-small-cap">
          <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
          <span class="hide-menu">Product Manage</span>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{ route('Products.list') }}" aria-expanded="false">
            <span>
              <i class="ti ti-layout-dashboard"></i>
            </span>
            <span class="hide-menu">Product List </span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{ route('Product.create') }}" aria-expanded="false">
            <span>
              <i class="ti ti-layout-dashboard"></i>
            </span>
            <span class="hide-menu">Product create </span>
          </a>
        </li>
       </ul>
         </div>
       </div>
     </nav>
     <!-- End Sidebar navigation -->
   </div>
   <!-- End Sidebar scroll-->
 </aside>
 <!--  Sidebar End -->
 <!--  Main wrapper -->

 