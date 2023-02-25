<x-app title="Bootstrap">

      <section class="bg-danger">
            <div class="container">
                  <div class="row">
                        {{-- 
                              display
                              d-flex = display: flex;
                              d-block = display: block;
                              d-none = display: none;
                              justify-content-between = justify-content:space-between;
                              align-items-center = align-items:center;

                              color
                              text-light = color:#ffffff;
                              text-dark = color:#000000;

                              layouting (margin, padding, border)
                              margin = m
                              padding = p
                              border =

                              m-1
                              m-2
                              ... m-6

                              p-1
                              ... p-6
                        --}}
                        <div class="d-flex justify-content-between align-items-center text-light" style="min-height:55px;">
                              <div>
                                    {{-- logo --}}
                                    <h3>Bootstrap</h3>
                              </div>
                              <div class="d-flex gap-0">
                                    {{-- menu --}}
                                    {{-- <a class="mx-3 px-3 text-decoration-none text-light bg-success border border-dark">Home</a>
                                    <a class="mx-3 px-3 text-decoration-none text-light bg-info border border-dark">About</a>
                                    <a class="mx-3 px-3 text-decoration-none text-light bg-dark border border-dark">Contact</a> --}}
                                    <a class="mx-3 px-3 text-decoration-none text-light bg-success border border-dark">Home</a>
                                    <a class="mx-3 px-3 text-decoration-none text-light bg-info border border-dark">About</a>
                                    <a class="mx-3 px-3 text-decoration-none text-light bg-dark border border-dark">Contact</a>
                              </div>
                              
                        </div>
                  </div>
            </div>
      </section>

</x-app>