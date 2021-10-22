<?php
/**
 * Displays a list of notifications.
 *
 * @package   easy-digital-downloads
 * @copyright Copyright (c) 2021, Easy Digital Downloads
 * @license   GPL2+
 *
 * @var \EDD\Models\Notification[] $notifications
 */
?>
<div
	id="edd-notifications"
	class="edd-hidden"
	x-data
	x-init="function() { $el.classList.remove( 'edd-hidden' ) }"
>
	<div class="edd-overlay" x-show="$store.eddNotifications.isPanelOpen"></div>

	<div
		id="edd-notifications-panel"
		x-show="$store.eddNotifications.isPanelOpen"
		x-transition:enter-start="edd-slide-in"
		x-transition:leave-end="edd-slide-in"
		x-on:click.outside="$store.eddNotifications.closePanel()"
	>
		<div id="edd-notifications-header">
			<h3><?php esc_html_e( 'Notifications', 'easy-digital-downloads' ); ?></h3>

			<button
				class="edd-close"
				x-on:click="$store.eddNotifications.closePanel()"
			>
				<span class="dashicons dashicons-no-alt"></span>
				<span class="screen-reader-text"><?php esc_html_e( 'Close panel', 'easy-digital-downloads' ); ?></span>
			</button>
		</div>

		<div id="edd-notifications-body">
			<template x-for="notification in $store.eddNotifications.activeNotifications">
				<div class="edd-notification">
					<div class="edd-notification--icon" :class="'edd-notification--icon-' + notification.type">

					</div>
				</div>
			</template>
		</div>
	</div>
</div>
