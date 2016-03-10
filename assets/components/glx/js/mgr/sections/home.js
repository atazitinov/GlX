GlX.page.Home = function (config) {
	config = config || {};
	Ext.applyIf(config, {
		components: [{
			xtype: 'glx-panel-home', renderTo: 'glx-panel-home-div'
		}]
	});
	GlX.page.Home.superclass.constructor.call(this, config);
};
Ext.extend(GlX.page.Home, MODx.Component);
Ext.reg('glx-page-home', GlX.page.Home);