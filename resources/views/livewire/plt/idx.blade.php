@section('content')
    

    <div>
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Fikri Fauzi's Profile</h3>
              
              <div class="card-tools">
                <!-- Buttons, labels, and many other things can be placed here! -->
                <!-- Here is a label for example -->
                <span class="badge badge-dark">Label</span>
                
              </div>
              
              <!-- /.card-tools -->
            </div>
            <div class="text-center" style="padding: 10px">

                <img src="{{asset('img/fikri.jpg')}}" class="rounded float-center" style="max-width: 10%" alt="...">
            </div>
            <!-- /.card-header -->
            <div class="card-body"  style="background-color: salmon">
                <table class="table table-striped table-dark">
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Nama</td>
                        <td>Fikri Fauzi</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>NIM</td>
                        <td>2006397</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Email</td>
                        <td>fkrfauzi@gmail.com</td>
                      </tr>
                    </tbody>
                  </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              ini footers
            </div>
            <!-- /.card-footer -->
          </div>
          <!-- /.card -->
    </div>
@endsection