<template>
  <li class="nav-item dropdown">
    <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
      <i class="icon-envelope mx-0"></i>
      <span class="count"></span>
    </a>
    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
      <div class="dropdown-item">
        <p class="mb-0 font-weight-normal float-left">You have 7 unread mails
        </p>
        <span class="badge badge-info badge-pill float-right">View all</span>
      </div>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item preview-item">
        <div class="preview-thumbnail">
            <img src="https://via.placeholder.com/36x36" alt="image" class="profile-pic">
        </div>
        <div class="preview-item-content flex-grow">
          <h6 class="preview-subject ellipsis font-weight-medium">David Grey
            <span class="float-right font-weight-light small-text">1 Minutes ago</span>
          </h6>
          <p class="font-weight-light small-text">
            The meeting is cancelled
          </p>
        </div>
      </a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item preview-item">
        <div class="preview-thumbnail">
            <img src="https://via.placeholder.com/36x36" alt="image" class="profile-pic">
        </div>
        <div class="preview-item-content flex-grow">
          <h6 class="preview-subject ellipsis font-weight-medium">Tim Cook
            <span class="float-right font-weight-light small-text">15 Minutes ago</span>
          </h6>
          <p class="font-weight-light small-text">
            New product launch
          </p>
        </div>
      </a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item preview-item">
        <div class="preview-thumbnail">
            <img src="https://via.placeholder.com/36x36" alt="image" class="profile-pic">
        </div>
        <div class="preview-item-content flex-grow">
          <h6 class="preview-subject ellipsis font-weight-medium"> Johnson
            <span class="float-right font-weight-light small-text">18 Minutes ago</span>
          </h6>
          <p class="font-weight-light small-text">
            Upcoming board meeting
          </p>
        </div>
      </a>
    </div>
  </li>
</template>

<script>
export default {
  name: 'Message'
}
</script>
