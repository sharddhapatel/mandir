<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @if(Session::has('message'))
    <div class="alert alert-success">
        <i class="fa-lg fa fa-warning"></i>
        {!! session('message') !!}
    </div>
    @elseif(Session::has('error'))
    <div class="alert alert-danger">
        <i class="fa-lg fa fa-warning"></i>
        {!! session('error') !!}
    </div>
    @endif
    <form action="{{url('insertimage')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row row--form">

            <div class="col-12  form__content">
                <div class="row row--form">
                    <div class="col-12">

                    </div>
                    <div class="col-12">
                        <div class="form__gallery">
                            <label id="gallery1" for="form__gallery-upload">Upload photos</label>
                            <input data-name="#gallery1" id="form__gallery-upload" name="img[]" class="form__gallery-upload" type="file" accept=".png, .jpg, .jpeg">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="col-12">
                    <button type="submit" class="form__btn">Submit</button>
                </div>
            </div>
        </div>
        </div>
    </form>
</body>

</html>
