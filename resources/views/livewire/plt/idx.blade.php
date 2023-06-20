@section('content')


    <div>
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Fadhil Muhammad Iqbal Profile</h3>

              <div class="card-tools">
                <!-- Buttons, labels, and many other things can be placed here! -->
                <!-- Here is a label for example -->
                <span class="badge badge-dark">Label</span>

              </div>

              <!-- /.card-tools -->
            </div>
            <div class="text-center" style="padding: 10px">

                <img src="{{asset('')}}" class="rounded float-center" style="max-width: 10%" alt="...">
            </div>
            <!-- /.card-header -->
            <div class="card-body"  style="background-color: salmon">
                <table class="table table-striped table-dark">
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Nama</td>
                        <td>Fadhil Muhammad Iqbal</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>NIM</td>
                        <td>2001507</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Email</td>
                        <td>fadhilmuhammadiqbal@upi.edu</td>
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
