$(document).ready(function () {
 // New Reader Validations 
  $('#myform').validate({
    rules: {
      "reader_id": {
        required: true,
      },
	  "name": {
        required: true,
      },
	  "address": {
        required: true,
      },
	  "phone": {
        required: true,
      }
    },
    messages: {
      "reader_id": {
        required: "Reader ID is required",
      },
	  "name": {
        required: "Name is required",
      },
	  "address": {
        required: "Address is required",
      },
	  "phone": {
        required: "Phone number is required",
      }
    },
    submitHandler: function (form) { // for Submit
      $('#myform').submit();
	   
      return false;
    }
  });

  // Add Book Validation
  $('#addBook').validate({
    rules: {
      "book_id": {
        required: true,
      },
	  "title": {
        required: true,
      },
	  "isbn": {
        required: true,
      },
	  "author_id": {
        required: true,
      },
	  "publisher_id": {
        required: true,
      }
    },
    messages: {
      "book_id": {
        required: "Book ID is required",
      },
	  "title": {
        required: "Title is required",
      },
	  "isbn": {
        required: "ISBN is required",
      },
	  "author_id": {
        required: "Author ID is required",
      },
	  "publisher_id": {
        required: "Publisher ID is required",
      }
    },
    submitHandler: function (form) { // for Submit
      $('#addBook').submit();
	   
      return false;
    }
  });

});