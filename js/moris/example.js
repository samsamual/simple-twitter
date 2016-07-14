$(function () {

    Morris.Area({
        element: 'graph_area',
        data: [
            {time: '2014 Q1', Viewers: 2666, Favourites: null, Tweets: 2647},
            {time: '2014 Q2', Viewers: 2778, Favourites: 2294, Tweets: 2441},
            {time: '2014 Q3', Viewers: 4912, Favourites: 1969, Tweets: 2501},
            {time: '2014 Q4', Viewers: 3767, Favourites: 3597, Tweets: 5689},
            {time: '2015 Q1', Viewers: 6810, Favourites: 1914, Tweets: 2293},
            {time: '2015 Q2', Viewers: 5670, Favourites: 4293, Tweets: 1881},
            {time: '2015 Q3', Viewers: 4820, Favourites: 3795, Tweets: 1588},
            {time: '2015 Q4', Viewers: 15073, Favourites: 5967, Tweets: 5175},
            {time: '2016 Q1', Viewers: 10687, Favourites: 4460, Tweets: 2028},
            {time: '2016 Q2', Viewers: 8432, Favourites: 5713, Tweets: 1791}
        ],
        xkey: 'time',
        ykeys: ['Viewers', 'Favourites', 'Tweets'],
        lineColors: ['#dcecf9', '#dcecf9', '#dcecf9'],
        labels: ['Viewers', 'Favourites', 'Tweets'],
        pointSize: 4,
        hideHover: 'auto',
        resize: true
    });
});
