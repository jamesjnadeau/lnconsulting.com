require('./jquery.smoothState.js');

require('jquery-ui/ui/widget');

require('isotope-layout/dist/isotope.pkgd.js');
//this does the page transitions
$(document).ready(function() {
  'use strict';
  var $body = $('html, body'),
    $loading = $('#loading'),
    $content = $('#wrap').smoothState(
      {
        // Runs when a link has been activated
        development: true,
        onStart: function(url, $container)
        {
          var temp = $('.container.animated.fadeInDown');
          temp.removeClass('fadeInDown').addClass('fadeOutDownBig');
          // Scroll user to the top
          $body.animate({ 'scrollTop': 0 });
        },
        onProgress : function (url, $container)
        {
          $body.css('cursor', 'wait');
          $body.find('a').css('cursor', 'wait');
          $container.hide();
          $loading.show();
        },
        onEnd : function (url, $container, $content)
        {
          $loading.hide();
          $body.css('cursor', 'auto');
          $body.find('a').css('cursor', 'auto');
          $content.removeClass('csspinner helicopter');
          $container.html($content);
          //ga_track_page();
          fix_missing_images();
          initIsotope();
        },
        pageCacheSize: 0,
        prefetch: false
      }).data('smoothState');
  //temporary fix to restyle pages with missing images
  function fix_missing_images() {
    //fix for pages with blank images
    var images = $body.find('.img-responsive.img-rounded');
    if(images.length && !images.attr('src')) {
      $('div.col-md-6').removeClass('col-md-6').addClass('col-md-12');
    }
  }
  fix_missing_images();

  // isotope filtering

  function initIsotope() {

    var $isotope = $('.isotope').isotope({
      itemSelector: '.list-group-item',
      layoutMode: 'vertical',
    });

    if($isotope.length) {
      console.log("init isotope");
      // look for any filters to set up
       $('.isotope-filter').on( 'click', function() {

         var filterValue = $( this ).attr('data-filter');
         console.log("click", filterValue);
         $isotope.isotope({ filter: filterValue });
       });
    }
  }
  initIsotope();
});

//Google Analytics
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-56034285-1', 'auto');
ga('send', 'pageview');
var ga_track_page = function()
{
  hash = location.hash;
  try
  {
    if (hash)
      ga('send', '_trackPageview', hash.substr(1));
    else
      ga('send', '_trackPageview', location.pathname);
  }
  catch(err)
  {
    console.log('unable to track page', err);
  }
};
