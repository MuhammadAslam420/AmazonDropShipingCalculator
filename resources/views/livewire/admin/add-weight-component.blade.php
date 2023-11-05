  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
      <!-- Navbar -->
      <x-navbar />
      <!-- End Navbar -->
      <div class="container-fluid py-4">
          <div class="row">
              <x-weight-form />
          </div>
          <div class="row my-4">
              <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
                  <div class="card">
                      <div class="card-header pb-0">
                          <div class="row">
                              <div class="col-lg-6 col-7">
                                  <h6>Projects</h6>
                                  <p class="text-sm mb-0">
                                      <i class="fa fa-check text-info" aria-hidden="true"></i>
                                      <span class="font-weight-bold ms-1">30 done</span> this month
                                  </p>
                              </div>
                              <div class="col-lg-6 col-5 my-auto text-end">
                                  <div class="dropdown float-lg-end pe-4">
                                      <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
                                          <i class="fa fa-ellipsis-v text-secondary"></i>
                                      </a>
                                      <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
                                          <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
                                          <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a></li>
                                          <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else here</a></li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="card-body px-0 pb-2">
                          <div class="table-responsive">
                              <table class="table table-hover">
                                  <thead>
                                      <tr>
                                          <th>Sr.No</th>
                                          <th>Id</th>
                                          <th>weight</th>
                                          <th>Weight Cost</th>
                                          <th>Weight unit</th>
                                          <th>Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      @foreach($weights as $weight)
                                      @php
                                      $i=1;
                                      @endphp
                                      <tr>
                                          <td>{{$i++}}</td>
                                          <td>{{$weight->id}}</td>
                                          <td>{{$weight->weight}}{{$weight->weight_unit}}</td>
                                          <td>
                                              {{$weight->weight_cost}} <b>$</b>
                                          </td>
                                          <td>
                                              {{$weight->weight_unit}}
                                          </td>

                                          <td>
                                              <div class="d-flex">

                                                  <a href="#" wire:click.prevent="deleteWeight('{{$weight->id}}')" class="btn bg-danger"> <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                          <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                                      </svg>
                                                  </a>
                                              </div>
                                          </td>
                                      </tr>
                                      @endforeach
                                  </tbody>
                              </table>
                              {{$weights->links()}}
                          </div>
                      </div>
                  </div>
              </div>

          </div>
          <x-footer />

      </div>
  </main>
