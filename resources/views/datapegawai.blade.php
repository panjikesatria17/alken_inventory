<!DOCTYPE html>
<html
  lang="en"
  data-layout="vertical"
  data-topbar="light"
  data-sidebar="dark"
  data-sidebar-size="lg"
  data-sidebar-image="none"
  data-preloader="disable"
>
  <head>
    <meta charset="utf-8" />
    <title>Data Karyawan | Alken</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      content="Premium Multipurpose Admin & Dashboard Template"
      name="description"
    />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('template/assets/images/favicon.ico') }}" />

    <!--datatable css-->
    <link
      rel="stylesheet"
      href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css"
    />
    <!--datatable responsive css-->
    <link
      rel="stylesheet"
      href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css"
    />

    <link
      rel="stylesheet"
      href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css"
    />

    <!-- Layout config Js -->
    <script src="{{ asset('template/assets/js/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link
      href="{{ asset('template/assets/css/bootstrap.min.css') }}"
      rel="stylesheet"
      type="text/css"
    />
    <!-- Icons Css -->
    <link href="{{ asset('template/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('template/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('template/assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>

  <body>
    <!-- Begin page -->
    <div id="layout-wrapper">
      <header id="page-topbar">
        <div class="layout-width">
          <div class="navbar-header">
            <div class="d-flex">
              <!-- LOGO -->
              <div class="navbar-brand-box horizontal-logo">
                <a href="index.html" class="logo logo-dark">
                  <span class="logo-sm">
                    <img src="assets/images/logo-sm.png" alt="" height="22" />
                  </span>
                  <span class="logo-lg">
                    <img src="assets/images/logo-dark.png" alt="" height="17" />
                  </span>
                </a>

                <a href="index.html" class="logo logo-light">
                  <span class="logo-sm">
                    <img src="assets/images/logo-sm.png" alt="" height="22" />
                  </span>
                  <span class="logo-lg">
                    <img
                      src="assets/images/logo-light.png"
                      alt=""
                      height="17"
                    />
                  </span>
                </a>
              </div>

              <button
                type="button"
                class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger shadow-none"
                id="topnav-hamburger-icon"
              >
                <span class="hamburger-icon">
                  <span></span>
                  <span></span>
                  <span></span>
                </span>
              </button>

              <!-- App Search-->
              <form class="app-search d-none d-md-block">
                <div class="position-relative">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Search..."
                    autocomplete="off"
                    id="search-options"
                    value=""
                  />
                  <span class="mdi mdi-magnify search-widget-icon"></span>
                  <span
                    class="mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none"
                    id="search-close-options"
                  ></span>
                </div>
                <div
                  class="dropdown-menu dropdown-menu-lg"
                  id="search-dropdown"
                >
                  <div data-simplebar style="max-height: 320px">
                    <!-- item-->
                    <div class="dropdown-header">
                      <h6 class="text-overflow text-muted mb-0 text-uppercase">
                        Recent Searches
                      </h6>
                    </div>

                    <div class="dropdown-item bg-transparent text-wrap">
                      <a
                        href="index.html"
                        class="btn btn-soft-secondary btn-sm btn-rounded"
                        >how to setup <i class="mdi mdi-magnify ms-1"></i
                      ></a>
                      <a
                        href="index.html"
                        class="btn btn-soft-secondary btn-sm btn-rounded"
                        >buttons <i class="mdi mdi-magnify ms-1"></i
                      ></a>
                    </div>
                    <!-- item-->
                    <div class="dropdown-header mt-2">
                      <h6 class="text-overflow text-muted mb-1 text-uppercase">
                        Pages
                      </h6>
                    </div>

                    <!-- item-->
                    <a
                      href="javascript:void(0);"
                      class="dropdown-item notify-item"
                    >
                      <i
                        class="ri-bubble-chart-line align-middle fs-18 text-muted me-2"
                      ></i>
                      <span>Analytics Dashboard</span>
                    </a>

                    <!-- item-->
                    <a
                      href="javascript:void(0);"
                      class="dropdown-item notify-item"
                    >
                      <i
                        class="ri-lifebuoy-line align-middle fs-18 text-muted me-2"
                      ></i>
                      <span>Help Center</span>
                    </a>

                    <!-- item-->
                    <a
                      href="javascript:void(0);"
                      class="dropdown-item notify-item"
                    >
                      <i
                        class="ri-user-settings-line align-middle fs-18 text-muted me-2"
                      ></i>
                      <span>My account settings</span>
                    </a>

                    <!-- item-->
                    <div class="dropdown-header mt-2">
                      <h6 class="text-overflow text-muted mb-2 text-uppercase">
                        Members
                      </h6>
                    </div>

                    <div class="notification-list">
                      <!-- item -->
                      <a
                        href="javascript:void(0);"
                        class="dropdown-item notify-item py-2"
                      >
                        <div class="d-flex">
                          <img
                            src="assets/images/users/avatar-2.jpg"
                            class="me-3 rounded-circle avatar-xs"
                            alt="user-pic"
                          />
                          <div class="flex-1">
                            <h6 class="m-0">Angela Bernier</h6>
                            <span class="fs-11 mb-0 text-muted">Manager</span>
                          </div>
                        </div>
                      </a>
                      <!-- item -->
                      <a
                        href="javascript:void(0);"
                        class="dropdown-item notify-item py-2"
                      >
                        <div class="d-flex">
                          <img
                            src="assets/images/users/avatar-3.jpg"
                            class="me-3 rounded-circle avatar-xs"
                            alt="user-pic"
                          />
                          <div class="flex-1">
                            <h6 class="m-0">David Grasso</h6>
                            <span class="fs-11 mb-0 text-muted"
                              >Web Designer</span
                            >
                          </div>
                        </div>
                      </a>
                      <!-- item -->
                      <a
                        href="javascript:void(0);"
                        class="dropdown-item notify-item py-2"
                      >
                        <div class="d-flex">
                          <img
                            src="assets/images/users/avatar-5.jpg"
                            class="me-3 rounded-circle avatar-xs"
                            alt="user-pic"
                          />
                          <div class="flex-1">
                            <h6 class="m-0">Mike Bunch</h6>
                            <span class="fs-11 mb-0 text-muted"
                              >React Developer</span
                            >
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>

                  <div class="text-center pt-3 pb-1">
                    <a
                      href="pages-search-results.html"
                      class="btn btn-primary btn-sm"
                      >View All Results <i class="ri-arrow-right-line ms-1"></i
                    ></a>
                  </div>
                </div>
              </form>
            </div>

            <div class="d-flex align-items-center">
              <div class="dropdown d-md-none topbar-head-dropdown header-item">
                <button
                  type="button"
                  class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle shadow-none"
                  id="page-header-search-dropdown"
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i class="bx bx-search fs-22"></i>
                </button>
                <div
                  class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                  aria-labelledby="page-header-search-dropdown"
                >
                  <form class="p-3">
                    <div class="form-group m-0">
                      <div class="input-group">
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Search ..."
                          aria-label="Recipient's username"
                        />
                        <button class="btn btn-primary" type="submit">
                          <i class="mdi mdi-magnify"></i>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>

              <div class="ms-1 header-item d-none d-sm-flex">
                <button
                  type="button"
                  class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle shadow-none"
                  data-toggle="fullscreen"
                >
                  <i class="bx bx-fullscreen fs-22"></i>
                </button>
              </div>

              <div class="ms-1 header-item d-none d-sm-flex">
                <button
                  type="button"
                  class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle light-dark-mode shadow-none"
                >
                  <i class="bx bx-moon fs-22"></i>
                </button>
              </div>

              <div
                class="dropdown topbar-head-dropdown ms-1 header-item"
                id="notificationDropdown"
              >
                <button
                  type="button"
                  class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle shadow-none"
                  id="page-header-notifications-dropdown"
                  data-bs-toggle="dropdown"
                  data-bs-auto-close="outside"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i class="bx bx-bell fs-22"></i>
                  <span
                    class="position-absolute topbar-badge fs-10 translate-middle badge rounded-pill bg-danger"
                    >3<span class="visually-hidden">unread messages</span></span
                  >
                </button>
                <div
                  class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                  aria-labelledby="page-header-notifications-dropdown"
                >
                  <div class="dropdown-head bg-primary bg-pattern rounded-top">
                    <div class="p-3">
                      <div class="row align-items-center">
                        <div class="col">
                          <h6 class="m-0 fs-16 fw-semibold text-white">
                            Notifications
                          </h6>
                        </div>
                        <div class="col-auto dropdown-tabs">
                          <span class="badge badge-soft-light fs-13">
                            4 New</span
                          >
                        </div>
                      </div>
                    </div>

                    <div class="px-2 pt-2">
                      <ul
                        class="nav nav-tabs dropdown-tabs nav-tabs-custom"
                        data-dropdown-tabs="true"
                        id="notificationItemsTab"
                        role="tablist"
                      >
                        <li class="nav-item waves-effect waves-light">
                          <a
                            class="nav-link active"
                            data-bs-toggle="tab"
                            href="#all-noti-tab"
                            role="tab"
                            aria-selected="true"
                          >
                            All (4)
                          </a>
                        </li>
                        <li class="nav-item waves-effect waves-light">
                          <a
                            class="nav-link"
                            data-bs-toggle="tab"
                            href="#messages-tab"
                            role="tab"
                            aria-selected="false"
                          >
                            Messages
                          </a>
                        </li>
                        <li class="nav-item waves-effect waves-light">
                          <a
                            class="nav-link"
                            data-bs-toggle="tab"
                            href="#alerts-tab"
                            role="tab"
                            aria-selected="false"
                          >
                            Alerts
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div
                    class="tab-content position-relative"
                    id="notificationItemsTabContent"
                  >
                    <div
                      class="tab-pane fade show active py-2 ps-2"
                      id="all-noti-tab"
                      role="tabpanel"
                    >
                      <div
                        data-simplebar
                        style="max-height: 300px"
                        class="pe-2"
                      >
                        <div
                          class="text-reset notification-item d-block dropdown-item position-relative"
                        >
                          <div class="d-flex">
                            <div class="avatar-xs me-3">
                              <span
                                class="avatar-title bg-soft-info text-info rounded-circle fs-16"
                              >
                                <i class="bx bx-badge-check"></i>
                              </span>
                            </div>
                            <div class="flex-1">
                              <a href="#!" class="stretched-link">
                                <h6 class="mt-0 mb-2 lh-base">
                                  Your <b>Elite</b> author Graphic Optimization
                                  <span class="text-secondary">reward</span> is
                                  ready!
                                </h6>
                              </a>
                              <p
                                class="mb-0 fs-11 fw-medium text-uppercase text-muted"
                              >
                                <span
                                  ><i class="mdi mdi-clock-outline"></i> Just 30
                                  sec ago</span
                                >
                              </p>
                            </div>
                            <div class="px-2 fs-15">
                              <div class="form-check notification-check">
                                <input
                                  class="form-check-input"
                                  type="checkbox"
                                  value=""
                                  id="all-notification-check01"
                                />
                                <label
                                  class="form-check-label"
                                  for="all-notification-check01"
                                ></label>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div
                          class="text-reset notification-item d-block dropdown-item position-relative"
                        >
                          <div class="d-flex">
                            <img
                              src="assets/images/users/avatar-2.jpg"
                              class="me-3 rounded-circle avatar-xs"
                              alt="user-pic"
                            />
                            <div class="flex-1">
                              <a href="#!" class="stretched-link">
                                <h6 class="mt-0 mb-1 fs-13 fw-semibold">
                                  Angela Bernier
                                </h6>
                              </a>
                              <div class="fs-13 text-muted">
                                <p class="mb-1">
                                  Answered to your comment on the cash flow
                                  forecast's graph 🔔.
                                </p>
                              </div>
                              <p
                                class="mb-0 fs-11 fw-medium text-uppercase text-muted"
                              >
                                <span
                                  ><i class="mdi mdi-clock-outline"></i> 48 min
                                  ago</span
                                >
                              </p>
                            </div>
                            <div class="px-2 fs-15">
                              <div class="form-check notification-check">
                                <input
                                  class="form-check-input"
                                  type="checkbox"
                                  value=""
                                  id="all-notification-check02"
                                />
                                <label
                                  class="form-check-label"
                                  for="all-notification-check02"
                                ></label>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div
                          class="text-reset notification-item d-block dropdown-item position-relative"
                        >
                          <div class="d-flex">
                            <div class="avatar-xs me-3">
                              <span
                                class="avatar-title bg-soft-danger text-danger rounded-circle fs-16"
                              >
                                <i class="bx bx-message-square-dots"></i>
                              </span>
                            </div>
                            <div class="flex-1">
                              <a href="#!" class="stretched-link">
                                <h6 class="mt-0 mb-2 fs-13 lh-base">
                                  You have received
                                  <b class="text-success">20</b> new messages in
                                  the conversation
                                </h6>
                              </a>
                              <p
                                class="mb-0 fs-11 fw-medium text-uppercase text-muted"
                              >
                                <span
                                  ><i class="mdi mdi-clock-outline"></i> 2 hrs
                                  ago</span
                                >
                              </p>
                            </div>
                            <div class="px-2 fs-15">
                              <div class="form-check notification-check">
                                <input
                                  class="form-check-input"
                                  type="checkbox"
                                  value=""
                                  id="all-notification-check03"
                                />
                                <label
                                  class="form-check-label"
                                  for="all-notification-check03"
                                ></label>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div
                          class="text-reset notification-item d-block dropdown-item position-relative"
                        >
                          <div class="d-flex">
                            <img
                              src="assets/images/users/avatar-8.jpg"
                              class="me-3 rounded-circle avatar-xs"
                              alt="user-pic"
                            />
                            <div class="flex-1">
                              <a href="#!" class="stretched-link">
                                <h6 class="mt-0 mb-1 fs-13 fw-semibold">
                                  Maureen Gibson
                                </h6>
                              </a>
                              <div class="fs-13 text-muted">
                                <p class="mb-1">
                                  We talked about a project on linkedin.
                                </p>
                              </div>
                              <p
                                class="mb-0 fs-11 fw-medium text-uppercase text-muted"
                              >
                                <span
                                  ><i class="mdi mdi-clock-outline"></i> 4 hrs
                                  ago</span
                                >
                              </p>
                            </div>
                            <div class="px-2 fs-15">
                              <div class="form-check notification-check">
                                <input
                                  class="form-check-input"
                                  type="checkbox"
                                  value=""
                                  id="all-notification-check04"
                                />
                                <label
                                  class="form-check-label"
                                  for="all-notification-check04"
                                ></label>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="my-3 text-center view-all">
                          <button
                            type="button"
                            class="btn btn-soft-success waves-effect waves-light"
                          >
                            View All Notifications
                            <i class="ri-arrow-right-line align-middle"></i>
                          </button>
                        </div>
                      </div>
                    </div>

                    <div
                      class="tab-pane fade py-2 ps-2"
                      id="messages-tab"
                      role="tabpanel"
                      aria-labelledby="messages-tab"
                    >
                      <div
                        data-simplebar
                        style="max-height: 300px"
                        class="pe-2"
                      >
                        <div
                          class="text-reset notification-item d-block dropdown-item"
                        >
                          <div class="d-flex">
                            <img
                              src="assets/images/users/avatar-3.jpg"
                              class="me-3 rounded-circle avatar-xs"
                              alt="user-pic"
                            />
                            <div class="flex-1">
                              <a href="#!" class="stretched-link">
                                <h6 class="mt-0 mb-1 fs-13 fw-semibold">
                                  James Lemire
                                </h6>
                              </a>
                              <div class="fs-13 text-muted">
                                <p class="mb-1">
                                  We talked about a project on linkedin.
                                </p>
                              </div>
                              <p
                                class="mb-0 fs-11 fw-medium text-uppercase text-muted"
                              >
                                <span
                                  ><i class="mdi mdi-clock-outline"></i> 30 min
                                  ago</span
                                >
                              </p>
                            </div>
                            <div class="px-2 fs-15">
                              <div class="form-check notification-check">
                                <input
                                  class="form-check-input"
                                  type="checkbox"
                                  value=""
                                  id="messages-notification-check01"
                                />
                                <label
                                  class="form-check-label"
                                  for="messages-notification-check01"
                                ></label>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div
                          class="text-reset notification-item d-block dropdown-item"
                        >
                          <div class="d-flex">
                            <img
                              src="assets/images/users/avatar-2.jpg"
                              class="me-3 rounded-circle avatar-xs"
                              alt="user-pic"
                            />
                            <div class="flex-1">
                              <a href="#!" class="stretched-link">
                                <h6 class="mt-0 mb-1 fs-13 fw-semibold">
                                  Angela Bernier
                                </h6>
                              </a>
                              <div class="fs-13 text-muted">
                                <p class="mb-1">
                                  Answered to your comment on the cash flow
                                  forecast's graph 🔔.
                                </p>
                              </div>
                              <p
                                class="mb-0 fs-11 fw-medium text-uppercase text-muted"
                              >
                                <span
                                  ><i class="mdi mdi-clock-outline"></i> 2 hrs
                                  ago</span
                                >
                              </p>
                            </div>
                            <div class="px-2 fs-15">
                              <div class="form-check notification-check">
                                <input
                                  class="form-check-input"
                                  type="checkbox"
                                  value=""
                                  id="messages-notification-check02"
                                />
                                <label
                                  class="form-check-label"
                                  for="messages-notification-check02"
                                ></label>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div
                          class="text-reset notification-item d-block dropdown-item"
                        >
                          <div class="d-flex">
                            <img
                              src="assets/images/users/avatar-6.jpg"
                              class="me-3 rounded-circle avatar-xs"
                              alt="user-pic"
                            />
                            <div class="flex-1">
                              <a href="#!" class="stretched-link">
                                <h6 class="mt-0 mb-1 fs-13 fw-semibold">
                                  Kenneth Brown
                                </h6>
                              </a>
                              <div class="fs-13 text-muted">
                                <p class="mb-1">
                                  Mentionned you in his comment on 📃 invoice
                                  #12501.
                                </p>
                              </div>
                              <p
                                class="mb-0 fs-11 fw-medium text-uppercase text-muted"
                              >
                                <span
                                  ><i class="mdi mdi-clock-outline"></i> 10 hrs
                                  ago</span
                                >
                              </p>
                            </div>
                            <div class="px-2 fs-15">
                              <div class="form-check notification-check">
                                <input
                                  class="form-check-input"
                                  type="checkbox"
                                  value=""
                                  id="messages-notification-check03"
                                />
                                <label
                                  class="form-check-label"
                                  for="messages-notification-check03"
                                ></label>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div
                          class="text-reset notification-item d-block dropdown-item"
                        >
                          <div class="d-flex">
                            <img
                              src="assets/images/users/avatar-8.jpg"
                              class="me-3 rounded-circle avatar-xs"
                              alt="user-pic"
                            />
                            <div class="flex-1">
                              <a href="#!" class="stretched-link">
                                <h6 class="mt-0 mb-1 fs-13 fw-semibold">
                                  Maureen Gibson
                                </h6>
                              </a>
                              <div class="fs-13 text-muted">
                                <p class="mb-1">
                                  We talked about a project on linkedin.
                                </p>
                              </div>
                              <p
                                class="mb-0 fs-11 fw-medium text-uppercase text-muted"
                              >
                                <span
                                  ><i class="mdi mdi-clock-outline"></i> 3 days
                                  ago</span
                                >
                              </p>
                            </div>
                            <div class="px-2 fs-15">
                              <div class="form-check notification-check">
                                <input
                                  class="form-check-input"
                                  type="checkbox"
                                  value=""
                                  id="messages-notification-check04"
                                />
                                <label
                                  class="form-check-label"
                                  for="messages-notification-check04"
                                ></label>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="my-3 text-center view-all">
                          <button
                            type="button"
                            class="btn btn-soft-success waves-effect waves-light"
                          >
                            View All Messages
                            <i class="ri-arrow-right-line align-middle"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                    <div
                      class="tab-pane fade p-4"
                      id="alerts-tab"
                      role="tabpanel"
                      aria-labelledby="alerts-tab"
                    ></div>

                    <div class="notification-actions" id="notification-actions">
                      <div class="d-flex text-muted justify-content-center">
                        Select
                        <div
                          id="select-content"
                          class="text-body fw-semibold px-1"
                        >
                          0
                        </div>
                        Result
                        <button
                          type="button"
                          class="btn btn-link link-danger p-0 ms-3"
                          data-bs-toggle="modal"
                          data-bs-target="#removeNotificationModal"
                        >
                          Remove
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="dropdown ms-sm-3 header-item topbar-user">
                <button
                  type="button"
                  class="btn shadow-none"
                  id="page-header-user-dropdown"
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <span class="d-flex align-items-center">
                    <img
                      class="rounded-circle header-profile-user"
                      src="assets/images/users/avatar-1.jpg"
                      alt="Header Avatar"
                    />
                    <span class="text-start ms-xl-2">
                      <span
                        class="d-none d-xl-inline-block ms-1 fw-medium user-name-text"
                        >Anna Adame</span
                      >
                      <span
                        class="d-none d-xl-block ms-1 fs-12 text-muted user-name-sub-text"
                        >Founder</span
                      >
                    </span>
                  </span>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                  <!-- item-->
                  <h6 class="dropdown-header">Welcome Anna!</h6>
                  <a class="dropdown-item" href="pages-profile.html"
                    ><i
                      class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"
                    ></i>
                    <span class="align-middle">Profile</span></a
                  >
                  <a class="dropdown-item" href="apps-chat.html"
                    ><i
                      class="mdi mdi-message-text-outline text-muted fs-16 align-middle me-1"
                    ></i>
                    <span class="align-middle">Messages</span></a
                  >
                  <a class="dropdown-item" href="apps-tasks-kanban.html"
                    ><i
                      class="mdi mdi-calendar-check-outline text-muted fs-16 align-middle me-1"
                    ></i>
                    <span class="align-middle">Taskboard</span></a
                  >
                  <a class="dropdown-item" href="pages-faqs.html"
                    ><i
                      class="mdi mdi-lifebuoy text-muted fs-16 align-middle me-1"
                    ></i>
                    <span class="align-middle">Help</span></a
                  >
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="pages-profile.html"
                    ><i
                      class="mdi mdi-wallet text-muted fs-16 align-middle me-1"
                    ></i>
                    <span class="align-middle"
                      >Balance : <b>$5971.67</b></span
                    ></a
                  >
                  <a class="dropdown-item" href="pages-profile-settings.html"
                    ><span
                      class="badge bg-soft-success text-success mt-1 float-end"
                      >New</span
                    ><i
                      class="mdi mdi-cog-outline text-muted fs-16 align-middle me-1"
                    ></i>
                    <span class="align-middle">Settings</span></a
                  >
                  <a class="dropdown-item" href="auth-lockscreen-basic.html"
                    ><i
                      class="mdi mdi-lock text-muted fs-16 align-middle me-1"
                    ></i>
                    <span class="align-middle">Lock screen</span></a
                  >
                  <a class="dropdown-item" href="auth-logout-basic.html"
                    ><i
                      class="mdi mdi-logout text-muted fs-16 align-middle me-1"
                    ></i>
                    <span class="align-middle" data-key="t-logout"
                      >Logout</span
                    ></a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>

      <!-- removeNotificationModal -->
      <div
        id="removeNotificationModal"
        class="modal fade zoomIn"
        tabindex="-1"
        aria-hidden="true"
      >
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
                id="NotificationModalbtn-close"
              ></button>
            </div>
            <div class="modal-body">
              <div class="mt-2 text-center">
                <lord-icon
                  src="https://cdn.lordicon.com/gsqxdxog.json"
                  trigger="loop"
                  colors="primary:#f7b84b,secondary:#f06548"
                  style="width: 100px; height: 100px"
                ></lord-icon>
                <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                  <h4>Are you sure ?</h4>
                  <p class="text-muted mx-4 mb-0">
                    Are you sure you want to remove this Notification ?
                  </p>
                </div>
              </div>
              <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                <button
                  type="button"
                  class="btn w-sm btn-light"
                  data-bs-dismiss="modal"
                >
                  Close
                </button>
                <button
                  type="button"
                  class="btn w-sm btn-danger"
                  id="delete-notification"
                >
                  Yes, Delete It!
                </button>
              </div>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
      <!-- ========== App Menu ========== -->
      <div class="app-menu navbar-menu">
        <!-- LOGO -->
        <div class="navbar-brand-box">
          <!-- Dark Logo-->
          <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
              <img src="assets/images/logo-sm.png" alt="" height="22" />
            </span>
            <span class="logo-lg">
              <img src="assets/images/logo-dark.png" alt="" height="17" />
            </span>
          </a>
          <!-- Light Logo-->
          <a href="index.html" class="logo logo-light">
            <span class="logo-sm">
              <img src="assets/images/logo-sm.png" alt="" height="22" />
            </span>
            <span class="logo-lg">
              <img src="assets/images/logo-light.png" alt="" height="17" />
            </span>
          </a>
          <button
            type="button"
            class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover"
          >
            <i class="ri-record-circle-line"></i>
          </button>
        </div>

        <div id="scrollbar">
          <div class="container-fluid">
            <div id="two-column-menu"></div>
            <ul class="navbar-nav" id="navbar-nav">
              <li class="menu-title"><span data-key="t-menu">Menu</span></li>
              <li class="nav-item">
                <a
                  class="nav-link menu-link"
                  href="#sidebarDashboards"
                  data-bs-toggle="collapse"
                  role="button"
                  aria-expanded="false"
                  aria-controls="sidebarDashboards"
                >
                  <i class="mdi mdi-speedometer"></i>
                  <span data-key="t-dashboards">Dashboards</span>
                </a>
                <div class="collapse menu-dropdown" id="sidebarDashboards">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a
                        href="dashboard-analytics.html"
                        class="nav-link"
                        data-key="t-analytics"
                      >
                        Analytics
                      </a>
                    </li>
                    <li class="nav-item">
                      <a
                        href="dashboard-crm.html"
                        class="nav-link"
                        data-key="t-crm"
                      >
                        CRM
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="dashboard-job.html" class="nav-link"
                        ><span data-key="t-job">Job</span>
                        <span
                          class="badge badge-pill bg-success"
                          data-key="t-new"
                          >New</span
                        ></a
                      >
                    </li>
                  </ul>
                </div>
              </li>
              <!-- end Dashboard Menu -->
              <li class="nav-item">
                <a
                  class="nav-link menu-link"
                  href="#sidebarApps"
                  data-bs-toggle="collapse"
                  role="button"
                  aria-expanded="false"
                  aria-controls="sidebarApps"
                >
                  <i class="mdi mdi-view-grid-plus-outline"></i>
                  <span data-key="t-apps">Apps</span>
                </a>
                <div class="collapse menu-dropdown" id="sidebarApps">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a
                        href="apps-calendar.html"
                        class="nav-link"
                        data-key="t-calendar"
                      >
                        Calendar
                      </a>
                    </li>
                    <li class="nav-item">
                      <a
                        href="apps-chat.html"
                        class="nav-link"
                        data-key="t-chat"
                      >
                        Chat
                      </a>
                    </li>
                    <li class="nav-item">
                      <a
                        href="#sidebarEmail"
                        class="nav-link"
                        data-bs-toggle="collapse"
                        role="button"
                        aria-expanded="false"
                        aria-controls="sidebarEmail"
                        data-key="t-email"
                      >
                        Email
                      </a>
                      <div class="collapse menu-dropdown" id="sidebarEmail">
                        <ul class="nav nav-sm flex-column">
                          <li class="nav-item">
                            <a
                              href="apps-mailbox.html"
                              class="nav-link"
                              data-key="t-mailbox"
                            >
                              Mailbox
                            </a>
                          </li>
                          <li class="nav-item">
                            <a
                              href="#sidebaremailTemplates"
                              class="nav-link"
                              data-bs-toggle="collapse"
                              role="button"
                              aria-expanded="false"
                              aria-controls="sidebaremailTemplates"
                              data-key="t-email-templates"
                            >
                              Email Templates
                            </a>
                            <div
                              class="collapse menu-dropdown"
                              id="sidebaremailTemplates"
                            >
                              <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                  <a
                                    href="apps-email-basic.html"
                                    class="nav-link"
                                    data-key="t-basic-action"
                                  >
                                    Basic Action
                                  </a>
                                </li>
                                <li class="nav-item">
                                  <a
                                    href="apps-email-ecommerce.html"
                                    class="nav-link"
                                    data-key="t-ecommerce-action"
                                  >
                                    Ecommerce Action
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </div>
              </li>

              <li class="nav-item">
                <a
                  class="nav-link menu-link"
                  href="#sidebarLayouts"
                  data-bs-toggle="collapse"
                  role="button"
                  aria-expanded="false"
                  aria-controls="sidebarLayouts"
                >
                  <i class="mdi mdi-view-carousel-outline"></i>
                  <span data-key="t-layouts">Layouts</span>
                  <span class="badge badge-pill bg-danger" data-key="t-hot"
                    >Hot</span
                  >
                </a>
                <div class="collapse menu-dropdown" id="sidebarLayouts">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a
                        href="layouts-horizontal.html"
                        class="nav-link"
                        target="_blank"
                        data-key="t-horizontal"
                        >Horizontal</a
                      >
                    </li>
                  </ul>
                </div>
              </li>
              <!-- end Dashboard Menu -->
          </div>
          <!-- Sidebar -->
        </div>

        <div class="sidebar-background"></div>
      </div>
      <!-- Left Sidebar End -->
      <!-- Vertical Overlay-->
      <div class="vertical-overlay"></div>

      <!-- ============================================================== -->
      <!-- Start right Content here -->
      <!-- ============================================================== -->
      <div class="main-content">
        <div class="page-content">
          <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
              <div class="col-12">
                <div
                  class="page-title-box d-sm-flex align-items-center justify-content-between"
                >
                  <h4 class="mb-sm-0">Datatables</h4>

                  <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                      <li class="breadcrumb-item">
                        <a href="javascript: void(0);">Tables</a>
                      </li>
                      <li class="breadcrumb-item active">Datatables</li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>
            <!-- end page title -->

            <div class="alert alert-danger" role="alert">
              This is <strong>Datatable</strong> page in wihch we have used
              <b>jQuery</b> with cnd link!
            </div>

            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h5 class="card-title mb-0">Data Karyawan Alken</h5>
                  </div>
                  <div class="card-body">
                    <a href="/tambahpegawai" type="button" class="btn btn-primary waves-effect waves-light mb-3">Tambah +</a>
                  <div class="col-auto">
                    <a href="/exportpdf" type="button" class="btn btn-outline-danger waves-effect waves-light shadow-none mb-3">Export PDF</a>
                    <a href="/exportexcel" type="button" class="btn btn-outline-success waves-effect waves-light shadow-none mb-3">Export Excel</a>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-warning waves-effect waves-light shadow-none mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      Import Data
                    </button>
                  </div>
                  <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Import Data</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <form action="/importexcel" method="POST" enctype="multipart/form-data">
                            @csrf
                          <div class="modal-body">
                              <div class="form-group">
                                <input type="file" name="file" required>
                              </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                          </div>
                        </div>
                      </form>
                      </div>
                    </div>
                    <table
                      id="example"
                      class="table table-bordered dt-responsive nowrap table-striped align-middle"
                      style="width: 100%"
                    >
                      <thead>
                       
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">No Telpon</th>
                            <th scope="col">Dibuat</th>
                            <th scope="col">Aksi</th>
                          </tr>
                        
                      </thead>
                      <tbody>
                          @php
                          $no = 1;
                          @endphp
                          @foreach ($data as $row)
                            <tr>
                                <th scope="row">{{ $no++ }}</th>
                                <td>{{ $row->nama }}</td>
                                <td>
                                  <img src="{{ asset('fotopegawai/'.$row->foto) }}" alt="" style="width: 40px">
                                </td>
                                <td>{{ $row->jeniskelamin }}</td>
                                <td>0{{ $row->notelp }}</td>
                                <td>{{ $row->created_at->format('d M Y') }}</td>
                                <td>
                                <div class="dropdown d-inline-block">
                                  <button
                                    class="btn btn-soft-secondary btn-sm dropdown"
                                    type="button"
                                    data-bs-toggle="dropdown"
                                    aria-expanded="false"
                                  >
                                    <i class="ri-more-fill align-middle"></i>
                                  </button>
                                  <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                      <a href="/tampilkandata/{{ $row->id  }}" class="dropdown-item edit-item-btn"
                                        ><i
                                          class="ri-pencil-fill align-bottom me-2 text-muted"
                                        ></i>
                                        Edit</a
                                      >
                                    </li>
                                    <li>
                                      <a href="#" class="dropdown-item remove-item-btn delete" data-id="{{ $row->id }}" data-nama="{{ $row->nama }}">
                                        <i
                                          class="ri-delete-bin-fill align-bottom me-2 text-muted"
                                          ></i>
                                        Delete
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-6">
                <script>
                  document.write(new Date().getFullYear());
                </script>
                © Velzon.
              </div>
              <div class="col-sm-6">
                <div class="text-sm-end d-none d-sm-block">
                  Design & Develop by Themesbrand
                </div>
              </div>
            </div>
          </div>
        </footer>
      </div>
      <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->

    <!--start back-to-top-->
    <button
      onclick="topFunction()"
      class="btn btn-danger btn-icon"
      id="back-to-top"
    >
      <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!--preloader-->
    <div id="preloader">
      <div id="status">
        <div class="spinner-border text-primary avatar-sm" role="status">
          <span class="visually-hidden">Loading...</span>
        </div>
      </div>
    </div>

    <div class="customizer-setting d-none d-md-block">
      <div
        class="btn-info btn-rounded shadow-lg btn btn-icon btn-lg p-2"
        data-bs-toggle="offcanvas"
        data-bs-target="#theme-settings-offcanvas"
        aria-controls="theme-settings-offcanvas"
      >
        <i class="mdi mdi-spin mdi-cog-outline fs-22"></i>
      </div>
    </div>

    <!-- Theme Settings -->
    <div
      class="offcanvas offcanvas-end border-0"
      tabindex="-1"
      id="theme-settings-offcanvas"
    >
      <div
        class="d-flex align-items-center bg-primary bg-gradient p-3 offcanvas-header"
      >
        <h5 class="m-0 me-2 text-white">Theme Customizer</h5>

        <button
          type="button"
          class="btn-close btn-close-white ms-auto"
          id="customizerclose-btn"
          data-bs-dismiss="offcanvas"
          aria-label="Close"
        ></button>
      </div>
      <div class="offcanvas-body p-0">
        <div data-simplebar class="h-100">
          <div class="p-4">
            <h6 class="mb-0 fw-semibold text-uppercase fs-12">Layout</h6>
            <p class="text-muted">Choose your layout</p>

            <div class="row">
              <div class="col-4">
                <div class="form-check card-radio">
                  <input
                    id="customizer-layout01"
                    name="data-layout"
                    type="radio"
                    value="vertical"
                    class="form-check-input"
                  />
                  <label
                    class="form-check-label p-0 avatar-md w-100 shadow-sm"
                    for="customizer-layout01"
                  >
                    <span class="d-flex gap-1 h-100">
                      <span class="flex-shrink-0">
                        <span
                          class="bg-light d-flex h-100 flex-column gap-1 p-1"
                        >
                          <span
                            class="d-block p-1 px-2 bg-soft-primary rounded mb-2"
                          ></span>
                          <span
                            class="d-block p-1 px-2 pb-0 bg-soft-primary"
                          ></span>
                          <span
                            class="d-block p-1 px-2 pb-0 bg-soft-primary"
                          ></span>
                          <span
                            class="d-block p-1 px-2 pb-0 bg-soft-primary"
                          ></span>
                        </span>
                      </span>
                      <span class="flex-grow-1">
                        <span class="d-flex h-100 flex-column">
                          <span class="bg-light d-block p-1"></span>
                          <span class="bg-light d-block p-1 mt-auto"></span>
                        </span>
                      </span>
                    </span>
                  </label>
                </div>
                <h5 class="fs-13 text-center mt-2">Vertical</h5>
              </div>
              <div class="col-4">
                <div class="form-check card-radio">
                  <input
                    id="customizer-layout02"
                    name="data-layout"
                    type="radio"
                    value="horizontal"
                    class="form-check-input"
                  />
                  <label
                    class="form-check-label p-0 avatar-md w-100 shadow-sm"
                    for="customizer-layout02"
                  >
                    <span class="d-flex h-100 flex-column gap-1">
                      <span
                        class="bg-light d-flex p-1 gap-1 align-items-center"
                      >
                        <span
                          class="d-block p-1 bg-soft-primary rounded me-1"
                        ></span>
                        <span
                          class="d-block p-1 pb-0 px-2 bg-soft-primary ms-auto"
                        ></span>
                        <span
                          class="d-block p-1 pb-0 px-2 bg-soft-primary"
                        ></span>
                      </span>
                      <span class="bg-light d-block p-1"></span>
                      <span class="bg-light d-block p-1 mt-auto"></span>
                    </span>
                  </label>
                </div>
                <h5 class="fs-13 text-center mt-2">Horizontal</h5>
              </div>
              <div class="col-4">
                <div class="form-check card-radio">
                  <input
                    id="customizer-layout03"
                    name="data-layout"
                    type="radio"
                    value="twocolumn"
                    class="form-check-input"
                  />
                  <label
                    class="form-check-label p-0 avatar-md w-100 shadow-sm"
                    for="customizer-layout03"
                  >
                    <span class="d-flex gap-1 h-100">
                      <span class="flex-shrink-0">
                        <span class="bg-light d-flex h-100 flex-column gap-1">
                          <span class="d-block p-1 bg-soft-primary mb-2"></span>
                          <span class="d-block p-1 pb-0 bg-soft-primary"></span>
                          <span class="d-block p-1 pb-0 bg-soft-primary"></span>
                          <span class="d-block p-1 pb-0 bg-soft-primary"></span>
                        </span>
                      </span>
                      <span class="flex-shrink-0">
                        <span
                          class="bg-light d-flex h-100 flex-column gap-1 p-1"
                        >
                          <span
                            class="d-block p-1 px-2 pb-0 bg-soft-primary"
                          ></span>
                          <span
                            class="d-block p-1 px-2 pb-0 bg-soft-primary"
                          ></span>
                          <span
                            class="d-block p-1 px-2 pb-0 bg-soft-primary"
                          ></span>
                          <span
                            class="d-block p-1 px-2 pb-0 bg-soft-primary"
                          ></span>
                        </span>
                      </span>
                      <span class="flex-grow-1">
                        <span class="d-flex h-100 flex-column">
                          <span class="bg-light d-block p-1"></span>
                          <span class="bg-light d-block p-1 mt-auto"></span>
                        </span>
                      </span>
                    </span>
                  </label>
                </div>
                <h5 class="fs-13 text-center mt-2">Two Column</h5>
              </div>
              <!-- end col -->
            </div>

            <h6 class="mt-4 mb-0 fw-semibold text-uppercase fs-12">
              Color Scheme
            </h6>
            <p class="text-muted">Choose Light or Dark Scheme.</p>

            <div class="colorscheme-cardradio">
              <div class="row">
                <div class="col-4">
                  <div class="form-check card-radio">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="data-layout-mode"
                      id="layout-mode-light"
                      value="light"
                    />
                    <label
                      class="form-check-label p-0 avatar-md w-100 shadow-sm"
                      for="layout-mode-light"
                    >
                      <span class="d-flex gap-1 h-100">
                        <span class="flex-shrink-0">
                          <span
                            class="bg-light d-flex h-100 flex-column gap-1 p-1"
                          >
                            <span
                              class="d-block p-1 px-2 bg-soft-primary rounded mb-2"
                            ></span>
                            <span
                              class="d-block p-1 px-2 pb-0 bg-soft-primary"
                            ></span>
                            <span
                              class="d-block p-1 px-2 pb-0 bg-soft-primary"
                            ></span>
                            <span
                              class="d-block p-1 px-2 pb-0 bg-soft-primary"
                            ></span>
                          </span>
                        </span>
                        <span class="flex-grow-1">
                          <span class="d-flex h-100 flex-column">
                            <span class="bg-light d-block p-1"></span>
                            <span class="bg-light d-block p-1 mt-auto"></span>
                          </span>
                        </span>
                      </span>
                    </label>
                  </div>
                  <h5 class="fs-13 text-center mt-2">Light</h5>
                </div>

                <div class="col-4">
                  <div class="form-check card-radio dark">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="data-layout-mode"
                      id="layout-mode-dark"
                      value="dark"
                    />
                    <label
                      class="form-check-label p-0 avatar-md w-100 shadow-sm bg-dark"
                      for="layout-mode-dark"
                    >
                      <span class="d-flex gap-1 h-100">
                        <span class="flex-shrink-0">
                          <span
                            class="bg-soft-light d-flex h-100 flex-column gap-1 p-1"
                          >
                            <span
                              class="d-block p-1 px-2 bg-soft-light rounded mb-2"
                            ></span>
                            <span
                              class="d-block p-1 px-2 pb-0 bg-soft-light"
                            ></span>
                            <span
                              class="d-block p-1 px-2 pb-0 bg-soft-light"
                            ></span>
                            <span
                              class="d-block p-1 px-2 pb-0 bg-soft-light"
                            ></span>
                          </span>
                        </span>
                        <span class="flex-grow-1">
                          <span class="d-flex h-100 flex-column">
                            <span class="bg-soft-light d-block p-1"></span>
                            <span
                              class="bg-soft-light d-block p-1 mt-auto"
                            ></span>
                          </span>
                        </span>
                      </span>
                    </label>
                  </div>
                  <h5 class="fs-13 text-center mt-2">Dark</h5>
                </div>
              </div>
            </div>

            <div id="layout-width">
              <h6 class="mt-4 mb-0 fw-semibold text-uppercase fs-12">
                Layout Width
              </h6>
              <p class="text-muted">Choose Fluid or Boxed layout.</p>

              <div class="row">
                <div class="col-4">
                  <div class="form-check card-radio">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="data-layout-width"
                      id="layout-width-fluid"
                      value="fluid"
                    />
                    <label
                      class="form-check-label p-0 avatar-md w-100 shadow-sm"
                      for="layout-width-fluid"
                    >
                      <span class="d-flex gap-1 h-100">
                        <span class="flex-shrink-0">
                          <span
                            class="bg-light d-flex h-100 flex-column gap-1 p-1"
                          >
                            <span
                              class="d-block p-1 px-2 bg-soft-primary rounded mb-2"
                            ></span>
                            <span
                              class="d-block p-1 px-2 pb-0 bg-soft-primary"
                            ></span>
                            <span
                              class="d-block p-1 px-2 pb-0 bg-soft-primary"
                            ></span>
                            <span
                              class="d-block p-1 px-2 pb-0 bg-soft-primary"
                            ></span>
                          </span>
                        </span>
                        <span class="flex-grow-1">
                          <span class="d-flex h-100 flex-column">
                            <span class="bg-light d-block p-1"></span>
                            <span class="bg-light d-block p-1 mt-auto"></span>
                          </span>
                        </span>
                      </span>
                    </label>
                  </div>
                  <h5 class="fs-13 text-center mt-2">Fluid</h5>
                </div>
                <div class="col-4">
                  <div class="form-check card-radio">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="data-layout-width"
                      id="layout-width-boxed"
                      value="boxed"
                    />
                    <label
                      class="form-check-label p-0 avatar-md w-100 shadow-sm px-2"
                      for="layout-width-boxed"
                    >
                      <span class="d-flex gap-1 h-100 border-start border-end">
                        <span class="flex-shrink-0">
                          <span
                            class="bg-light d-flex h-100 flex-column gap-1 p-1"
                          >
                            <span
                              class="d-block p-1 px-2 bg-soft-primary rounded mb-2"
                            ></span>
                            <span
                              class="d-block p-1 px-2 pb-0 bg-soft-primary"
                            ></span>
                            <span
                              class="d-block p-1 px-2 pb-0 bg-soft-primary"
                            ></span>
                            <span
                              class="d-block p-1 px-2 pb-0 bg-soft-primary"
                            ></span>
                          </span>
                        </span>
                        <span class="flex-grow-1">
                          <span class="d-flex h-100 flex-column">
                            <span class="bg-light d-block p-1"></span>
                            <span class="bg-light d-block p-1 mt-auto"></span>
                          </span>
                        </span>
                      </span>
                    </label>
                  </div>
                  <h5 class="fs-13 text-center mt-2">Boxed</h5>
                </div>
              </div>
            </div>

            <div id="layout-position">
              <h6 class="mt-4 mb-0 fw-semibold text-uppercase fs-12">
                Layout Position
              </h6>
              <p class="text-muted">
                Choose Fixed or Scrollable Layout Position.
              </p>

              <div class="btn-group radio" role="group">
                <input
                  type="radio"
                  class="btn-check"
                  name="data-layout-position"
                  id="layout-position-fixed"
                  value="fixed"
                />
                <label class="btn btn-light w-sm" for="layout-position-fixed"
                  >Fixed</label
                >

                <input
                  type="radio"
                  class="btn-check"
                  name="data-layout-position"
                  id="layout-position-scrollable"
                  value="scrollable"
                />
                <label
                  class="btn btn-light w-sm ms-0"
                  for="layout-position-scrollable"
                  >Scrollable</label
                >
              </div>
            </div>
            <h6 class="mt-4 mb-0 fw-semibold text-uppercase fs-12">
              Topbar Color
            </h6>
            <p class="text-muted">Choose Light or Dark Topbar Color.</p>

            <div class="row">
              <div class="col-4">
                <div class="form-check card-radio">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="data-topbar"
                    id="topbar-color-light"
                    value="light"
                  />
                  <label
                    class="form-check-label p-0 avatar-md w-100 shadow-sm"
                    for="topbar-color-light"
                  >
                    <span class="d-flex gap-1 h-100">
                      <span class="flex-shrink-0">
                        <span
                          class="bg-light d-flex h-100 flex-column gap-1 p-1"
                        >
                          <span
                            class="d-block p-1 px-2 bg-soft-primary rounded mb-2"
                          ></span>
                          <span
                            class="d-block p-1 px-2 pb-0 bg-soft-primary"
                          ></span>
                          <span
                            class="d-block p-1 px-2 pb-0 bg-soft-primary"
                          ></span>
                          <span
                            class="d-block p-1 px-2 pb-0 bg-soft-primary"
                          ></span>
                        </span>
                      </span>
                      <span class="flex-grow-1">
                        <span class="d-flex h-100 flex-column">
                          <span class="bg-light d-block p-1"></span>
                          <span class="bg-light d-block p-1 mt-auto"></span>
                        </span>
                      </span>
                    </span>
                  </label>
                </div>
                <h5 class="fs-13 text-center mt-2">Light</h5>
              </div>
              <div class="col-4">
                <div class="form-check card-radio">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="data-topbar"
                    id="topbar-color-dark"
                    value="dark"
                  />
                  <label
                    class="form-check-label p-0 avatar-md w-100 shadow-sm"
                    for="topbar-color-dark"
                  >
                    <span class="d-flex gap-1 h-100">
                      <span class="flex-shrink-0">
                        <span
                          class="bg-light d-flex h-100 flex-column gap-1 p-1"
                        >
                          <span
                            class="d-block p-1 px-2 bg-soft-primary rounded mb-2"
                          ></span>
                          <span
                            class="d-block p-1 px-2 pb-0 bg-soft-primary"
                          ></span>
                          <span
                            class="d-block p-1 px-2 pb-0 bg-soft-primary"
                          ></span>
                          <span
                            class="d-block p-1 px-2 pb-0 bg-soft-primary"
                          ></span>
                        </span>
                      </span>
                      <span class="flex-grow-1">
                        <span class="d-flex h-100 flex-column">
                          <span class="bg-dark d-block p-1"></span>
                          <span class="bg-light d-block p-1 mt-auto"></span>
                        </span>
                      </span>
                    </span>
                  </label>
                </div>
                <h5 class="fs-13 text-center mt-2">Dark</h5>
              </div>
            </div>

            <div id="sidebar-size">
              <h6 class="mt-4 mb-0 fw-semibold text-uppercase fs-12">
                Sidebar Size
              </h6>
              <p class="text-muted">Choose a size of Sidebar.</p>

              <div class="row">
                <div class="col-4">
                  <div class="form-check sidebar-setting card-radio">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="data-sidebar-size"
                      id="sidebar-size-default"
                      value="lg"
                    />
                    <label
                      class="form-check-label p-0 avatar-md w-100 shadow-sm"
                      for="sidebar-size-default"
                    >
                      <span class="d-flex gap-1 h-100">
                        <span class="flex-shrink-0">
                          <span
                            class="bg-light d-flex h-100 flex-column gap-1 p-1"
                          >
                            <span
                              class="d-block p-1 px-2 bg-soft-primary rounded mb-2"
                            ></span>
                            <span
                              class="d-block p-1 px-2 pb-0 bg-soft-primary"
                            ></span>
                            <span
                              class="d-block p-1 px-2 pb-0 bg-soft-primary"
                            ></span>
                            <span
                              class="d-block p-1 px-2 pb-0 bg-soft-primary"
                            ></span>
                          </span>
                        </span>
                        <span class="flex-grow-1">
                          <span class="d-flex h-100 flex-column">
                            <span class="bg-light d-block p-1"></span>
                            <span class="bg-light d-block p-1 mt-auto"></span>
                          </span>
                        </span>
                      </span>
                    </label>
                  </div>
                  <h5 class="fs-13 text-center mt-2">Default</h5>
                </div>

                <div class="col-4">
                  <div class="form-check sidebar-setting card-radio">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="data-sidebar-size"
                      id="sidebar-size-compact"
                      value="md"
                    />
                    <label
                      class="form-check-label p-0 avatar-md w-100 shadow-sm"
                      for="sidebar-size-compact"
                    >
                      <span class="d-flex gap-1 h-100">
                        <span class="flex-shrink-0">
                          <span
                            class="bg-light d-flex h-100 flex-column gap-1 p-1"
                          >
                            <span
                              class="d-block p-1 bg-soft-primary rounded mb-2"
                            ></span>
                            <span
                              class="d-block p-1 pb-0 bg-soft-primary"
                            ></span>
                            <span
                              class="d-block p-1 pb-0 bg-soft-primary"
                            ></span>
                            <span
                              class="d-block p-1 pb-0 bg-soft-primary"
                            ></span>
                          </span>
                        </span>
                        <span class="flex-grow-1">
                          <span class="d-flex h-100 flex-column">
                            <span class="bg-light d-block p-1"></span>
                            <span class="bg-light d-block p-1 mt-auto"></span>
                          </span>
                        </span>
                      </span>
                    </label>
                  </div>
                  <h5 class="fs-13 text-center mt-2">Compact</h5>
                </div>

                <div class="col-4">
                  <div class="form-check sidebar-setting card-radio">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="data-sidebar-size"
                      id="sidebar-size-small"
                      value="sm"
                    />
                    <label
                      class="form-check-label p-0 avatar-md w-100 shadow-sm"
                      for="sidebar-size-small"
                    >
                      <span class="d-flex gap-1 h-100">
                        <span class="flex-shrink-0">
                          <span class="bg-light d-flex h-100 flex-column gap-1">
                            <span
                              class="d-block p-1 bg-soft-primary mb-2"
                            ></span>
                            <span
                              class="d-block p-1 pb-0 bg-soft-primary"
                            ></span>
                            <span
                              class="d-block p-1 pb-0 bg-soft-primary"
                            ></span>
                            <span
                              class="d-block p-1 pb-0 bg-soft-primary"
                            ></span>
                          </span>
                        </span>
                        <span class="flex-grow-1">
                          <span class="d-flex h-100 flex-column">
                            <span class="bg-light d-block p-1"></span>
                            <span class="bg-light d-block p-1 mt-auto"></span>
                          </span>
                        </span>
                      </span>
                    </label>
                  </div>
                  <h5 class="fs-13 text-center mt-2">Small (Icon View)</h5>
                </div>

                <div class="col-4">
                  <div class="form-check sidebar-setting card-radio">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="data-sidebar-size"
                      id="sidebar-size-small-hover"
                      value="sm-hover"
                    />
                    <label
                      class="form-check-label p-0 avatar-md w-100 shadow-sm"
                      for="sidebar-size-small-hover"
                    >
                      <span class="d-flex gap-1 h-100">
                        <span class="flex-shrink-0">
                          <span class="bg-light d-flex h-100 flex-column gap-1">
                            <span
                              class="d-block p-1 bg-soft-primary mb-2"
                            ></span>
                            <span
                              class="d-block p-1 pb-0 bg-soft-primary"
                            ></span>
                            <span
                              class="d-block p-1 pb-0 bg-soft-primary"
                            ></span>
                            <span
                              class="d-block p-1 pb-0 bg-soft-primary"
                            ></span>
                          </span>
                        </span>
                        <span class="flex-grow-1">
                          <span class="d-flex h-100 flex-column">
                            <span class="bg-light d-block p-1"></span>
                            <span class="bg-light d-block p-1 mt-auto"></span>
                          </span>
                        </span>
                      </span>
                    </label>
                  </div>
                  <h5 class="fs-13 text-center mt-2">Small Hover View</h5>
                </div>
              </div>
            </div>

            <div id="sidebar-view">
              <h6 class="mt-4 mb-0 fw-semibold text-uppercase fs-12">
                Sidebar View
              </h6>
              <p class="text-muted">Choose Default or Detached Sidebar view.</p>

              <div class="row">
                <div class="col-4">
                  <div class="form-check sidebar-setting card-radio">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="data-layout-style"
                      id="sidebar-view-default"
                      value="default"
                    />
                    <label
                      class="form-check-label p-0 avatar-md w-100 shadow-sm"
                      for="sidebar-view-default"
                    >
                      <span class="d-flex gap-1 h-100">
                        <span class="flex-shrink-0">
                          <span
                            class="bg-light d-flex h-100 flex-column gap-1 p-1"
                          >
                            <span
                              class="d-block p-1 px-2 bg-soft-primary rounded mb-2"
                            ></span>
                            <span
                              class="d-block p-1 px-2 pb-0 bg-soft-primary"
                            ></span>
                            <span
                              class="d-block p-1 px-2 pb-0 bg-soft-primary"
                            ></span>
                            <span
                              class="d-block p-1 px-2 pb-0 bg-soft-primary"
                            ></span>
                          </span>
                        </span>
                        <span class="flex-grow-1">
                          <span class="d-flex h-100 flex-column">
                            <span class="bg-light d-block p-1"></span>
                            <span class="bg-light d-block p-1 mt-auto"></span>
                          </span>
                        </span>
                      </span>
                    </label>
                  </div>
                  <h5 class="fs-13 text-center mt-2">Default</h5>
                </div>
                <div class="col-4">
                  <div class="form-check sidebar-setting card-radio">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="data-layout-style"
                      id="sidebar-view-detached"
                      value="detached"
                    />
                    <label
                      class="form-check-label p-0 avatar-md w-100 shadow-sm"
                      for="sidebar-view-detached"
                    >
                      <span class="d-flex h-100 flex-column">
                        <span
                          class="bg-light d-flex p-1 gap-1 align-items-center px-2"
                        >
                          <span
                            class="d-block p-1 bg-soft-primary rounded me-1"
                          ></span>
                          <span
                            class="d-block p-1 pb-0 px-2 bg-soft-primary ms-auto"
                          ></span>
                          <span
                            class="d-block p-1 pb-0 px-2 bg-soft-primary"
                          ></span>
                        </span>
                        <span class="d-flex gap-1 h-100 p-1 px-2">
                          <span class="flex-shrink-0">
                            <span
                              class="bg-light d-flex h-100 flex-column gap-1 p-1"
                            >
                              <span
                                class="d-block p-1 px-2 pb-0 bg-soft-primary"
                              ></span>
                              <span
                                class="d-block p-1 px-2 pb-0 bg-soft-primary"
                              ></span>
                              <span
                                class="d-block p-1 px-2 pb-0 bg-soft-primary"
                              ></span>
                            </span>
                          </span>
                        </span>
                        <span class="bg-light d-block p-1 mt-auto px-2"></span>
                      </span>
                    </label>
                  </div>
                  <h5 class="fs-13 text-center mt-2">Detached</h5>
                </div>
              </div>
            </div>
            <div id="sidebar-color">
              <h6 class="mt-4 mb-0 fw-semibold text-uppercase fs-12">
                Sidebar Color
              </h6>
              <p class="text-muted">Choose a color of Sidebar.</p>

              <div class="row">
                <div class="col-4">
                  <div
                    class="form-check sidebar-setting card-radio"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseBgGradient.show"
                  >
                    <input
                      class="form-check-input"
                      type="radio"
                      name="data-sidebar"
                      id="sidebar-color-light"
                      value="light"
                    />
                    <label
                      class="form-check-label p-0 avatar-md w-100"
                      for="sidebar-color-light"
                    >
                      <span class="d-flex gap-1 h-100">
                        <span class="flex-shrink-0">
                          <span
                            class="bg-white border-end d-flex h-100 flex-column gap-1 p-1"
                          >
                            <span
                              class="d-block p-1 px-2 bg-soft-primary rounded mb-2"
                            ></span>
                            <span
                              class="d-block p-1 px-2 pb-0 bg-soft-primary"
                            ></span>
                            <span
                              class="d-block p-1 px-2 pb-0 bg-soft-primary"
                            ></span>
                            <span
                              class="d-block p-1 px-2 pb-0 bg-soft-primary"
                            ></span>
                          </span>
                        </span>
                        <span class="flex-grow-1">
                          <span class="d-flex h-100 flex-column">
                            <span class="bg-light d-block p-1"></span>
                            <span class="bg-light d-block p-1 mt-auto"></span>
                          </span>
                        </span>
                      </span>
                    </label>
                  </div>
                  <h5 class="fs-13 text-center mt-2">Light</h5>
                </div>
                <div class="col-4">
                  <div
                    class="form-check sidebar-setting card-radio"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseBgGradient.show"
                  >
                    <input
                      class="form-check-input"
                      type="radio"
                      name="data-sidebar"
                      id="sidebar-color-dark"
                      value="dark"
                    />
                    <label
                      class="form-check-label p-0 avatar-md w-100"
                      for="sidebar-color-dark"
                    >
                      <span class="d-flex gap-1 h-100">
                        <span class="flex-shrink-0">
                          <span
                            class="bg-primary d-flex h-100 flex-column gap-1 p-1"
                          >
                            <span
                              class="d-block p-1 px-2 bg-soft-light rounded mb-2"
                            ></span>
                            <span
                              class="d-block p-1 px-2 pb-0 bg-soft-light"
                            ></span>
                            <span
                              class="d-block p-1 px-2 pb-0 bg-soft-light"
                            ></span>
                            <span
                              class="d-block p-1 px-2 pb-0 bg-soft-light"
                            ></span>
                          </span>
                        </span>
                        <span class="flex-grow-1">
                          <span class="d-flex h-100 flex-column">
                            <span class="bg-light d-block p-1"></span>
                            <span class="bg-light d-block p-1 mt-auto"></span>
                          </span>
                        </span>
                      </span>
                    </label>
                  </div>
                  <h5 class="fs-13 text-center mt-2">Dark</h5>
                </div>
                <div class="col-4">
                  <button
                    class="btn btn-link avatar-md w-100 p-0 overflow-hidden border collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseBgGradient"
                    aria-expanded="false"
                    aria-controls="collapseBgGradient"
                  >
                    <span class="d-flex gap-1 h-100">
                      <span class="flex-shrink-0">
                        <span
                          class="bg-vertical-gradient d-flex h-100 flex-column gap-1 p-1"
                        >
                          <span
                            class="d-block p-1 px-2 bg-soft-light rounded mb-2"
                          ></span>
                          <span
                            class="d-block p-1 px-2 pb-0 bg-soft-light"
                          ></span>
                          <span
                            class="d-block p-1 px-2 pb-0 bg-soft-light"
                          ></span>
                          <span
                            class="d-block p-1 px-2 pb-0 bg-soft-light"
                          ></span>
                        </span>
                      </span>
                      <span class="flex-grow-1">
                        <span class="d-flex h-100 flex-column">
                          <span class="bg-light d-block p-1"></span>
                          <span class="bg-light d-block p-1 mt-auto"></span>
                        </span>
                      </span>
                    </span>
                  </button>
                  <h5 class="fs-13 text-center mt-2">Gradient</h5>
                </div>
              </div>
              <!-- end row -->

              <div class="collapse" id="collapseBgGradient">
                <div
                  class="d-flex gap-2 flex-wrap img-switch p-2 px-3 bg-light rounded"
                >
                  <div class="form-check sidebar-setting card-radio">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="data-sidebar"
                      id="sidebar-color-gradient"
                      value="gradient"
                    />
                    <label
                      class="form-check-label p-0 avatar-xs rounded-circle"
                      for="sidebar-color-gradient"
                    >
                      <span
                        class="avatar-title rounded-circle bg-vertical-gradient"
                      ></span>
                    </label>
                  </div>
                  <div class="form-check sidebar-setting card-radio">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="data-sidebar"
                      id="sidebar-color-gradient-2"
                      value="gradient-2"
                    />
                    <label
                      class="form-check-label p-0 avatar-xs rounded-circle"
                      for="sidebar-color-gradient-2"
                    >
                      <span
                        class="avatar-title rounded-circle bg-vertical-gradient-2"
                      ></span>
                    </label>
                  </div>
                  <div class="form-check sidebar-setting card-radio">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="data-sidebar"
                      id="sidebar-color-gradient-3"
                      value="gradient-3"
                    />
                    <label
                      class="form-check-label p-0 avatar-xs rounded-circle"
                      for="sidebar-color-gradient-3"
                    >
                      <span
                        class="avatar-title rounded-circle bg-vertical-gradient-3"
                      ></span>
                    </label>
                  </div>
                  <div class="form-check sidebar-setting card-radio">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="data-sidebar"
                      id="sidebar-color-gradient-4"
                      value="gradient-4"
                    />
                    <label
                      class="form-check-label p-0 avatar-xs rounded-circle"
                      for="sidebar-color-gradient-4"
                    >
                      <span
                        class="avatar-title rounded-circle bg-vertical-gradient-4"
                      ></span>
                    </label>
                  </div>
                </div>
              </div>
            </div>

            <div id="sidebar-img">
              <h6 class="mt-4 mb-0 fw-semibold text-uppercase fs-12">
                Sidebar Images
              </h6>
              <p class="text-muted">Choose a image of Sidebar.</p>

              <div class="d-flex gap-2 flex-wrap img-switch">
                <div class="form-check sidebar-setting card-radio">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="data-sidebar-image"
                    id="sidebarimg-none"
                    value="none"
                  />
                  <label
                    class="form-check-label p-0 avatar-sm h-auto"
                    for="sidebarimg-none"
                  >
                    <span
                      class="avatar-md w-auto bg-light d-flex align-items-center justify-content-center"
                    >
                      <i class="ri-close-fill fs-20"></i>
                    </span>
                  </label>
                </div>

                <div class="form-check sidebar-setting card-radio">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="data-sidebar-image"
                    id="sidebarimg-01"
                    value="img-1"
                  />
                  <label
                    class="form-check-label p-0 avatar-sm h-auto"
                    for="sidebarimg-01"
                  >
                    <img
                      src="assets/images/sidebar/img-1.jpg"
                      alt=""
                      class="avatar-md w-auto object-cover"
                    />
                  </label>
                </div>

                <div class="form-check sidebar-setting card-radio">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="data-sidebar-image"
                    id="sidebarimg-02"
                    value="img-2"
                  />
                  <label
                    class="form-check-label p-0 avatar-sm h-auto"
                    for="sidebarimg-02"
                  >
                    <img
                      src="assets/images/sidebar/img-2.jpg"
                      alt=""
                      class="avatar-md w-auto object-cover"
                    />
                  </label>
                </div>
                <div class="form-check sidebar-setting card-radio">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="data-sidebar-image"
                    id="sidebarimg-03"
                    value="img-3"
                  />
                  <label
                    class="form-check-label p-0 avatar-sm h-auto"
                    for="sidebarimg-03"
                  >
                    <img
                      src="assets/images/sidebar/img-3.jpg"
                      alt=""
                      class="avatar-md w-auto object-cover"
                    />
                  </label>
                </div>
                <div class="form-check sidebar-setting card-radio">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="data-sidebar-image"
                    id="sidebarimg-04"
                    value="img-4"
                  />
                  <label
                    class="form-check-label p-0 avatar-sm h-auto"
                    for="sidebarimg-04"
                  >
                    <img
                      src="assets/images/sidebar/img-4.jpg"
                      alt=""
                      class="avatar-md w-auto object-cover"
                    />
                  </label>
                </div>
              </div>
            </div>

            <div id="preloader-menu">
              <h6 class="mt-4 mb-0 fw-semibold text-uppercase fs-12">
                Preloader
              </h6>
              <p class="text-muted">Choose a preloader.</p>

              <div class="row">
                <div class="col-4">
                  <div class="form-check sidebar-setting card-radio">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="data-preloader"
                      id="preloader-view-custom"
                      value="enable"
                    />
                    <label
                      class="form-check-label p-0 avatar-md w-100"
                      for="preloader-view-custom"
                    >
                      <span class="d-flex gap-1 h-100">
                        <span class="flex-shrink-0">
                          <span
                            class="bg-light d-flex h-100 flex-column gap-1 p-1"
                          >
                            <span
                              class="d-block p-1 px-2 bg-soft-primary rounded mb-2"
                            ></span>
                            <span
                              class="d-block p-1 px-2 pb-0 bg-soft-primary"
                            ></span>
                            <span
                              class="d-block p-1 px-2 pb-0 bg-soft-primary"
                            ></span>
                            <span
                              class="d-block p-1 px-2 pb-0 bg-soft-primary"
                            ></span>
                          </span>
                        </span>
                        <span class="flex-grow-1">
                          <span class="d-flex h-100 flex-column">
                            <span class="bg-light d-block p-1"></span>
                            <span class="bg-light d-block p-1 mt-auto"></span>
                          </span>
                        </span>
                      </span>
                      <!-- <div id="preloader"> -->
                      <div
                        id="status"
                        class="d-flex align-items-center justify-content-center"
                      >
                        <div
                          class="spinner-border text-primary avatar-xxs m-auto"
                          role="status"
                        >
                          <span class="visually-hidden">Loading...</span>
                        </div>
                      </div>
                      <!-- </div> -->
                    </label>
                  </div>
                  <h5 class="fs-13 text-center mt-2">Enable</h5>
                </div>
                <div class="col-4">
                  <div class="form-check sidebar-setting card-radio">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="data-preloader"
                      id="preloader-view-none"
                      value="disable"
                    />
                    <label
                      class="form-check-label p-0 avatar-md w-100"
                      for="preloader-view-none"
                    >
                      <span class="d-flex gap-1 h-100">
                        <span class="flex-shrink-0">
                          <span
                            class="bg-light d-flex h-100 flex-column gap-1 p-1"
                          >
                            <span
                              class="d-block p-1 px-2 bg-soft-primary rounded mb-2"
                            ></span>
                            <span
                              class="d-block p-1 px-2 pb-0 bg-soft-primary"
                            ></span>
                            <span
                              class="d-block p-1 px-2 pb-0 bg-soft-primary"
                            ></span>
                            <span
                              class="d-block p-1 px-2 pb-0 bg-soft-primary"
                            ></span>
                          </span>
                        </span>
                        <span class="flex-grow-1">
                          <span class="d-flex h-100 flex-column">
                            <span class="bg-light d-block p-1"></span>
                            <span class="bg-light d-block p-1 mt-auto"></span>
                          </span>
                        </span>
                      </span>
                    </label>
                  </div>
                  <h5 class="fs-13 text-center mt-2">Disable</h5>
                </div>
              </div>
            </div>
            <!-- end preloader-menu -->
          </div>
        </div>
      </div>
      <div class="offcanvas-footer border-top p-3 text-center">
        <div class="row">
          <div class="col-6">
            <button type="button" class="btn btn-light w-100" id="reset-layout">
              Reset
            </button>
          </div>
          <div class="col-6">
            <a
              href="https://1.envato.market/velzon-admin"
              target="_blank"
              class="btn btn-primary w-100"
              >Buy Now</a
            >
          </div>
        </div>
      </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="{{ asset('template/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('template/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('template/assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('template/assets/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('template/assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
    <script src="{{ asset('template/assets/js/plugins.js') }}"></script>

    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>

    <!--datatable js-->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

    <script src="{{ asset('template/assets/js/pages/datatables.init.js') }}"></script>
    <!-- App js -->
    <script src="{{ asset('template/assets/js/app.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  </body>

  <script>

    $('.delete').click( function(){
      var pegawaiid = $(this).attr('data-id');
      var nama = $(this).attr('data-nama');
        Swal.fire({
        title: 'Yakin ?',
        text: "Kamu akan menghapus data pegawai dengan nama "+ nama +"",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Hapus!'
        }).then((result) => {
        if (result.isConfirmed) {
          window.location="/delete/"+pegawaiid+""
        Swal.fire(
          'Deleted!',
          'Data Berhasil Dihapus.',
          'success'
        )
      }
    });
    });

    
  </script>

  <script>
    @if (Session::has('success'))
      toastr.success("{{ Session::get('success') }}", 'Selamat')
    @endif
    
  </script>

</html>
