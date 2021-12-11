<link href="files/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="files/mycss.css" rel="stylesheet" type="text/css" />









<div class="back2">
    <div class="container">
        <form method="post" action="/submitans">
            @csrf
            <div class="row" style="padding-top: 30vh; color:black;">
                <div class="col-md-6"></div>
                <div class="col-md-6">
                    
                    <h4>#{{Session::get("nextq")}} : {{$question->question}}</h4>
                    <input value="a" checked="true" type="radio" name="ans"> (A) <small> {{$question->a}}</small><br>
                    <input value="b" type="radio" name="ans"> (B) <small> {{$question->b}}</small><br>
                    <input value="c" type="radio" name="ans"> (C) <small> {{$question->c}}</small><br>
                    <input value="d" type="radio" name="ans"> (D) <small> {{$question->d}}</small><br>
                    <input value="{{$question->ans}}" style="visibility: hidden" name="dbans">
                    
                </div>
            </div>
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary" style="float: right">Next</button>
                </div>
            </div>
        </form>
    </div>
</div>












<script src="files/jquery.min.js"></script>
<script src="files/bootstrap.min.js"></script>
<script src="files/popperjs.min.js"></script>
