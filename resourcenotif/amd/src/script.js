// Put this file in path/to/plugin/amd/src
// You can call it anything you like

/* eslint no-unused-vars: "off", max-len: "off", no-tabs:"off"*/

define(['jquery', 'jqueryui'], function($) {
	return {
		init: function(html) {
			var activities = $('.section-cm-edit-actions div[role="menu"]');
			if (activities) {
				for (var i = 0; i < activities.length; i++) {
					var ul = activities[i];
					//console.log(ul);
					ul.innerHTML += html.replace('123XYZ321', 'test');
				}
			}
		}
	};
});
