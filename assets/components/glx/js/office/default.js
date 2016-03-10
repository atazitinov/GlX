Ext.onReady(function() {
	GlX.config.connector_url = OfficeConfig.actionUrl;

	var grid = new GlX.panel.Home();
	grid.render('office-glx-wrapper');

	var preloader = document.getElementById('office-preloader');
	if (preloader) {
		preloader.parentNode.removeChild(preloader);
	}
});