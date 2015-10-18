/**
 * Created by crisb on 04-Sep-15.
 */
jQuery( document ).ready( function( $ ) {
    $("#header-nav-button").click(function () {
        $("#main-navigation-menu").fadeToggle(250, "swing");
    });
    $("#header-search-button").click(function () {
        $("#header-search").fadeToggle(250, "swing");
    });
});