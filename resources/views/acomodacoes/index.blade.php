@extends('layout')

@section('conteudo')

    <div class="container">
        <div class="row d-flex justify-content-between">
            <div class="card mt-5 largura-card">
                <a data-toggle="modal" data-target=".bd-example-modal-xl">
                    <img src="https://odis.homeaway.com/odis/listing/78f4b2bc-c073-43fc-9ba5-208d23a7808d.c10.jpg" class="card-img-top">
                </a>
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                ...
            </div>
        </div>
    </div>

@endsection
