<?php
namespace GDO\DoubleAccounts;

use GDO\Core\GDO;
use GDO\Core\GDT_AutoInc;
use GDO\Core\GDT_CreatedAt;
use GDO\Core\GDT_CreatedBy;
use GDO\Net\GDT_PackedIP;

/**
 * An IP entry for a user.
 * 
 * @author gizmore
 * @version 7.0.1
 */
final class GDO_DoubleAccountIP extends GDO
{
	public function gdoColumns(): array
	{
		return [
			GDT_AutoInc::make('dacc_id'),
			GDT_PackedIP::make('dacc_ip'),
			GDT_CreatedAt::make('dacc_created'),
			GDT_CreatedBy::make('dacc_creator'),
		];
	}


	
}
