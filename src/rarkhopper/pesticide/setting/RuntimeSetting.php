<?php
declare(strict_types=1);

namespace rarkhopper\pesticide\setting;


class RuntimeSetting{

	public function __construct(
		int $penalty,
		AntiSpeedSetting $anti_speed_setting,
		AntiReachSetting $anti_reach_setting,
		AntiAutoClickerSetting $anti_auto_clicker_setting,
		AntiNukerSetting $anti_nuker_setting,
		AntiSpamSetting $anti_spam_setting,
		AntiFlySetting $anti_fly_setting,
		AntiNoClipSetting $anti_noclip_setting,
		AntiAntiImmobileSetting $anti_anti_immobile_setting,
		AntiInstabreakSetting $anti_instabreak_setting
	){

	}
}