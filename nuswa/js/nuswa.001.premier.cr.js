$(document).ready(function(){
// OWl Carousel JS
    function owlrandom(owlSelector){
        owlSelector.children().sort(function(){
            return Math.round(Math.random()) - 0.5;
        }).each(function(){
          $(this).appendTo(owlSelector);
        });
    }

    $("#owl-demo").owlCarousel({
        items : 4,
        autoPlay : true,
        lazyLoad : true,
        navigation : false,
        pagination : false,
        responsive : true,
        autoHeight : true,
        mouseDrag : true,
        touchDrag : true,
        transitionStyle : true,
        beforeInit : function(elem){
            //Parameter elem pointing to $("#owl-demo")
            owlrandom(elem);
        }
    });
});