
var TopNHLPlayers = (function () {

    // Init UI
    var _initUI = function () {
    };

    // Init click events
    var _initClickEvents = function () {

        $(document).ready(function() {

            $('body').on('click', 'div[data-id]', function(e) {
                e.preventDefault();
                $('body div[data-id]').removeClass('selected');
                $('body div[data-id="'+$(this).data('id')+'"]').addClass('selected');
                _trackEvent('Players', 'Select', $(this).data('id'));
                return false;
            });

            var queries = {};
            if (document.location.search.length > 0) {
                $.each(document.location.search.substr(1).split('&'), function(c, q) {
                    var i = q.split('=');
                    queries[i[0].toString()] = i[1].toString();
                });
                if (queries.id) {
                    $('[data-id="' + queries.id + '"]').trigger("click");
                }
            }
        });
    };

    // Track analytic event
    var _trackEvent = function(category, action, label) {
        ga('send', 'event', category, action, label);
    };

    // Initialize
    var init = function () {
        _initUI();
        _initClickEvents();
    };

    return {
        init: init
    };

})();

TopNHLPlayers.init();
