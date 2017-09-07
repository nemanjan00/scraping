var request = require('request');

/*
request('http://www.google.com', function (error, response, body) {
	console.log('error:', error); // Print the error if one occurred
	console.log('statusCode:', response && response.statusCode); // Print the response status code if a response was received
	console.log('body:', body); // Print the HTML for the Google homepage.
});
*/

var scraper = {
	scrape: function(){
		return new Promise(function(resolve, reject){
			scraper.scrapeCategories().then(function(data){
				var promises = data.map(function(category){
					return scraper.scrapeCategory(category.link);
				});

				Promise.all(promises).then(function(data){
					resolve(data);
				});
			});

		});
	},
	scrapeCategories: function(){
		return new Promise(function(resolve, reject){
			request('http://localhost:8080/', {
						headers: {
							"Pragma": "no-cache"
						}
					}, function (error, response, body) {
				if(error){
					reject(error);
				}


				body = body.split("ul")[1];
				body = body.split("<li>");

				body.splice(0, 1);

				var result = body.map(function(category){
					var name = category.split(">")[1];
					name = name.split("<")[0];


					var link = category.split("\"")[1];

					return {
						name: name,
						link: link
					};
				});

				resolve(result);
			});
		});

	},
	scrapeCategory: function(link){
		return new Promise(function(resolve, reject){
			request("http://localhost:8080"+link, {
						headers: {
							"Pragma": "no-cache"
						}
					}, function (error, response, body) {
				if(error){
					reject(error);
				}


				body = body.split("ul")[1];
				body = body.split("<li>");

				body.splice(0, 1);

				var result = body.map(function(category){
					var name = category.split(">")[1];
					name = name.split("<")[0];


					var link = category.split("\"")[1];

					return {
						name: name,
						link: link
					};
				});

				resolve(result);
			});
		});
	}
}

scraper.scrape().then(function(data){
	console.log(data);
});

