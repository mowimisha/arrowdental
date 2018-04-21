@extends('layouts.app')

@section('header')
    LSF Admin Dash
@endsection

@section('content')

  <div id="page-wrapper">
      <div class="container-fluid">
          <div class="row bg-title">
              <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                  <h4 class="page-title">Dashboard</h4> </div>
              <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                  <ol class="breadcrumb">
                      <li><a href="#">Dashboard</a></li>
                  </ol>
              </div>
              <!-- /.col-lg-12 -->
          </div>
          <!-- /.row -->
          <!-- ============================================================== -->
          <!-- Different data widgets -->
          <!-- ============================================================== -->
          <!-- .row -->
          <div class="row">

              <div class="col-lg-4 col-sm-6 col-xs-12">
                  <div class="white-box analytics-info">
                      <h3 class="box-title">Total Posts</h3>
                      <ul class="list-inline two-part">
                          <li>
                              <div><i class="fa fa-4x fa-pencil"></i></div>
                          </li>

                          <li class="text-right"><i class="ti-arrow-up text-success"></i> <span class="counter text-success">{{ $posts->where(("active" ===  "0"),  ("active" === "1"))->count() }}</span></li>
                      </ul>
                  </div>
              </div>

              <div class="col-lg-4 col-sm-6 col-xs-12">
                  <div class="white-box analytics-info">
                      <h3 class="box-title">Total Tenders</h3>
                      <ul class="list-inline two-part">
                          <li>
                              <div><i class="fa fa-4x fa-briefcase"></i></div>
                          </li>
                          <li class="text-right"> <span class="counter text-purple">{{ $tenders->count() }}</span></li>
                      </ul>
                  </div>
              </div>

              <div class="col-lg-4 col-sm-6 col-xs-12">
                  <div class="white-box analytics-info">
                      <h3 class="box-title">Draft Posts</h3>
                      <ul class="list-inline two-part">
                          <li>
                              <div><i class="fa fa-4x fa-file"></i></div>
                          </li>
                          <li class="text-right"><i class="ti-arrow-up text-info"></i> <span class="counter text-info">{{ $posts->where("active", 0)->count() }}</span></li>
                      </ul>
                  </div>
              </div>
          </div>

          
          <!-- ============================================================== -->
          <!-- table -->
          <!-- ============================================================== -->
          <div class="row">
              <div class="col-md-12 col-lg-12 col-sm-12">
                  <div class="white-box">
                      <h3 class="box-title">Recent Posts</h3>
                      <div class="table-responsive">
                          <table class="table">
                              <thead>
                                  <tr>
                                      <th>#</th>
                                      <th>TITLE</th>
                                      <th>AUTHOR</th>
                                      <th>DATE</th>
                                      <th>STATUS</th>
                                  </tr>
                              </thead>
                              <tbody>
                                 @foreach($posts as $post)
                                  <tr>
                                      <td>{{ $post->id }}</td>
                                      <td>{{ $post->title }}</td>
                                      <td>{{ $post->author->role }}</td>
                                      <td>{{ $post->created_at->format('j F Y') }}</td>
                                      <td>{{ $post->active == "1" ? "Published" : "Draft" }}</td>
                                  </tr>
                                 @endforeach
                              </tbody>
                              <!-- <tbody>
                                  <tr>
                                      <td>1</td>
                                      <td class="txt-oflo">Elite admin</td>
                                      <td>SALE</td>
                                      <td class="txt-oflo">April 18, 2017</td>
                                      <td><span class="text-success">$24</span></td>
                                  </tr>
                              </tbody> -->
                          </table>
                      </div>
                  </div>
              </div>
          </div>


          <div class="row">
              <div class="col-md-12 col-lg-12 col-sm-12">
                  <div class="white-box">
                      <h3 class="box-title">Recent Tenders</h3>
                      <div class="table-responsive">
                          <table class="table">
                              <thead>
                                  <tr>
                                      <th>#</th>
                                      <th>TITLE</th>
                                      <th>FILENAME</th>
                                      <th>DATE</th>
                                  </tr>
                              </thead>
                              <tbody>
                                 @foreach($tenders as $tender)
                                  <tr>
                                      <td>{{ $tender->id }}</td>
                                      <td>{{ $tender->title }}</td>
                                      <td>{{ $tender->filename }}</td>
                                      <td>{{ $tender->created_at->format('j F Y') }}</td>
                                  </tr>
                                 @endforeach
                              </tbody>
                              <!-- <tbody>
                                  <tr>
                                      <td>1</td>
                                      <td class="txt-oflo">Elite admin</td>
                                      <td>SALE</td>
                                      <td class="txt-oflo">April 18, 2017</td>
                                      <td><span class="text-success">$24</span></td>
                                  </tr>
                              </tbody> -->
                          </table>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- /.container-fluid -->
  </div>
@endsection


