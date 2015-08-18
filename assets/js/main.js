
var TopNHLPlayers = (function () {

    // Init UI
    var _initUI = function () {

        $(document).ready(function() {
            $('#forwards, #defensemen, #goalies').hide();
        });
    };

    // Init click events
    var _initClickEvents = function () {

        $(document).ready(function() {

            $('body > header').on('click', 'ul > li > a', function(e) {
                e.preventDefault();
                $('#all, #forwards, #defensemen, #goalies').hide();
                $($(this).attr('href')).show();
                _trackEvent('Players', 'Show', $(this).text());
                return false;
            });

            $('body').on('click', 'div[data-id]', function(e) {
                e.preventDefault();
                $('body div[data-id]').removeClass('selected');
                $('body div[data-id="'+$(this).data('id')+'"]').addClass('selected');
                _trackEvent('Players', 'Select', $(this).data('id'));
                return false;
            });
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
