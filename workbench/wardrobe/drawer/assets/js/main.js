$(function() {
    // Time conversion
    $("time").each(function(){
        var $el = $(this);
        var date = $el.attr("datetime");
        $el.text(moment(date).format("lll"));
    });
});