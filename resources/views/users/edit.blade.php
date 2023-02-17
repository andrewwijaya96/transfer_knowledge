<x-app title="CRUD | Routing">
      <div class="container-fluid p-0">
            @if (session('fail'))
                  {!! session('fail') !!}
            @endif

            <section id="header" class="bg-dark" >
                  
                  <div class="container">
                        <div class="row text-light">
                              {{ $user->name }}









                              <form action="{{ route('user.update', $user) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    {{-- @method('UPDATE') --}}

                                    <div class="mb-3">
                                          <label for="name">Nama</label>
                                          <input type="text" name="name">
                                    </div>

                                    <label for="division" class="form-label">Division</label>
                                    <select class="form-select" name="division" required>
                                          <option selected disabled>Open this select menu</option>
                                          @foreach ($divisions as $division)
                                                <option value="{{ $division->id }}">{{ $division->name }}</option>
                                          @endforeach 
                                    </select>
                                    {{-- {{ method_field('PUT') }} --}}
                                    @method('PUT')
                                    <button type="submit" class="btn btn-primary">Submit</button>
                              </form>





















                        </div>
                              
                        
                  </div>

            </section>
            
      </div>
      
</x-app>