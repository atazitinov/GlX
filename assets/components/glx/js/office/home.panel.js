GlX.panel.Home = function (config) {
	config = config || {};
	Ext.apply(config, {
		baseCls: 'modx-formpanel',
		layout: 'anchor',
		/*
		 stateful: true,
		 stateId: 'glx-panel-home',
		 stateEvents: ['tabchange'],
		 getState:function() {return {activeTab:this.items.indexOf(this.getActiveTab())};},
		 */
		hideMode: 'offsets',
		items: [{
			xtype: 'modx-tabs',
			defaults: {border: false, autoHeight: true},
			border: false,
			hideMode: 'offsets',
			items: [{
				title: _('glx_items'),
				layout: 'anchor',
				items: [{
					html: _('glx_intro_msg'),
					cls: 'panel-desc',
				}, {
					xtype: 'glx-grid-items',
					cls: 'main-wrapper',
				}]
			}]
		}]
	});
	GlX.panel.Home.superclass.constructor.call(this, config);
};
Ext.extend(GlX.panel.Home, MODx.Panel);
Ext.reg('glx-panel-home', GlX.panel.Home);
