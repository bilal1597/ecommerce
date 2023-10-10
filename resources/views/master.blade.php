<!DOCTYPE html>
<html lang="en">
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>


    <title>Ecommerce</title>
</head>
<body>
    {{View::make("header")}}
@yield('content')
    {{ View::make('footer') }}


</body>
<style>
    .custom_login{
        height: 500px;
        padding-top: 100px;
    }
    img.image_slider{
        height: 300px !important;
    }
    .custom_product{
        height: 600px;
    }
    .slider_text{
        background-color: #1a1a1a63 !important;
    }
    .trending_wrapper{
        margin: 30px;
    }
.trending_image{
    height: 100px;
}
.trending_item{
    float: left;
    width: 14%;
}
.detail_image{
    height: 300px;
}
.search_box{
    width: 500px !important;
}

</style>
{{-- <script>
    $(document).ready(function()
        {
            $("button").click(function()
            {
                alert("all set")
            })
        }
    )
</script> --}}
</html>
