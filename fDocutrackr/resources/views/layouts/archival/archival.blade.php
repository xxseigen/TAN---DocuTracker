@extends('layouts.archival.master')

@section('title', 'DocuTrackr | Archive')

@section('content')
<!-- Page Header-->
<header class="page-header-ui page-header-ui bg-white pb-4" style="position: sticky; top: 0; z-index: 100;">
            <div class="page-header-ui-content">
                <div class="container px-5">
                    <h1 class="page-header-ui-title text-color2">Archived Research Projects</h1>
                    <div class="px-4">
                        <ul class="nav nav-underline">
                            <li class="nav-item small">
                                <a class="nav-link" aria-current="page" href="#">ALL</a>
                            </li>
                            <li class="nav-item small">
                                <a class="nav-link" href="#">THESIS</a>
                            </li>
                            <li class="nav-item small">
                                <a class="nav-link" href="#">CAPSTONE</a>
                            </li>
                        </ul>
                    </div>
                    <!-- search bar -->
                    <div class="row gx-5 align-items-center">
                        <div class="input-group">
                            <span class="input-group-text">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#d2d3e3"
                                    class="bi bi-search" viewBox="0 0 16 16">
                                    <path
                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                </svg>
                            </span>
                            <input id="search-bar" type="text" class="form-control border-start-0 border-end-0"
                                placeholder="Find projects by title or author">
                            <span class="input-group-text">
                                <button class="btn btn-color2">Search</button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="container px-5">
            <div class="row justify-content-between">
                <!-- side menu -->
                <div class="col-lg-4 col-xl-3 mb-5">
                    <div class="fixed">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="year" class="form-label">Year of completion</label>
                                    <select id="year" class="form-select form-select-sm">
                                        <option selected>Select year</option>
                                        <option value="2022">2022</option>
                                        <option value="2021">2021</option>
                                        <option value="2020">2020</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="program" class="form-label">Field of study</label>
                                    <select id="program" class="form-select form-select-sm">
                                        <option selected>Select field of study</option>
                                        <option value="Computer Science">Computer Science</option>
                                        <option value="Information Technology">Information Technology</option>
                                        <option value="Information Systems">Information Systems</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="methodology" class="form-label">Research methodology</label>
                                    <select id="methodology" class="form-select form-select-sm">
                                        <option selected>Select methodology</option>
                                        <option value="Qualitative">Qualitative</option>
                                        <option value="Quantitative">Quantitative</option>
                                        <option value="Mixed Methods">Mixed Methods</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- search results nav -->
                <div class="col-lg-8 col-xl-9">
                    <div class="row gx-5 align-items-center">
                        <div class="col-md-6">
                            <p>Showing 1-10 of 100 results</p>
                        </div>
                        <div class="col-md-6">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-end">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- search results -->
                    <div class="card mb-3">
                        <div class="list-group list-group-flush">
                            <a class="list-group-item list-group-item-action py-4" href="#!">
                                <div class="d-flex justify-content-between">
                                    <div class="me-4 d-flex">
                                        <div>
                                            <h6>Design and Development of a Centralized Web-based Document Management
                                                System for Thesis and Capstone Projects of the College of Computer
                                                Studies</h6>
                                            <p class="card-text small">20XX · BSIT · Doe, John; Smith, Jane; and Lee, Mike.</p>
                                            <p class="card-text small">Abstract here Abstract here Abstract here
                                                Abstract here Abstract here Abstract here Abstract here Abstract here
                                                Abstract here Abstract here...</p>
                                            <p class="card-text">
                                        </div>
                                    </div>
                                    <!-- buttons for large screen -->
                                    <div class="d-none d-sm-flex justify-content-end">
                                        <button type="button" class="btn btn-color2">
                                            View
                                        </button>
                                        <button type="button" class="btn btn-color4 ms-2">
                                            Download
                                        </button>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center flex-wrap">
                                    <div class="text-body-secondary">
                                        <span class="badge bg-primary me-2">Tag 1</span>
                                        <span class="badge bg-primary">Tag 2</span>
                                    </div>
                                    <p class="card-text mb-0 ms-3">File size: 56.8MB</p>
                                </div>
                                <!-- buttons for small screen -->
                                <div class="d-flex d-sm-none justify-content-center mt-3">
                                    <button type="button" class="btn btn-color2 w-100">
                                        View
                                    </button>
                                    <button type="button" class="btn btn-color4 w-100 ms-2">
                                        Download
                                    </button>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="list-group list-group-flush">
                            <a class="list-group-item list-group-item-action py-4" href="#!">
                                <div class="d-flex justify-content-between">
                                    <div class="me-4 d-flex">
                                        <div>
                                            <h6>Design and Development of a Centralized Web-based Document Management
                                                System for Thesis and Capstone Projects of the College of Computer
                                                Studies</h6>
                                            <p class="card-text small">20XX · BSIT · Doe, John; Smith, Jane; and Lee, Mike.</p>
                                            <p class="card-text small">Abstract here Abstract here Abstract here
                                                Abstract here Abstract here Abstract here Abstract here Abstract here
                                                Abstract here Abstract here...</p>
                                            <p class="card-text">
                                        </div>
                                    </div>
                                    <!-- buttons for large screen -->
                                    <div class="d-none d-sm-flex justify-content-end">
                                        <button type="button" class="btn btn-color2">
                                            View
                                        </button>
                                        <button type="button" class="btn btn-color4 ms-2">
                                            Download
                                        </button>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center flex-wrap">
                                    <div class="text-body-secondary">
                                        <span class="badge bg-primary me-2">Tag 1</span>
                                        <span class="badge bg-primary">Tag 2</span>
                                    </div>
                                    <p class="card-text mb-0 ms-3">File size: 56.8MB</p>
                                </div>
                                <!-- buttons for small screen -->
                                <div class="d-flex d-sm-none justify-content-center mt-3">
                                    <button type="button" class="btn btn-color2 w-100">
                                        View
                                    </button>
                                    <button type="button" class="btn btn-color4 w-100 ms-2">
                                        Download
                                    </button>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="list-group list-group-flush">
                            <a class="list-group-item list-group-item-action py-4" href="#!">
                                <div class="d-flex justify-content-between">
                                    <div class="me-4 d-flex">
                                        <div>
                                            <h6>Design and Development of a Centralized Web-based Document Management
                                                System for Thesis and Capstone Projects of the College of Computer
                                                Studies</h6>
                                            <p class="card-text small">20XX · BSIT · Doe, John; Smith, Jane; and Lee, Mike.</p>
                                            <p class="card-text small">Abstract here Abstract here Abstract here
                                                Abstract here Abstract here Abstract here Abstract here Abstract here
                                                Abstract here Abstract here...</p>
                                            <p class="card-text">
                                        </div>
                                    </div>
                                    <!-- buttons for large screen -->
                                    <div class="d-none d-sm-flex justify-content-end">
                                        <button type="button" class="btn btn-color2">
                                            View
                                        </button>
                                        <button type="button" class="btn btn-color4 ms-2">
                                            Download
                                        </button>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center flex-wrap">
                                    <div class="text-body-secondary">
                                        <span class="badge bg-primary me-2">Tag 1</span>
                                        <span class="badge bg-primary">Tag 2</span>
                                    </div>
                                    <p class="card-text mb-0 ms-3">File size: 56.8MB</p>
                                </div>
                                <!-- buttons for small screen -->
                                <div class="d-flex d-sm-none justify-content-center mt-3">
                                    <button type="button" class="btn btn-color2 w-100">
                                        View
                                    </button>
                                    <button type="button" class="btn btn-color4 w-100 ms-2">
                                        Download
                                    </button>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection