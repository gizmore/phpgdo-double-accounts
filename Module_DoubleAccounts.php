<?php
namespace GDO\DoubleAccounts;

use GDO\Core\GDO_Module;
use GDO\Date\GDT_Duration;
use GDO\Date\Time;
use GDO\UI\GDT_Divider;

/**
 * Detect and automatically ban double accounts.
 *
 * @version 7.0.1
 * @since 7.0.1
 * @author gizmore
 */
final class Module_DoubleAccounts extends GDO_Module
{

	public function getPrivacyRelatedFields(): array
	{
		return [
			GDT_Divider::make()->label('privacy_info_double_accounts', [$this->gdoHumanName()]),
			$this->getConfigColumn('double_account_duration'),
		];
	}

	##############
	### Config ###
	##############
	public function getConfig(): array
	{
		return [
			GDT_Duration::make('double_account_duration')->min(Time::ONE_MINUTE)->max(Time::ONE_YEAR)->initial('7d'),
		];
	}

	public function onLoadLanguage(): void
	{
		$this->loadLanguage('lang/double_accounts');
	}

	############
	### Init ###
	############

	public function cfgDuration(): int { return $this->getConfigValue('double_account_duration'); }

}
