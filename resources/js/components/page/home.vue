<template>
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-6 grid-margin">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title mb-0">Statistics</h4>
            <div class="d-flex justify-content-between align-items-center">
              <div class="d-inline-block pt-3">
                <div class="d-md-flex">
                  <h2 class="mb-0">$10,200</h2>
                  <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                    <i class="icon-clock text-muted"></i>
                    <small class=" ml-1 mb-0">Updated: 9:10am</small>
                  </div>
                </div>
                <small class="text-gray">Raised from 89 orders.</small>
              </div>
              <div class="d-inline-block">
                <div class="bg-success px-4 py-2 rounded">
                  <i class="icon-layers text-white icon-lg"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 grid-margin">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title mb-0">Daily Order</h4>
            <div class="d-flex justify-content-between align-items-center">
              <div class="d-inline-block pt-3">
                <div class="d-md-flex">
                  <h2 class="mb-0">$2256</h2>
                  <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                    <i class="icon-clock text-muted"></i>
                    <small class="ml-1 mb-0">Updated: 05:42pm</small>
                  </div>
                </div>
                <small class="text-gray">hey, let’s have lunch together</small>
              </div>
              <div class="d-inline-block">
                <div class="bg-warning px-4 py-2 rounded">
                  <i class="icon-wallet text-white icon-lg"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="d-flex flex-row">
              <img src="https://via.placeholder.com/92x92" class="img-lg rounded" alt="profile image"/>
              <div class="ml-3">
                <h6>Maria</h6>
                <p class="text-muted">maria@gmail.com</p>
                <p class="mt-2 text-success font-weight-bold">Designer</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="d-flex flex-row">
              <img src="https://via.placeholder.com/92x92" class="img-lg rounded" alt="profile image"/>
              <div class="ml-3">
                <h6>Thomas Edison</h6>
                <p class="text-muted">thomas@gmail.com</p>
                <p class="mt-2 text-success font-weight-bold">Developer</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="d-flex flex-row">
              <img src="https://via.placeholder.com/92x92" class="img-lg rounded" alt="profile image"/>
              <div class="ml-3">
                <h6>Edward</h6>
                <p class="text-muted">edward@gmail.com</p>
                <p class="mt-2 text-success font-weight-bold">Tester</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 grid-margin">
        <div class="card">
          <div class="card-body">
            <div class="d-flex flex-row align-items-top">
              <i class="icon-social-facebook text-facebook icon-md"></i>
              <div class="ml-3">
                <h6 class="text-facebook">2.62 Subscribers</h6>
                <p class="mt-2 text-muted card-text">You main list growing</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 grid-margin">
        <div class="card">
          <div class="card-body">
            <div class="d-flex flex-row align-items-top">
              <i class="icon-social-linkedin text-linkedin icon-md"></i>
              <div class="ml-3">
                <h6 class="text-linkedin">5k connections</h6>
                <p class="mt-2 text-muted card-text">You main list growing</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 grid-margin">
        <div class="card">
          <div class="card-body">
            <div class="d-flex flex-row align-items-top">
              <i class="icon-social-twitter text-twitter icon-md"></i>
              <div class="ml-3">
                <h6 class="text-twitter">3k followers</h6>
                <p class="mt-2 text-muted card-text">You main list growing</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Todo</h4>
            <div class="add-items d-flex">
              <input type="text" class="form-control todo-list-input"  placeholder="What do you need to do today?">
              <button class="add btn btn-primary font-weight-bold todo-list-add-btn">Add</button>
            </div>
            <div class="list-wrapper">
              <ul class="d-flex flex-column-reverse todo-list todo-list-custom">
                <li>
                  <div class="form-check form-check-flat">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Meeting with Alisa
                    </label>
                  </div>
                  <i class="remove icon-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check form-check-flat">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Call John
                    </label>
                  </div>
                  <i class="remove icon-close"></i>
                </li>
                <li>
                  <div class="form-check form-check-flat">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Create invoice
                    </label>
                  </div>
                  <i class="remove icon-close"></i>
                </li>
                <li>
                  <div class="form-check form-check-flat">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Print Statements
                    </label>
                  </div>
                  <i class="remove icon-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check form-check-flat">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Prepare for presentation
                    </label>
                  </div>
                  <i class="remove icon-close"></i>
                </li>
                <li>
                  <div class="form-check form-check-flat">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Pick up kids from school
                    </label>
                  </div>
                  <i class="remove icon-close"></i>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <img src="https://via.placeholder.com/92x92" class="img-lg rounded-circle mb-2" alt="profile image"/>
              <div class="ml-3">
                <h4>Maria Johnson</h4>
                <p class="text-muted mb-0">Developer</p>
              </div>
            </div>
            <p class="mt-4 card-text">
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                Aenean commodo ligula eget dolor. Lorem
            </p>
            <button class="btn btn-info btn-sm mt-3 mb-4">Follow</button>
            <div class="border-top pt-3">
              <div class="row">
                <div class="col-4">
                  <h6>5896</h6>
                  <p>Post</p>
                </div>
                <div class="col-4">
                  <h6>1596</h6>
                  <p>Followers</p>
                </div>
                <div class="col-4">
                  <h6>7896</h6>
                  <p>Likes</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Updates</h4>
            <ul class="bullet-line-list">
              <li>
                <h6>User confirmation</h6>
                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing </p>
                <p class="text-muted">
                  <i class="icon-clock"></i>
                  7 months ago.
                </p>
              </li>
              <li>
                <h6>Continuous evaluation</h6>
                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing </p>
                <p class="text-muted">
                  <i class="icon-clock"></i>
                  7 months ago.
                </p>
              </li>
              <li>
                <h6>Promotion</h6>
                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing </p>
                <p class="text-muted">
                  <i class="icon-clock"></i>
                  7 months ago.
                </p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 grid-margin grid-margin-md-0 stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Recomended</h4>
            <div class="d-flex align-items-center py-3 border-bottom">
              <img class="img-sm rounded-circle" src="https://via.placeholder.com/40x40" alt="profile">
              <div class="ml-3">
                <h6 class="mb-1">Stella Davidson</h6>
                <small class="text-muted mb-0"><i class="icon-location-pin-outline mr-1"></i>New York City, USA</small>
              </div>
              <i class="icon-check font-weight-bold ml-auto px-1 py-1 text-info"></i>
            </div>
            <div class="d-flex align-items-center py-3 border-bottom">
              <img class="img-sm rounded-circle" src="https://via.placeholder.com/40x40" alt="profile">
              <div class="ml-3">
                <h6 class="mb-1">Daniel Russel</h6>
                <small class="text-muted mb-0"><i class="icon-location-pin-outline mr-1"></i>Florida, USA</small>
              </div>
              <i class="icon-plus font-weight-bold ml-auto px-1 py-1 text-success"></i>
            </div>
            <div class="d-flex align-items-center py-3 border-bottom">
              <img class="img-sm rounded-circle" src="https://via.placeholder.com/40x40" alt="profile">
              <div class="ml-3">
                <h6 class="mb-1">Bruno King</h6>
                <small class="text-muted mb-0"><i class="icon-location-pin-outline mr-1"></i>Arkansas, USA</small>
              </div>
              <i class="icon-check font-weight-bold ml-auto px-1 py-1 text-info"></i>
            </div>
            <div class="d-flex align-items-center py-3 border-bottom">
              <img class="img-sm rounded-circle" src="https://via.placeholder.com/40x40" alt="profile">
              <div class="ml-3">
                <h6 class="mb-1">David Moore</h6>
                <small class="text-muted mb-0"><i class="icon-location-pin-outline mr-1"></i>Arizon, USA</small>
              </div>
              <i class="icon-plus font-weight-bold ml-auto px-1 py-1 text-success"></i>
            </div>
            <div class="d-flex align-items-center pt-3 mb-4">
              <img class="img-sm rounded-circle" src="https://via.placeholder.com/40x40" alt="profile">
              <div class="ml-3">
                <h6 class="mb-1">Rafell John</h6>
                <small class="text-muted mb-0"><i class="icon-location-pin-outline mr-1"></i>Alaska, USA</small>
              </div>
              <i class="icon-plus font-weight-bold ml-auto px-1 py-1 text-success"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 grid-margin grid-margin-md-0 stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Tickets</h4>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th class="pt-1 pl-0">
                      Assigned
                    </th>
                    <th class="pt-1">
                      Product
                    </th>
                    <th class="pt-1">
                      Priority
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="py-1 pl-0">
                      <div class="d-flex align-items-center">
                        <img src="https://via.placeholder.com/40x40" alt="profile"/>
                        <div class="ml-3">
                          <p class="mb-2">Sophia Brown</p>
                          <p class="mb-0 text-muted text-small">Product Designer</p>
                        </div>
                      </div>
                    </td>
                    <td>
                      Web App
                    </td>
                    <td>
                      <label class="badge badge-success">Low</label>
                    </td>
                  </tr>
                  <tr>
                    <td class="py-1 pl-0">
                      <div class="d-flex align-items-center">
                        <img src="https://via.placeholder.com/40x40" alt="profile"/>
                        <div class="ml-3">
                          <p class="mb-2">Rachel Newton</p>
                          <p class="mb-0 text-muted text-small">Mobile Developer</p>
                        </div>
                      </div>
                    </td>
                    <td>
                      Mobile App
                    </td>
                    <td>
                      <label class="badge badge-warning">Medium</label>
                    </td>
                  </tr>
                  <tr>
                    <td class="py-1 pl-0">
                      <div class="d-flex align-items-center">
                        <img src="https://via.placeholder.com/40x40" alt="profile"/>
                        <div class="ml-3">
                          <p class="mb-2">Marcus Stevens</p>
                          <p class="mb-0 text-muted text-small">Core Developer</p>
                        </div>
                      </div>
                    </td>
                    <td>
                      Plugin
                    </td>
                    <td>
                      <label class="badge badge-danger">High</label>
                    </td>
                  </tr>
                  <tr>
                    <td class="py-1 pl-0">
                      <div class="d-flex align-items-center">
                        <img src="https://via.placeholder.com/40x40" alt="profile"/>
                        <div class="ml-3">
                          <p class="mb-2">Theresa Becker</p>
                          <p class="mb-0 text-muted text-small">Product Designer</p>
                        </div>
                      </div>
                    </td>
                    <td>
                      Web App
                    </td>
                    <td>
                      <label class="badge badge-success">Low</label>
                    </td>
                  </tr>
                  <tr>
                    <td class="py-1 pl-0">
                      <div class="d-flex align-items-center">
                        <img src="https://via.placeholder.com/40x40" alt="profile"/>
                        <div class="ml-3">
                          <p class="mb-2">Jessie Ortiz</p>
                          <p class="mb-0 text-muted text-small">Web Developer</p>
                        </div>
                      </div>
                    </td>
                    <td>
                      SAAS App
                    </td>
                    <td>
                      <label class="badge badge-danger">High</label>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Home'
}
</script>
