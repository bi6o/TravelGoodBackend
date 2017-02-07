var $collectionHolder;

// setup an "add a tag" link
var $addCityLink = $('<a href="#" class="add_city_link col-xs-6">Add a city</a>');
var $addInfoLink = $('<a href="#" class="add_info_link col-xs-6">Add customer information</a>');
var $addTripCityLink = $('<a href="#" class="add_trip_city_link col-xs-6">Add Trip City</a>');

var $newLinkCityLi = $('<li></li>').append($addCityLink);
var $newLinkInfoLi = $('<li></li>').append($addInfoLink);
var $newLinkTripCityLi = $('<li></li>').append($addTripCityLink);

jQuery(document).ready(function() {

    $collectionHolder = $('ul.cities');
    $collectionHolder2 = $('ul.info');
    $collectionHolder3 = $('ul.tripCities');

    $collectionHolder.find('li').each(function() {
        addCityFormDeleteLink($(this));
    });

    $collectionHolder2.find('li').each(function() {
        addInfoFormDeleteLink($(this));
    });

    $collectionHolder3.find('li').each(function() {
        addTripCityFormDeleteLink($(this));
    });


    $collectionHolder.append($newLinkCityLi);
    $collectionHolder2.append($newLinkInfoLi);
    $collectionHolder3.append($newLinkTripCityLi);

    $collectionHolder.data('index', $collectionHolder.find(':input').length);
    $collectionHolder2.data('index', $collectionHolder2.find(':input').length);
    $collectionHolder3.data('index', $collectionHolder3.find(':input').length);


    $addCityLink.on('click', function(e) {
        e.preventDefault();

        addCityForm($collectionHolder, $newLinkCityLi);
    });
    $addInfoLink.on('click', function(e) {
        e.preventDefault();

        addInfoForm($collectionHolder2, $newLinkInfoLi);
    });
    $addTripCityLink.on('click', function(e) {
        e.preventDefault();

        addTripCityForm($collectionHolder3, $newLinkTripCityLi);
    });

});

function addCityForm($collectionHolder, $newLinkLi) {
    var prototype = $collectionHolder.data('prototype');

    var index = $collectionHolder.data('index');

    var newForm = prototype.replace(/__name__/g, index);

    $collectionHolder.data('index', index + 1);

    var $newFormLi = $('<li></li>').append(newForm);
    $newLinkLi.before($newFormLi);

    addCityFormDeleteLink($newFormLi);

}

function addInfoForm($collectionHolder, $newLinkLi) {
    var prototype = $collectionHolder.data('prototype');

    var index = $collectionHolder.data('index');

    var newForm = prototype.replace(/__name__/g, index);

    $collectionHolder.data('index', index + 1);

    var $newFormLi = $('<li></li>').append(newForm);
    $newLinkLi.before($newFormLi);

    addInfoFormDeleteLink($newFormLi);

}

function addTripCityForm($collectionHolder, $newLinkLi) {
    var prototype = $collectionHolder.data('prototype');

    var index = $collectionHolder.data('index');

    var newForm = prototype.replace(/__name__/g, index);

    $collectionHolder.data('index', index + 1);

    var $newFormLi = $('<li></li>').append(newForm);
    $newLinkLi.before($newFormLi);

    addTripCityFormDeleteLink($newFormLi);

}

function addInfoFormDeleteLink($tagFormLi) {
    var $removeFormA = $('<a href="#">delete info</a>');
    $tagFormLi.append($removeFormA);

    $removeFormA.on('click', function(e) {
        // prevent the link from creating a "#" on the URL
        e.preventDefault();

        // remove the li for the tag form
        $tagFormLi.remove();
    });
}

function addCityFormDeleteLink($tagFormLi) {
    var $removeFormA = $('<a href="#">delete this city</a>');
    $tagFormLi.append($removeFormA);

    $removeFormA.on('click', function(e) {
        // prevent the link from creating a "#" on the URL
        e.preventDefault();

        // remove the li for the tag form
        $tagFormLi.remove();
    });
}

function addTripCityFormDeleteLink($tagFormLi) {
    var $removeFormA = $('<a href="#">delete this city</a>');
    $tagFormLi.append($removeFormA);

    $removeFormA.on('click', function(e) {
        // prevent the link from creating a "#" on the URL
        e.preventDefault();

        // remove the li for the tag form
        $tagFormLi.remove();
    });
}
