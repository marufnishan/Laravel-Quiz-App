<link href="files/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="files/mycss.css" rel="stylesheet" type="text/css" />










<h3 style="text-align: center;margin-top: 100px;">Laravel Quiz Web Application</h3>
<br>
<br>

<br>

<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                @foreach($errors->all() as $error)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> {{$error}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                @endforeach

                @if(Session::get('successMessage'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> {{Session::get('successMessage')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>

                <?php Session::forget('successMessage'); ?>
                @endif
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-1">
                            <a href="/"><Button class="btn btn-primary">Home</Button></a>
                        </div>
                        <div class="col-sm-2">
                            <h2><b>All Questions</b></h2>
                        </div>
                        <div class="col-sm-7">
                            <div class="search-box">

                                <input type="text" class="form-control" placeholder="Search&hellip;">
                            </div>
                        </div>
                        
                        <div class="col-sm-2"><Button data-toggle="modal" data-target="#Modal_add"
                            class="btn btn-primary">Add Question</Button></div>
                    </div>
                </div>
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Question <i class="fa fa-sort"></i></th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Capital of Bangladesh ?</td>

                            <td>
                                <a href="#" class="text-warning" data-toggle="tooltip" data-toggle="modal"
                                    data-target="#Modal_update">Update</a>
                                <a href="#" class="text-danger" data-toggle="tooltip">Delete</a>
                            </td>
                        </tr>

                    </tbody>
                </table>

            </div>
        </div>
    </div>
</body>

</html>


<!-- Modal-Add -->
<div class="modal fade" id="Modal_add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="post" action="/add">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Teacher</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row" style="padding:10px;">
                        <label>Question :</label>
                    </div>
                    <div class="row" style="padding:10px;">
                        <input name="question" class="form-control">
                    </div>
                    <div class="row" style="padding:10px;">
                        <div class="col-md-6"><label>A :</label></div>
                        <div class="col-md-6"><label>B :</label></div>
                    </div>
                    <div class="row" style="padding:10px;">
                        <div class="col-md-6"><input name="opa"></div>
                        <div class="col-md-6"><input name="opb"></div>
                    </div>
                    <div class="row" style="padding:10px;">
                        <div class="col-md-6"><label>C :</label></div>
                        <div class="col-md-6"><label>D :</label></div>
                    </div>
                    <div class="row" style="padding:10px;">
                        <div class="col-md-6"><input name="opc"></div>
                        <div class="col-md-6"><input name="opd"></div>
                    </div>
                    <div class="row" style="padding:10px;">
                        <div class="col-md-3">
                            <label>Answer :</label>
                            <select name="ans" class="form-control">
                                <option value="a"> A </option>
                                <option value="b"> B </option>
                                <option value="c"> C </option>
                                <option value="d"> D </option>
                            </select>
                        </div>
                        <div class="col-md-9"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add Question</button>
                </div>
            </form>
        </div>
    </div>
</div>













<script src="files/jquery.min.js"></script>
<script src="files/bootstrap.min.js"></script>
<script src="files/popperjs.min.js"></script>
