$('div #ShowLess').click(function () {
    $(this).hide();
    $(this).next().show();
});
$('div #ShowMore').click(function () {
    $(this).hide();
    $(this).prev().show();
});

$(document).ready(function() {
	$(this).scrollTop(0);
});
// $('#stars li').on('mouseover', function(){
//     var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on

//     // Now highlight all the stars that's not after the current hovered star
//     $(this).parent().children('li.star').each(function(e){
//       if (e < onStar) {
//         $(this).addClass('hover');
//       }
//       else {
//         $(this).removeClass('hover');
//       }
//     });

//   }).on('mouseout', function(){
//     $(this).parent().children('li.star').each(function(e){
//       $(this).removeClass('hover');
//     });
// });

// $('#stars li').on('click', function(){
//     var onStar = parseInt($(this).data('value'), 10); // The star currently selected
//     var stars = $(this).parent().children('li.star');

//     for (i = 0; i < stars.length; i++) {
//       $(stars[i]).removeClass('selected');
//     }

//     for (i = 0; i < onStar; i++) {
//       $(stars[i]).addClass('selected');
//     }

//     // JUST RESPONSE (Not needed)
//     var ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
//     var msg = "";
//     if (ratingValue > 2) {
//         msg = "Thanks! You rated this " + ratingValue + " stars.";
//     }
//     else {
//         msg = "We will improve ourselves. You rated this " + ratingValue + " stars.";
//     }
// 	$('#rating').val(ratingValue);
//     responseMessage(msg);
// });


// function responseMessage(msg) {
//   $('.rating-box').hide();
//   $('.success-box').show();
//   $('.success-box div.text-message').html(msg);
// }

// $(".blog-button").click(function () {
//     var title = $("#title").val();
//     var description = $("#description").val();
//     var name = $("#name").val();
//     var email = $("#email").val();
//     var rating = $("#rating").val();

//     var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z.-]+\.[a-zA-Z]{2,4}$/;

//     if (title == "") {
//         document.getElementById('title').style.backgroundColor = '#ffc6c6';
//         document.getElementById("title").focus();
//         return false;
//     } else {
//         document.getElementById('title').style.backgroundColor = '#fff';
//     }

//     if (description == "") {
//         document.getElementById('description').style.backgroundColor = '#ffc6c6';
//         document.getElementById("description").focus();
//         return false;
//     } else {
//         document.getElementById('description').style.backgroundColor = '#fff';
//     }

//     if (name == "") {
//         document.getElementById('name').style.backgroundColor = '#ffc6c6';
//         document.getElementById("name").focus();
//         return false;
//     } else {
//         document.getElementById('name').style.backgroundColor = '#fff';
//     }

//     if (email == "") {
//         document.getElementById('email').style.backgroundColor = '#ffc6c6';
//         document.getElementById("email").focus();
//         return false;
//     } else if (!emailPattern.test(email)) {
//         document.getElementById('email').style.backgroundColor = '#ffc6c6';
//         document.getElementById("email").focus();

//         return false;
//     } else {
//         document.getElementById('email').style.backgroundColor = '#fff';
//     }

//     if (rating == "") {
//         $('.rating-box').show();
//         $('.rating-box div.text-message').html("Please rate us to Submit your Review.");
//         $('#rating-box').focus();
//         return false;
//     } else {
//         document.getElementById('rating').style.backgroundColor = '#fff';
//     }
// });


document.addEventListener('DOMContentLoaded', function() {
  var dropdownToggles = document.querySelectorAll('.nav-item.dropdown .dropdown-toggle');

  dropdownToggles.forEach(function(toggle) {
    toggle.addEventListener('click', function(e) {
      var parent = e.target.closest('.dropdown');
      var menu = parent.querySelector('.dropdown-menu');
      var isOpen = menu.classList.contains('show');

      // Close all open dropdowns
      document.querySelectorAll('.dropdown-menu.show').forEach(function(openMenu) {
        openMenu.classList.remove('show');
      });

      // Toggle the clicked dropdown
      if (!isOpen) {
        menu.classList.add('show');
      }
    });
  });

  // Close dropdowns when clicking outside
  document.addEventListener('click', function(e) {
    if (!e.target.closest('.dropdown')) {
      document.querySelectorAll('.dropdown-menu.show').forEach(function(openMenu) {
        openMenu.classList.remove('show');
      });
    }
  });
});

document.addEventListener('DOMContentLoaded', function() {
	var dropdownToggles = document.querySelectorAll('.nav-item.dropdown .dropdown-toggle');

	dropdownToggles.forEach(function(toggle) {
		toggle.addEventListener('click', function(e) {
			var parent = e.target.closest('.dropdown');
			var menu = parent.querySelector('.dropdown-menu');
			var isOpen = menu.classList.contains('show');

			// Close all open dropdowns
			document.querySelectorAll('.dropdown-menu.show').forEach(function(openMenu) {
				openMenu.classList.remove('show');
			});

			// Toggle the clicked dropdown
			if (!isOpen) {
				menu.classList.add('show');
			}
		});
	});
 
	// Close dropdowns when clicking outside
	document.addEventListener('click', function(e) {
		if (!e.target.closest('.dropdown')) {
			document.querySelectorAll('.dropdown-menu.show').forEach(function(openMenu) {
				openMenu.classList.remove('show');
			});
		}
	});
});

$(document).ready(function(){
	// Resize the slide-read-more Div
	var box = $(".slide-read-more");
	var whome = $(".whome");
	if(whome.length>0){
	  var minimumHeight = 275; // max height in pixels
	}else{
	  var minimumHeight = 400;
	}  
	var initialHeight = box.innerHeight();
  
	// Reduce the text if it's longer than minimumHeight
	if (initialHeight > minimumHeight) {
		box.css('height', minimumHeight);
		$(".read-more-button").show();
	}
  
	SliderReadMore();
	function SliderReadMore() {
		$(".slide-read-more-button").on('click', function () {
			// Get current height
			var currentHeight = box.innerHeight();
			// Get height with auto applied
			var autoHeight = box.css('height', 'auto').innerHeight();
			// Reset height and revert to original if current and auto are equal
			var newHeight = (currentHeight | 0) === (autoHeight | 0) ? minimumHeight : autoHeight;
  
			box.css('height', currentHeight).animate({
				height: newHeight
			}, 500, function() {
				// Check if the box is collapsing to the minimumHeight
				if (newHeight === minimumHeight) {
					// Focus on the specific div after collapsing
					document.getElementById('locateRM').scrollIntoView({ behavior: 'smooth' });
				}
			});
			$(".slide-read-more-button").toggle();
		});
	}
  });
