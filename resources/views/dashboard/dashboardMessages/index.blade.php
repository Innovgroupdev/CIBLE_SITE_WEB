@extends('dashboard.layouts.main')

@section('dashboardcontent')
    <!-- ====================== links Messages Content Start store =============================================== -->
    @if ($message = Session::get('Delete'))
        <div class="alert alert-royal-blue alert-dismissible fade show mb-0" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <i class="icon-material-outline-check mx-2"></i>
            {{ $message }}
        </div>
    @endif
    <!-- ====================== links Messages Content Start store =============================================== -->
    <div class="main-content-container container-fluid px-4">
        <!-- Page Header -->
        <div class="page-header row no-gutters py-4">
            <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Messages</span>
            </div>
            <!-- ====================== links Messages Content Start store =============================================== -->
        </div>
        <div class="row">
            <div class="col-lg-12 mb-4">
                <div class="card card-small lo-stats h-100">
                    <div class="card-header border-bottom">
                        <h6 class="m-0">Derniers messages</h6>
                        <div class="block-handle"></div>
                    </div>
                    <div class="card-body p-0">
                        <div class="container-fluid px-0 ">
                            <!-- ====================== links Messages Content Start store =============================================== -->
                            @foreach ($Messages as $Message)
                                <div class="col-lg-12 mt-4">
                                    <div class="card card-small card-post mb-4">
                                        <div class="card-body">
                                            <h5 class="card-title">Sujet {!! $Message->subject !!}</h5>
                                            <p class="card-text text-muted">Contenu {!! $Message->Content !!}</p>
                                        </div>
                                        <div class="card-footer border-top d-flex">
                                            <div class="card-post__author d-flex">
                                                <div class="d-flex flex-column justify-content-center ml-3">
                                                    <span class="card-post__author-name">Nom {!! $Message->name !!}</span>
                                                    <small
                                                        class="text-muted">{{ date('M j, Y', strtotime($Message->created_at)) }}</small>
                                                </div>
                                            </div>
                                            <div class="my-auto ml-auto">
                                                <!-- ====================== links Messages Content Start store =============================================== -->
                                                <form action="{{ route('dashboardMessages.destroy', $Message->id) }}"
                                                    method="POST" files="true" style="display: inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="mb-2 btn btn-sm btn-danger" type="submit"><i
                                                            class="icon-material-outline-delete"></i> Supprimer</button>
                                                </form>
                                                <!-- ====================== links Messages Content Start store =============================================== -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <!-- ====================== links Messages Content Start store =============================================== -->
                        </div>
                    </div>
                    <div class="card-footer border-top">
                        <div class="row">
                            <div class="col">
                                <!-- ====================== links Messages Content Start store =============================================== -->
                                {!! $Messages->links() !!}
                                <!-- ====================== links Messages Content Start store =============================================== -->
                            </div>
                            <div class="col text-right view-report">
                                <!-- ====================== links Messages Content Start store =============================================== -->
                                @if (COUNT($Messages) != null)
                                    <a>Afficher 10 à {{ COUNT($Messages) }} de {{ COUNT($Messages) }} Messages</a>
                                @else
                                    <a>Afficher 10 à 0 de 0 messages</a>
                                @endif
                                <!-- ====================== links Messages Content Start store =============================================== -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Default Light Table -->
        <!-- Default Dark Table -->
        <!-- ====================== links Messages Content Start store =============================================== -->
        <!-- End Default Dark Table -->
    </div>
@endsection
