/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
(function($) {
    
jQuery(document).ready(function($){
    UpdatePlace2bookEventStatus();
    $(document).ajaxSuccess(UpdatePlace2bookEventStatus);

});


function UpdatePlace2bookEventStatus(event, xhr, settings)
{
    //Only execute if we are requesting TicketInfo throu ajax.
    if (settings != undefined && settings.url.indexOf("/ding/place2book/ticketinfo/ajax/") == 0) {

        return;
    };
    
    //Update Place2Book Status for list 
    var NodeArray = new Array();
    Place2BookEvents = [];
    $('.views-field-field-place2book-tickets .field-content').each(function(index,val){
        var Nodeid = $(val.parentNode.parentNode).find(".views-field-nid .field-content").text();
        var PlaceHolder = $(val.parentNode.parentNode).find(".views-field-field-place2book-tickets .field-content").text();
        if(Nodeid != undefined && Nodeid != "" && Nodeid != -1)
        {
            NodeArray.push(Nodeid);
            Place2BookEvents.push(val);
        }
    });
    /*
     * Abort if no ticket status objects.
     */
    if(NodeArray.length == 0)
    {
        return;
    }
    /*
     * Setup he spinner , while we retrive the status for the events.
     */
    $.each(Place2BookEvents,function(index,val){
        $(val.parentNode.parentNode).append("<div class='p2b_preloader'><i class='fa fa-cog fa-spin fa-2x fa-fw'></i><div>");
        $(val.parentNode.parentNode).removeClass('js-hide');
    });
    /*
     * Update place2book ticket statuses
     */
        //Retrive shown events status. ( Making it appear more responsive loading to user)
    $.each(NodeArray,function(index,obj){
        if(obj == "")
        {
            return;
        } 
        setTimeout(function(){
                  var json = JSON.stringify([obj]);
                    $.ajax({
                    url: "/ding/place2book/ticketinfo/ajax/" + json,
                    cache: false,
                    success: function(data){
                        $.each(data,function(index,obj){

                          $('.views-field-nid .field-content').each(function(index,val){
                              if(obj.nid == val.innerHTML)
                              {
                                      $(val.parentNode.parentNode).append("<div class='p2b_event_list_btn_wrap'>" + obj.markup + "</div>");
                                      //$(val.parentNode).addClass('js-hide');
                                      $(val.parentNode.parentNode).find(".p2b_preloader").addClass('js-hide');
                                      //return;                  
                              }
                          });
                      });
                    }

                  });
        }, 100);
  
    });
}
})(jQuery)