/**
 * Created by Mahesh Rathnayaka on 8/3/2015.
 */

/**
 * JQUERY for image gallery
 */
// START - GALLERY
jQuery(document).ready(function() {
    var api=jQuery('.metro-gal-container').megafoliopro(
        {
            filterChangeAnimation:"scale",			// fade, rotate, scale, rotatescale, pagetop, pagebottom,pagemiddle
            filterChangeSpeed:400,					// Speed of Transition
            filterChangeRotate:99,					// If you ue scalerotate or rotate you can set the rotation (99 = random !!)
            filterChangeScale:0.6,					// Scale Animation Endparameter
            delay:20,
            defaultWidth:980,
            paddingHorizontal:10,
            paddingVertical:10,
            layoutarray:[10]		// Defines the Layout Types which can be used in the Gallery. 2-9 or "random". You can define more than one, like {5,2,6,4} where the first items will be orderd in layout 5, the next comming items in layout 2, the next comming items in layout 6 etc... You can use also simple {9} then all item ordered in Layout 9 type.
        });
    // FANCY BOX ( LIVE BOX) WITH MEDIA SUPPORT
    jQuery(".fancybox").fancybox();
    // THE FILTER FUNCTION
    jQuery('.filter').click(function() {
        jQuery('.filter').each(function() { jQuery(this).removeClass("selected")});
        api.megafilter(jQuery(this).data('category'));
        jQuery(this).addClass("selected");
    });
});
// END - GALLERY

$("select").imagepicker()