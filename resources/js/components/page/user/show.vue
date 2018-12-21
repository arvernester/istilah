<template>
  <div class="content-wrapper">
    <div class="row profile-page">
      <div class="col-12">
        <div class="card">
          <div v-if="user.data" class="card-body">
            <div class="profile-header text-white">
              <div class="d-md-flex justify-content-around">
                <div class="profile-info d-flex align-items-center">
                  <img class="rounded-circle img-lg" :src="user.data.gravatar" :alt="user.data.name">
                  <div class="wrapper pl-4">
                    <p class="profile-user-name">{{ user.data.name }}</p>
                    <div class="wrapper d-flex align-items-center">
                      <p class="profile-user-designation">User Experience Specialist</p>
                      <select id="example-css" name="rating" autocomplete="off">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="details">
                  <div class="detail-col">
                    <p>Projects</p>
                    <p>130</p>
                  </div>
                  <div class="detail-col">
                    <p>Projects</p>
                    <p>130</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="profile-body">
              <ul class="nav tab-switch" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="user-profile-info-tab" data-toggle="pill" href="#user-profile-info" role="tab" aria-controls="user-profile-info" aria-selected="true">Profile</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="user-profile-activity-tab" data-toggle="pill" href="#user-profile-activity" role="tab" aria-controls="user-profile-activity" aria-selected="false">Activity</a>
                </li>
              </ul>
              <div class="row">
                <div class="col-md-9">
                  <div class="tab-content tab-body" id="profile-log-switch">
                    <div class="tab-pane fade show active pr-3" id="user-profile-info" role="tabpanel" aria-labelledby="user-profile-info-tab">
                      <table class="table table-borderless w-100 mt-4">
                        <tr>
                          <td><strong>Full Name :</strong> Johnathan Deo</td>
                          <td><strong>Website :</strong> staradmin.com</td>
                        </tr>
                        <tr>
                          <td><strong>Location :</strong> USA</td>
                          <td><strong>Email :</strong> Richard@staradmin.com</td>
                        </tr>
                        <tr>
                          <td><strong>Languages :</strong> English, German, Spanish.</td>
                          <td><strong>Phone :</strong> +73646 4563</td>
                        </tr>
                      </table>
                      <div class="row mt-5 pb-4 border-bottom">
                        <div class="col-6">
                          <div class="d-flex align-items-start pb-3 border-bottom">
                            <img src="https://via.placeholder.com/49x49" alt="brand logo">
                            <div class="wrapper pl-4">
                              <p class="font-weight-bold mb-0">Photoshop</p>
                              <small>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie</small>
                            </div>
                          </div>
                          <div class="d-flex align-items-start py-3 border-bottom">
                            <img src="https://via.placeholder.com/49x49" alt="brand logo">
                            <div class="wrapper pl-4">
                              <p class="font-weight-bold mb-0">Photoshop</p>
                              <small>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie</small>
                            </div>
                          </div>
                          <div class="d-flex align-items-start py-3">
                            <img src="https://via.placeholder.com/49x49" alt="brand logo">
                            <div class="wrapper pl-4">
                              <p class="font-weight-bold mb-0">Photoshop</p>
                              <small>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie</small>
                            </div>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="row">
                            <div class="col-12">
                              <img class="img-fluid rounded" src="https://via.placeholder.com/333x121" alt="banner image">
                            </div>
                            <div class="col-12 mt-3">
                              <img class="img-fluid rounded" src="https://via.placeholder.com/333x121" alt="banner image">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12 mt-5">
                          <h5 class="mb-5">Stages</h5>
                          <div class="stage-wrapper pl-4">
                            <div class="stages border-left pl-5 pb-4">
                              <div class="btn btn-icons btn-rounded stage-badge btn-inverse-success">
                                <i class="icon-event"></i>
                              </div>
                              <div class="d-flex align-items-center mb-2 justify-content-between">
                                <h5 class="mb-0">Task Added</h5>
                                <small class="text-muted">28 mins ago</small>
                              </div>
                              <p>Admin is a full featured, multipurpose, premium bootstrap admin template built with Bootstrap 4 Framework</p>
                            </div>
                            <div class="stages border-left pl-5 pb-4">
                              <div class="btn btn-icons btn-rounded stage-badge btn-inverse-danger">
                                <i class="icon-cloud-download"></i>
                              </div>
                              <div class="d-flex align-items-center mb-2 justify-content-between">
                                <h5 class="mb-0">Download Completed</h5>
                                <small class="text-muted">45 mins ago</small>
                              </div>
                              <p>one of the best admin panel templates. With this bootstrap admin template, you can quick start your project.</p>
                              <div class="file-icon-wrapper">
                                <div class="btn btn-outline-danger file-icon">
                                  <i class="icon-envelope"></i>
                                </div>
                                <div class="btn btn-outline-primary file-icon">
                                  <i class="icon-chart"></i>
                                </div>
                              </div>
                            </div>
                            <div class="stages pl-5 pb-4">
                              <div class="btn btn-icons btn-rounded stage-badge btn-inverse-primary">
                                <i class="icon-checkbox-marked-circle-outline"></i>
                              </div>
                              <div class="d-flex align-items-center mb-2 justify-content-between">
                                <h5 class="mb-0">New Task Completed</h5>
                                <small class="text-muted">55 mins ago</small>
                              </div>
                              <p>Admin dashboard works seamlessly on all major web browsers and devices.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="user-profile-activity" role="tabpanel" aria-labelledby="user-profile-activity-tab">
                      <div class="horizontal-timeline">
                        <section class="time-frame">
                          <h4 class="section-time-frame">Today</h4>
                          <div class="event">
                            <p class="event-text">We’re big on real names around here, so people know who’s who</p>
                            <div class="event-alert">You have added task #26 Successfully to the project “Agile CRM”</div>
                            <div class="event-info">New Dashboard Design - 9:24 PM</div>
                          </div>
                          <div class="event">
                            <p class="event-text">Admin is a full featured, multipurpose, premium bootstrap admin template built with Bootstrap 4 Framework</p>
                            <div class="tumbnail-views">
                              <div class="thumbnail"><img src="https://via.placeholder.com/99x88" alt="thumbnail"></div>
                              <div class="thumbnail"><img src="https://via.placeholder.com/99x88" alt="thumbnail"></div>
                              <div class="thumbnail"><img src="https://via.placeholder.com/99x88" alt="thumbnail"></div>
                              <div class="thumbnail"><img src="https://via.placeholder.com/99x88" alt="thumbnail"></div>
                              <div class="thumbnail"><img src="https://via.placeholder.com/99x88" alt="thumbnail"></div>
                              <div class="thumbnail"><img src="https://via.placeholder.com/99x88" alt="thumbnail"></div>
                            </div>
                            <div class="event-info">New Dashboard Design - 9:24 PM</div>
                          </div>
                          <div class="event">
                            <p class="event-text">It is a fully responsive bootstrap admin template / bootstrap admin dashboard</p>
                            <div class="event-alert">You have added task #26 Successfully to the project “Agile CRM”</div>
                            <div class="event-info">New Dashboard Design - 9:24 PM</div>
                          </div>
                        </section>
                        <section class="time-frame">
                          <h4 class="section-time-frame">Yesterday</h4>
                          <div class="event">
                            <p class="event-text">Night fill together itself. Midst. Beginning. Behold living god had.</p>
                            <div class="event-alert">You have added task #26 Successfully to the project “Agile CRM”</div>
                            <div class="event-info">New Dashboard Design - 11:24 PM</div>
                          </div>
                          <div class="event">
                            <p class="event-text">Why waste time starting from scratch; try out our admin dashboard template</p>
                            <div class="event-info">New Dashboard Design - 11:30 PM</div>
                          </div>
                        </section>
                        <section class="time-frame">
                          <h4 class="section-time-frame">30 March</h4>
                          <div class="event">
                            <p class="event-text">Gerald Vaughn changed the status to QA on MA-86 - Retargeting Ads</p>
                            <div class="tumbnail-views">
                              <div class="thumbnail"><img src="https://via.placeholder.com/99x88" alt="thumbnail"></div>
                              <div class="thumbnail"><img src="https://via.placeholder.com/99x88" alt="thumbnail"></div>
                              <div class="thumbnail"><img src="https://via.placeholder.com/99x88" alt="thumbnail"></div>
                              <div class="thumbnail"><img src="https://via.placeholder.com/99x88" alt="thumbnail"></div>
                              <div class="thumbnail"><img src="https://via.placeholder.com/99x88" alt="thumbnail"></div>
                              <div class="thumbnail"><img src="https://via.placeholder.com/99x88" alt="thumbnail"></div>
                            </div>
                            <div class="event-alert">You have added task #26 Successfully to the project “Agile CRM”</div>
                            <div class="event-info">New Dashboard Design - 11:45 PM</div>
                          </div>
                        </section>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <h5 class="my-4">Who to follow</h5>
                  <div class="new-accounts">
                    <ul class="chats">
                      <li class="chat-persons">
                        <a href="#">
                            <span class="pro-pic"><img src="https://via.placeholder.com/40x40" alt="profile image"></span>
                            <div class="user">
                              <p class="u-name">Marina Michel</p>
                              <p class="u-designation">Business Development</p>
                            </div>
                          </a>
                      </li>
                      <li class="chat-persons">
                        <a href="#">
                            <span class="pro-pic"><img src="https://via.placeholder.com/40x40" alt="profile image"></span>
                            <div class="user">
                              <p class="u-name">Stella Johnson</p>
                              <p class="u-designation">SEO Expert</p>
                            </div>
                          </a>
                      </li>
                      <li class="chat-persons">
                        <a href="#">
                            <span class="pro-pic"><img src="https://via.placeholder.com/40x40" alt="profile image"></span>
                            <div class="user">
                              <p class="u-name">Peter Joo</p>
                              <p class="u-designation">UI/UX designer</p>
                            </div>
                          </a>
                      </li>
                    </ul>
                  </div>
                  <h5 class="my-4">Pending</h5>
                  <div class="new-accounts">
                    <ul class="chats">
                      <li class="chat-persons">
                        <a href="#">
                            <span class="pro-pic"><img src="https://via.placeholder.com/40x40" alt="profile image"></span>
                            <div class="user">
                              <p class="u-name">Marina Michel</p>
                              <p class="u-designation">Business Development</p>
                              <span class="d-flex align-items-center mt-2">
                                <span class="btn btn-xs btn-rounded btn-outline-light mr-2">Buyer</span>
                                <span class="btn btn-xs btn-rounded btn-outline-primary">Lead</span>
                              </span>
                            </div>
                          </a>
                      </li>
                      <li class="chat-persons">
                        <a href="#">
                            <span class="pro-pic"><img src="https://via.placeholder.com/40x40" alt="profile image"></span>
                            <div class="user">
                              <p class="u-name">Stella Johnson</p>
                              <p class="u-designation">SEO Expert</p>
                              <span class="d-flex align-items-center mt-2">
                                <span class="btn btn-xs btn-rounded btn-outline-light mr-2">Buyer</span>
                                <span class="btn btn-xs btn-rounded btn-outline-primary">Lead</span>
                              </span>
                            </div>
                          </a>
                      </li>
                      <li class="chat-persons">
                        <a href="#">
                            <span class="pro-pic"><img src="https://via.placeholder.com/40x40" alt="profile image"></span>
                            <div class="user">
                              <p class="u-name">Peter Joo</p>
                              <p class="u-designation">UI/UX designer</p>
                              <span class="d-flex align-items-center mt-2">
                                <span class="btn btn-xs btn-rounded btn-outline-light mr-2">Buyer</span>
                                <span class="btn btn-xs btn-rounded btn-outline-primary">Lead</span>
                              </span>
                            </div>
                          </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'UserProfile',

  data () {
    return {
      user: {}
    }
  },

  created () {
    this.getUser()
  },

  methods: {
    async getUser () {
      this.user = await axios.get(`/user/${this.$route.params.slug}`)
    }
  }
}
</script>
