@extends('layouts.dashboard_master_template')

@section('links')
@endsection

@section('nav-section')

    @include('layouts.dashboard_nav_template')

@endsection

@section('page-content')

  <!-- top tiles -->
  <div class="row tile_count">
    <div class="table-responsive">
          <table class="table table-bordered">
              <thead>
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">NAME</th>
                    <th class="text-center">EMAIL</th>
                    <th class="text-center">PHONE</th>
                    <th class="text-center">LEVEL</th>
                    <th class="text-center">REGISTRATION DATE</th>
                    <th class="text-center">CONTROL</th>
                </tr>
              </thead>

              <tbody>
                <tr>
                    <td class="text-center">5</td>
                    <td class="text-center">Ticio Victoriano</td>
                    <td class="text-center">ticioguitar@gmail.com</td>
                    <td class="text-center">12345</td>
                    <td class="text-center">1</td>
                    <td class="text-center">2017-07-27 00:00:00</td>
                    <td class="text-center">
                        <a href="users.php?do=2&userID=5" class="btn btn-success">Edit</a>
                        <a href="users.php?do=3&userID=5" class="confirm btn btn-danger">Delete</a>
                    </td>
                </tr>
              </tbody>
          </table>
          <a href="" class="fa fa-plus btn btn-primary"> Add New User</a>
     </div>
  </div>
  <!-- /top tiles -->

@endsection
