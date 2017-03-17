var createNewLinkLi = function(addLink) {
    var newLinkLi = $('<li></li>').append(addLink);
    return newLinkLi;
}

var createAddLink = function(entityClassName , entityName){
    var addLink = $('<a href="#" class="' + entityClassName +'col-xs-6">Add a ' + entityName + '</a>');

    return addLink;

}

var $addCityLink = createAddLink("add_city_link" , "city");
var $addInfoLink = createAddLink("add_info_link" , "customer information");
var $addTripCityLink  = createAddLink("add_trip_city_link" , "a trip city");

var $newLinkCityLi = createNewLinkLi($addCityLink);
var $newLinkInfoLi = createNewLinkLi($addInfoLink);
var $newLinkTripCityLi = createNewLinkLi($addTripCityLink);

jQuery(document).ready(function() {

    $collectionHolder = $('ul.cities');
    $collectionHolder2 = $('ul.info');
    $collectionHolder3 = $('ul.tripCities');

    prepareForm($collectionHolder, $newLinkCityLi, $addCityLink);
    prepareForm($collectionHolder2, $newLinkInfoLi, $addInfoLink);
    prepareForm($collectionHolder3, $newLinkTripCityLi, $addTripCityLink);

});


var prepareForm = function (collectionHolder, newLi, $addLink){
    collectionHolder.find('li').each(function() {
        addFormDeleteLink($(this));
    });
    collectionHolder.append(newLi);
    collectionHolder.data('index', collectionHolder.find(':input').length);
    $addLink.on('click', function(e) {
        e.preventDefault();

        addForm(collectionHolder, newLi);
    });

}

function addForm($collectionHolder, $newLinkLi) {
    var prototype = $collectionHolder.data('prototype');

    var index = $collectionHolder.data('index');

    var newForm = prototype.replace(/__name__/g, index);

    $collectionHolder.data('index', index + 1);

    var $newFormLi = $('<li></li>').append(newForm);
    $newLinkLi.before($newFormLi);

    addFormDeleteLink($newFormLi);

}

function addFormDeleteLink($tagFormLi) {
    var $removeFormA = $('<a href="#">Delete</a>');
    $tagFormLi.append($removeFormA);

    $removeFormA.on('click', function(e) {
        // prevent the link from creating a "#" on the URL
        e.preventDefault();

        // remove the li for the tag form
        $tagFormLi.remove();
    });
}



