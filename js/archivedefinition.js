jQuery(document).ready(function($)
{ 
    //========== Preload Contents =========

       PreLoad();

      var findelements  = "";
      var positionarray = [];
      var scrollposition = 0;
      var newtop=0;
    // ================

    // ============= Clicking Event ===============
  $("#encyclopedia-menu a").click(function(event){
      if($('#loading').is(":hidden"))
    {
      page = $(this).attr("href");
      $("#list-definitions").children().removeClass("term-selected");
      $(this).addClass("term-selected");
      $('.encyclopedia-content').empty();
        ajaxload(page);
   }
      event.preventDefault();
  });
  // ===============================================

  // =================== Scrolling down Event ===============
   $(window).scroll(function() {
    if($('#loading').is(":hidden"))
    {
       var currentItem = $("#list-definitions").find(".term-selected");
       var nextContentAppend ="";
       var contentname="";

       scrollposition = $(window).scrollTop() + 300;
       if($(window).scrollTop() + $(window).height() == $(document).height())
        {
            if(currentItem.next().length)
           {
               nextContentAppend =  currentItem.next(); 
              contentname = nextContentAppend.attr("name");
          
               ajaxload(nextContentAppend.attr("href"));
            }
          } 
       
        $.each(positionarray,function(index,element)
        {
            if(scrollposition >= element.termtop)
            {
              newtop = element;
            }
            else
            {

              return false;
            }
        });   

      if(scrollposition >= newtop.termtop)
      {
          $("#list-definitions").children().removeClass("term-selected");
          var listMenu = $("#list-definitions").children();
          $.each(listMenu,function(index,element)
          {
             if(element.name == newtop.term)
             {
                $(this).addClass("term-selected");
                document.title = "Definition : " + newtop.term;
                   window.history.pushState({key : "value"},"page", $(this).attr("href"));
             }
          });
      }

    }
   });
  // ========================================================



  // ==================== Methods =======================
   function PreLoad()
   {
     // $('#loading').hide();
      $('row').removeClass("preload-content");
     $('.encyclopedia-content').empty();
      var page = $("#list-definitions").children().first().attr("href");
      $("#list-definitions").children().first().addClass("term-selected");
       ajaxload(page);
   }
  function ajaxload(page)
  {
      $.ajax({
        url: page,
        cache: false,
         beforeSend: function(){
          $.holdReady( true );
          loading();
        },
        success: function(html){
            $.holdReady( false );
            displayData(html); 
            $(document).ready(function(){ 
              document.title = "Definition : " +  page.substring(page.lastIndexOf('/') + 1);
           window.history.pushState({key : "value"},"page", page);
          });
        },
        error: function(XMLHttpRequest, textStatus, errorThrown){
            alert(textStatus);
        }
     });
  }

    function loading()
  {
    $('#loading').show();
  }

  function displayData(data){

     $('#loading').fadeOut(0,function()
    {
          $(".encyclopedia-content").append(data);
          $(".encyclopedia-content").fadeIn(0);
          findelements = $(".encyclopedia-content").find("li");
          positionarray = [];
            findelements.each(function(index, element)
           {    var terms = {
                termtop: $(this).offset().top,
                term: $(this).attr("id")
              }
                positionarray.push(terms);
          });
       });
    
  }
});
// ===================================================
