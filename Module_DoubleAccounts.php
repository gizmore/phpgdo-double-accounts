<?php
namespace GDO\DoubleAccounts;

use GDO\Core\GDO_Module;
use GDO\Date\GDT_Duration;
use GDO\Date\Time;

/**
 * Detect and automatically ban double accounts.
 * 
 * @author gizmore
 * @version 7.0.1
 * @since 7.0.1
 */
final class Module_DoubleAccounts extends GDO_Module
{
	##############
	### Config ###
	##############
	public function getConfig() : array
	{
		return [
			GDT_Duration::make('double_account_duration')->min(Time::ONE_MINUTE)->max(Time::ONE_YEAR)->initial('7d'),
		];
	}
	
	public function cfgDuration() : int { return $this->getConfigValue('double_account_duration'); }
	
}
