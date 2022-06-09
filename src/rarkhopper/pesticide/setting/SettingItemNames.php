<?php
declare(strict_types=1);

namespace rarkhopper\pesticide\setting;

final class SettingItemNames{
	private function __construct(){
		//NOOP
	}

	const BASE_SETTINGS = 'base_settings';
	const BASE_SETTINGS__PENALTY = 'penalty';
	const BASE_SETTINGS__DEBUG = 'debug';
	const ANTI_SPEED = 'anti_speed';
	const ANTI_SPEED__ENABLE = 'enable';
	const ANTI_SPEED__LIMIT_DISTANCE = 'limit_distance';
	const ANTI_REACH = 'anti_reach';
	const ANTI_REACH__ENABLE = 'enable';
	const ANTI_REACH__LIMIT_DISTANCE = 'limit_distance';
	const ANTI_AUTO_CLICKER = 'anti_auto_clicker';
	const ANTI_AUTO_CLICKER__ENABLE = 'enable';
	const ANTI_AUTO_CLICKER__LIMIT_CPS = 'limit_cps';
	const ANTI_AUTO_CLICKER__LEFT_CLICK = 'left_click';
	const ANTI_AUTO_CLICKER__RIGHT_CLICK = 'right_click';
	const ANTI_NUKER = 'anti_nuker';
	const ANTI_NUKER__ENABLE = 'enable';
	const ANTI_NUKER__LIMIT_BREAK_CNT = 'limit_break_cnt';
	const ANTI_SPAM = 'anti_spam';
	const ANTI_SPAM__ENABLE = 'enable';
	const ANTI_SPAM__LIMIT_SPEED = 'limit_speed';
	const ANTI_SPAM__BUFFER_MODE = 'buffer_mode';
	const ANTI_FLY = 'anti_fly';
	const ANTI_FLY__ENABLE = 'enable';
	const ANTI_FLY__OVERLOOK_CNT = 'overlook_cnt';
	const ANTI_NOCLIP = 'anti_noclip';
	const ANTI_NOClIP__ENABLE = 'enable';
	const ANTI_ANTI_IMMOBILE = 'anti_anti-immobile';
	const ANTI_ANTI_IMMOBILE__ENABLE = 'enable';
	const ANTI_INSTABREAK = 'anti_instabreak';
	const ANTI_INSTABREAK__ENABLE = 'enable';
}