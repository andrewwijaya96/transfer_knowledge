<x-app title="CRUD | Routing">
      <div class="container-fluid p-0">
            
            

            <section id="header" class="bg-dark" >
                  
                  <div class="container">
                        <div class="row">
                              @if ($message = Session::get('success'))
                                    <div class="alert alert-success alert-dismissible fade show mt-3" role="alert" id="success-alert">
                                          <s class="text-decoration-none">{!! $message !!}</s>
                                          <button type="button" class="btn-close" aria-label="Close" data-bs-dismiss="alert"></button>
                                    </div>
                              @endif
                              <div class="col-12">
                                    <a href="" class="buttonCustom d-block my-3" data-bs-toggle="modal" data-bs-target="#userCreate">Create</a>
                                    {{-- modal create --}}
                                    <div class="modal fade" id="userCreate" aria-hidden="true" aria-labelledby="userCreateLabel" tabindex="-1">
                                          <div class="modal-dialog modal-lg modal-dialog-centered">
                                                <div class="modal-content">
                                                      
                                                            <div class="modal-header">
                                                                  <h1 class="modal-title fs-5 text-dark" id="userCreateLabel">Create</h1>
                                                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body text-dark">
                                                            <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                                                                  @csrf
                                                                  <div class="mb-3">
                                                                        <label for="name" class="form-label ">New Name</label>
                                                                        <input type="text" class="form-control" id="name" name="name" required>
                              
                                                                  </div>
                                                                  <div class="mb-3">
                                                                        <label for="division_name" class="form-label">Division</label>
                                                                        <select class="form-select" aria-label="Division" name="division_name" required>
                                                                              <option selected disabled>Open this select menu</option>
                                                                              @foreach ($divisions as $division)
                                                                                  <option>{{ $division->name }}</option>
                                                                              @endforeach
                                                                        </select>
                                                                  </div>
                                                                  <div class="mb-3 form-check">
                                                                        <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                                                                        <label class="form-check-label " for="exampleCheck1">Check again</label>
                                                                        
                                                                  </div>
                                                                  <div id="emailHelp" class="form-text">We'll never share your information with anyone else.</div>
                                                                  <button type="submit" class="btn btn-danger">Create Participant</button>
                                                            </form>
                                                            </div>                                   
                                                </div>
                                          </div>
                                    </div>
                              </div>
                              <div class="col-12">
                                    <h1 class="text-light text-center">Data User</h1>
                              </div>
                        </div>
                        <div class="row justify-content-center">
                              @foreach ($users as $user)
                                    <div class="text-light cardCustom">
                                          {{ $user->name }}
                                          <p class="division">
                                                {{ $user->division->name }}
                                          </p>
                                          <a href="{{ route('user.destroy',$user->id) }}" class="buttonCustom d-block mb-2">Delete</a>
                                          <a href="" class="buttonCustom d-block mb-2" data-bs-toggle="modal" data-bs-target="#userUpdate{{ $user->id }}">Update</a>
                                          {{-- modal update --}}
                                          <div class="modal fade" id="userUpdate{{ $user->id }}" aria-hidden="true" aria-labelledby="userUpdateLabel" tabindex="-1">
                                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                                      <div class="modal-content">
                                                            
                                                                  <div class="modal-header">
                                                                        <h1 class="modal-title fs-5 text-dark" id="userUpdateLabel">Update</h1>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                  </div>
                                                                  <div class="modal-body text-dark">
                                                                  <form action="{{ route('user.update', $user) }}" method="POST" enctype="multipart/form-data">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        <div class="mb-3">
                                                                              <label for="name" class="form-label ">Name</label>
                                                                              <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
                                    
                                                                        </div>
                                                                        <div class="mb-3">
                                                                              <label for="division_name" class="form-label">Division</label>
                                                                              <select class="form-select" aria-label="Division" name="division_name" required>
                                                                                    <option selected disabled>Open this select menu</option>
                                                                                    {{-- @foreach ($divisions as $division)
                                                                                        <option value="{{ $division->id }}">{{ $division->name }}</option>
                                                                                    @endforeach  --}}
                                                                                    <option {{ $user->division->name == 'Publication' ? 'selected' : '' }}>Publication</option>
                                                                                    <option {{ $user->division->name == 'Design' ? 'selected' : '' }}>Design</option>
                                                                                    <option {{ $user->division->name == 'Development' ? 'selected' : '' }}>Development</option>
                                                                              </select>
                                                                        </div>
                                                                        <div class="mb-3 form-check">
                                                                              <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                                                                              <label class="form-check-label " for="exampleCheck1">Check again</label>
                                                                              
                                                                        </div>
                                                                        <div id="emailHelp" class="form-text">We'll never share your information with anyone else.</div>
                                                                        <button type="submit" class="btn btn-danger">Save Changes</button>
                                                                  </form>
                                                                  </div>                                   
                                                      </div>
                                                </div>
                                          </div>


                                    </div>
                              @endforeach
                        </div>
                              
                        
                  </div>

            </section>
            
      </div>
      
</x-app>