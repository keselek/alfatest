Ext.onReady(function() {
	alfatest.config.connector_url = OfficeConfig.actionUrl;

	var grid = new alfatest.panel.Home();
	grid.render('office-alfatest-wrapper');

	var preloader = document.getElementById('office-preloader');
	if (preloader) {
		preloader.parentNode.removeChild(preloader);
	}
});