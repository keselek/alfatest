alfatest.panel.Home = function (config) {
	config = config || {};
	Ext.apply(config, {
		baseCls: 'modx-formpanel',
		layout: 'anchor',
		/*
		 stateful: true,
		 stateId: 'alfatest-panel-home',
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
				title: _('alfatest_items'),
				layout: 'anchor',
				items: [{
					html: _('alfatest_intro_msg'),
					cls: 'panel-desc',
				}, {
					xtype: 'alfatest-grid-items',
					cls: 'main-wrapper',
				}]
			}]
		}]
	});
	alfatest.panel.Home.superclass.constructor.call(this, config);
};
Ext.extend(alfatest.panel.Home, MODx.Panel);
Ext.reg('alfatest-panel-home', alfatest.panel.Home);
