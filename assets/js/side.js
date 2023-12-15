$(document).ready(function() {
    // when a checkbox is clicked
    $('input[name="category"]').click(function() {
      // get all the checked checkboxes
      var checked = $('input[name="category"]:checked');
      
      if (checked.length > 0) {
        // if there are checked checkboxes
        $('.product').hide(); // hide all products
        
        // loop through each checked checkbox
        checked.each(function() {
          var category = $(this).val();
          
          // show all products with matching category
          $('.product[data-category="' + category + '"]').show();
        });
      } else {
        // if no checkboxes are checked, show all products
        $('.product').show();
      }
    });
  });