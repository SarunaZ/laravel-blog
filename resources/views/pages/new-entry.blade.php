@extends ('layouts/main')
@section('content')
<div class="container">
    <div class="col-md-5">
        <div class="form-area">
            <form role="form" method="post" action="/savepost">
                {{csrf_field()}}
                <br style="clear:both">
                <h3 style="margin-bottom: 25px; text-align: center;">Contact Form</h3>
                <div class="form-group">
                    <input type="text" class="form-control" name="title" for="title" id="title" placeholder="title" required>
                </div>
                <div class="form-group">
                    <textarea class="form-control" type="textarea" name="body" id="body" placeholder="Message" maxlength="140" rows="7"></textarea>
                    <span class="help-block"><p id="characterLeft" class="help-block ">You have reached the limit</p></span>
                </div>

                <input type="submit" name="submit" value="Siųsti"></input>
            </form>
        </div>
    </div>
</div>
@endsection