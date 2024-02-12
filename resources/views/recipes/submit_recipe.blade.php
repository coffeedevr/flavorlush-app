@php

@endphp


@extends('pages.main', [
    'pageTitle' => 'Dashboard'
])

@section('css-links')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
@endsection

@section('content')
<div class="content-container">
    <div class="page-title d-flex flex-row justify-content-between">
        <h2 class="fs-3">Submit a Recipe</h2>
    </div>
    <div class="container">
        <div class="d-flex justify-content-end mb-3">
            <a href="/">Go Back</a>
        </div>
        <form action="" method="post">
            <div class="card">
                <div class="card-body">
                    <div class="container">
                        <div class="row d-flex justify-content-between mt-3">
                            <div class="col-6 mb-3 d-flex gap-2 align-items-center">
                                <label for="" class="form-label w-25">Recipe Name:</label>
                                <input
                                    type="text"
                                    name=""
                                    id=""
                                    class="form-control"
                                    placeholder=""
                                    aria-describedby="helpId"
                                />
                            </div>
                            <div class="col-2 mb-3 d-flex gap-2 align-items-center">
                                <label for="" class="form-label w-auto">Servings:</label>
                                <input
                                    type="text"
                                    name=""
                                    id=""
                                    class="form-control"
                                    placeholder=""
                                    aria-describedby="helpId"
                                    min="1"
                                />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 mb-3">
                                <label for="" class="form-label">Ingredients:</label>
                                <textarea
                                    name=""
                                    id=""
                                    class="form-control"
                                    placeholder=""
                                    aria-describedby="helpId"
                                    rows="10"
                                ></textarea>
                            </div>
                            <div class="col-6 mb-3">
                                <label for="" class="form-label">Directions:</label>
                                <textarea
                                    name=""
                                    id=""
                                    class="form-control"
                                    placeholder=""
                                    aria-describedby="helpId"
                                    rows="10"
                                ></textarea>
                            </div>
                        </div>
                        <div class="form-container col">
                            <div class="mb-3">
                                <label for="" class="form-label">Image:</label>
                                <input
                                    type="file"
                                    name=""
                                    id=""
                                    class="form-control"
                                    placeholder=""
                                    aria-describedby="helpId"
                                    min="1"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="row mt-3">
            <div class="col d-flex gap-2 justify-content-end">
                <button type="submit" class="btn btn-success pe-3 ps-3">Submit</button>
                <button type="submit" class="btn btn-primary pe-3 ps-3">Reset</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js-links')
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
@endsection

@section('js-code')
@endsection