 <div id="kt_header" class="header  header-fixed ">
     <!--begin::Container-->
     <div class=" container-fluid  d-flex align-items-stretch justify-content-between">
         <!--begin::Header Menu Wrapper-->
         <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
             <!--begin::Header Menu-->

             <!--end::Header Menu-->
         </div>
         <!--end::Header Menu Wrapper-->

         <!--begin::Topbar-->
         <div class="topbar">
             <!--begin::Search-->
             <div class="dropdown" id="kt_quick_search_toggle">
                 <!--begin::Toggle-->
                 <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                     <div class="btn btn-icon btn-clean btn-lg btn-dropdown mr-1">
                         <span
                             class="svg-icon svg-icon-xl svg-icon-primary"><!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg--><svg
                                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                 <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                     <rect x="0" y="0" width="24" height="24" />
                                     <path
                                         d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                         fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                     <path
                                         d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                         fill="#000000" fill-rule="nonzero" />
                                 </g>
                             </svg><!--end::Svg Icon--></span>
                     </div>
                 </div>
                 <!--end::Toggle-->

                 <!--begin::Dropdown-->
                 <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
                     <div class="quick-search quick-search-dropdown" id="kt_quick_search_dropdown">
                         <!--begin:Form-->
                         <form method="get" class="quick-search-form">
                             <div class="input-group">
                                 <div class="input-group-prepend">
                                     <span class="input-group-text">
                                         <span
                                             class="svg-icon svg-icon-lg"><!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg--><svg
                                                 xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                 height="24px" viewBox="0 0 24 24" version="1.1">
                                                 <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                     <rect x="0" y="0" width="24" height="24" />
                                                     <path
                                                         d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                                         fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                     <path
                                                         d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                                         fill="#000000" fill-rule="nonzero" />
                                                 </g>
                                             </svg><!--end::Svg Icon--></span> </span>
                                 </div>
                                 <input type="text" class="form-control" placeholder="Search..." />
                                 <div class="input-group-append">
                                     <span class="input-group-text">
                                         <i class="quick-search-close ki ki-close icon-sm text-muted"></i>
                                     </span>
                                 </div>
                             </div>
                         </form>
                         <!--end::Form-->

                         <!--begin::Scroll-->
                         <div class="quick-search-wrapper scroll" data-scroll="true" data-height="325"
                             data-mobile-height="200">
                         </div>
                         <!--end::Scroll-->
                     </div>
                 </div>
                 <!--end::Dropdown-->
             </div>
             <!--end::Search-->
<div>
    
    <x-tag-a :route="route('website')" :name="__('customTrans.go website')" default_class="btn  btn-light-primary"></x-tag-a>
</div>
             <!--begin::Notifications-->
             <div class="dropdown">
                 <!--begin::Toggle-->
                 <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                     <div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1 pulse pulse-primary">
                         <span
                             class="svg-icon svg-icon-xl svg-icon-primary"><!--begin::Svg Icon | path:assets/media/svg/icons/Code/Compiling.svg--><svg
                                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                 <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                     <rect x="0" y="0" width="24" height="24" />
                                     <path
                                         d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z"
                                         fill="#000000" opacity="0.3" />
                                     <path
                                         d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z"
                                         fill="#000000" />
                                 </g>
                             </svg><!--end::Svg Icon--></span> <span class="pulse-ring"></span>
                     </div>
                 </div>
                 <!--end::Toggle-->

                 <!--begin::Dropdown-->
                 <dFiv class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
                     <form>
                         <!--begin::Header-->
                         <div class="d-flex flex-column pt-12 bgi-size-cover bgi-no-repeat rounded-top"
                             style="background-image: url(assets/media/misc/bg-1.jpg)">
                             <!--begin::Title-->
                             <h4 class="d-flex flex-center rounded-top">
                                 <span class="text-white">User Notifications</span>
                                 <span class="btn btn-text btn-success btn-sm font-weight-bold btn-font-md ml-2">23
                                     new</span>
                             </h4>

                         </div>
                         <!--end::Header-->

                         <!--begin::Content-->
                         <div class="tab-content">
                             <!--begin::Tabpane-->
                             <div class="tab-pane active show p-8" id="topbar_notifications_notifications"
                                 role="tabpanel">
                                 <!--begin::Scroll-->
                                 <div class="scroll pr-7 mr-n7" data-scroll="true" data-height="300"
                                     data-mobile-height="200">
                                     <!--begin::Item-->
                                     <div class="d-flex align-items-center mb-6">
                                         <!--begin::Symbol-->
                                         <div class="symbol symbol-40 symbol-light-primary mr-5">
                                             <span class="symbol-label">
                                                 <span
                                                     class="svg-icon svg-icon-lg svg-icon-primary"><!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg--><svg
                                                         xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                         height="24px" viewBox="0 0 24 24" version="1.1">
                                                         <g stroke="none" stroke-width="1" fill="none"
                                                             fill-rule="evenodd">
                                                             <rect x="0" y="0" width="24" height="24" />
                                                             <path
                                                                 d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z"
                                                                 fill="#000000" />
                                                             <rect fill="#000000" opacity="0.3"
                                                                 transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) "
                                                                 x="16.3255682" y="2.94551858" width="3"
                                                                 height="18" rx="1" />
                                                         </g>
                                                     </svg><!--end::Svg Icon--></span> </span>
                                         </div>
                                         <!--end::Symbol-->

                                         <!--begin::Text-->
                                         <div class="d-flex flex-column font-weight-bold">
                                             <a href="#"
                                                 class="text-dark text-hover-primary mb-1 font-size-lg">Cool
                                                 App</a>
                                             <span class="text-muted">Marketing campaign
                                                 planning</span>
                                         </div>
                                         <!--end::Text-->
                                     </div>
                                     <!--end::Item-->

                                     <!--begin::Item-->
                                     <div class="d-flex align-items-center mb-6">
                                         <!--begin::Symbol-->
                                         <div class="symbol symbol-40 symbol-light-warning mr-5">
                                             <span class="symbol-label">
                                                 <span
                                                     class="svg-icon svg-icon-lg svg-icon-warning"><!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg--><svg
                                                         xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                         height="24px" viewBox="0 0 24 24" version="1.1">
                                                         <g stroke="none" stroke-width="1" fill="none"
                                                             fill-rule="evenodd">
                                                             <rect x="0" y="0" width="24" height="24" />
                                                             <path
                                                                 d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                                                 fill="#000000" fill-rule="nonzero"
                                                                 transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953) " />
                                                             <path
                                                                 d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                                                 fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                         </g>
                                                     </svg><!--end::Svg Icon--></span> </span>
                                         </div>
                                         <!--end::Symbol-->

                                         <!--begin::Text-->
                                         <div class="d-flex flex-column font-weight-bold">
                                             <a href="#"
                                                 class="text-dark-75 text-hover-primary mb-1 font-size-lg">Awesome
                                                 SAAS</a>
                                             <span class="text-muted">Project status update
                                                 meeting</span>
                                         </div>
                                         <!--end::Text-->
                                     </div>

                                     <!--end::Item-->
                                 </div>

                                 <div class="d-flex flex-center pt-7"><a href="#"
                                         class="btn btn-light-primary font-weight-bold text-center">See
                                         All</a></div>
                                 <!--end::Action-->
                             </div>
                             <!--end::Tabpane-->

                             <!--begin::Tabpane-->
                             <div class="tab-pane" id="topbar_notifications_events" role="tabpanel">
                                 <!--begin::Nav-->
                                 <div class="navi navi-hover scroll my-4" data-scroll="true" data-height="300"
                                     data-mobile-height="200">
                                     <!--begin::Item-->
                                     <a href="#" class="navi-item">
                                         <div class="navi-link">
                                             <div class="navi-icon mr-2">
                                                 <i class="flaticon2-line-chart text-success"></i>
                                             </div>
                                             <div class="navi-text">
                                                 <div class="font-weight-bold">
                                                     New report has been received
                                                 </div>
                                                 <div class="text-muted">
                                                     23 hrs ago
                                                 </div>
                                             </div>
                                         </div>
                                     </a>
                                     <!--end::Item-->

                                     <!--begin::Item-->
                                     <a href="#" class="navi-item">
                                         <div class="navi-link">
                                             <div class="navi-icon mr-2">
                                                 <i class="flaticon2-paper-plane text-danger"></i>
                                             </div>
                                             <div class="navi-text">
                                                 <div class="font-weight-bold">
                                                     Finance report has been generated
                                                 </div>
                                                 <div class="text-muted">
                                                     25 hrs ago
                                                 </div>
                                             </div>
                                         </div>
                                     </a>
                                     <!--end::Item-->

                                     <!--begin::Item-->
                                     <a href="#" class="navi-item">
                                         <div class="navi-link">
                                             <div class="navi-icon mr-2">
                                                 <i class="flaticon2-user flaticon2-line- text-success"></i>
                                             </div>
                                             <div class="navi-text">
                                                 <div class="font-weight-bold">
                                                     New order has been received
                                                 </div>
                                                 <div class="text-muted">
                                                     2 hrs ago
                                                 </div>
                                             </div>
                                         </div>
                                     </a>
                                     <!--end::Item-->

                                     <!--begin::Item-->
                                     <a href="#" class="navi-item">
                                         <div class="navi-link">
                                             <div class="navi-icon mr-2">
                                                 <i class="flaticon2-pin text-primary"></i>
                                             </div>
                                             <div class="navi-text">
                                                 <div class="font-weight-bold">
                                                     New customer is registered
                                                 </div>
                                                 <div class="text-muted">
                                                     3 hrs ago
                                                 </div>
                                             </div>
                                         </div>
                                     </a>
                                     <!--end::Item-->

                                     <!--begin::Item-->
                                     <a href="#" class="navi-item">
                                         <div class="navi-link">
                                             <div class="navi-icon mr-2">
                                                 <i class="flaticon2-sms text-danger"></i>
                                             </div>
                                             <div class="navi-text">
                                                 <div class="font-weight-bold">
                                                     Application has been approved
                                                 </div>
                                                 <div class="text-muted">
                                                     3 hrs ago
                                                 </div>
                                             </div>
                                         </div>
                                     </a>
                                     <!--end::Item-->

                                     <!--begin::Item-->
                                     <a href="#" class="navi-item">
                                         <div class="navi-link">
                                             <div class="navi-icon mr-2">
                                                 <i class="flaticon2-pie-chart-3 text-warning"></i>
                                             </div>
                                             <div class="navinavinavi-text">
                                                 <div class="font-weight-bold">
                                                     New file has been uploaded
                                                 </div>
                                                 <div class="text-muted">
                                                     5 hrs ago
                                                 </div>
                                             </div>
                                         </div>
                                     </a>
                                     <!--end::Item-->

                                     <!--begin::Item-->
                                     <a href="#" class="navi-item">
                                         <div class="navi-link">
                                             <div class="navi-icon mr-2">
                                                 <i class="flaticon-pie-chart-1 text-info"></i>
                                             </div>
                                             <div class="navi-text">
                                                 <div class="font-weight-bold">
                                                     New user feedback received
                                                 </div>
                                                 <div class="text-muted">
                                                     8 hrs ago
                                                 </div>
                                             </div>
                                         </div>
                                     </a>
                                     <!--end::Item-->

                                     <!--begin::Item-->
                                     <a href="#" class="navi-item">
                                         <div class="navi-link">
                                             <div class="navi-icon mr-2">
                                                 <i class="flaticon2-settings text-success"></i>
                                             </div>
                                             <div class="navi-text">
                                                 <div class="font-weight-bold">
                                                     System reboot has been successfully completed
                                                 </div>
                                                 <div class="text-muted">
                                                     12 hrs ago
                                                 </div>
                                             </div>
                                         </div>
                                     </a>
                                     <!--end::Item-->

                                     <!--begin::Item-->
                                     <a href="#" class="navi-item">
                                         <div class="navi-link">
                                             <div class="navi-icon mr-2">
                                                 <i class="flaticon-safe-shield-protection text-primary"></i>
                                             </div>
                                             <div class="navi-text">
                                                 <div class="font-weight-bold">
                                                     New order has been placed
                                                 </div>
                                                 <div class="text-muted">
                                                     15 hrs ago
                                                 </div>
                                             </div>
                                         </div>
                                     </a>
                                     <!--end::Item-->

                                     <!--begin::Item-->
                                     <a href="#" class="navi-item">
                                         <div class="navi-link">
                                             <div class="navi-icon mr-2">
                                                 <i class="flaticon2-notification text-primary"></i>
                                             </div>
                                             <div class="navi-text">
                                                 <div class="font-weight-bold">
                                                     Company meeting canceled
                                                 </div>
                                                 <div class="text-muted">
                                                     19 hrs ago
                                                 </div>
                                             </div>
                                         </div>
                                     </a>
                                     <!--end::Item-->

                                     <!--begin::Item-->
                                     <a href="#" class="navi-item">
                                         <div class="navi-link">
                                             <div class="navi-icon mr-2">
                                                 <i class="flaticon2-fax text-success"></i>
                                             </div>
                                             <div class="navi-text">
                                                 <div class="font-weight-bold">
                                                     New report has been received
                                                 </div>
                                                 <div class="text-muted">
                                                     23 hrs ago
                                                 </div>
                                             </div>
                                         </div>
                                     </a>
                                     <!--end::Item-->

                                     <!--begin::Item-->
                                     <a href="#" class="navi-item">
                                         <div class="navi-link">
                                             <div class="navi-icon mr-2">
                                                 <i class="flaticon-download-1 text-danger"></i>
                                             </div>
                                             <div class="navi-text">
                                                 <div class="font-weight-bold">
                                                     Finance report has been generated
                                                 </div>
                                                 <div class="text-muted">
                                                     25 hrs ago
                                                 </div>
                                             </div>
                                         </div>
                                     </a>
                                     <!--end::Item-->

                                     <!--begin::Item-->
                                     <a href="#" class="navi-item">
                                         <div class="navi-link">
                                             <div class="navi-icon mr-2">
                                                 <i class="flaticon-security text-warning"></i>
                                             </div>
                                             <div class="navi-text">
                                                 <div class="font-weight-bold">
                                                     New customer comment recieved
                                                 </div>
                                                 <div class="text-muted">
                                                     2 days ago
                                                 </div>
                                             </div>
                                         </div>
                                     </a>
                                     <!--end::Item-->

                                     <!--begin::Item-->
                                     <a href="#" class="navi-item">
                                         <div class="navi-link">
                                             <div class="navi-icon mr-2">
                                                 <i class="flaticon2-analytics-1 text-success"></i>
                                             </div>
                                             <div class="navi-text">
                                                 <div class="font-weight-bold">
                                                     New customer is registered
                                                 </div>
                                                 <div class="text-muted">
                                                     3 days ago
                                                 </div>
                                             </div>
                                         </div>
                                     </a>
                                     <!--end::Item-->
                                 </div>
                                 <!--end::Nav-->
                             </div>
                             <!--end::Tabpane-->

                         </div>
                         <!--end::Content-->
                     </form>
                 </dFiv>
                 <!--end::Dropdown-->
             </div>
             <!--end::Notifications-->

             <!--begin::Quick Actions-->
             <div class="dropdown">


                 <!--begin::Dropdown-->
                 <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
                     <!--begin:Header-->
                     <div class="d-flex flex-column flex-center py-10 bgi-size-cover bgi-no-repeat rounded-top"
                         style="background-image: url(assets/media/misc/bg-1.jpg)">
                         <h4 class="text-white font-weight-bold">
                             Quick Actions
                         </h4>
                         <span class="btn btn-success btn-sm font-weight-bold font-size-sm mt-2">23
                             tasks pending</span>
                     </div>
                     <!--end:Header-->

                     <!--begin:Nav-->
                     <div class="row row-paddingless">
                         <!--begin:Item-->
                         <div class="col-6">
                             <a href="#"
                                 class="d-block py-10 px-5 text-center bg-hover-light border-right border-bottom">
                                 <span
                                     class="svg-icon svg-icon-3x svg-icon-success"><!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Euro.svg--><svg
                                         xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                         width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                         <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                             <rect x="0" y="0" width="24" height="24" />
                                             <path
                                                 d="M4.3618034,10.2763932 L4.8618034,9.2763932 C4.94649941,9.10700119 5.11963097,9 5.30901699,9 L15.190983,9 C15.4671254,9 15.690983,9.22385763 15.690983,9.5 C15.690983,9.57762255 15.6729105,9.65417908 15.6381966,9.7236068 L15.1381966,10.7236068 C15.0535006,10.8929988 14.880369,11 14.690983,11 L4.80901699,11 C4.53287462,11 4.30901699,10.7761424 4.30901699,10.5 C4.30901699,10.4223775 4.32708954,10.3458209 4.3618034,10.2763932 Z M14.6381966,13.7236068 L14.1381966,14.7236068 C14.0535006,14.8929988 13.880369,15 13.690983,15 L4.80901699,15 C4.53287462,15 4.30901699,14.7761424 4.30901699,14.5 C4.30901699,14.4223775 4.32708954,14.3458209 4.3618034,14.2763932 L4.8618034,13.2763932 C4.94649941,13.1070012 5.11963097,13 5.30901699,13 L14.190983,13 C14.4671254,13 14.690983,13.2238576 14.690983,13.5 C14.690983,13.5776225 14.6729105,13.6541791 14.6381966,13.7236068 Z"
                                                 fill="#000000" opacity="0.3" />
                                             <path
                                                 d="M17.369,7.618 C16.976998,7.08599734 16.4660031,6.69750122 15.836,6.4525 C15.2059968,6.20749878 14.590003,6.085 13.988,6.085 C13.2179962,6.085 12.5180032,6.2249986 11.888,6.505 C11.2579969,6.7850014 10.7155023,7.16999755 10.2605,7.66 C9.80549773,8.15000245 9.45550123,8.72399671 9.2105,9.382 C8.96549878,10.0400033 8.843,10.7539961 8.843,11.524 C8.843,12.3360041 8.96199881,13.0779966 9.2,13.75 C9.43800119,14.4220034 9.7774978,14.9994976 10.2185,15.4825 C10.6595022,15.9655024 11.1879969,16.3399987 11.804,16.606 C12.4200031,16.8720013 13.1129962,17.005 13.883,17.005 C14.681004,17.005 15.3879969,16.8475016 16.004,16.5325 C16.6200031,16.2174984 17.1169981,15.8010026 17.495,15.283 L19.616,16.774 C18.9579967,17.6000041 18.1530048,18.2404977 17.201,18.6955 C16.2489952,19.1505023 15.1360064,19.378 13.862,19.378 C12.6999942,19.378 11.6325049,19.1855019 10.6595,18.8005 C9.68649514,18.4154981 8.8500035,17.8765035 8.15,17.1835 C7.4499965,16.4904965 6.90400196,15.6645048 6.512,14.7055 C6.11999804,13.7464952 5.924,12.6860058 5.924,11.524 C5.924,10.333994 6.13049794,9.25950479 6.5435,8.3005 C6.95650207,7.34149521 7.5234964,6.52600336 8.2445,5.854 C8.96550361,5.18199664 9.8159951,4.66400182 10.796,4.3 C11.7760049,3.93599818 12.8399943,3.754 13.988,3.754 C14.4640024,3.754 14.9609974,3.79949954 15.479,3.8905 C15.9970026,3.98150045 16.4939976,4.12149906 16.97,4.3105 C17.4460024,4.49950095 17.8939979,4.7339986 18.314,5.014 C18.7340021,5.2940014 19.0909985,5.62999804 19.385,6.022 L17.369,7.618 Z"
                                                 fill="#000000" />
                                         </g>
                                     </svg><!--end::Svg Icon--></span> <span
                                     class="d-block text-dark-75 font-weight-bold font-size-h6 mt-2 mb-1">Accounting</span>
                                 <span class="d-block text-dark-50 font-size-lg">eCommerce</span>
                             </a>
                         </div>
                         <!--end:Item-->

                         <!--begin:Item-->
                         <div class="col-6">
                             <a href="#" class="d-block py-10 px-5 text-center bg-hover-light border-bottom">
                                 <span
                                     class="svg-icon svg-icon-3x svg-icon-success"><!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-attachment.svg--><svg
                                         xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                         width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                         <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                             <rect x="0" y="0" width="24" height="24" />
                                             <path
                                                 d="M14.8571499,13 C14.9499122,12.7223297 15,12.4263059 15,12.1190476 L15,6.88095238 C15,5.28984632 13.6568542,4 12,4 L11.7272727,4 C10.2210416,4 9,5.17258756 9,6.61904762 L10.0909091,6.61904762 C10.0909091,5.75117158 10.823534,5.04761905 11.7272727,5.04761905 L12,5.04761905 C13.0543618,5.04761905 13.9090909,5.86843034 13.9090909,6.88095238 L13.9090909,12.1190476 C13.9090909,12.4383379 13.8240964,12.7385644 13.6746497,13 L10.3253503,13 C10.1759036,12.7385644 10.0909091,12.4383379 10.0909091,12.1190476 L10.0909091,9.5 C10.0909091,9.06606198 10.4572216,8.71428571 10.9090909,8.71428571 C11.3609602,8.71428571 11.7272727,9.06606198 11.7272727,9.5 L11.7272727,11.3333333 L12.8181818,11.3333333 L12.8181818,9.5 C12.8181818,8.48747796 11.9634527,7.66666667 10.9090909,7.66666667 C9.85472911,7.66666667 9,8.48747796 9,9.5 L9,12.1190476 C9,12.4263059 9.0500878,12.7223297 9.14285008,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L14.8571499,13 Z"
                                                 fill="#000000" opacity="0.3" />
                                             <path
                                                 d="M9,10.3333333 L9,12.1190476 C9,13.7101537 10.3431458,15 12,15 C13.6568542,15 15,13.7101537 15,12.1190476 L15,10.3333333 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9,10.3333333 Z M10.0909091,11.1212121 L12,12.5 L13.9090909,11.1212121 L13.9090909,12.1190476 C13.9090909,13.1315697 13.0543618,13.952381 12,13.952381 C10.9456382,13.952381 10.0909091,13.1315697 10.0909091,12.1190476 L10.0909091,11.1212121 Z"
                                                 fill="#000000" />
                                         </g>
                                     </svg><!--end::Svg Icon--></span> <span
                                     class="d-block text-dark-75 font-weight-bold font-size-h6 mt-2 mb-1">Administration</span>
                                 <span class="d-block text-dark-50 font-size-lg">Console</span>
                             </a>
                         </div>
                         <!--end:Item-->

                         <!--begin:Item-->
                         <div class="col-6">
                             <a href="#" class="d-block py-10 px-5 text-center bg-hover-light border-right">
                                 <span
                                     class="svg-icon svg-icon-3x svg-icon-success"><!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Box2.svg--><svg
                                         xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                         width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                         <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                             <rect x="0" y="0" width="24" height="24" />
                                             <path
                                                 d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z"
                                                 fill="#000000" />
                                             <path
                                                 d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z"
                                                 fill="#000000" opacity="0.3" />
                                         </g>
                                     </svg><!--end::Svg Icon--></span> <span
                                     class="d-block text-dark-75 font-weight-bold font-size-h6 mt-2 mb-1">Projects</span>
                                 <span class="d-block text-dark-50 font-size-lg">Pending Tasks</span>
                             </a>
                         </div>
                         <!--end:Item-->

                         <!--begin:Item-->
                         <div class="col-6">
                             <a href="#" class="d-block py-10 px-5 text-center bg-hover-light">
                                 <span
                                     class="svg-icon svg-icon-3x svg-icon-success"><!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg--><svg
                                         xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                         width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                         <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                             <polygon points="0 0 24 0 24 24 0 24" />
                                             <path
                                                 d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                                                 fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                             <path
                                                 d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                                                 fill="#000000" fill-rule="nonzero" />
                                         </g>
                                     </svg><!--end::Svg Icon--></span> <span
                                     class="d-block text-dark-75 font-weight-bold font-size-h6 mt-2 mb-1">Customers</span>
                                 <span class="d-block text-dark-50 font-size-lg">Latest cases</span>
                             </a>
                         </div>
                         <!--end:Item-->
                     </div>
                     <!--end:Nav-->
                 </div>
                 <!--end::Dropdown-->
             </div>
             <!--end::Quick Actions-->



             <!--begin::Languages-->
             @include('partials.metronic7._lang-metronic-header')
             <!--end::Languages-->

             <!--begin::User-->
             <div class="topbar-item">
                 <div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2"
                     id="kt_quick_user_toggle">
                     <span
                         class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">{{ __('customTrans.welcome') }}</span>
                     <span
                         class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">{{ Auth::user()->name ?? __('customTrans.guest') }}</span>

                 </div>
             </div>
             <!--end::User-->
         </div>
         <!--end::Topbar-->
     </div>
     <!--end::Container-->
 </div>
