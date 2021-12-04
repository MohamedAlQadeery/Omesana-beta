 <!--begin::Notifications-->
 <div class="d-flex align-items-center ms-1 ms-lg-3">



     <!--begin::Menu- wrapper-->
     <div class="btn btn-icon btn-active-light-primary position-relative w-30px h-30px w-md-40px h-md-40px pulse pulse-success"
         data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
         <i class="bi bi-grid fs-2"></i>

         <span class="{{ $unread ? 'pulse-ring w-45px h-45px' : '' }}" id="unread"></span>

     </div>

     <!--begin::Menu-->
     <div class="
             menu
             menu-sub
             menu-sub-dropdown
             menu-column
             w-350px w-lg-375px
         "
         data-kt-menu="true">
         <!--begin::Heading-->
         <div class="
                 d-flex
                 flex-column
                 bgi-no-repeat
                 rounded-top
             "
             style="
                 background-image: url('{{ asset('admin-dashboard') }}/media/misc/pattern-1.jpg');
             ">
             <!--begin::Title-->
             <h3
                 class="
                     text-white
                     fw-bold
                     px-9
                     mt-10
                     mb-6
                 ">
                 الاشعارات

             </h3>
             <!--end::Title-->
             <!--begin::Tabs-->
             <ul
                 class="
                     nav
                     nav-line-tabs
                     nav-line-tabs-2x
                     nav-stretch
                     fw-bold
                     px-9
                 ">
                 <li class="nav-item">
                     <a class="
                             nav-link
                             text-white
                             opacity-75
                             opacity-state-100
                             pb-4
                         "
                         data-bs-toggle="tab" href="#kt_topbar_notifications_1">الرسائل</a>
                 </li>


             </ul>
             <!--end::Tabs-->
         </div>
         <!--end::Heading-->
         <!--begin::Tab content-->
         <div class="tab-content">
             <!--begin::Tab panel-->
             <div class="tab-pane fade show active" id="kt_topbar_notifications_1" role="tabpanel">
                 <!--begin::Items-->
                 <div class="scroll-y mh-325px my-5 px-8" id="notifications_tab">

                     @foreach ($notifications as $notification)
                         <!--begin::Item-->
                         <div class="d-flex flex-stack py-4">
                             <!--begin::Section-->
                             <div class="d-flex align-items-center">
                                 <!--begin::Symbol-->
                                 <div class="symbol symbol-35px me-4">
                                     <span class="symbol-label bg-light-primary">
                                         <!--begin::Svg Icon | path: icons/duotune/technology/teh008.svg-->
                                         <span class="svg-icon svg-icon-2 svg-icon-primary">
                                             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none">
                                                 <path opacity="0.3"
                                                     d="M11 6.5C11 9 9 11 6.5 11C4 11 2 9 2 6.5C2 4 4 2 6.5 2C9 2 11 4 11 6.5ZM17.5 2C15 2 13 4 13 6.5C13 9 15 11 17.5 11C20 11 22 9 22 6.5C22 4 20 2 17.5 2ZM6.5 13C4 13 2 15 2 17.5C2 20 4 22 6.5 22C9 22 11 20 11 17.5C11 15 9 13 6.5 13ZM17.5 13C15 13 13 15 13 17.5C13 20 15 22 17.5 22C20 22 22 20 22 17.5C22 15 20 13 17.5 13Z"
                                                     fill="black" />
                                                 <path
                                                     d="M17.5 16C17.5 16 17.4 16 17.5 16L16.7 15.3C16.1 14.7 15.7 13.9 15.6 13.1C15.5 12.4 15.5 11.6 15.6 10.8C15.7 9.99999 16.1 9.19998 16.7 8.59998L17.4 7.90002H17.5C18.3 7.90002 19 7.20002 19 6.40002C19 5.60002 18.3 4.90002 17.5 4.90002C16.7 4.90002 16 5.60002 16 6.40002V6.5L15.3 7.20001C14.7 7.80001 13.9 8.19999 13.1 8.29999C12.4 8.39999 11.6 8.39999 10.8 8.29999C9.99999 8.19999 9.20001 7.80001 8.60001 7.20001L7.89999 6.5V6.40002C7.89999 5.60002 7.19999 4.90002 6.39999 4.90002C5.59999 4.90002 4.89999 5.60002 4.89999 6.40002C4.89999 7.20002 5.59999 7.90002 6.39999 7.90002H6.5L7.20001 8.59998C7.80001 9.19998 8.19999 9.99999 8.29999 10.8C8.39999 11.5 8.39999 12.3 8.29999 13.1C8.19999 13.9 7.80001 14.7 7.20001 15.3L6.5 16H6.39999C5.59999 16 4.89999 16.7 4.89999 17.5C4.89999 18.3 5.59999 19 6.39999 19C7.19999 19 7.89999 18.3 7.89999 17.5V17.4L8.60001 16.7C9.20001 16.1 9.99999 15.7 10.8 15.6C11.5 15.5 12.3 15.5 13.1 15.6C13.9 15.7 14.7 16.1 15.3 16.7L16 17.4V17.5C16 18.3 16.7 19 17.5 19C18.3 19 19 18.3 19 17.5C19 16.7 18.3 16 17.5 16Z"
                                                     fill="black" />
                                             </svg>
                                         </span>
                                         <!--end::Svg Icon-->
                                     </span>
                                 </div>
                                 <!--end::Symbol-->
                                 <!--begin::Title-->
                                 <div class="mb-0 me-2">
                                     <a href="{{ $notification->data['url'] }}?notify_id={{ $notification->id }}"
                                         class="fs-6 text-hover-primary {{ $notification->unread() ? ' text-gray-800  fw-bolder' : 'text-muted' }}">{{ $notification->data['body'] }}</a>
                                     <div class="text-gray-400 fs-7">
                                         {{ $notification->data['title'] }}
                                     </div>
                                 </div>
                                 <!--end::Title-->
                             </div>
                             <!--end::Section-->
                             <!--begin::Label-->
                             <span
                                 class="badge badge-light fs-8">{{ $notification->created_at->diffForHumans() }}</span>
                             <!--end::Label-->
                         </div>
                         <!--end::Item-->
                     @endforeach
                 </div>
                 <!--end::Items-->

             </div>

         </div>
         <!--end::Tab content-->
     </div>
     <!--end::Menu-->
     <!--end::Menu wrapper-->
 </div>
 <!--end::Notifications-->
