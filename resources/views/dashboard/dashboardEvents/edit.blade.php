@extends('dashboard.layouts.main')

@section('dashboardcontent')
    <!-- ================================ links Events Content Start ========================================================================= -->
    <div class="main-content-container container-fluid px-4">
        <!-- Page Header -->
        <div class="page-header row no-gutters py-4">
            <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Événements </span>
                <h3 class="page-title"><i class="icon-feather-file-text"></i> Editer l'évènement</h3>
            </div>
        </div>
        <!-- ================================ links Events Content Start ========================================================================= -->
        <!-- End Page Header -->
        <div class="row">
            <div class="col-lg-9 col-md-12">
                <!-- Add New Post Form -->
                <div class="card card-small mb-3">
                    <div class="card-body">
                        <!-- ================================ links Events Content Start ========================================================================= -->
                        <form class="add-new-post" action="{{ route('dashboardEvents.update', $Event->slug) }}"
                            method="POST" role="form" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <!-- ================================ links Events Content Start ========================================================================= -->
                            <input class="form-control form-control-lg mb-3" type="text" placeholder="Titre" name="Title_en"
                                value="{{ $Event->Title_en }}">
                            <input class="form-control form-control-lg mb-3" type="text" placeholder="Description"
                                name="slug" value="{{ $Event->slug }}">
                            {{-- <input class="form-control form-control-lg mb-3" type="text" placeholder="Your Event Days"
                                name="Days" value="{{ $Event->Days }}">
                            <input class="form-control form-control-lg mb-3" type="text" placeholder="Your Event Hours"
                                name="Hours" value="{{ $Event->Hours }}">
                            <input class="form-control form-control-lg mb-3" type="text" placeholder="Your Event Minutes"
                                name="Minutes" value="{{ $Event->Minutes }}"> --}}
                            <input class="form-control form-control-lg mb-3" type="text" placeholder="Lieu" name="Address"
                                value="{{ $Event->Address }}">
                            <input class="form-control form-control-lg mb-3" type="text" placeholder="Date de début"
                                name="StartTime" value="{{ $Event->StartTime }}">
                            <input class="form-control form-control-lg mb-3" type="text" placeholder="Date de fin"
                                name="FinishTime" value="{{ $Event->FinishTime }}">
                            <textarea value="{{ $Event->Content_en }}" class="form-control form-control-lg mb-3" type="text" name="Content_en"
                                rows="15">
              <!-- ================================ links Events Content Start ========================================================================= -->
                {{ $Event->Content_en }}
              <!-- ================================ links Events Content Start ========================================================================= -->
              </textarea>
                            <div class="row mt-3">
                                <div class="col-2">
                                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                        aria-orientation="vertical">
                                        {{-- <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill"
                                            href="#v-pills-home" role="tab" aria-controls="v-pills-home"
                                            aria-selected="true">
                                            <!-- ================================ links Events Content Start ========================================================================= -->
                                            <img src="{{ asset('dashboardassets/images/german.png') }}"> French
                                        </a>
                                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill"
                                            href="#v-pills-profile" role="tab" aria-controls="v-pills-profile"
                                            aria-selected="false"><img
                                                src="{{ asset('dashboardassets/images/arabic.png') }}"> Arabic</a> --}}
                                        <!-- ================================ links Events Content Start ========================================================================= -->
                                    </div>
                                </div>
                                <div class="col-10">
                                    <div class="tab-content" id="v-pills-tabContent">
                                        <!-- ================================ links Events Content Start ========================================================================= -->
                                        {{-- <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                            aria-labelledby="v-pills-home-tab">
                                            <input class="form-control form-control-lg mb-3" type="text"
                                                value="{{ $Event->Title_en }}" placeholder="Your Event Title French"
                                                name="Title_en">
                                            <textarea class="form-control form-control-lg mb-3" value="{{ $Event->Content_gr }}" cols="4" name="Content_gr"
                                                placeholder="Your Event Content French">{{ $Event->Content_gr }}</textarea>
                                        </div>
                                        <!-- ================================ links Events Content Start ========================================================================= -->
                                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                            aria-labelledby="v-pills-profile-tab">
                                            <input class="form-control form-control-lg mb-3" type="text"
                                                value="{{ $Event->Title_ar }}" placeholder="Your Event Title Arabic"
                                                name="Title_ar">
                                            <textarea class="form-control form-control-lg mb-3" value="{{ $Event->Content_ar }}" cols="4" name="Content_ar"
                                                placeholder="Your Event Content Arabic">{{ $Event->Content_ar }}</textarea>
                                            <!-- ================================ links Events Content Start ========================================================================= -->
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                <!-- / Add New Post Form -->
            </div>
            <!-- ================================ links Events Content Start ========================================================================= -->
            <div class="col-lg-3 col-md-12">
                <!-- Post Overview -->
                <div class='card card-small mb-3'>
                    <div class="card-header border-bottom">
                        <h6 class="m-0">Actions</h6>
                    </div>
                    <div class='card-body p-0'>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item p-3">
                                <span class="d-flex mb-2">
                                    <i class="icon-line-awesome-flag mr-1"></i>
                                    <strong class="mr-1">Statut:</strong> Ouvert
                                </span>
                                <span class="d-flex mb-2">
                                    <i class="icon-material-outline-visibility mr-1"></i>
                                    <strong class="mr-1">Visibilité:</strong>
                                    <strong class="text-success">Publique</strong>
                                </span>
                                {{-- <span class="d-flex mb-2">
                                    <i class="icon-line-awesome-calendar mr-1"></i>
                                    <strong class="mr-1">Schedule:</strong> Now
                                </span>
                                <span class="d-flex">
                                    <i class="icon-line-awesome-bullseye mr-1"></i>
                                    <strong class="mr-1">Readability:</strong>
                                    <strong class="text-warning">Ok</strong>
                                </span> --}}
                            </li>
                            <li class="list-group-item d-flex px-3">
                                <button class="btn btn-sm btn-accent ml-auto" type="submit">
                                    <i class="icon-feather-file-plus"></i> Publier</button>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- ================================ links Events Content Start ======================================================= -->
                <!-- / Post Overview -->
                <div class='card card-small mb-3'>
                    <div class="card-header border-bottom">
                        <h6 class="m-0"><i class="icon-line-awesome-image"></i> Image</h6>
                    </div>
                    <div class='card-body p-0'>
                        <ul class="list-group list-group-flush">
                            <div class="edit-post-details__avatar m-auto">
                                <img id="viewer" src="{!! asset($Event->image) !!}" alt="Event image">
                                <label class="edit-post-details__avatar__change">
                                    <i class="material-icons   icon-material-outline-add-a-photo mr-1"></i>
                                    <input type="file" name="image" hidden="" value="{{ $Event->image }}"
                                        id="customFileEg1">
                                </label>
                            </div>
                        </ul>
                        </form>
                    </div>
                </div>
                <!-- ================================ links Events Content Start ======================================================== -->
                <!-- / Post Overview -->
            </div>
        </div>
    </div>
    <!-- ================================ links Events Content Start ========================================================================= -->
@endsection
