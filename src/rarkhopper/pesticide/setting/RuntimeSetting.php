<?php
declare(strict_types=1);

namespace rarkhopper\pesticide\setting;


class RuntimeSetting{
	protected BaseSettings $base_settings;
	protected AntiSpeedSetting $anti_speed_setting;
	protected AntiReachSetting $anti_reach_setting;
	protected AntiAutoClickerSetting $anti_auto_clicker_setting;
	protected AntiNukerSetting $anti_nuker_setting;
	protected AntiSpamSetting $anti_spam_setting;
	protected AntiFlySetting $anti_fly_setting;
	protected AntiNoClipSetting $anti_noclip_setting;
	protected AntiAntiImmobileSetting $anti_anti_immobile_setting;
	protected AntiInstabreakSetting $anti_instabreak_setting;

	public function __construct(
		BaseSettings $base_settings,
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
		$this->base_settings = $base_settings;
		$this->anti_speed_setting = $anti_speed_setting;
		$this->anti_reach_setting = $anti_reach_setting;
		$this->anti_auto_clicker_setting = $anti_auto_clicker_setting;
		$this->anti_nuker_setting = $anti_nuker_setting;
		$this->anti_spam_setting = $anti_spam_setting;
		$this->anti_fly_setting = $anti_fly_setting;
		$this->anti_noclip_setting = $anti_noclip_setting;
		$this->anti_anti_immobile_setting = $anti_anti_immobile_setting;
		$this->anti_instabreak_setting = $anti_instabreak_setting;
	}

	/**
	 * @return BaseSettings
	 */
	public function getBaseSettings():BaseSettings{
		return $this->base_settings;
	}

	/**
	 * @return AntiSpeedSetting
	 */
	public function getAntiSpeedSetting():AntiSpeedSetting{
		return $this->anti_speed_setting;
	}

	/**
	 * @return AntiReachSetting
	 */
	public function getAntiReachSetting():AntiReachSetting{
		return $this->anti_reach_setting;
	}

	/**
	 * @return AntiAutoClickerSetting
	 */
	public function getAntiAutoClickerSetting():AntiAutoClickerSetting{
		return $this->anti_auto_clicker_setting;
	}

	/**
	 * @return AntiNukerSetting
	 */
	public function getAntiNukerSetting():AntiNukerSetting{
		return $this->anti_nuker_setting;
	}

	/**
	 * @return AntiSpamSetting
	 */
	public function getAntiSpamSetting():AntiSpamSetting{
		return $this->anti_spam_setting;
	}

	/**
	 * @return AntiFlySetting
	 */
	public function getAntiFlySetting():AntiFlySetting{
		return $this->anti_fly_setting;
	}

	/**
	 * @return AntiNoClipSetting
	 */
	public function getAntiNoclipSetting():AntiNoClipSetting{
		return $this->anti_noclip_setting;
	}

	/**
	 * @return AntiAntiImmobileSetting
	 */
	public function getAntiAntiImmobileSetting():AntiAntiImmobileSetting{
		return $this->anti_anti_immobile_setting;
	}

	/**
	 * @return AntiInstabreakSetting
	 */
	public function getAntiInstabreakSetting():AntiInstabreakSetting{
		return $this->anti_instabreak_setting;
	}
}