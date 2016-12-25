var $collectionHolder;

// setup an "add a tag" link
var $addCityLink = $('<a href="#" class="add_city_link col-xs-6">Add a city</a>');
var $newLinkLi = $('<li></li>').append($addCityLink);

jQuery(document).ready(function() {

    $collectionHolder = $('ul.cities');

    $collectionHolder.find('li').each(function() {
        addCityFormDeleteLink($(this));
    });

    $collectionHolder.append($newLinkLi);
    $collectionHolder.data('index', $collectionHolder.find(':input').length);

    $addCityLink.on('click', function(e) {
        e.preventDefault();

        addCityForm($collectionHolder, $newLinkLi);
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
