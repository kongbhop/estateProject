$(document).ready(function() {
    $('#fullpage').fullpage({
        sectionsColor: ['#1bbc9b', '#4BBFC3', '#7BAABE', 'whitesmoke', '#ccddff'],
        anchors: ['firstPage', 'secondPage', '3rdPage', '4thpage', 'lastPage'],
        menu: '#menu',
        css3: true,
        scrollingSpeed: 1000
    });

    $('#showExamples').click(function(e){
        e.stopPropagation();
        e.preventDefault();
        $('#examplesList').toggle();
    });

    $('html').click(function(){
        $('#examplesList').hide();
    });
});
