
/* Write code on document load */
$(document).ready(function() {
    var $windowWidth = $(window).width();

	/***
	** Create function for click elements
	****/ 
    function clickToggle(clickElement, targetElement, addingClass ){
        var  clickElement = $(clickElement),
             targetElement = $(targetElement),
             activeClass = addingClass;
        clickElement.click(function() {
            var _this = $(this);
             /* slideToggleFunction is available or not :: true, false*/
            _this.toggleClass('active');
            targetElement.slideToggle(500);
            targetElement.toggleClass(activeClass);
        });
    }


	clickToggle('.searchsection > a.search', 'header .searchbox', 'active');

    /***
    ** Create function for footer accordian
    ****/

    if($windowWidth < 767){
        var  footerQuickLinkTrigger = $('.quick-links>ul>li h3');
        footerQuickLinkTrigger.click(function() {
            var _this = $(this);
            _this.next('ul').slideToggle(500);
            _this.toggleClass('active');
        });
    }

    /***
    ** Create function humberg icon click
    ****/
    var  headerhumberg = $('.humberg-icon');
    headerhumberg.click(function() {
        var _this = $(this);
        $('body').toggleClass('menu-active');
        _this.toggleClass('active');
    });
    
    /***
    ** Flexible courses slider
    ****/
    $('.flexible-section .slider-wrapper').slick({
        dots: false,
        autoplay: false,
        arrows: true,
        slidesToShow: 1
    });
    
    /***
    ** flexible courses providers slider
    ****/
    $('.flexible-section .bottom .wrapper').slick({
        dots: false,
        autoplay: true,
        arrows: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [
            {
            breakpoint: 991,
            settings: {
                slidesToShow: 3
                }
            },
            {
            breakpoint: 767,
            settings: {
                slidesToShow: 2
                }
            },
            {
            breakpoint: 550,
            settings: {
                slidesToShow: 1
                }
            }
        ]
    });

    /***
    ** Add wrapper for tables
    ****/
    var tableElement = $('*[rasponsive-table="enabled"] > table');
    tableElement.each(function(){
        $(this).wrap('<div class="table-wrapper"></div>');
    });
       
});

