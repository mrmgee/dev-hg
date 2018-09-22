$(function() {
    $('#calendar').fullCalendar({
        events: function(start, end, timezone, callback) {
            $.ajax({
                url: 'calendar/xml',
                dataType: 'xml',
                data: {
                    start: start.unix(),
                    end: end.unix()
                },
                success: function(doc) {
                    var events = [];
                    $(doc).find('item').each(function() {
                        events.push({
                            title: $(this).find('title').text(),
                            start: new Date($(this).find('pubDate').text()),
                            url: $(this).find('link').text()
                        });
                    });
                    callback(events);
                }
            });
        },
        dayClick: function(date, jsEvent, view) {
            var calEventDate = moment(date).format('DD-MM-YYYY');

            url = window.location.href.split('?')[0];

            window.location.href = url + '?events=' + calEventDate;

            return false;
        },
        header: {
            left: 'prev',
            center: 'title',
            right: 'next'
        }
    });
});