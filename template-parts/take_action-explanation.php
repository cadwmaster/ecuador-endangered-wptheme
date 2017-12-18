<?php
/**
 * The template part for header of take action page
 *
 */
?>

<div class="take_action-explanation">
	<div class="explanation signature">
		<div class="title"><?php _e('take_action_explanation signature title', 'twentysixteen'); ?></div>
		<div class="description"><?php _e('take_action_explanation signature description', 'twentysixteen'); ?></div>
	</div>
	<div class="explanation contribution">
		<div class="title"><?php _e('take_action_explanation contribution title', 'twentysixteen'); ?></div>
		<div class="description"><?php _e('take_action_explanation contribution description', 'twentysixteen'); ?></div>
	</div>
</div>
<div class="take_action-extras">
	<div class="extra crowfunding">
		<div class="title"><?php _e('take_action_explanation crowfunding title', 'twentysixteen'); ?></div>
		<div class="subtitle"><?php _e('take_action_explanation crowfunding subtitle', 'twentysixteen'); ?></div>
		<div class="container">
			<div class="wrapper-petition">
				<div class="supporters">
					<?php _e('take_action_sign_petition everyone supporters number', 'twentysixteen'); ?>
				</div>
				<div class="image crowfunding"></div>
				<div class="description">
					<?php _e('take_action_sign_petition everyone supporters description', 'twentysixteen'); ?>
				</div>
				<a href="https://www.fundmyplanet.org/campaign/11/save-ecuadors-forests-from-mining">
					<div class="button-sign">
						<?php _e('take_action_sign_petition everyone supporters sign', 'twentysixteen'); ?>
					</div>
				</a>
			</div>
		</div>
	</div>
	<div class="extra volunteers">
		<div class="title"><?php _e('take_action_explanation volunteers title', 'twentysixteen'); ?></div>
		<div class="subtitle"><?php _e('take_action_explanation volunteers subtitle', 'twentysixteen'); ?></div>
		<div class="container">
			<form id="volunteers-form">
				<div class="message"></div>
				<div class="">
					<input id="first-name" type="text"/>
				</div>
				<div class="">
					<input id="last-name" type="text"/>
				</div>
				<div class="">
					<input id="email" type="text"/>
				</div>
				<div class="">
					<input type="submit"/>
				</div>
			</form>
		</div>
	</div>
</div>
