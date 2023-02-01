@extends('layouts.app')
<!-- -->
@section('content')
<div class="section-buku px-3">
    <div class="container-fluid my-4 bg-white border-radius-1rem">
        <div class="content py-5">
            <div class="d-flex justify-content-between">
                <div>
                    <h5>List Buku</h5>
                </div>

                <div class="search-table">
                    <div class="input-group mb-3">
                        <input
                            type="text"
                            class="form-control"
                            placeholder="Search..."
                        />
                        <button class="btn btn-outline-secondary" type="button">
                            <span
                                ><i class="bi bi-search icons-center"></i
                            ></span>
                        </button>
                    </div>
                </div>
            </div>
            <table class="border table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>
                            <div class="d-flex">
                                <button
                                    type="button"
                                    class="btn btn-primary mx-1"
                                    data-bs-toggle="modal"
                                    data-bs-target="#modal-edit"
                                >
                                    <span
                                        ><i
                                            class="bi bi-pencil-square icons-center"
                                        ></i
                                    ></span>
                                </button>
                                <button
                                    type="button"
                                    class="btn btn-danger mx-1"
                                    data-bs-toggle="modal"
                                    data-bs-target="#modal-delete"
                                >
                                    <span>
                                        <i class="bi bi-trash icons-center"></i
                                    ></span>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal-add">
        <div
            class="modal fade"
            id="modal-edit"
            data-bs-backdrop="static"
            data-bs-keyboard="false"
            tabindex="-1"
            aria-labelledby="modal-edit-buku"
            aria-hidden="true"
        >
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="modal-edit">
                            Edit Buku
                        </h1>
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>
                    </div>
                    <div class="modal-body">...</div>
                    <div class="modal-footer">
                        <button
                            type="button"
                            class="btn btn-secondary"
                            data-bs-dismiss="modal"
                        >
                            Close
                        </button>
                        <button type="button" class="btn btn-primary">
                            Submit
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal-delete">
        <div
            class="modal fade"
            id="modal-delete"
            data-bs-backdrop="static"
            data-bs-keyboard="false"
            tabindex="-1"
            aria-labelledby="modal-delete-buku"
            aria-hidden="true"
        >
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="modal-delete">
                            Delete Buku?
                        </h1>
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>
                    </div>
                    <div class="modal-body">
                        Apakah Anda yakin delet buku ini?
                    </div>
                    <div class="modal-footer">
                        <button
                            type="button"
                            class="btn btn-secondary"
                            data-bs-dismiss="modal"
                        >
                            Close
                        </button>
                        <button type="button" class="btn btn-danger">
                            Yes
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
