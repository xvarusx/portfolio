(function(){
    const language = document.documentElement.lang;
    document.querySelector('.current').textContent = (language=='en') ?'en':language=='fr'?'fr':'de';

})()
