<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/x-icon" href="/assets/images/sttimg/STTFavicon.png">
<meta name="csrf-token" content="{{ csrf_token() }}">
<script type="application/ld+json">
{
"@context": "https://schema.org/",
"@type": "WebSite",
"name": "Split Train Tickets",
"alternateName" : "Split Train Tickets",
"url": "https://www.splittraintickets.net/"
}
</script>
<!-- Event snippet for Website Visits conversion page -->
<script>
gtag('event', 'conversion', {'send_to': 'AW-11222895509/4fNvCJPYsawYEJWXv-cp'});
</script>
<meta name="msvalidate.01" content="09CFEFC47634C845C5E6EA5AFC270197" />
<meta name="lhverifycode" content="32dc01246faccb7f5b3cad5016dd5033" />
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-BQDPRMNL8T"></script>
<script> window.dataLayer = window.dataLayer || [];   function gtag(){dataLayer.push(arguments);}   gtag('js', new Date());   gtag('config', 'G-BQDPRMNL8T'); </script>

<?php if(!empty($pageDetail)){ ?>
    <title>{{ $pageDetail->metatitle }}</title>
    <meta name="description" content="{{ $pageDetail->metadescription }}" />
    <meta name="keywords" content="{{ $pageDetail->metakeyword }}" />
<?php } else { ?>
    <title>@yield('title', '')</title>
    <meta name="description" content="@yield('meta-description', '')">
    <meta name="keywords" content="@yield('meta-keyword', '')">
<?php } ?>
<!-- Fonts -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
<link rel="dns-prefetch" href="//fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
<!-- Scripts -->
@vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
<div class="wrapper-box">
    @include('common/header')
    @yield('content')
    <footer> @include('common/footer') </footer>
</div>
<script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>

<script>
$('#stars li').on('mouseover', function(){
    var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on

    // Now highlight all the stars that's not after the current hovered star
    $(this).parent().children('li.star').each(function(e){
      if (e < onStar) {
        $(this).addClass('hover');
      }
      else {
        $(this).removeClass('hover');
      }
    });

  }).on('mouseout', function(){
    $(this).parent().children('li.star').each(function(e){
      $(this).removeClass('hover');
    });
});

$('#stars li').on('click', function(){
    var onStar = parseInt($(this).data('value'), 10); // The star currently selected
    var stars = $(this).parent().children('li.star');

    for (i = 0; i < stars.length; i++) {
      $(stars[i]).removeClass('selected');
    }

    for (i = 0; i < onStar; i++) {
      $(stars[i]).addClass('selected');
    }

    // JUST RESPONSE (Not needed)
    var ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
    var msg = "";
    if (ratingValue > 2) {
        msg = "Thanks! You rated this " + ratingValue + " stars.";
    }
    else {
        msg = "We will improve ourselves. You rated this " + ratingValue + " stars.";
    }
	$('#rating').val(ratingValue);
    responseMessage(msg);
});


function responseMessage(msg) {
  $('.rating-box').hide();
  $('.success-box').show();
  $('.success-box div.text-message').html(msg);
}

$(".blog-button").click(function (event) {
    event.preventDefault();
    var title = $("#title").val();
    var description = $("#description").val();
    var name = $("#name").val();
    var email = $("#email").val();
    var rating = $("#rating").val();

    var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z.-]+\.[a-zA-Z]{2,4}$/;

    if (title == "") {
        document.getElementById('title').style.backgroundColor = '#ffc6c6';
        document.getElementById("title").focus();
        return false;
    } else {
        document.getElementById('title').style.backgroundColor = '#fff';
    }

    if (description == "") {
        document.getElementById('description').style.backgroundColor = '#ffc6c6';
        document.getElementById("description").focus();
        return false;
    } else {
        document.getElementById('description').style.backgroundColor = '#fff';
    }

    if (name == "") {
        document.getElementById('name').style.backgroundColor = '#ffc6c6';
        document.getElementById("name").focus();
        return false;
    } else {
        document.getElementById('name').style.backgroundColor = '#fff';
    }

    if (email == "") {
        document.getElementById('email').style.backgroundColor = '#ffc6c6';
        document.getElementById("email").focus();
        return false;
    } else if (!emailPattern.test(email)) {
        document.getElementById('email').style.backgroundColor = '#ffc6c6';
        document.getElementById("email").focus();

        return false;
    } else {
        document.getElementById('email').style.backgroundColor = '#fff';
    }

    if (rating == "") {
        $('.rating-box').show();
        $('.rating-box div.text-message').html("Please rate us to Submit your Review.");
        $('#rating-box').focus();
        return false;
    } else {
        document.getElementById('rating').style.backgroundColor = '#fff';
    }

    $.ajax({
        url: "/posts",
        type: "POST",
        data: $('#reviewForm').serialize(),
        success: function(response) {
            $('.success-box').hide();
	    $("#stars li").removeClass("selected");
            $('#reviewForm')[0].reset();
            $('.thnkyou-msg').show();
                   // $('#thnkyou-msg').show();
            document.getElementById('review-submit-success-msg').scrollIntoView();
        },
        error: function(jqXHR, textStatus, errorThrown) {
        // Handle AJAX errors
            console.error(textStatus + ": " + errorThrown);
            alert("An error occurred!");
        }
    });
});
</script>

<script>
const clickableDiv = document.getElementById('ferry-eng');
clickableDiv.addEventListener('click', function(e) {
    e.preventDefault();
    const newLink = document.createElement('a');
    newLink.href = 'https://poferries.jyae.net/c/3882848/170847/3038?subId1=CTT&subId2=1230';
    newLink.rel = 'nofollow';
    newLink.click();
});
</script>
</body>
</html>
