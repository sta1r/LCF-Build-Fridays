function getMiniFeed(sender, uri) {
    $.getFeed({
        url: 'proxy.php?url=' + uri,
        success: function(feed) {
            $(sender).append('<h4>Recently posted</h4>');

            var html = '';

						html += '<ul class="feed">';

            	for(var i = 0; i < feed.items.length && i < 10; i++) {

               	var item = feed.items[i];

                	html += '<li>'
								//+ item.updated
								+ '– <a href="'
								+ item.link
								+ '">'
                			+ item.title
                			+ '</a></li>';
            	}

					html += '</ul>';

          $(sender).append(html).show();
        }    
    });
}

getMiniFeed($("#repoPostsFeed"), 'http://process.arts.ac.uk/taxonomy/term/1430/feed');