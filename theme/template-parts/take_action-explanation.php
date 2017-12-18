<?php
/**
 * The template part for header of take action page
 *
 */
?>

<div class="take_action-explanation">
	<div class="explanation signature">
		<div class="title"><?php _e('take_action_explanation signature title', 'twentysixteen'); ?></div>
		<div class="description"><?php parse_text(__('take_action_explanation signature description', 'twentysixteen')); ?></div>
	</div>
	<div class="explanation contribution">
		<div class="title"><?php _e('take_action_explanation contribution title', 'twentysixteen'); ?></div>
		<div class="description"><?php parse_text(__('take_action_explanation contribution description', 'twentysixteen')); ?></div>
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
				<div class="field">
					<input id="first-name" type="text" placeholder="<?php _e('take_action_explanation volunteers input first_name placeholder', 'twentysixteen');?>"/>
				</div>
				<div class="field">
					<input id="last-name" type="text" placeholder="<?php _e('take_action_explanation volunteers input last_name placeholder', 'twentysixteen');?>"/>
				</div>
				<div class="field">
					<input id="email" type="text" placeholder="<?php _e('take_action_explanation volunteers input email placeholder', 'twentysixteen');?>"/>
				</div>
				<div class="field">
					<div id="volunteers-join" class="button_action">
						<?php _e('take_action_explanation volunteers button join', 'twentysixteen'); ?>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
