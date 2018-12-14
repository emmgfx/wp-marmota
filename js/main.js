jQuery(function($){
    
    var searchOverlay = $('header section.desktop-search');
    var searchInput = $('header section.desktop-search input');
    var btSearchToggler = $('header button.search-toggler');
    var btSearchClose = $('header section.desktop-search button.close');
    
    btSearchToggler.on('click', function(){
        searchOverlay.toggleClass('visible');
        if(searchOverlay.hasClass('visible')){
            searchInput.focus();
        }
    });
    
    btSearchClose.on('click', function(){
        searchOverlay.removeClass('visible');
    });
    
    $(document).on('keyup', function(evt){
        if (evt.keyCode == 27) {
           searchOverlay.removeClass('visible');
        }
    });

});
