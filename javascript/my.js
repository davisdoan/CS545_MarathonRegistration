$(document).ready(function() {

	$(".button-submit").on('click',function(e) {
        e.preventDefault();
        var params = "email="+$('#email').val();
        var url = "php/check_dup.php?"+params;
        $.get(url, dup_handler);
        });

	('input[name="fname"]').focus();	
});

function dup_handler(response) {
    if(response == "dup")
        $('#what_kind').text("ERROR, Runner already registered");
    else if(response == "OK") {
        $('form').serialize();
        $('form').submit();
        }
    else
        alert(response);
}

function validateDate() {
		    var day = document.getElementById("d").value; 
		    var month = document.getElementById("m").value;
		    var year = document.getElementById("y").value;
		    
		    // now turn the three values into a Date object and check them
		    var checkDate = new Date(year, month-1, day);    
		    var checkDay = checkDate.getDate();
		    var checkMonth = checkDate.getMonth()+1;
		    var checkYear = checkDate.getFullYear();

		    if(day > 31){
		    	alert("The day is invalid");
		    	return false;
		    }

		    if(month > 12) {
		    	alert("The month is invalid");
		    	return false;
		    }

		    if(year > 1998) {
		    	alert("Must be 18 or older!");
		    	return false;
		    }

		    if(year < 1911) {
		    	alert("Please email us with a doctor's approval.");
		    	return false;
		    }

		    if(day == checkDay && month == checkMonth && year == checkYear){
		    }
		    else{
		    	alert("Invalid date");
		        return false;
		    } 
}