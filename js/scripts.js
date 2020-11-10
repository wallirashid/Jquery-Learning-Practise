jQuery(document).ready(function() {
    function totalListItems() {
        currentliItems = jQuery("#first-ul li").length;
        jQuery("#unsolve-badge").text(currentliItems);
    }
    totalListItems();

    /*----------------------Append List Item Dyanmically When press the Add item Button---------*/

    jQuery("#click-me").on("click", function() {
        jQuery("#first-ul").append(
            "<li class='new-item'>" + "<span class='handle ui-sortable-handle'>" +
            "<i class='fa fa-ellipsis-v'></i>" +
            "<i class='fa fa-ellipsis-v'></i>" +
            "<input type='checkbox' value='' name=''>" +
            "</span>" +
            "<div class='tools'>" +
            "<i class='fa fa-edit'></i>" +
            "<i class='fa fa-trash-o delete-li'></i>" +
            "</div>" +
            "<input type='text' placeholder='Enter your todo Task' class='full-width'><button class='btn-styling save-task' type='submit'>Add Task</button><span class='text'></span>" +
            "</li>"
        );
        totalListItems();
    });
    /*---------------------When pressing the checkbox The li goes to Complete Task---------*/

    jQuery(document).on("click", "#first-ul input[type='checkbox']", function() {
        if (jQuery(this).is(":checked")) {
            var completeState = jQuery(this).parents("li").css("text-decoration", "line-through");
            jQuery("#destination h2").text("Task Complete");
            jQuery("#put-li").append(completeState);
            $("#destination").find(".tools i.fa.fa-edit").remove();
        }
    });
  });
  jQuery(document).on("click", ".tools i.fa.fa-trash-o.delete-li", function() {
      jQuery(this).parents("li").remove();
      currentliItems = jQuery("#first-ul li").length;
      jQuery("#unsolve-badge").text(currentliItems);
  });

  jQuery("#first-ul input[type='checkbox']").on("click", function() {
      if (jQuery(this).is(":checked")) {
          var getLength = jQuery("#destination li").length + 1;
          jQuery("#update-badge").text(getLength);
      }
  });

/*--------Save task when click Add item button -----------*/
  jQuery(document).on("click", ".save-task", function() {
      var val = $(this).prev().val();
      $(this).siblings(".text").text(val);
      $(this).prev().remove();
      $(this).remove();
      jQuery(this).parents("li").removeClass("edit-text-field");
  });
/*---------------------Edit Option Using Jquery---------*/
  function totalListItems() {
      currentliItems = jQuery("#first-ul li").length;
      jQuery("#unsolve-badge").text(currentliItems);
  }
  /*-----------------------Edit Information fields show and set the new text value --------------------------*/     
  jQuery("#first-ul").on("click", ".edit-task", function() {
        var newTxtValue = jQuery(this).prev().val();
        jQuery(this).parents("li").find(".text").text(newTxtValue);
        jQuery(this).prev().remove();
        jQuery(this).remove();
        //totalListItems();
  });      
  /*-----------------------Edit Information in to do list section when press the button --------------------------*/
  jQuery(document).on("click",".fa.fa-edit",function() {
        var emptyString = "";
        var editLiText = jQuery(this).parents("#first-ul li").append("<input type='text' placeholder='Edit Information' class='full-width'><button class='save-task btn-styling' type='submit'>Add Task</button>");
  });
