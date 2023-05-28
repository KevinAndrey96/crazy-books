@extends('layouts.dashboard')
@section('navbar')
    <div class="container-fluid py-4">
      <div class="content-container overflow-x-auto">
      <div class="row">
          <div class="col-12">
              <div class="card my-4">
                  <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                      <div class="bg-gradient-success shadow-success border-radius-lg pt-4 pb-3">
                          <h6 class="text-white text-capitalize ps-3">evidencias</h6>
                      </div>
                  </div>
                  <div class="card-body px-0 pb-2">
                      <div class="table-responsive p-0">
                          <table class="table align-items-center mb-0">
                              <thead>
                              <tr>
                                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Libro</th>

  
                              </tr>
                              </thead>
                              @foreach ($books as $book)
                                  <tbody>
                                  <tr>
                                      <td>
                                          <div class="d-flex px-2 py-1">
  
                                              <div class="d-flex flex-column justify-content-center">
                                                  <h6 class="mb-0 text-sm">{{$book->name}}</h6>
  
                                              </div>
                                          </div>
                                     </td>
                                      <td>
                                          <div class="d-flex px-2 py-4">
  
                                              <div class="d-flex flex-column justify-content-center">
                                                  <h6 class="mb-0 text-sm"></h6>
  
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="d-flex px-4 py-2">
  
                                              <div class="d-flex flex-column justify-content-center">
  
                                                  <a href="/books/evidences/{{$book->id}}  style="font-size: 16px; padding: 5px 25px;" class="btn btn-warning mx-2" value="editar" href="">Evidencias</a>
  
                                              </div>
                                          </div>
                                      </td>
                      </tr>
                      </tbody>
                      @endforeach
                      </table>
  
                      <table class="table align-items-center justify-content-center mb-0">
  
                      </table>
                  </div>
              </div>
          </div>
      </div>
      </div>
  </div>
        
    
  </tbody>

</table>
@endsection